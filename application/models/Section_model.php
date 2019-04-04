<?php

class Section_model extends CI_Model {

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


    // get all hospital sections
    public function getHospitalSections($app_id) {
        // validate user token
        $record = $this->db->get_where('hospital_sections', array('app_id =' => $app_id))->result();

        if (count($record) <= 0) {
            $response = array(
                'status' => false,
                'type' => 'error',
                'message' => 'No sections available!'
            );
            return $response;
        } else {
            $response = array(
                'status' => true,
                'type' => 'success',
                'message' => 'Section data fetched successfully',
                'data'  =>  $record
            );
            return $response;
        }
    }

    // get content of section by section id
    // public function getSectionContent($section_id) {
    //     // validate user token
    //     $record = $this->db->get_where('section_content', array('section_id =' => $section_id))->result();

    //     if (count($record) <= 0) {
    //         $response = array(
    //             'status' => false,
    //             'type' => 'error',
    //             'message' => 'No Content available!'
    //         );
    //         return $response;
    //     } else {
    //         $response = array(
    //             'status' => true,
    //             'type' => 'success',
    //             'message' => 'Content fetched successfully',
    //             'data'  =>  $record
    //         );
    //         return $response;
    //     }
    // }

    // create new section in hospital function
    // public function createNewSection($app_id) {

    //     // insert new data
    //     $insert_data = array(
    //         'content'   => ''
    //     );
    //     $this->db->insert('section_content', $insert_data);
    //     if ($this->db->affected_rows() > 0){
    //         $section_id= $this->db->insert_id();

    //         // get section
    //         $record = $this->db->get_where('hospital_sections', array('app_id =' => $app_id))->result();
    //         $sectionJson='';
    //         foreach ($record as $key) {
    //             $sectionJson=$key->sections;            
    //         }

    //         // create section json
    //         $sectionArr=array();
    //         if($sectionJson!='' && $sectionJson!='[]'){
    //             $sectionArr=json_decode($sectionJson);
    //             array_push($sectionArr, (string)$section_id);
    //             $sectionJson=json_encode($sectionArr);
    //         }
    //         else{
    //             $sectionArr[]=(string)$section_id;
    //             $sectionJson=json_encode($sectionArr);
    //         }

    //         // update section to hospital section table in array
    //         $update_data = array(
    //             'sections'   => $sectionJson
    //         );
    //         $this->db->where('app_id', $app_id);
    //         $this->db->update('hospital_sections', $update_data);
    //         if ($this->db->affected_rows() == 1){
    //             $response = array(
    //                 'status' => true,
    //                 'type' => 'success',
    //                 'message' => 'Section created successfully'
    //             );
    //             return $response; 
    //         }
    //         else{
    //             $response = array(
    //                 'status' => false,
    //                 'type' => 'error',
    //                 'message' => 'Section was not created!'
    //             );
    //             return $response;
    //         }
            
    //     }
    //     else{
    //         $response = array(
    //             'status' => false,
    //             'type' => 'error',
    //             'message' => 'Section was not created!'
    //         );
    //         return $response;
    //     }
    // }

    // create new section content in hospital function
    public function addNewContent($data) {
        extract($data);
        // get section
        $record = $this->db->get_where('hospital_sections', array('app_id =' => $app_id))->result();
        if(!empty($record)){
            // update record if exist
            $update_data=array(
                'section_content'   =>  $section_content,
                'modified_by'   =>  $user,
                'modified_date' =>  time()
            );
            $this->db->where('app_id', $app_id);
            $this->db->update('hospital_sections', $update_data);
            if ($this->db->affected_rows() == 1){
                $response = array(
                    'status' => true,
                    'type' => 'success',
                    'message' => 'Section updated successfully'
                );
                return $response; 
            }
            else{
                $response = array(
                    'status' => false,
                    'type' => 'error',
                    'message' => 'Section was not updated!'
                );
                return $response;
            }
        }
        else{
            // insert new record if not exist
         $insert_data=array(
            'app_id'   =>  $app_id,
            'section_content'   =>  $section_content,
            'created_by'   =>  $user,
            'created_date' =>  time()
        );
         $this->db->insert('hospital_sections', $insert_data);
         if ($this->db->affected_rows() == 1){
            $response = array(
                'status' => true,
                'type' => 'success',
                'message' => 'Section created successfully'
            );
            return $response; 
        }
        else{
            $response = array(
                'status' => false,
                'type' => 'error',
                'message' => 'Section was not created!'
            );
            return $response;
        }
    }
}


    // delete section from hospital function
// public function deleteSection($app_id,$section_id){

//         // get hospital section
//     $record = $this->db->get_where('hospital_sections', array('app_id =' => $app_id))->result();
//     $sectionJson='';
//     foreach ($record as $key) {
//         $sectionJson=$key->sections;            
//     }
//     $sectionArr=array();
//     $newsectionArr=array();
//     $sectionArr=json_decode($sectionJson);

//         // remove section id         
//     if(($key = array_search($section_id, json_decode($sectionJson))) !== false) {
//         foreach ($sectionArr as $key) {
//            if($key==$section_id){
//             unset($key);
//         }
//         else{
//             $newsectionArr[]=$key;
//         }
//     }
// }
// else{
//     $response = array(
//         'status' => false,
//         'type' => 'error',
//         'message' => 'Section not found!'
//     );
//     return $response;
//     die();
// }
    // print_r(json_encode($newsectionArr));die();

    // update section to hospital section table in array
// $update_data = array(
//     'sections'   => json_encode($newsectionArr)
// );
// $this->db->where('app_id', $app_id);
// $this->db->update('hospital_sections', $update_data);
// if ($this->db->affected_rows() == 1){
//             // delete section from section table also
//     $this->db->delete('section_content', array('section_id' => $section_id));
//     if ($this->db->affected_rows() > 0) {
//         $response = array(
//             'status' => true,
//             'type' => 'success',
//             'message' => 'Section removed successfully'
//         );
//         return $response; 
//     }
//     else{
//         $response = array(
//             'status' => false,
//             'type' => 'error',
//             'message' => 'Section was not removed!'
//         );
//         return $response;
//     }

// }
// else{
//     $response = array(
//         'status' => false,
//         'type' => 'error',
//         'message' => 'Section was not removed!'
//     );
//     return $response;
// }
// }

}
