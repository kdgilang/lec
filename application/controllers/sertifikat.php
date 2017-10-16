<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sertifikat extends CI_Controller {
	function __construct() {
		parent::__construct();
		if($this->session->level != 1 && $this->session->level != 2) {
			exit('you have no access.');
		}
		$this->load->model('m_sertifikat');
		$this->load->model('m_users');
	}
	function index() {
		$data = array('sertifikat' => $this->m_sertifikat->get_sertifikat(), 'title' => 'Sertifikat');
		$data['slug'] = 'sertifikat';
		$data['content'] = 'sertifikat/lists';
		$this->load->view('dashboard',$data);
	}
	function detail($id) {
		$data = array('sertifikat' => $this->m_sertifikat->detail_sertifikat(array('id'=>$id)), 'title' => 'Detail Sertifikat');
		$data['id'] = $id;
		$data['slug'] = 'sertifikat';
		$data['content'] = 'sertifikat/detail';
		$this->load->view('dashboard', $data);
	}
	function form($id = "") {
		$data = array('sertifikat' => $this->m_sertifikat->detail_sertifikat(array('id'=>$id)), 'id' => $id);
		$data['title'] = 'Form Sertifikat';
		$data['slug'] = 'sertifikat';
		$data['content'] = 'sertifikat/form';
		$data['siswa'] = $this->m_users->get_users(array('level' => 4, 'status'=> 'aktif'));
		$data['pengajar'] = $this->m_users->get_users(array('level' => 3, 'status'=> 'aktif'));
		$this->load->view('dashboard', $data);
	}
	function add() {
		$status =  $this->input->post('status');
		$tgl_cetak = $this->input->post('tgl_cetak');
		$tgl_terbit = $this->input->post('tgl_terbit');
		$tgl_ambil = $this->input->post('tgl_ambil');
		$siswa = $this->input->post('id_siswa');
		$pengajar = $this->input->post('id_pengajar');
		$operator = $this->session->id_user; 
		$data = array(
			'status' => $status,
			'tgl_cetak' => $tgl_cetak,
			'tgl_terbit' => $tgl_terbit,
			'tgl_ambil' => $tgl_ambil,
			'id_operator' => $operator,
			'id_siswa' => $siswa,
			'id_pengajar' => $pengajar
		);
		$this->m_sertifikat->add_sertifikat($data);
		redirect('sertifikat');
	}
	function edit() {
		$id = $this->input->post('id');
		$status =  $this->input->post('status');
		$tgl_cetak = $this->input->post('tgl_cetak');
		$tgl_terbit = $this->input->post('tgl_terbit');
		$tgl_ambil = $this->input->post('tgl_ambil');
		$siswa = $this->input->post('id_siswa');
		$pengajar = $this->input->post('id_pengajar');
		$operator = $this->session->id_user; 
		$data = array(
			'status' => $status,
			'tgl_cetak' => $tgl_cetak,
			'tgl_terbit' => $tgl_terbit,
			'tgl_ambil' => $tgl_ambil,
			'id_operator' => $operator,
			'id_siswa' => $siswa,
			'id_pengajar' => $pengajar
		);
		$this->m_sertifikat->update_sertifikat($id, $data);
		redirect('sertifikat');
	}
	function delete($id) {
		$where = array('id' => $id);
		$this->m_sertifikat->delete($where);
		redirect('sertifikat');
	}
}