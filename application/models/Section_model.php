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
                'message' => 'Unauthorised access. Invalid parameter values!'
            );
            return $response;
        } else {
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
    public function getSectionContent($section_id) {
        // validate user token
        $record = $this->db->get_where('section_content', array('section_id =' => $section_id))->result();

        if (count($record) <= 0) {
            $response = array(
                'status' => false,
                'type' => 'error',
                'message' => 'No Content available!'
            );
            return $response;
        } else {
            $response = array(
                'status' => true,
                'type' => 'success',
                'message' => 'Content fetched successfully',
                'data'  =>  $record
            );
            return $response;
        }
    }

    // create new section in hospital function
    public function createNewSection($app_id) {

        // insert new data
        $insert_data = array(
            'content'   => ''
        );
        $this->db->insert('section_content', $insert_data);
        if ($this->db->affected_rows() > 0){
            $section_id= $this->db->insert_id();
            // validate user token
            $record = $this->db->get_where('hospital_sections', array('app_id =' => $app_id))->result();
            $sectionJson='';
            foreach ($record as $key) {
                $sectionJson=$key->sections;            
            }

            // create section json
            $sectionArr=array();
            if($sectionJson!='' && $sectionJson!='[]'){
                $sectionArr=json_decode($sectionJson);
                array_push($sectionArr, $section_id);
                $sectionJson=json_encode($sectionArr);
            }
            else{
                $sectionArr[]=$section_id;
                $sectionJson=json_encode($sectionArr);
            }

            // update section to hospital section table in array
            $update_data = array(
                'sections'   => $sectionJson
            );
            $this->db->where('app_id', $app_id);
            $this->db->update('hospital_sections', $update_data);
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
