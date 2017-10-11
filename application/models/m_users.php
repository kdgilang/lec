
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
			$this->load->database();
			$data = $this->db->get_where('user_meta', array('id_user' => $id, 'nama_meta' => $meta_key));
			return $data->result_array()[0];
		}
		function delete($where){
			$this->db->where($where);
			$this->db->delete('users');
		}
		function lists_users($sql){
			$data = $this->db->get_where('users', $sql);
			return $data->result_array();
		}	
		function detail_users($id){
			$this->db->where('id', $id);
			$query = $this->db->get('users');
			return $query->row_array();
		}
		function update_users($id, $data, $w=null, $meta=null){
			$this->db->where('id', $id);
			$this->db->update('users', $data);
			if(!empty($w)) {
				$this->db->where($w);
				$this->db->update('user_meta', $meta);
			}
		}
		function add_users($data, $meta_key, $c, $status = false) {
			$db = $this->db->insert('users',$data);
			$id = $this->db->insert_id();
			if(!empty($id) && !empty($meta_key) && !empty($c)) {
				$datameta = array('nama_meta'=>$meta_key, 'nilai_meta' => $c, 'id_user' => $id);
				$this->db->insert('user_meta',$datameta);
			}
			if($status) {
				return $db;
			}
		}		
	}
?>