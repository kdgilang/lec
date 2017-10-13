<?php 

class M_Kelas extends CI_Model{
	function __construct() {
		parent::__construct();			
		$this->load->database();
	}
	function add_kelas($data) {
	    $this->db->insert('kelas', $data);
	    return $this->db->insert_id();
	}
	function get_kelas($where = null) {
		$query = $this->db->get_where('kelas', $where);
		return $query->result_object();
	}
	function get_meta($where = null) {
		$query = $this->db->get_where('kelas_meta', $where);
		return $query->row_object();
	}
	function detail_kelas($where = null) {
		$query = $this->db->get_where('kelas', $where);
		return $query->row_object();
	}
	function update_kelas($data, $where) {
		$this->db->where($where);
		$this->db->update('kelas', $data);
	}
	function update_meta($data, $where) {
		$old = $this->db->get_where('kelas_meta', $where);
		if($old->result_id->num_rows>0) {
			$this->db->where($where);
			$this->db->update('kelas_meta', $data);
		} else {
			$this->db->insert('kelas_meta', $data);
		}	
	}
}