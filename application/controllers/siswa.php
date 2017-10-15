<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_users');
		$this->load->model('m_kelas');
	}
	function index() {
		if($this->session->level != 4) {
			$data = array('users' => $this->m_users->get_users(array('level'=>4)), 'title' => 'Siswa');
			$data['slug'] = 'siswa';
			$data['content'] = 'users/lists';
			$this->load->view('dashboard',$data);
		}
	}	
	function detail($id) {
		$data = array(
			'user' => $this->m_users->detail_users($id), 
			'title' => 'Detail Siswa',
			'kelas' => $this->m_kelas->get_kelas(array("id_siswa"=>$id))
		);
		$data['id'] = $id;
		$data['slug'] = 'siswa';
		$data['content'] = 'users/detail';
		$this->load->view('dashboard', $data);
	}
	function form($id = "") {
		if($this->session->level != 4) {
			$data = array('user' => $this->m_users->detail_users($id), 'id' => $id);
			$data['title'] = 'Form Siswa';
			$data['slug'] = 'siswa';
			$data['content'] = 'users/form';
			$this->load->view('dashboard', $data);
		}
	}
	function add() {
		if($this->session->level != 4) {
			$ks = $this->input->post('kode_siswa');
			$username = $this->input->post('username');	
			$nama = $this->input->post('nama');	
			$email = $this->input->post('email');	
			$alamat = $this->input->post('alamat');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$no_tlp = $this->input->post('telpon');
			$status = !empty($this->input->post('status')) ? $this->input->post('status') : "aktif";
			$level = 4;
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
			$this->m_users->add_users($data,'kode_siswa', $ks);
			redirect('siswa');
		}
	}
	function edit() {
		if($this->session->level != 4) {
			$id = $this->input->post('id');
			$ks = $this->input->post('kode_siswa');
			$username = $this->input->post('username');	
			$nama = $this->input->post('nama');	
			$email = $this->input->post('email');	
			$alamat = $this->input->post('alamat');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$no_tlp = $this->input->post('telpon');
			$password = $this->input->post('password');
			$status = !empty($this->input->post('status')) ? $this->input->post('status') : "aktif";
			$level = 4;
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
				'foto' => $foto	
			);
			if(!empty($password)) {
				$data['password'] = md5($password);
			}
			$meta = array('nilai_meta' => $ks);
			$wmeta = array('nama_meta' => 'kode_siswa', 'id_user' => $id);
			$this->m_users->update_users($id, $data, $wmeta, $meta);		
			redirect('siswa');
		}
	}
	function delete($id) {
		if($this->session->level != 4) {
			$where = array('id' => $id);
			$this->m_users->delete($where);
			redirect('siswa');
		}
	}
}