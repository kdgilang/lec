<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pengumuman extends CI_Model {
	function __construct(){
		parent::__construct();			
		$this->load->database();
	}
	function get_pengumuman($filter = null) {
		$query = $this->db->get_where('pengumuman', $filter);
		return $query->result_object();
	} 
	function delete($where){
		$this->db->where($where);
		$this->db->delete('pengumuman');
	}
	function detail_pengumuman($where){
		$query = $this->db->get_where('pengumuman', $where);
		return $query->row_array();
	}
	function update_pengumuman($id, $data){
		$this->db->where('id', $id);
		$this->db->update('pengumuman', $data);
	}
	function add_pengumuman($data) {
		$this->db->insert('pengumuman',$data);
	}	
}