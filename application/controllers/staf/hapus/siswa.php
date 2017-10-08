<?php 


class siswa extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_siswa');
		$this->load->helper('url');
	}

	function data_siswa(){
		$data = array('siswa' => $this->m_siswa->tampil_data_siswa());
		$this->load->view('staf/siswa/data_siswa',$data);
	}		

	function detail_siswa($id){
		$data = array('siswa' => $this->m_siswa->lihat_detail_siswa($id));
		$this->load->view('staf/siswa/detail_siswa',$data);
	}

	function hapus($id){
		$where = array('id_pendaftaran' => $id);
		$this->m_siswa->hapus_data($where,'daftar');
		redirect('staf/siswa/data_siswa');
	}

	function tambah(){
		$this->load->view('staf/siswa/input_siswa');
	}

	function tambah_siswa_offline(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telpon = $this->input->post('telpon');
		$email = $this->input->post('email');
		$usia = $this->input->post('usia');
		$pendidikan_akhir = $this->input->post('pendidikan_akhir');
		$domisili = $this->input->post('domisili');
		$program = $this->input->post('program');		

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'telpon' => $telpon,
			'email' => $email,
			'usia' => $usia,
			'pendidikan_akhir' => $pendidikan_akhir,
			'domisili' => $domisili,
			'program' => $program			
			);
		$this->m_siswa->input_data_siswa($data);
		redirect('staf/siswa/data_siswa');
	}		

	function rubah($id){
		$data = array('daftar' => $this->m_siswa->tampil_detail_siswa($id),
						'id' => $id);
		$this->load->view('staf/siswa/rubah_siswa',$data);
	}	

	function update_siswa(){
		$id_pendaftaran = $this->input->post('id_pendaftaran');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telpon = $this->input->post('telpon');
		$email = $this->input->post('email');
		$usia = $this->input->post('usia');
		$pendidikan_akhir = $this->input->post('pendidikan_akhir');
		$domisili = $this->input->post('domisili');
		$program = $this->input->post('program');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'telpon' => $telpon,
			'email' => $email,
			'usia' => $usia,
			'pendidikan_akhir' => $pendidikan_akhir,
			'domisili' => $domisili,
			'program' => $program
			);

		$this->m_siswa->update_data($id_pendaftaran,$data);		
		redirect('staf/siswa/data_siswa');
	}
}