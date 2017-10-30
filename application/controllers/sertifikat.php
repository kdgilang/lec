<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sertifikat extends CI_Controller {
	var $targetlevel = array(
		'1' => 'General English',
		'2' => 'Conversation Class',
		'3' => 'English for Tourism',
		'4' => 'English for Law professional',
		'5' => 'TOEFL / IELTS Preparation',
		'6'	=> 'Company Traning'		
	);
	function __construct() {
		parent::__construct();
		if($this->session->level != 1 && $this->session->level != 2) {
			exit('you have no access.');
		}
		$this->load->model('m_sertifikat');
		$this->load->model('m_users');
		$this->load->library('PDFyo');
	}
	function index() {
		$data = array('sertifikat' => $this->m_sertifikat->get_sertifikat(), 'title' => 'Sertifikat');
		$data['slug'] = 'sertifikat';
		$data['targetlevel'] = $this->targetlevel;
		$data['content'] = 'sertifikat/lists';
		$this->load->view('dashboard',$data);
	}
	function detail($id) {
		$data = array('sertifikat' => $this->m_sertifikat->detail_sertifikat(array('id'=>$id)), 'title' => 'Detail Sertifikat');
		$data['id'] = $id;
		$data['slug'] = 'sertifikat';
		$data['targetlevel'] = $this->targetlevel;
		$data['content'] = 'sertifikat/detail';
		$this->load->view('dashboard', $data);
	}
	function form($id = "") {
		$data = array('sertifikat' => $this->m_sertifikat->detail_sertifikat(array('id'=>$id)), 'id' => $id);
		$data['title'] = 'Form Sertifikat';
		$data['slug'] = 'sertifikat';
		$data['targetlevel'] = $this->targetlevel;
		$data['content'] = 'sertifikat/form';
		$data['siswa'] = $this->m_users->get_users(array('level' => 4, 'status'=> 'aktif'));
		$data['pengajar'] = $this->m_users->get_users(array('level' => 3, 'status'=> 'aktif'));
		$this->load->view('dashboard', $data);
	}
	function add() {
		$status =  $this->input->post('status');
		$level =  $this->input->post('level');
		$tgl_cetak = $this->input->post('tgl_cetak');
		$tgl_terbit = $this->input->post('tgl_terbit');
		$tgl_ambil = $this->input->post('tgl_ambil');
		$siswa = $this->input->post('id_siswa');
		$pengajar = $this->input->post('id_pengajar');
		$operator = $this->session->id_user; 
		$data = array(
			'status' => $status,
			'level' => $level,
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
		$level =  $this->input->post('level');
		$tgl_cetak = $this->input->post('tgl_cetak');
		$tgl_terbit = $this->input->post('tgl_terbit');
		$tgl_ambil = $this->input->post('tgl_ambil');
		$siswa = $this->input->post('id_siswa');
		$pengajar = $this->input->post('id_pengajar');
		$operator = $this->session->id_user;
		$data = array(
			'status' => $status,
			'level' => $level,
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
	function download($id) {
		$sertifikat = $this->m_sertifikat->detail_sertifikat(array('id'=>$id));
		$tgl = empty($sertifikat['tgl_terbit']) ? "unknow" : $sertifikat['tgl_terbit'];
		$siswa = empty($sertifikat['id_siswa']) ? "unknow" : $sertifikat['id_siswa'];
		$pengajar = empty($sertifikat['id_pengajar']) ? "unknow" : $sertifikat['id_pengajar'];
		$siswa = $this->m_users->detail_users($siswa);
		$pengajar = $this->m_users->detail_users($pengajar);
		$level = empty($sertifikat['level']) ? "" : $sertifikat['level'];
		$level = $this->targetlevel[$level];
		$tgl = strtotime($tgl);
		$tgl = date('F j, Y', $tgl);
		$html = '<!DOCTYPE html>
			<html>
			<head>
			  <title>Sertifikat</title>
			  <style type="text/css">
			    @page { margin: 0px; }
			    body { 
			      color: #555;
			      margin: 0px; 
			      font-family: "Open Sans", sans-serif;
			      font-weight: bold;
			    }
			    .siswa {
			      font-weight: bold;
			      position: absolute;
				  top: 974px;
				  text-align: center;
				  font-size: 80px;
			      left: 960px;
			      text-transform: uppercase;
			      width: 1592px;
			    }
			    .tgl{
			      position: absolute;
			      font-weight: bold;
			      top: 1426px;
			      text-align: center;
			      font-size: 45px;
			      left: 1422px;
			      text-transform: uppercase;
			      width: 664px;
			    }
			    .pengajar {
			      position: absolute;
			      width: 877px;
			      top: 1760px;
			      font-size: 60px;
			      text-align: center;
			      left: 673px;
			      text-transform: uppercase;
			    }
			    .level {
			      position: absolute;
			      font-weight: bold;
			      top: 1319px;
			      text-align: center;
			      font-size: 57px;
			      left: 1422px;
			      text-transform: uppercase;
			      width: 664px;
			    }
			  </style>
			</head>
			<body>
				<img height="2480" width="3508" src="assets/images/sertifikat.jpg" alt="sertifikat">
				<div class="siswa">'.$siswa['nama'].'</div>
				<div class="tgl">'.$tgl.'</div>
				<div class="level">'.$level.'</div>
				<div class="pengajar">'.$pengajar['nama'].'</div>
			</body>
			</html>';
		$this->pdfyo->generate($html, 'filea', true, 'A4', "landscape");
	}
	function delete($id) {
		$where = array('id' => $id);
		$this->m_sertifikat->delete($where);
		redirect('sertifikat');
	}
}