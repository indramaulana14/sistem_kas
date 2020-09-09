<?php 

class Login_siswa extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login_siswa');

	}

	function index(){
		$this->load->view('v_login_siswa');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login_siswa->cek_login("siswa",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect('Siswa/');

		}else{
			$data['notif'] = 'Kosong';
			$this->load->view('v_login_siswa', $data);
		}

	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Login_siswa/');
	}
}