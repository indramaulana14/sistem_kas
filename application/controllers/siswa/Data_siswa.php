<?php 


class Data_siswa extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('siswa/m_data_siswa');
		$this->load->helper('url');

	}

	function index(){
		$data['siswa'] = $this->m_data_siswa->tampil_data()->result();
		$this->load->view('siswa/v_data_siswa',$data);
	}

	function tambah(){
		$this->load->view('siswa/v_input_siswa');
	}

	function tambah_aksi(){
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'username' => $username,
			'password' => $password
			);
		$this->m_data_siswa->input_data($data,'siswa');
		redirect('siswa/data_siswa/index');
	}

	function hapus($nis){
		$where = array('nis' => $nis);
		$this->m_data_siswa->hapus_data($where,'siswa');
		redirect('siswa/data_siswa/index');
	}

	function edit($nis){
		$where = array('nis' => $nis);
		$data['siswa'] = $this->m_data_siswa->edit_data($where,'siswa')->result();
		$this->load->view('siswa/v_edit_siswa',$data);
	}

	public function update(){
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'username' => $username,
			'password' => $password
		);
	
		$where = array(
			'nis' => $nis
		);
	
		$this->m_data_siswa->update_data($where,$data,'siswa');
		redirect('siswa/data_siswa/index');
	}

}