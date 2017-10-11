<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __contruct() {
		$this->load->library('session');
		$this->load->model('m_users');  
	}
	function index() {
		$data = array('title'=> 'LEC Bali');
		if(!empty($this->session->id_user)) {
			if ($this->session->level == '1') {
				redirect(base_url()."dashboard/home");
			} else if ($this->session->level == '2') {
				redirect(base_url()."staf/dashboard/home");
			} else if ($this->session->level == '4') {
				redirect(base_url()."pelajar/dashboard/home");
			} else {
				redirect(base_url()."home?error=1");
			}		
		} else {
			$this->load->view('home', $data);
		}
	}
	function login() {
		$sess_data = null;
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$hasil = $this->m_users->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $val) {
				$sess_data['logged_in'] = 'Sudah Login';
				$sess_data['id_user'] = $val->id;
				$sess_data['username'] = $val->username;
				$sess_data['level'] = $val->level;
				$this->session->set_userdata($sess_data);
				if ($this->session->level == '1') {
					redirect(base_url()."dashboard/home");
				} elseif ($this->session->level == '2') {
					redirect(base_url()."staf/dashboard/home");
				} elseif ($this->session->level == '4') {
					redirect(base_url()."pelajar/dashboard/home");
				} else {
					redirect(base_url()."home?error=1".$val->user_level);
				}	
			}
		} else {
			redirect(base_url()."home?error=1". $hasil->num_rows());
		}
	}
	function register() {
	}
	function logout() {
		$sess_data = array('logged_in', 'id_user', 'username', 'level');
		$this->session->unset_userdata($sess_data);
		redirect(base_url());
	}
}
?>




