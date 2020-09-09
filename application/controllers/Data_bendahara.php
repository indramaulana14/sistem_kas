<?php 


class Data_bendahara extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data_bendahara');
		$this->load->helper('url');

	}

	function index(){
		$data['bendahara'] = $this->m_data_bendahara->tampil_data()->result();
		$this->load->view('v_data_bendahara',$data);
	}

	function tambah(){
		$this->load->view('v_input_bendahara');
	}

	function tambah_aksi(){
		$nis = $this->input->post('id_bendahara');
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'id_bendahara' => $id_bendahara,
			'nis' => $nis,
			'nama' => $nama,
			'username' => $username,
			'password' => $password
			);
		$this->m_data_bendahara->input_data($data,'bendahara');
		redirect('data_bendahara/index');
	}

	function hapus($id_bendahara){
		$where = array('id_bendahara' => $id_bendahara);
		$this->m_data_bendahara->hapus_data($where,'bendahara');
		redirect('data_bendahara/index');
	}

	function edit($id_bendahara){
		$where = array('id_bendahara' => $id_bendahara);
		$data['bendahara'] = $this->m_data_bendahara->edit_data($where,'bendahara')->result();
		$this->load->view('v_edit_bendahara',$data);
	}

	function update(){
		$nis = $this->input->post('id_bendahara');
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		$data = array(
			'id_bendahara' => $id_bendahara,
			'nis' => $nis,
			'nama' => $nama,
			'username' => $username,
			'password' => $password
		);
	
		$where = array(
			'id_bendahara' => $id_bendahara
		);
	
		$this->m_data_bendahara->update_data($where,$data,'bendahara');
		redirect('data_bendahara/index');
	}

}