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
		$this->load->view('dashboard', $data);
	}
	function add() {
		$judul = $this->input->post('judul');
		$konten = $this->input->post('konten');	
		$tanggal = $this->input->post('tanggal');	
		$status = !empty($this->input->post('status')) ? $this->input->post('status') : "aktif";
		$operator = $this->session->id_user; 
		$data = array(
			'judul' => $judul,
			'konten' => $konten,
			'tanggal' => $tanggal,
			'status' => $status,
			'id_operator' => $operator
		);
		$this->m_sertifikat->add_sertifikat($data);
		redirect('sertifikat');
	}
	function edit() {
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$konten = $this->input->post('konten');	
		$tanggal = $this->input->post('tanggal');	
		$status = !empty($this->input->post('status')) ? $this->input->post('status') : "aktif";
		$operator = $this->session->id_user; 
		$data = array(
			'judul' => $judul,
			'konten' => $konten,
			'tanggal' => $tanggal,
			'status' => $status,
			'id_operator' => $operator
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