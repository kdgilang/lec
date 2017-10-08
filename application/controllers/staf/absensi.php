<?php 


class absensi extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_absensi');
		$this->load->helper('url');
	}	

	function data_group (){
	    $this->load->model('m_absensi'); //load model
	    $data['dataGroup'] = $this->m_absensi->get_data_group(); //membuat data dari hasil transaksi masuk ke $data
	    $this->load->view('staf/absensi/data_group',$data); //load tampilan content + mengirimkan $data
	}

	function cek_absensi($id_kelas){
		$data = array(
					'kelas' => $this->m_absensi->tampil_detail_absensi($id_kelas),
					'pengajar' => $this->m_absensi->lihat_detail_pengajar($id_kelas),
					'id_kelas' => $id_kelas
				);
		$this->load->view('staf/absensi/data_absensi_group',$data);
	}

	function data_absensi_private(){
		$data = array('siswa' => $this->m_absensi->tampil_data_siswa());
		$this->load->view('staf/absensi/data_absensi_private',$data);
	}


	function rubah_group(){
		$data = array('siswa' => $this->m_absensi->tampil_data_group());
		$this->load->view('staf/absensi/rubah_absensi_group',$data);
	}

	function rubah_private(){
		$data = array('siswa' => $this->m_absensi->tampil_data_group());
		$this->load->view('staf/absensi/rubah_absensi_private',$data);
	}

	function data_absensi_group (){
	    $this->load->model('m_absensi'); //load model
	    $data['dataAbsensi'] = $this->m_absensi->get_data_absensi(); //membuat data dari hasil transaksi masuk ke $data
	    $this->load->view('staf/absensi/data_absensi_group',$data); //load tampilan content + mengirimkan $data
	}	

	function ganti_pertemuan($id_group){
		$pertemuan = $_POST['pertemuan'];
		redirect(base_url()."staf/absensi/tambah_group/".$id_group."/".$pertemuan);
	}
	function tambah_group($id_kelas, $pertemuan){
		$this->load->model('m_absensi'); //load model
	    $data['dataAbsensi'] = $this->m_absensi->get_data_absensi($id_kelas, $pertemuan);
	    $data['id_kelas'] = $id_kelas;
	    $data['pertemuan'] = $pertemuan; //membuat data dari hasil transaksi masuk ke $data
	    $this->load->view('staf/absensi/input_absensi_group',$data); //load tampilan content + mengirimkan $data
		// $this->load->view('staf/absensi/input_absensi');
	}	

	function tambah_private(){
		$this->load->model('m_absensi'); //load model
	    $data['dataAbsensi'] = $this->m_absensi->get_data_absensi(); //membuat data dari hasil transaksi masuk ke $data
	    $this->load->view('staf/absensi/input_absensi_private',$data); //load tampilan content + mengirimkan $data
		// $this->load->view('staf/absensi/input_absensi');
	}		

	function tambah_absensi(){
		foreach ($_POST['id_anggota'] as $key => $value) {
			$id_anggota = $_POST['id_anggota'][$key];
			$id_pertemuan = "pert".$_POST['pertemuan'][$key];
			// $id_kelas = $_POST['id_kelas'][$key];
			$data[$id_pertemuan] = $_POST['status'][$key];	
			$this->m_absensi->input_data_absensi($id_anggota,$id_pertemuan,$data);		
		}
		
		redirect(base_url()."staf/absensi/tambah_group/".$_POST['id_kelas'][0]."/".$_POST['pertemuan'][0]);
	}

	// function update_absensi(){
	// 	$id_absensi = $this->input->post('id_absensi');
	// 	$nim = $this->input->post('nim');
	// 	$nama = $this->input->post('nama');
	// 	$pert1 = $this->input->post('pert1');
	// 	$pert2 = $this->input->post('pert2');
	// 	$pert3 = $this->input->post('pert3');
	// 	$pert4 = $this->input->post('pert4');
	// 	$pert5 = $this->input->post('pert5');
	// 	$pert6 = $this->input->post('pert6');

	// 	$data = array(
	// 		'nim' => $nim,
	// 		'nama' => $nama,
	// 		'pert1' => $pert1,
	// 		'pert2' => $pert2,
	// 		'pert3' => $pert3,
	// 		'pert4' => $pert4,
	// 		'pert5' => $pert5,
	// 		'pert6' => $pert6
	// 		);

	// 	$this->m_absensi->update_data($id_absensi,$data);		
	// 	redirect('staf/absensi/data_absensi');
	// }

	function hapus($id){
		$where = array('id_absensi' => $id);
		$this->m_absensi->hapus_data($where,'absensi');
		redirect('staf/absensi/data_absensi');
	}
}