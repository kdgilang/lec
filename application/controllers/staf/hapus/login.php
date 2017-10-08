<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('staf/m_login');
	}

	function index(){
		$this->load->view('staf/v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// $password = md5($password);
		echo $cek = $this->m_login->cek_login($username,$password);
		if($cek == "success"){
			redirect(base_url()."staf/dashboard/home");
		}else{
			redirect(base_url()."staf/login?error=1");
		}
		
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('staf/login'));
	}
}