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

}
