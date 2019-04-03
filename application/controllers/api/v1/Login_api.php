<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . '/libraries/REST_Controller.php');

class Login_api extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');

        // LOADING THE AUTHOSRIZATION TOKEN LIBRARY 
        $this->load->library('Authorization_Token');
    }

    // api to authenticate user
    public function checkLogin_post() {
        $data = $_POST;
        extract($data);
        // header("Access-Control-Allow-Origin: *");        
        // $_POST = $this->security->xss_clean($_POST);
        
        // check login credentials
        $result = $this->login_model->checkLogin($data);

        $Token_data['userId'] = $result['data']['userId'];
        // $Token_data['userRoleID'] = $result['data']['userRoleID'];
        // $Token_data['userEmail'] = $result['data']['userEmail'];
        $Token_data['appId'] = $result['data']['appId'];
        $Token_data['time'] = time();

        // GENERATE TOKEN METHOD
        $user_token = $this->authorization_token->generateToken($Token_data);

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
                    'appId' => $result['data']['appId'],
                    'modified_time' => time(),
                    'expiry_time' => time() + 20 * 60,
                    'token' => $user_token
                );
                
                // Update the token to the user table as current token
                $updateResult = $this->login_model->updateUserData($user_data);

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
        $result = $this->login_model->getPassword($user_email);
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

    // api to refresh current token
    public function refreshToken_post() {
        extract($_POST);

        $Token_data['userId'] = $user_id;
        $Token_data['appId'] = $app_id;
        $Token_data['time'] = time();

        // GENERATE TOKEN METHOD
        $new_token = $this->authorization_token->generateToken($Token_data);

        $result = $this->login_model->refreshToken($user_id,$app_id,$token,$new_token);
        switch ($result['type']) {
            case 'error':
                return $this->response($result, 404);
                break;

            case 'unauthorized':
                return $this->response($result, 401);
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
