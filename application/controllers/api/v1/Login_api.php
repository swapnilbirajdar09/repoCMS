<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');

class Login_api extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
    }

    // api to authenticate user
    public function checkLogin_post() {
        $data = $_POST;
        extract($data);
        header("Access-Control-Allow-Origin: *");
        
        $_POST = $this->security->xss_clean($_POST);
        
        $result = $this->Login_model->checkLogin($data);
        //print_r($result);die();
//        
        // LOADING THE AUTHOSRIZATION TOKEN LIBRARY 
        $this->load->library('Authorization_Token');

        $Token_data['userId'] = $result['data']['userId'];
        $Token_data['userRoleID'] = $result['data']['userRoleID'];
        $Token_data['userEmail'] = $result['data']['userEmail'];
        $Token_data['appId'] = $result['data']['appId'];
        $Token_data['addedDate'] = $result['data']['addedDate'];
        $Token_data['time'] = time();
     
        // GENERATE TOKEN METHOD
        $user_token = $this->authorization_token->generateToken($Token_data);
        //print_r($this->authorization_token->userData());exit();
        switch ($result['type']) {
            case 'error':
                $result = array(
                    'status' => false,
                    'type' => 'error',
                    'message' => 'Sorry, your credentails are incorrect!'
                );
                return $this->response($result, 404);
                break;

            case 'success':
                $user_data = array(
                    'userId' => $result['data']['userId'],
                    'userRoleID' => $result['data']['userRoleID'],
                    'userEmail' => $result['data']['userEmail'],
                    'appId' => $result['data']['appId'],
                    'addedDate' => $result['data']['addedDate'],
                    'token' => $user_token
                );
                
                // Update the token to the user table as current token
                $updateResult = $this->Login_model->updateUserData($user_data);

                $result = array(
                    'status' => true,
                    'type' => 'success',
                    'message' => 'Login successfull',
                    'data' => $user_data
                );
                return $this->response($result, 200);
                break;

            case 'warning':
                $result = array(
                    'status' => false,
                    'type' => 'error',
                    'message' => 'Something Went Wong. Please Try Again!'
                );
                return $this->response($result, 412);
                break;

            default:
                $result = array(
                    'status' => false,
                    'type' => 'error',
                    'message' => 'Error: Server error detected!');
                return $this->response($result, 500);
                break;
        }
    }

    // api to get user password by user email
    public function getPassword_get() {
        extract($_GET);
        $result = $this->Login_model->getPassword($user_email);
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
