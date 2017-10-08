<?php 


class ujian extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_ujian');
		$this->load->helper('url');
	}		

	function data_ujian(){
		$data = array('ujian' => $this->m_ujian->tampil_data_ujian());
		$this->load->view('pelajar/ujian/data_ujian',$data);
	}		
}