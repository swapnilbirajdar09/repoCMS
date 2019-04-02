<?php

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // check user credentials function
    public function checkLogin($data) {
        extract($data);

        // validate user record
        $record = $this->db->get_where('user_tab', array('user_email =' => $login_username, 'password=' => $login_password))->result();
        $user_data = [];

        if (count($record) <= 0) {
            $response = array(
                'status' => false,
                'type' => 'error',
                'message' => 'Sorry, your credentails are incorrect!'
            );
            return $response;
        } else {
            foreach ($record as $key) {
                $user_data = array(
                    'userRoleID' => $key->role_id,
                    'userId' => $key->user_id, // combination of user id and company id with | operator joining boths
                    'userEmail' => $key->user_email,
                    'appId' => $key->app_id,
                    'addedDate' => $key->added_date
                );
            }

            $response = array(
                'status' => true,
                'type' => 'success',
                'message' => 'Login successfull',
                'data' => $user_data
            );
            return $response;
        }
    }

// fun for update the user details
    public function updateUserData($data) {
        extract($data);
        //print_r($data);die();
        $update_data = array(
            'current_token' => $token,
            'expiry_time' => date('H:i:s')
        );
        $this->db->where('user_id', $data['userId']);
        if ($this->db->update('user_tab', $update_data)) {
            $response = array(
                'status' => false,
                'type' => 'success'
            );
            return $response;
        } else {
            $response = array(
                'status' => true,
                'type' => 'error'
            );
            return $response;
        }
    }

    // ----------------------FORGET PASSWORD MODEL-------------------------------------//
    public function getPassword($user_email) {

        // validate user record
        $record = $this->db->get_where('user_tab', array('user_email =' => $user_email))->result();
        $user_data = [];

        if (count($record) <= 0) {
            $response = array(
                'status' => false,
                'type' => 'error',
                'message' => 'Email Id not found!'
            );
            return $response;
        } else {
            foreach ($record as $key) {
                $user_data = array(
                    'user_email' => $user_email,
                    'user_password' => $key->password
                );
            }

            // send password by email
            $sendPassword = $this->sendPassword($user_data);

            if ($sendPassword) {
                $response = array(
                    'status' => true,
                    'type' => 'success',
                    'message' => 'Password sent on your registered email ID'
                );
                return $response;
            } else {
                $response = array(
                    'status' => false,
                    'type' => 'error',
                    'message' => 'Password was not able to sent!'
                );
                return $response;
            }
        }
    }

    // -----------------------PASSWORD EMAIL MODEL----------------------//
    public function sendPassword($data) {
        extract($data);
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mx1.hostinger.in',
            'smtp_port' => '587',
            'smtp_user' => 'care@bizmo-tech.com', // change it to yours
            'smtp_pass' => 'Descartes@1990', // change it to yours
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'wordwrap' => TRUE
        );
        //$config['smtp_crypto'] = 'tls';
        //return ($config);die();
        //($password);

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('care@bizmo-tech.com', "Admin Team");
        $this->email->to($user_email);
        $this->email->subject("Password Request-Qup Hospital");
        $this->email->message('<html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
        <div class="container col-lg-8" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;margin:10px; font-family:Candara;">
        <h2 style="color:blue; font-size:25px">Password for QUP Hospital !</h2>
        <h3 style="font-size:15px;">Hello User,<br></h3>
        <h3 style="font-size:15px;">We have recieved a request to have your password for <u>Qup Hospital Management</u>.</h3>
        <h3 style="font-size:15px;">Following is the requested password for ' . $user_email . '</h3>
        <h3>Password: ' . $user_password . '</h3>
        <br><br>
        <h5>Note: If you did not make this request, then kindly ignore this message.</h5>
        <div class="col-lg-12">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
        </div>
        </body></html>');
//print_r($this->email->print_debugger());die();
        if ($this->email->send()) {
            $response = array(
                'status' => 200, //---------email sending succesfully 
                'status_message' => 'Email Sent Successfully.',
            );
        } else {
            //print_r($this->email->print_debugger());die();
            $response = array(
                'status' => 500, //---------email send failed
                'status_message' => 'Email Sending Failed.'
            );
        }
        return $response;
    }

}
