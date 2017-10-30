<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_users extends CI_Model {
	function __construct(){
		parent::__construct();			
		$this->load->database();
	}
	function is_login($filter) {
		return $this->db->get_where('users', $filter);
	}
	function get_users($filter) {
		$query = $this->db->get_where('users', $filter);
		return $query->result_object();
	} 
	function get_meta($id, $meta_key) {
		$data = $this->db->get_where('user_meta', array('id_user' => $id, 'nama_meta' => $meta_key));
		if($data->result_id->num_rows>0) {
			return $data->result_array()[0];
		}
	}
	function set_meta($iduser, $meta_key, $nilai_meta) {
		$data = $this->db->get_where('user_meta', array('id_user' => $iduser, 'nama_meta' => $meta_key));
		if($data->result_id->num_rows>0) {
			$datameta = array('nilai_meta' => $nilai_meta);
			$id = $data->row_object()->id;
			$this->db->where('id', $id);
			$this->db->update('user_meta', $datameta);
		} else {
			$datameta = array(
				'nama_meta' => $meta_key,
				'nilai_meta' => $nilai_meta,
				'id_user' => $iduser
			);
			$this->db->insert('user_meta', $datameta);
		}
	}
	function delete($where){
		$this->db->where($where);
		$this->db->delete('users');
	}
	function detail_users($id){
		$this->db->where('id', $id);
		$query = $this->db->get('users');
		return $query->row_array();
	}
	function in_users($ids){
		$this->db->where_in('id', $ids);
		$this->db->order_by("nama", "asc");
		$query = $this->db->get('users');
		return $query->result_array();
	}
	function update_users($id, $data, $w=null, $meta=null){
		$this->db->where('id', $id);
		$this->db->update('users', $data);
		if(!empty($w)) {
			$result = $this->db->get_where('user_meta', $w);
			if($result->result_id->num_rows>0) {
				$this->db->where($w);
				$this->db->update('user_meta', $meta);
			} else {
				$fmeta = array_merge($meta, $w);
				$this->db->insert('user_meta', $fmeta);
			}
		}
	}
	function add_users($data, $meta_key, $c) {
		$db = $this->db->insert('users',$data);
		$id = $this->db->insert_id();
		if(!empty($id) && !empty($meta_key) && !empty($c)) {
			$datameta = array('nama_meta'=> $meta_key, 'nilai_meta' => $c, 'id_user' => $id);
			$this->db->insert('user_meta', $datameta);
		}
		return $db;
	}		
}
?>