<?php 

class M_data_kas extends CI_Model{
	function tampil_data(){
		$this->db->order_by('nama', 'ASC');
		return $this->db->get('kas');
		return $this->db->get('kas_kelas');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
 
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}