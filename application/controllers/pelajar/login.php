<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('pelajar/m_login');
	}

	function index(){
		$this->load->view('pelajar/v_login');
	}

	function aksi_login(){
		$id_pendaftaran = $this->input->post('id_pendaftaran');
		$password = $this->input->post('password');
		// $password = md5($password);
		echo $cek = $this->m_login->cek_login($id_pendaftaran,$password);
		if($cek == "success"){
			redirect(base_url()."pelajar/dashboard/home");
		}else{
			redirect(base_url()."pelajar/login?error=1");
		}
		
	}

	function logout(){
		session_destroy();
		redirect(base_url('pelajar/login'));
	}
}