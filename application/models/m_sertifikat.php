<?php 

class M_sertifikat extends CI_Model{
	function __construct(){
		parent::__construct();				
		$this->load->library('session');
		$this->load->database();
	}

	// Model users
	function ambildata($perPage, $uri, $ringkasan) {
		$this->db->select('*');
		$this->db->from('sertifikat');
		$this->db->join('siswa', 'sertifikat.id_pendaftaran = siswa.id_pendaftaran');
	    $this->db->order_by('nama_siswa', 'ASC');
		if (!empty($ringkasan)) {
			$this->db->like('nama_siswa', $ringkasan);
			$this->db->or_like('target_level', $ringkasan);
		}
		$this->db->order_by('nama_siswa','asc');
		$getData = $this->db->get('', $perPage, $uri);

		if ($getData->num_rows() > 0)
			return $getData->result_array();
		else
			return null;
	}

	function tampil(){
		//$this->db->from('mahasiswa');
		$query = $this->db->get('siswa');
		return $query->result(); 
	}

	function caridata(){
		$c = $this->input->POST ('cari');
		$this->db->like('nama_siswa', $c);
		$query = $this->db->get ('siswa');
		return $query->result(); 
	 }

	function get_data_sertifikat(){
	    $this->db->select('*'); //memeilih semua field
	    $this->db->from('sertifikat'); //memeilih tabel
	    $this->db->join('siswa', 'sertifikat.id_pendaftaran = siswa.id_pendaftaran'); //join tabel transaksi field id_pemilik dengan tabel pemilik field yang punya isi sama
	    $this->db->order_by('nama_siswa', 'ASC');
	 
	    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
	        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $dataSertifikat
	            foreach ($query->result() as $data) {
	                $dataSertifikat[] = $data;
	            }
	        return $dataSertifikat; //hasil dari semua proses ada dimari
	        }
	}

	function input_data_sertifikat($data){
		$this->db->insert('sertifikat',$data);
	}	

	// function tampil_detail_sertifikat($id_sertifikat){
	// 	$this->db->where('id_sertifikat',$id_sertifikat);
	// 	$query = $this->db->get('sertifikat');
	// 	return $query->row_array();
	// }

	function tampil_detail_sertifikat($id_sertifikat){
		$this->db->join('pengajar','pengajar.id_pengajar = sertifikat.id_pengajar');
		$this->db->join('siswa','siswa.id_pendaftaran = sertifikat.id_pendaftaran');
		$this->db->where('id_sertifikat',$id_sertifikat);
		$query = $this->db->get('sertifikat');
		return $query->row_array();
	}

	function lihat_detail_sertifikat($id_sertifikat){
		$this->db->join('pengajar','pengajar.id_pengajar = sertifikat.id_pengajar');
		$this->db->join('siswa','siswa.id_pendaftaran = sertifikat.id_pendaftaran');
		$this->db->where('id_sertifikat',$id_sertifikat);
		$query = $this->db->get('sertifikat');
		return $query->row_array();
	}

	function update_data($id_sertifikat,$data){
		$this->db->where('id_sertifikat',$id_sertifikat);
		$this->db->update('sertifikat',$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function tampil_data_sertifikat(){
		$query = $this->db->get('siswa');
		return $query->result_array();
	}	
}