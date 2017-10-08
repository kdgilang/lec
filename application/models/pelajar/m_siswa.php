<?php 

class M_siswa extends CI_Model{
	function __construct(){
		parent::__construct();				
		$this->load->library('session');
		$this->load->database();
	}

	function detail_siswa($id_pendaftaran){
		$this->db->where('siswa.id_pendaftaran',$id_pendaftaran);
		$query = $this->db->get('siswa');
		return $query->row_array();
	}

	function list_jadwal($id_pendaftaran){
		$this->db->join('pengajar','pengajar.id_pengajar = jadwal.id_pengajar');
		$this->db->where('id_pendaftaran',$id_pendaftaran);
		$this->db->order_by('hari','desc');
		$query = $this->db->get('jadwal');
		return $query->result_array();
	}

	function tampil_data_siswa(){
		$query = $this->db->get('siswa');
		return $query->result_array();
	}
}