<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'/libraries/REST_Controller.php');

class Section_api extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('section_model');

        // LOADING THE AUTHOSRIZATION TOKEN LIBRARY 
        $this->load->library('Authorization_Token');

        // verify authorize token
        $headers=getallheaders();
        $app_id=$headers['app_id'];
        $token=$headers['token'];
        $auth= $this->section_model->authorizeToken($app_id,$token);
        // print_r($auth);die();
        switch ($auth['type']) {
            case 'error':
                return $this->response($auth, 404);
                die();
                break;

            case 'warning':
                return $this->response($auth, 412);
                die();
                break;

            case 'success':
                break;

            case 'unauthorized':
                return $this->response($auth, 401);
                die();
                break;

            default:
                $response = array(
                    'status' => false,
                    'type' => 'error',
                    'message' => 'Error: Server error detected!');
                return $this->response($response, 500);
                die();
                break;
        }
        // print_r($auth);
        //die();
    }

    // api to get all hospital sections
    public function getHospitalSections_get() {
        $headers=getallheaders();
        $app_id=$headers['app_id'];
        $result = $this->section_model->getHospitalSections($app_id);
        switch ($result['type']) {
            case 'error':
                return $this->response($result, 404);
                break;

            case 'success':
                return $this->response($result, 200);
                break;

            case 'warning':
                return $this->response($result, 412);
                break;

            default:
                $response = array(
                    'status' => false,
                    'type' => 'error',
                    'message' => 'Error: Server error detected!');
                return $this->response($response, 500);
                break;
        }
    }

    // api to get all hospital sections
    public function getSectionContent_get() {
        extract($_GET);
        $result = $this->section_model->getSectionContent($section_id);
        switch ($result['type']) {
            case 'error':
                return $this->response($result, 404);
                break;

            case 'success':
                return $this->response($result, 200);
                break;

            case 'warning':
                return $this->response($result, 412);
                break;

            default:
                $response = array(
                    'status' => false,
                    'type' => 'error',
                    'message' => 'Error: Server error detected!');
                return $this->response($response, 500);
                break;
        }
    }

}
