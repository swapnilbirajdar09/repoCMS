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
        $auth= $this->user_model->authorizeToken($app_id,$token);
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

    // api to create new subadmin
    public function createSubadmin_post() {
        $data=$_POST;

        // app_id from headers
        $headers=getallheaders();        
        $data['app_id']=$headers['app_id'];

        $result = $this->user_model->createSubadmin($data);
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

    // api to create new admin
    public function createAdmin_post() {
        $data=$_POST;

        // app_id from headers
        $headers=getallheaders();        
        $data['app_id']=$headers['app_id'];

        $result = $this->user_model->createAdmin($data);
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

    // api to remove/delete user from hospital
    public function deleteUser_get(){
        extract($_GET);
        // app_id from headers
        $headers=getallheaders();        
        $app_id=$headers['app_id'];

        $result = $this->user_model->deleteUser($app_id,$user_id);
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
