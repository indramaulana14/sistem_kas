<?php 


class Data_walikelas extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data_walikelas');
		$this->load->helper('url');

	}

	function index(){
		$data['walikelas'] = $this->m_data_walikelas->tampil_data()->result();
		$this->load->view('v_data_walikelas',$data);
	}

	function tambah(){
		$this->load->view('v_input_walikelas');
	}

	function tambah_aksi(){
		$id_walikelas = $this->input->post('id_walikelas');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'id_walikelas' => $id_walikelas,
			'nama' => $nama,
			'username' => $username,
			'password' => $password
			);
		$this->m_data_walikelas->input_data($data,'walikelas');
		redirect('data_walikelas/index');
	}

	function hapus($id_walikelas){
		$where = array('id_walikelas' => $id_walikelas);
		$this->m_data_walikelas->hapus_data($where,'walikelas');
		redirect('data_walikelas/index');
	}

	function edit($id_walikelas){
		$where = array('id_walikelas' => $id_walikelas);
		$data['walikelas'] = $this->m_data_walikelas->edit_data($where,'walikelas')->result();
		$this->load->view('v_edit_walikelas',$data);
	}

	function update(){
		$id_walikelas = $this->input->post('id_walikelas');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		$data = array(
			'id_walikelas' => $id_walikelas,
			'nama' => $nama,
			'username' => $username,
			'password' => $password
		);
	
		$where = array(
			'id_walikelas' => $id_walikelas
		);
	
		$this->m_data_walikelas->update_data($where,$data,'walikelas');
		redirect('data_walikelas/index');
	}

}