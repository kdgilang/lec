<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Siswa extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_users');
	}
	function index() {
		$data = array('users' => $this->m_users->lists_users(array('level'=>4)), 'title' => 'Siswa');
		$data['slug'] = 'siswa';
		$data['content'] = 'users/lists';
		$this->load->view('dashboard',$data);
	}	
	function detail($id) {
		$data = array('user' => $this->m_users->detail_users($id), 'title' => 'Detail Siswa');
		$data['id'] = $id;
		$data['slug'] = 'siswa';
		$data['content'] = 'users/detail';
		$this->load->view('dashboard', $data);
	}
	function form($id = "") {
		$data = array('user' => $this->m_users->detail_users($id), 'id' => $id);
		$data['title'] = 'Form Siswa';
		$data['slug'] = 'siswa';
		$data['content'] = 'users/form';
		$this->load->view('dashboard', $data);
	}
	function add() {
		$ks = $this->input->post('kode_siswa');
		$username = $this->input->post('username');	
		$nama = $this->input->post('nama');	
		$email = $this->input->post('email');	
		$alamat = $this->input->post('alamat');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$no_tlp = $this->input->post('telpon');
		$status = !empty($this->input->post('status')) ? $this->input->post('status') : "aktif";
		$level = 4;
		$foto = null;
		$password = $this->input->post('password');	
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
			'password' => md5($password),
			'foto' => $foto,	
		);
		$this->m_users->add_users($data,'kode_siswa', $ks);
		redirect('siswa');
	}
	function edit() {
		$id = $this->input->post('id');
		$username = $this->input->post('username');	
		$nama = $this->input->post('nama');	
		$email = $this->input->post('email');	
		$alamat = $this->input->post('alamat');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$no_tlp = $this->input->post('telpon');
		$status = !empty($this->input->post('status')) ? $this->input->post('status') : "aktif";
		$level = 4;
		$foto = $this->input->post('foto');	
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
			$data['password'] = $password;
		}
		$this->m_users->update_users($id, $data);		
		redirect('siswa');
	}
	function delete($id){
		$where = array('id' => $id);
		$this->m_users->delete($where,'user');
		redirect('siswa');
	}
}