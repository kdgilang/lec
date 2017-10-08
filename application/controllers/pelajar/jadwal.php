<?php 


class jadwal extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_jadwal');
		$this->load->helper('url');
	}	

	function data_group (){
	    $data['dataGroup'] = $this->m_jadwal->get_data_group(); //membuat data dari hasil transaksi masuk ke $data
	    $this->load->view('pelajar/jadwal/data_group',$data); //load tampilan content + mengirimkan $data
	}	

	function kelola_group($id_kelas){
		$data = array(
					'jadwal' => $this->m_jadwal->tampil_jadwal_group($id_kelas),
					'siswa' => $this->m_jadwal->tampil_anggota_group($id_kelas),
					'id_kelas' => $id_kelas
				);
		$this->load->view('pelajar/jadwal/data_jadwal_group',$data);
	}

	function cek_jadwal($id_kelas){
		$data = array(
					'kelas' => $this->m_jadwal->tampil_detail_jadwal($id_kelas),
					'id_kelas' => $id_kelas
				);
		$this->load->view('pelajar/jadwal/data_jadwal_group',$data);
	}

	function data_jadwal_group (){
	    $this->load->model('m_jadwal'); //load model
	    $data['data_jadwal'] = $this->m_jadwal->get_data_jadwal(); 
	    $this->load->view('pelajar/jadwal/data_jadwal_group',$data); //load tampilan content + mengirimkan $data
	}		

	function data_jadwal_private (){
	    $this->load->model('m_siswa'); //load model
	    $data['data_jadwal'] = $this->m_siswa->get_data_private(); 
	    $this->load->view('pelajar/jadwal/data_jadwal_private',$data); //load tampilan content + mengirimkan $data
	}

	function detail_jadwal_private($id_pendaftaran){
	    $this->load->model('m_jadwal'); //load model
	    $data['data_jadwal'] = $this->m_jadwal->get_detail_private($id_pendaftaran); 
	    $data['id_pendaftaran'] = $id_pendaftaran;
	    $this->load->view('pelajar/jadwal/detail_jadwal_private',$data); //load tampilan content + mengirimkan $data
	}
}