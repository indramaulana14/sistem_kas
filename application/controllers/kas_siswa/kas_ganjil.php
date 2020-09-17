<?php 

class Kas_ganjil extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('kas_siswa/m_kas_ganjil');
		$this->load->helper('url');

	}

	function index(){
		$data['kas_ganjil'] = $this->m_kas_ganjil->tampil_data()->result();
		$this->load->view('kas_siswa/v_kas_ganjil',$data);
	}

	function tambah_kas_siswa(){
		$this->load->view('kas_siswa/v_input_kas_ganjil');
	}


	function aksi_kas_siswa(){
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$jul = $this->input->post('jul');
		$agu = $this->input->post('agu');
		$sep = $this->input->post('sep');
		$okt = $this->input->post('okt');
		$nov = $this->input->post('nov');
		$des = $this->input->post('des');
		$jumlah = $this->input->post('jumlah');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'jul' => $jul,
			'agu' => $agu,
			'sep' => $sep,
			'okt' => $okt,
			'nov' => $nov,
			'des' => $des,
			'jumlah' => $jumlah,
			'keterangan' => $keterangan
			);
		$this->m_kas_ganjil->input_data($data,'kas_ganjil');
		redirect('kas_siswa/kas_ganjil/index');
	}

	function hapus($nis){
		$where = array('nis' => $nis);
		$this->m_kas_ganjil->hapus_data($where,'kas_ganjil');
		redirect('kas_siswa/kas_ganjil/index');
	}

	function edit($nis){
		$where = array('nis' => $nis);
		$data['kas_ganjil'] = $this->m_kas_ganjil->edit_data($where,'kas_ganjil')->result();
		$this->load->view('kas_siswa/v_edit_kas_ganjil',$data);
	}

	function update(){
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$jul = $this->input->post('jul');
		$agu = $this->input->post('agu');
		$sep = $this->input->post('sep');
		$okt = $this->input->post('okt');
		$nov = $this->input->post('nov');
		$des = $this->input->post('des');
		$jumlah = $this->input->post('jumlah');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'jul' => $jul,
			'agu' => $agu,
			'sep' => $sep,
			'okt' => $okt,
			'nov' => $nov,
			'des' => $des,
			'jumlah' => $jumlah,
			'keterangan' => $keterangan
			);
		$where = array('nis' => $nis);
	
		$this->m_kas_ganjil->update_data($where,$data,'kas_ganjil');
		redirect('kas_siswa/kas_ganjil/index');
	}

}