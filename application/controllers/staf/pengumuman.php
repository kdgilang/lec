<?php 


class pengumuman extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_pengumuman');
		$this->load->helper('url');
	}

	function data_pengumuman(){
		$data = array('pengumuman' => $this->m_pengumuman->tampil_data_pengumuman());
		$this->load->view('staf/pengumuman/data_pengumuman',$data);
	}

	function tambah(){
		$this->load->view('staf/pengumuman/input_pengumuman');
	}

	function input_pengumuman(){
		$data = array('pengumuman' => $this->m_pengumuman->tampil_pengumuman());
		$this->load->view('staf/pengumuman/input_pengumuman',$data);
	}

	function tambah_pengumuman(){
		$this->load->library('session');

		$tanggal = $this->input->post('tanggal');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$status_pengumuman = $this->input->post('status_pengumuman');
		$id_user = $_SESSION['id'];		

		$data = array(
			'tanggal' => $tanggal,
			'judul' => $judul,
			'isi' => $isi,
			'status_pengumuman' => $status_pengumuman,
			'id_user' => $id_user			
			);
		$this->m_pengumuman->input_data_pengumuman($data);
		redirect('staf/pengumuman/input_pengumuman');
	}

	function rubah($id){
		$data = array('pengumuman' => $this->m_pengumuman->tampil_detail_pengumuman($id),
						'id' => $id);
		$this->load->view('staf/pengumuman/rubah_pengumuman',$data);
	}

	function update_pengumuman(){
		$id_pengumuman = $this->input->post('id_pengumuman');
		$tanggal = $this->input->post('tanggal');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$status_pengumuman = $this->input->post('status_pengumuman');

		$data = array(
			'judul' => $judul,
			'tanggal' => $tanggal,
			'isi' => $isi,
			'status_pengumuman' => $status_pengumuman			
			);

		$this->m_pengumuman->update_data($id_pengumuman,$data);		
		redirect('staf/pengumuman/data_pengumuman');
	}

	function hapus($id){
		$where = array('id_pengumuman' => $id);
		$this->m_pengumuman->hapus_data($where,'pengumuman');
		redirect('staf/pengumuman/data_pengumuman');
	}
}