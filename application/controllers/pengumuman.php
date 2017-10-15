<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengumuman extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_pengumuman');
		$this->load->model('m_users');
	}
	function index() {
		$data = array('pengumuman' => $this->m_pengumuman->get_pengumuman(), 'title' => 'Pengumuman');
		$data['slug'] = 'pengumuman';
		if($this->session->level == 4) {
			$data['content'] = 'pengumuman/content-block';
		} else {
			$data['content'] = 'pengumuman/lists';
		}
		$this->load->view('dashboard',$data);
	}
	function detail($id) {
		$data = array('pengumuman' => $this->m_pengumuman->detail_pengumuman(array('id'=>$id)), 'title' => 'Detail Pengumuman');
		$data['id'] = $id;
		$data['slug'] = 'pengumuman';
		$data['content'] = 'pengumuman/detail';
		$this->load->view('dashboard', $data);
	}
	function form($id = "") {
		if($this->session->level != 4) {
			$data = array('pengumuman' => $this->m_pengumuman->detail_pengumuman(array('id'=>$id)), 'id' => $id);
			$data['title'] = 'Form Pengumuman';
			$data['slug'] = 'pengumuman';
			$data['content'] = 'pengumuman/form';
			$this->load->view('dashboard', $data);
		}
	}
	function add() {
		if($this->session->level != 4) {
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
			$this->m_pengumuman->add_pengumuman($data);
			redirect('pengumuman');
		}
	}
	function edit() {
		if($this->session->level != 4) {
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
			$this->m_pengumuman->update_pengumuman($id, $data);
			redirect('pengumuman');
		}
	}
	function delete($id) {
		if($this->session->level != 4) {
			$where = array('id' => $id);
			$this->m_pengumuman->delete($where);
			redirect('pengumuman');
		}
	}
}