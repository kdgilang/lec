<?php 

class M_siswa extends CI_Model{
	function __construct(){
		parent::__construct();				
		$this->load->library('session');
		$this->load->database();
	}	

	function tampil_data_siswa(){
		$query = $this->db->get('daftar');
		return $query->result_array();
	}	
}