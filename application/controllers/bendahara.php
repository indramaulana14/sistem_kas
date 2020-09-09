<?php 

class Bendahara extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('Login_bendahara/');
		}
	}

	function index(){
		$this->load->view('v_bendahara');
	}
}