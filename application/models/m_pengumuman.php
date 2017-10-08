	<?php 

class M_pengumuman extends CI_Model{
	function __construct(){
		parent::__construct();				
		$this->load->library('session');
		$this->load->database();
	}

	function tampil_data_pengumuman(){
		$this->db->join('user','pengumuman.id_user = user.id_user');
		$this->db->order_by('tanggal', 'ASC');
		$query = $this->db->get('pengumuman');
		return $query->result_array();
	}

	function tampil_pengumuman(){
		$query = $this->db->get('pengumuman');
		return $query->result_array();
	}	

	function input_data_pengumuman($data){
		$this->db->insert('pengumuman',$data);
	}

	function tampil_detail_pengumuman($id_pengumuman){
		$this->db->where('id_pengumuman',$id_pengumuman);
		$query = $this->db->get('pengumuman');
		return $query->row_array();
	}

	function update_data($id_pengumuman,$data){
		$this->db->where('id_pengumuman',$id_pengumuman);
		$this->db->update('pengumuman',$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}