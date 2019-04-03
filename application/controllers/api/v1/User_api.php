<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'/libraries/REST_Controller.php');

class User_api extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');

        // LOADING THE AUTHORIZATION TOKEN LIBRARY 
        $this->load->library('Authorization_Token');

        // verify authorize token for every call
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

    // api to create new user
    public function createUser_post() {
        $data=$_POST;

        // app_id from headers
        $headers=getallheaders();        
        $data['app_id']=$headers['app_id'];

        $result = $this->section_model->createUser($data);
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
