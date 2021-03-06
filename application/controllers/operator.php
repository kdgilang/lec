<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operator extends CI_Controller{
	function __construct() {
		parent::__construct();		
		$this->load->model('m_users');
		if($this->session->level != 1) {
			exit('you have no access.');
		}
	}
	function index() {
		if($this->session->level == 1) {
			$data = array('users' => $this->m_users->get_users(array('level'=>2)), 'title' => 'Operator');
			$data['slug'] = 'operator';
			$data['content'] = 'users/lists';
			$this->load->view('dashboard',$data);
		} else {
			exit('you have no access.');
		}
	}	
	function detail($id) {
		if($this->session->level == 1) {
			$data = array(
				'user' => $this->m_users->detail_users($id), 
				'title' => 'Detail Operator'
			);
			$data['id'] = $id;
			$data['slug'] = 'operator';
			$data['content'] = 'users/detail';
			$this->load->view('dashboard', $data);
		} else {
			exit('you have no access.');
		}
	}
	function form($id = "") {
		if($this->session->level == 1) {
			$data = array('user' => $this->m_users->detail_users($id), 'id' => $id);
			$data['title'] = 'Form Operator';
			$data['slug'] = 'operator';
			$data['content'] = 'users/form';
			$this->load->view('dashboard', $data);
		} else {
			exit('you have no access.');
		}
	}
	function add() {
		if($this->session->level == 1) {
			$nik = $this->input->post('nik');
			$username = $this->input->post('username');	
			$nama = $this->input->post('nama');	
			$email = $this->input->post('email');	
			$alamat = $this->input->post('alamat');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$no_tlp = $this->input->post('telpon');
			$status = !empty($this->input->post('status')) ? $this->input->post('status') : "aktif";
			$level = 2;
			$password = $this->input->post('password');	
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			if($this->upload->do_upload('foto')) {
				$foto = base_url().'uploads/'.$this->upload->data('file_name');
			} else {
				$foto = base_url().'assets/images/no-profile-image.png';
			}
			$data = array(
				'username' => $username,
				'nama' => $nama,
				'email' => $email,
				'alamat' => $alamat,
				'level' => $level,
				'tgl_lahir' => $tgl_lahir,
				'telpon' => $no_tlp,
				'status' => $status,
				'password' => md5($password),
				'foto' => $foto,	
			);
			$this->m_users->add_users($data,'nik', $nik);
			redirect('operator');
		} else {
			exit('you have no access.');
		}
	}
	function edit() {
		if($this->session->level == 1) {
			$id = $this->input->post('id');
			$nik = $this->input->post('nik');
			$username = $this->input->post('username');	
			$nama = $this->input->post('nama');	
			$email = $this->input->post('email');	
			$alamat = $this->input->post('alamat');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$no_tlp = $this->input->post('telpon');
			$status = !empty($this->input->post('status')) ? $this->input->post('status') : "aktif";
			$level = 2;
			$password = $this->input->post('password');
			$foto = $this->input->post('old_foto');	 
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			if($this->upload->do_upload('foto')) {
				$foto = base_url().'uploads/'.$this->upload->data('file_name');
			}
			$data = array(
				'username' => $username,
				'nama' => $nama,
				'email' => $email,
				'alamat' => $alamat,
				'level' => $level,
				'tgl_lahir' => $tgl_lahir,
				'telpon' => $no_tlp,
				'status' => $status,
				'foto' => $foto,	
			);
			if(!empty($password)) {
				$data['password'] = md5($password);
			}
			$meta = array('nilai_meta' => $nik);
			$wmeta = array('nama_meta' => 'nik', 'id_user' => $id);
			$this->m_users->update_users($id, $data, $wmeta, $meta);
			redirect('operator');
		} else {
			exit('you have no access.');
		}	
	}
	function delete($id) {
		if($this->session->level == 1) {
			$where = array('id' => $id);
			$this->m_users->delete($where);
			redirect('operator');
		} else {
			exit('you have no access.');
		}
	}
}