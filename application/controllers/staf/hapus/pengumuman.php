<?php 


class pengumuman extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_pengumuman');
		$this->load->helper('url');
	}

	function input_pengumuman(){
		$data = array('pengumuman' => $this->m_pengumuman->tampil_pengumuman());
		$this->load->view('staf/pengumuman/input_pengumuman',$data);
	}

	function tambah_pengumuman(){
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');

		$data = array(
			'judul' => $judul,
			'isi' => $isi			
			);
		$this->m_pengumuman->input_data_pengumuman($data);
		redirect('pengumuman/input_pengumuman');
	}
}