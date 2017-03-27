<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		
        parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->helper('form');
	    $this->load->library('form_validation');
		$this->user_data = $this->session->userdata('userId');
	        
    }
	
	public function index()
	{
		$data['user_data'] = $this->user_data;
		//echo '<pre>';
		//print_r($data['user_data']);
		//echo '</pre>';
		$this->load->view('template/header-main');
		$this->load->view('template/header-nav',$data);
        $this->load->view('template/header-main-nav');

        $this->load->view('template/main-banner');
        $this->load->view('home/index');

        $this->load->view('template/footer-main');
	}
}
