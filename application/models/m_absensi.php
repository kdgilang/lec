<?php 

class M_absensi extends CI_Model{
	function __construct(){
		parent::__construct();				
		$this->load->library('session');
		$this->load->database();
	}

	function get_data_group(){
	    $this->db->select('*'); //memeilih semua field
	    $this->db->from('kelas'); //memeilih tabel
	    $this->db->order_by('nama_kelas','ASC');
	   
	    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
	        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $dataSertifikat
	            foreach ($query->result() as $data) {
	                $dataGroup[] = $data;
	            }
	        return $dataGroup; //hasil dari semua proses ada dimari
	        }
	}

	function lihat_detail_pengajar($id_kelas){
		$this->db->join('absensi','absensi.id_anggota = anggota_kelas.id_anggota');
		$this->db->join('pengajar','pengajar.id_pengajar = anggota_kelas.id_pengajar');
		$this->db->where('anggota_kelas.id_kelas',$id_kelas);
		$query = $this->db->get('anggota_kelas');
		return $query->row_array();
	}

	function tampil_detail_absensi($id_kelas){
		$this->db->join('absensi','absensi.id_anggota = anggota_kelas.id_anggota');
		$this->db->join('siswa','siswa.id_pendaftaran = anggota_kelas.id_pendaftaran');
		$this->db->where('anggota_kelas.id_kelas',$id_kelas);
		$this->db->order_by('nama_siswa','asc');
		$query = $this->db->get('anggota_kelas');
		return $query->result_array();
	}

	// function tampil_data_siswa(){
	// 	$query=$this->db->query("SELECT * FROM siswa WHERE id_pendaftaran = 14 ");
 //        return $query->result();
	// }	
	
	function input_data_absensi($id_anggota,$id_pertemuan,$data){
		// $this->db->where('id_kelas',$id_kelas);
		$this->db->where('id_anggota',$id_anggota);
		$this->db->update('absensi',$data);
	}	

	function input_siswa($data){
		$this->db->insert('absensi',$data);
	}

	function get_data_absensi($id_kelas){
	    $this->db->select('*'); //memeilih semua field
	    $this->db->from('anggota_kelas'); //memeilih tabel
	    $this->db->join('absensi', 'absensi.id_anggota = anggota_kelas.id_anggota');
	    $this->db->join('siswa', 'siswa.id_pendaftaran = anggota_kelas.id_pendaftaran');
	    $this->db->where('anggota_kelas.id_kelas', $id_kelas); //join tabel transaksi field id_pemilik dengan tabel pemilik field yang punya isi sama
	    $this->db->order_by('nama_siswa','asc');
	 
	    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
	        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
	            foreach ($query->result() as $data) {
	                # code...
	                $dataUjian[] = $data;
	            }
	        return $dataUjian; //hasil dari semua proses ada dimari
	        }
	}	

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update_data($id_absensi,$data){
		$this->db->where('id_absensi',$id_absensi);
		$this->db->update('absensi',$data);
	}
	
}