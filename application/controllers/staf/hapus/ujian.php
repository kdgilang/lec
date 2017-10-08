<?php 


class ujian extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_ujian');
		$this->load->helper('url');
	}

	function data_ujian (){
	    $this->load->model('m_ujian'); //load model
	    $data['hasilUjian'] = $this->m_ujian->get_hasil_ujian(); //membuat data dari hasil transaksi masuk ke $data
	    $this->load->view('staf/ujian/data_ujian',$data); //load tampilan content + mengirimkan $data
	}

	function tambah_nilai($id){
		$data = array('siswa' => $this->m_ujian->detail_siswa($id),
					 'list_ujian' => $this->m_ujian->list_ujian($id)
						);
		$this->load->view('staf/ujian/input_ujian',$data);
	}

    function cari(){
        $this->load->view('staf/ujian/input_ujian_cari');
    }

    function hasil(){
        $data2['cari'] = $this->m_ujian->cariNim();
        $this->load->view('staf/ujian/input_ujian_hasil', $data2);
    }

	function tambah(){
		$this->load->view('staf/ujian/input_ujian');
	}

	function tambah_ujian(){
		$id_pendaftaran = $this->input->post('id_pendaftaran');
		// $nim = $this->input->post('nim');
		// $nama = $this->input->post('nama');
		// $id_ujian = $this->input->post('id_ujian');
		$kode_materi = $this->input->post('kode_materi');
		$nama_materi = $this->input->post('nama_materi');
		$nilai = $this->input->post('nilai');
		$total = $this->input->post('total');

		$data = array(	
			'id_pendaftaran' => $id_pendaftaran,
			'kode_materi' => $kode_materi,
			'nama_materi' => $nama_materi,
			'nilai' => $nilai,
			'total' => $total			
			);
		$this->m_ujian->input_data_ujian ($data);
		redirect('staf/ujian/data_ujian');
	}

	// function update_pengumuman(){
	// 	$id_pengumuman = $this->input->post('id_pengumuman');
	// 	$judul = $this->input->post('judul');
	// 	$isi = $this->input->post('isi');

	// 	$data = array(
	// 		'judul' => $judul,
	// 		'isi' => $isi			
	// 		);

	// 	$this->m_pengumuman->update_data($id_pengumuman,$data);		
	// 	redirect('staf/pengumuman/data_pengumuman');
	// }
	
	function detail_ujian($id){
		$data = array('ujian' => $this->m_ujian->lihat_detail_ujian($id));
		$this->load->view('staf/ujian/detail_ujian',$data);
	}
	
}