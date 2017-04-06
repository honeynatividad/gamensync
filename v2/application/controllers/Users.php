<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct() {
		
        parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->helper('form');
	    $this->load->library('form_validation');
        $this->load->model('user');
		$this->user_data = $this->session->userdata('userId');
        $this->load->library('My_PHPMailer');
	        
    }

    public function register(){
    	$data['user_data'] = $this->user_data;
		//echo '<pre>';
		//print_r($data['user_data']);
		//echo '</pre>';

		$data = array();
        $userData = array();
        if($this->input->post('submit')){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('password2', 'confirm password', 'required|matches[password]');
            $userData = array(
                'username' => strip_tags($this->input->post('username')),
                'first_name' => strip_tags($this->input->post('first_name')),
                'last_name' => $this->input->post('last_name'),
                'password' => md5($this->input->post('password')),
                'email_address' => $this->input->post('email_address'),
                'platform' => strip_tags($this->input->post('platform')),
                'interest' => strip_tags($this->input->post('interest'))
            );
            if($this->form_validation->run() == true){
                $insert = $this->user->insert($userData);
                if($insert){
                    $this->session->set_userdata('success_msg', 'Your registration was successful. Please login to your account.');
                    redirect('users/login');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        $data['user'] = $userData;
        
		$this->load->view('template/header-main');
		$this->load->view('template/header-nav',$data);
        //$this->load->view('template/header-main-nav');

       
        $this->load->view('users/register');

        $this->load->view('template/footer-main');
    }

    public function checkusername(){
        if($this->input->post('username')){
            $username = strip_tags($this->input->post('username'));
            //$username = "test";
            $check = $this->user->checkusername($username);
            
            echo $check;
        }
    }

    public function register_insert(){
        if($this->input->post('username')){
            $username = strip_tags($this->input->post('username'));
            
            //$username = "test";
            $userData = array(
                'username' => strip_tags($this->input->post('username')),
                'first_name' => strip_tags($this->input->post('first_name')),
                'last_name' => $this->input->post('last_name'),
                'password' => md5($this->input->post('password')),
                'email_address' => $this->input->post('email_address'),
                'platform' => strip_tags($this->input->post('platform')),
                'interest' => strip_tags($this->input->post('interest'))
            );

            $check = $this->user->insert($userData);
            
            echo $check;
        }else{
            echo 'wrong!';
        }

    }

    public function send_mail($to,$subject,$message) {
        $mail = new PHPMailer();    
        $mail->SMTPAuth   = false; 
        $mail->SMTPSecure = "ssl"; 
        $mail->Host       = 'smtp.philcare.com.ph'; 
        $mail->Port       = 25; 
        $mail->Username   = 'advisory@philcare.com.ph'; 
        $mail->Password   = 'P@ssw0rd'; 
        $mail->SetFrom('advisory@philcare.com.ph','PhilCare Advisory');  
        $mail->IsHTML(true);
        $mail->Subject    = $subject;
        $msg =$message;
        $mail->Body = $msg;
        //$mail->AltBody    = "Plain text message";
        $destino = $to; 
        $mail->AddAddress($destino);

        if(!$mail->Send()) {
            $data["message"] = "Error: " . $mail->ErrorInfo;
        } else {
            $data["message"] = "Message sent correctly!";
        }
        
        return json_encode($data);
    }   
}