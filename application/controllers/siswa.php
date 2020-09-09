<?php 

class Siswa extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('Login_siswa/');
		}
	}

	function index(){
		$this->load->view('v_siswa');
	}
}