<?php 


class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index(){
		$data['siswa'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_input');
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
		$this->m_data->input_data($data,'siswa');
		redirect('crud/index');
	}

	function hapus($nis){
		$where = array('nis' => $nis);
		$this->m_data->hapus_data($where,'siswa');
		redirect('crud/index');
	}

	function edit($nis){
		$where = array('nis' => $nis);
		$data['siswa'] = $this->m_data->edit_data($where,'siswa')->result();
		$this->load->view('v_edit',$data);
	}

	function update(){
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		$data = array(
			'nama' => $nis,
			'alamat' => $nama,
			'pekerjaan' => $username,
			'pekerjaan' => $password
		);
	
		$where = array(
			'nis' => $nis
		);
	
		$this->m_data->update_data($where,$data,'siswa');
		redirect('crud/index');
	}

}