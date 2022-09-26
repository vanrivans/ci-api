<?php

defined('BASEPATH') OR exit('No direct script access allowed');
use \Firebase\JWT\JWT;
// use \mervick\aesEverywhere\AES256;

class Auth extends BD_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->model('M_main');
    }

    public function check_get() {
        
        $this->auth();
    }

    public function login_post()
    {
        $data = $this->post('data');

        $data = \mervick\aesEverywhere\AES256::decrypt($data, '$2y$12$BjUx3a5C4Sd34fSRXJjUynW56lunzuw8RlyeQDpmhtEwmUzLaGsK');
        $data = json_decode($data, true);

        $u = $data['email'];
        $p = $data['password'];
        $p = sha1($data['password']);

        // $u = $this->post('email');

        $q = array('email' => $u); //For where query condition
        $kunci = $this->config->item('thekey');

        $invalidLogin = ['status' => 'Invalid Login', 'message' => 'Invalid Login']; //Respon if login invalid
        
        $val = $this->M_main->get_user($q)->row(); //Model to get single data row from database base on email
        
        if($this->M_main->get_user($q)->num_rows() == 0){$this->response($invalidLogin, REST_Controller::HTTP_NOT_FOUND);}
		
        $match = $val->password;   //Get password for user from database
        
        if($p == $match){  //Condition if password matched
        	$token['id'] = $val->id;  //From here
            $token['email'] = $u;
            $date = new DateTime();
            $token['iat'] = $date->getTimestamp();
            $token['exp'] = $date->getTimestamp() + 60*60*5; //To here is to generate token
            $output['id'] = $token['id'];
            $output['token'] = JWT::encode($token,$kunci ); //This is the output token
            $this->set_response($output, REST_Controller::HTTP_OK); //This is the respon if success
        }
        else {
            $this->set_response($invalidLogin, REST_Controller::HTTP_NOT_FOUND); //This is the respon if failed
        }
    }

}
