<?php 

class Login_bendahara extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login_bendahara');

	}

	function index(){
		$this->load->view('v_login_bendahara');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login_bendahara->cek_login("bendahara",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect('Bendahara/');

		}else{
			$data['notif'] = 'Kosong';
			$this->load->view('v_login_bendahara', $data);
		}

	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Login_bendahara/');
	}
}