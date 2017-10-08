<?php 


class pengajar extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_pengajar');
		$this->load->helper('url');
	}		

	function data_pengajar(){
		$data = array('pengajar' => $this->m_pengajar->tampil_data_pengajar());
		$this->load->view('staf/pengajar/data_pengajar',$data);
	}

	function detail_pengajar($id_pengajar){
		$data = array(
					'pengajar' => $this->m_pengajar->lihat_detail_pengajar($id_pengajar),
					'list_jadwal' => $this->m_pengajar->list_jadwal($id_pengajar)	
				);
		$this->load->view('staf/pengajar/detail_pengajar',$data);
	}

	// function detail_siswa($id){
	// 	$data = array('siswa' => $this->m_siswa->detail_siswa($id),
	// 				 'list_jadwal' => $this->m_siswa->list_jadwal($id)
	// 					);
	// 	$this->load->view('staf/siswa/detail_siswa',$data);
	// }

	// function tambah(){
	// 	$this->load->view('pengajar/input_pengajar');
	// }	

	// function tambah_pengajar(){
	// 	$nip = $this->input->post('nip');
	// 	$nama = $this->input->post('nama');
	// 	$alamat = $this->input->post('alamat');
	// 	$telpon = $this->input->post('telpon');
	// 	$email = $this->input->post('email');

	// 	$data = array(
	// 		'nip' => $nip,
	// 		'nama' => $nama,
	// 		'alamat' => $alamat,
	// 		'telpon' => $telpon,
	// 		'email' => $email						
	// 		);
	// 	$this->m_pengajar->input_data_pengajar($data);
	// 	redirect('pengajar/data_pengajar');
	// }	

	// function rubah($id){
	// 	$data = array('pengajar' => $this->m_pengajar->tampil_detail_pengajar($id),
	// 					'id' => $id);
	// 	$this->load->view('pengajar/rubah_pengajar',$data);
	// }

	// function update_pengajar(){
	// 	$id_pengajar = $this->input->post('id_pengajar');
	// 	$nip = $this->input->post('nip');
	// 	$nama = $this->input->post('nama');
	// 	$alamat = $this->input->post('alamat');
	// 	$telpon = $this->input->post('telpon');
	// 	$email = $this->input->post('email');

	// 	$data = array(
	// 		'nip' => $nip,
	// 		'nama' => $nama,
	// 		'alamat' => $alamat,
	// 		'telpon' => $telpon,
	// 		'email' => $email
	// 		);

	// 	$this->m_pengajar->update_data($id_pengajar,$data);		
	// 	redirect('pengajar/data_pengajar');
	// }

	// function hapus($id){
	// 	$where = array('id_pengajar' => $id);
	// 	$this->m_pengajar->hapus_data($where,'pengajar');
	// 	redirect('pengajar/data_pengajar');
	// }	

			
}