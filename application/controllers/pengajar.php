<?php 
class pengajar extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_users');
	}
	function index() {
		$data = array('users' => $this->m_users->lists_users(array('level' => 4)), 'title' => 'Pengajar');
		$data['slug'] = 'pengajar';
		$this->load->view('users/lists',$data);
	}	
	function detail($id) {
		$data = array('user' => $this->m_users->detail_users($id), 'title' => 'Detail Operator');
		$data['id'] = $id;
		$data['slug'] = 'pengajar';
		$this->load->view('users/detail', $data);
	}
	function form($id = "") {
		$data = array('user' => $this->m_users->detail_users($id), 'id' => $id);
		$data['title'] = 'Form Pengajar';
		$data['slug'] = 'pengajar';
		$this->load->view('users/form', $data);
	}
	function add() {
		$kp = $this->input->post('kode_pengajar');
		$username = $this->input->post('username');	
		$nama = $this->input->post('nama');	
		$email = $this->input->post('email');	
		$alamat = $this->input->post('alamat');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$no_tlp = $this->input->post('telpon');
		$status = !empty($this->input->post('status')) ? $this->input->post('status') : "aktif";
		$level = 3;
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
		$this->m_users->add_pengajar($data, $kp);
		redirect('operator');
	}
	function edit() {
		$id = $this->input->post('id');
		$nik = $this->input->post('kode_pengajar');
		$username = $this->input->post('username');	
		$nama = $this->input->post('nama');	
		$email = $this->input->post('email');	
		$alamat = $this->input->post('alamat');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$no_tlp = $this->input->post('telpon');
		$status = !empty($this->input->post('status')) ? $this->input->post('status') : "aktif";
		$level = 3;
		$password = $this->input->post('password');
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
		$this->m_users->update_users($id, $data);		
		redirect('pengajar');
	}
	function delete($id) {
		$where = array('id_operator' => $id);
		$this->m_users->delete($where);
		redirect('pengajar');
	}
}