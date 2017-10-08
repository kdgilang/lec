<?php 

class M_Kelas extends CI_Model{
	function __construct(){
		parent::__construct();			
		$this->load->database();
	}

	function create($table,$data){
	    $this->db->insert($table, $data);
	    return $this->db->insert_id();// return last insert id
	}

	function get_kelas(){
		$query = $this->db->get('kelas');
		return $query->result_object();
	}

	function lihat_detail_kelas($id_kelas){
		$this->db->where('id',$id_kelas);
		$query = $this->db->get('kelas');
		return $query->row_array();
	}
}