<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // check token authorized or not
    public function authorizeToken($app_id,$token) {
        // validate user token
        $record = $this->db->get_where('user_tab', array('current_token =' => $token, 'app_id=' => $app_id))->result();

        if (count($record) <= 0) {
            $response = array(
                'status' => false,
                'type' => 'unauthorized',
                'message' => 'Unauthorised access. Invalid header values!'
            );
            return $response;
        } else {
            $expiry_time='';
            $current_time=time();

            // get expiry time
            foreach ($record as $key) {
                $expiry_time=$key->expiry_time;
            }

            // check token expired or not
            if($expiry_time <= $current_time){
                $response = array(
                    'status' => false,
                    'type' => 'unauthorized',
                    'message' => 'Token expired!'
                );
                return $response;
                die();
            }

            $response = array(
                'status' => true,
                'type' => 'success',
                'message' => 'Login successfull'
            );
            return $response;
        }
    }


    // create user/subadmin function
    public function createSubadmin($data) {
        extract($data);
        $entityJson='';

        // check email exist or not
        $checkEmailExist=$this->checkEmailExist($user_email,$app_id);
        if($checkEmailExist){
            $response=array(
                'status'    =>  false,
                'type'  =>  'warning',
                'message'   =>  'Email Id already exist!'
            );
            return $response;
            die();
        }
        // check key exist and if it is array
        if(array_key_exists('entity_id', $data)){
            if(is_array($entity_id)){
                $entityJson=json_encode($entity_id);
            }
            else{
                $entityJson=$entity_id;
            }
        }
        // insert new data
        $insert_data = array(
            'role_id'   => '3',
            'user_email' => $user_email,
            'password' => $user_password,
            'app_id' => $app_id,
            'entity_id' => $entityJson,
            'added_date' => date('Y-m-d H:i:s'),
            'status' =>  1
        );
        $this->db->insert('user_tab', $insert_data);
        if ($this->db->affected_rows() > 0){
           $response = array(
            'status' => true,
            'type' => 'success',
            'message' => 'Subadmin created successfully'
        );
           return $response; 
       }
       else{
        $response = array(
            'status' => false,
            'type' => 'error',
            'message' => 'Subadmin user not created!'
        );
        return $response;
    }
}

    // create user/admin function
public function createAdmin($data) {
    extract($data);
    $entityJson='';

    // check email exist or not
    $checkEmailExist=$this->checkEmailExist($user_email,$app_id);
    if($checkEmailExist){
        $response=array(
            'status'    =>  false,
            'type'  =>  'warning',
            'message'   =>  'Email Id already exist!'
        );
        return $response;
        die();
    }

        // check key exist and if it is array
    if(array_key_exists('entity_id', $data)){
        if(is_array($entity_id)){
            $entityJson=json_encode($entity_id);
        }
        else{
            $entityJson=$entity_id;
        }
    }
        // insert new data
    $insert_data = array(
        'role_id'   => '2',
        'user_email' => $user_email,
        'password' => $user_password,
        'app_id' => $app_id,
        'entity_id' => $entityJson,
        'added_date' => date('Y-m-d H:i:s'),
        'status' =>  1
    );
    $this->db->insert('user_tab', $insert_data);
    if ($this->db->affected_rows() > 0){
       $response = array(
        'status' => true,
        'type' => 'success',
        'message' => 'Admin created successfully'
    );
       return $response; 
   }
   else{
    $response = array(
        'status' => false,
        'type' => 'error',
        'message' => 'Admin user not created!'
    );
    return $response;
}
}

// check email id exist in user table or not
public function checkEmailExist($email,$app_id){
    $checkEmail=$this->db->get_where('user_tab', array('user_email =' => $email, 'app_id=' => $app_id))->result();
    if(empty($checkEmail)){
        // email not exist
        return false;
    }
    else{
        // email exists
        return true;
    }
}

// delete section from hospital function
public function deleteUser($app_id,$user_id){
    $this->db->delete('user_tab', array('user_id' => $user_id));
    if ($this->db->affected_rows() > 0) {
        $response = array(
            'status' => true,
            'type' => 'success',
            'message' => 'User removed successfully'
        );
        return $response; 
    }
    else{
        $response = array(
            'status' => false,
            'type' => 'error',
            'message' => 'User not found! User was not removed.'
        );
        return $response;
    }
}

}
