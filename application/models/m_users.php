
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_users extends CI_Model {
		function __construct(){
			parent::__construct();			
			$this->load->database();
		}

		// GENERAL
		public function cek_user($data) {
			$query = $this->db->get_where('users', $data);
			return $query;
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
		function update_users($id, $data){
			$this->db->where('id', $id);
			$this->db->update('users', $data);
		}

		// OPERATOR
		function add_operator($data, $nik){
			$data = $this->db->insert('users',$data);
			$id = $this->db->insert_id();
			if(!empty($id)) {
				$datameta = array('nama_meta'=>'nik', 'nilai_meta' => $nik, 'id_user' => $id);
				$this->db->insert('user_meta',$datameta);
			}
		}

		// PENGAJAR
		function add_pengajar($data, $kp) {
			$data = $this->db->insert('users',$data);
			$id = $this->db->insert_id();
			if(!empty($id)) {
				$datameta = array('nama_meta'=>'kode_pengajar', 'nilai_meta' => $kp, 'id_user' => $id);
				$this->db->insert('user_meta',$datameta);
			}
		}
		
	}
?>