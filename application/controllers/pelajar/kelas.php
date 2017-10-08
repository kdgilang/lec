<?php 


class kelas extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_kelas');
		$this->load->helper('url');
	}

	function data_kelas(){
		$data = array('kelas' => $this->m_kelas->tampil_data_kelas());
		$this->load->view('pelajar/kelas/data_kelas',$data);
	}

	function detail_kelas(){
		$data = array('kelas' => $this->m_kelas->lihat_detail_kelas());
		$this->load->view('pelajar/kelas/detail_kelas',$data);
	}	
}