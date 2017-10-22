<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_sertifikat extends CI_Model {
	function __construct(){
		parent::__construct();			
		$this->load->database();
	}
	function get_sertifikat($filter = null) {
		$query = $this->db->get_where('sertifikat', $filter);
		return $query->result_object();
	} 
	function delete($where){
		$this->db->where($where);
		$this->db->delete('sertifikat');
	}
	function detail_sertifikat($where){
		$query = $this->db->get_where('sertifikat', $where);
		return $query->row_array();
	}
	function update_sertifikat($id, $data){
		$this->db->where('id', $id);
		$this->db->update('sertifikat', $data);
	}
	function add_sertifikat($data) {
		$this->db->insert('sertifikat',$data);
	}	
}