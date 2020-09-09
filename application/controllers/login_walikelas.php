<?php 

class Login_Walikelas extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login_walikelas');

	}

	function index(){
		$this->load->view('v_login_walikelas');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login_walikelas->cek_login("walikelas",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect('Walikelas/');

		}else{
			$data['notif'] = 'Kosong';
			$this->load->view('v_login_walikelas', $data);
		}

	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Login_walikelas/');
	}
}