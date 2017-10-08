<?php 


class absensi extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_absensi');
		$this->load->helper('url');
	}		

	function data_absensi(){
		$data = array('absensi' => $this->m_absensi->tampil_data_absensi());
		$this->load->view('absensi/data_absensi',$data);
	}

	function tambah(){
		$this->load->view('absensi/input_absensi');
	}		

	function tambah_absensi(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$pert1 = $this->input->post('pert1');
		$pert2 = $this->input->post('pert2');
		$pert3 = $this->input->post('pert3');
		$pert4 = $this->input->post('pert4');
		$pert5 = $this->input->post('pert5');
		$pert6 = $this->input->post('pert6');		

		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'pert1' => $pert1,
			'pert2' => $pert2,
			'pert3' => $pert3,
			'pert4' => $pert4,
			'pert5' => $pert5,
			'pert6' => $pert6
			);
		$this->m_absensi->input_data_absensi($data);
		redirect('absensi/data_absensi');
	}

	function rubah($id){
		$data = array('absensi' => $this->m_absensi->tampil_detail_absensi($id),
						'id' => $id);
		$this->load->view('absensi/rubah_absensi',$data);
	}

	function update_absensi(){
		$id_absensi = $this->input->post('id_absensi');
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$pert1 = $this->input->post('pert1');
		$pert2 = $this->input->post('pert2');
		$pert3 = $this->input->post('pert3');
		$pert4 = $this->input->post('pert4');
		$pert5 = $this->input->post('pert5');
		$pert6 = $this->input->post('pert6');

		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'pert1' => $pert1,
			'pert2' => $pert2,
			'pert3' => $pert3,
			'pert4' => $pert4,
			'pert5' => $pert5,
			'pert6' => $pert6
			);

		$this->m_absensi->update_data($id_absensi,$data);		
		redirect('absensi/data_absensi');
	}

	function hapus($id){
		$where = array('id_absensi' => $id);
		$this->m_absensi->hapus_data($where,'absensi');
		redirect('absensi/data_absensi');
	}
}