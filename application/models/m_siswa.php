<?php 

class M_siswa extends CI_Model{
	function __construct(){
		parent::__construct();				
		$this->load->library('session');
		$this->load->database();
	}

	// Model users
	function ambildata($perPage, $uri, $ringkasan) {
		$this->db->select('*');
		$this->db->from('siswa');
		// $this->db->join('siswa', 'sertifikat.id_pendaftaran = siswa.id_pendaftaran');
	    $this->db->order_by('nama_siswa', 'ASC');
		if (!empty($ringkasan)) {
			$this->db->like('nama_siswa', $ringkasan);
		}
		$this->db->order_by('nama_siswa','asc');
		$getData = $this->db->get('', $perPage, $uri);

		if ($getData->num_rows() > 0)
			return $getData->result_array();
		else
			return null;
	}

	function get_data_private(){
		$this->db->where("kelas","Private");
		$this->db->order_by('nama_siswa','asc');
		$query = $this->db->get('siswa');
		return $query->result();
	}

	function detail_siswa($id){
		$this->db->where('id_pendaftaran',$id);
		$query = $this->db->get('siswa');
		return $query->row_array();
	}

	function list_jadwal($id){
		$this->db->join('pengajar','pengajar.id_pengajar = jadwal.id_pengajar');
		$this->db->where('jadwal.id_pendaftaran',$id);
		$this->db->order_by('hari','desc');
		$query = $this->db->get('jadwal');		
		return $query->result_array();
	}

	function create($table,$data){
	    $query = $this->db->insert($table, $data);
	    return $this->db->insert_id();// return last insert id
	}
	
	function input_data_siswa($data){
		$this->db->insert('siswa',$data);
	}	

	function lihat_detail_siswa($id_pendaftaran){
		$this->db->join('jadwal','jadwal.id_pendaftaran = siswa.id_pendaftaran');
		$this->db->join('pengajar','pengajar.id_pengajar = jadwal.id_pengajar');
		$this->db->where('siswa.id_pendaftaran',$id_pendaftaran);
		$query = $this->db->get('siswa');
		return $query->row_array();
	}
	
	function tampil_detail_siswa($id_pendaftaran){
		$this->db->where('id_pendaftaran',$id_pendaftaran);
		$query = $this->db->get('siswa');
		return $query->row_array();
	}

	function update_data($id_pendaftaran,$data){
		$this->db->where('id_pendaftaran',$id_pendaftaran);
		$this->db->update('siswa',$data);
	}	

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}