<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
         // load common model
        
    }

    // main index function
    public function index() { 
    //start session		
//        $admin_name = $this->session->userdata('admin_name');
//        if ($admin_name != '') {
//            $sessionArr = explode('|', $admin_name);
//            //check session variable set or not, otherwise logout
//            if (($sessionArr[0] == 'MISPRODUCT')) {
//                redirect('admin/dashboard');
//            }
//        }       
//        $this->load->view('pages/login');
    }


    // check login authentication-----------------------------------------------------------
    public function checkLogin() {
         // get data passed through ANGULAR AJAX
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata, TRUE);
        $data=array(
            'login_username' => $request['username'],
            'login_password' => $request['password']
        );

        //print_r($data);
        $path = base_url();
        $url = $path . 'api/v1/Login_api/checkLogin';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        //print_r($response['type']);die();
        
        if (!$response) {
            // failure scope
            echo '<p class="w3-red w3-padding-small">Sorry, your credentials are incorrect!</p>';
        } else {
            // success scope
            //----create session array--------//

            $session_data = array(
                'admin_name' => $request['username']
            );
            //start session of user if login success
            $this->session->set_userdata($session_data);
            //redirect('admin/dashboard');
            echo '200';
            //echo '<p class="w3-green w3-padding-small">Login successfull! Welcome Admin.</p>';
        }
        //print_r($result);
    }

    // login fucntion ends here----------------------------------------------------------------------
    // logout function starts here----------------------------------------------------
    public function logoutAdmin() {
        //start session		
        $admin_name = $this->session->userdata('admin_name');

        //if logout success then destroy session and unset session variables
        $this->session->unset_userdata(array('admin_name'));
        $this->session->sess_destroy();
        redirect('login');
    }

    // logout function ends here---------------------------------------------------------
    
    public function getPassword(){
        $path = base_url();
        $url = $path . 'api/v1/Login_api/getPassword?user_email=' . $user_email;
        //create a new cURL resource
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array());
        $response_json = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($response_json, true);
        
         if ($result['status'] == 200) {
            echo '<div class="alert alert-success">
            <strong>' . $result['status_message'] . '</strong> 
            </div>';
        } elseif ($result['status'] == 412) {
            echo '<div class="alert alert-danger">
            <strong>' . $result['status_message'] . '</strong> 
            </div>';
        } else {
            echo '<div class="alert alert-danger">
            <strong>' . $result['status_message'] . '</strong> 
            </div>';
        }
    }
    
}
