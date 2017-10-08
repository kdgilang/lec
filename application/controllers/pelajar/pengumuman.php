<?php 


class pengumuman extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_pengumuman');
		$this->load->helper('url');
	}

	function data_pengumuman(){
		$data = array('pengumuman' => $this->m_pengumuman->tampil_data_pengumuman());
		$this->load->view('pelajar/pengumuman/data_pengumuman',$data);
	}	

}