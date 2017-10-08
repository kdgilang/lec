<?php 


class kelas extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_kelas');
		$this->load->helper('url');
	}
	
	// function tambah(){
	// 	$this->load->view('kelas/input_kelas');
	// }	

	// function data_siswa(){
	// 	$data = array('siswa' => $this->m_siswa->tampil_data_siswa());
	// 	$this->load->view('siswa/data_siswa',$data);
	// }

	function data_kelas(){
		$data = array('kelas' => $this->m_kelas->tampil_data_kelas());
		$this->load->view('staf/kelas/data_kelas',$data);
	}

	function detail_kelas(){
		$data = array('kelas' => $this->m_kelas->lihat_detail_kelas());
		$this->load->view('staf/kelas/detail_kelas',$data);
	}

	// function tambah_kelas(){
	// 	$nim = $this->input->post('nim');
	// 	$nama = $this->input->post('nama');
	// 	$kode_materi = $this->input->post('kode_materi');
	// 	$nama_materi = $this->input->post('nama_materi');
	// 	$nama_kelas = $this->input->post('nama_kelas');

	// 	$data = array(
	// 		'nim' => $nim,
	// 		'nama' => $nama,
	// 		'kode_materi' => $kode_materi,
	// 		'nama_materi' => $nama_materi,
	// 		'nama_kelas' => $nama_kelas			
	// 		);
	// 	$this->m_kelas->input_data_kelas($data);
	// 	redirect('kelas/data_kelas');
	// }		

	// function rubah($id){
	// 	$data = array('kelas' => $this->m_kelas->tampil_detail_kelas($id),
	// 					'id' => $id);
	// 	$this->load->view('kelas/rubah_kelas',$data);
	// }

	// function update_kelas(){
	// 	$id_kelas = $this->input->post('id_kelas');
	// 	$nim = $this->input->post('nim');
	// 	$nama = $this->input->post('nama');
	// 	$kode_materi = $this->input->post('kode_materi');
	// 	$nama_materi = $this->input->post('nama_materi');
	// 	$nama_kelas = $this->input->post('nama_kelas');

	// 	$data = array(
	// 		'nim' => $nim,
	// 		'nama' => $nama,
	// 		'kode_materi' => $kode_materi,
	// 		'nama_materi' => $nama_materi,
	// 		'nama_kelas' => $nama_kelas			
	// 		);

	// 	$this->m_kelas->update_data($id_kelas,$data);		
	// 	redirect('kelas/data_kelas');
	// }

	// function hapus($id){
	// 	$where = array('id_kelas' => $id);
	// 	$this->m_kelas->hapus_data($where,'kelas');
	// 	redirect('kelas/data_kelas');
	// }
}