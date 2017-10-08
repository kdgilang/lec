<?php 

class siswa extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('pelajar/m_siswa');
		$this->load->helper('url');
		$this->load->library('session');
		if(empty($_SESSION['id_pendaftaran'])){
			redirect(base_url().'pelajar/login');
		}
	}

	function detail_siswa(){
		$data = array('siswa' => $this->m_siswa->detail_siswa($_SESSION['id_pendaftaran']),
					 'list_jadwal' => $this->m_siswa->list_jadwal($_SESSION['id_pendaftaran'])
						);
		$this->load->view('pelajar/siswa/detail_siswa',$data);
	}

	function data_siswa(){
		$data = array('siswa' => $this->m_siswa->tampil_data_siswa());
		$this->load->view('pelajar/siswa/data_siswa',$data);
	}	
}