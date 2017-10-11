<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_users');  
	}
	function index() {
		$data = array('title'=> 'LEC Bali');
		$this->load->view('home', $data);
	}
	function login() {
		$sess_data = null;
		$res = array('message'=>null, 'url' => null, 'class'=> 'alert-danger');
		$password = $this->input->post('password', TRUE);
		$username = $this->input->post('username', TRUE);
		if(empty($username) || empty($password)) {
			$res['message'] = 'Username atau Password tidak boleh kosong.';
			die(json_encode($res)); return;
		}
		$data = array(
			'username' => $username,
			'password' => md5($password)
		);
		$hasil = $this->m_users->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $val) {
				if($val->status == 'aktif') {
					$sess_data['id_user'] = $val->id;
					$sess_data['username'] = $val->username;
					$sess_data['level'] = $val->level;
					if ($val->level == '1') {
						$this->session->set_userdata($sess_data);
						$res['url'] = base_url()."dashboard/";
						$res['message'] = 'Berhasil Login Sebagai Admin ('.$val->nama.')';
						$res['class'] = 'alert-success';
					} elseif ($val->level == '2') {
						$this->session->set_userdata($sess_data);
						$res['url'] = base_url()."dashboard/";
						$res['message'] = 'Berhasil Login Sebagai Operator ('.$val->nama.')';
						$res['class'] = 'alert-success';
					} elseif ($val->level == '4') {
						$this->session->set_userdata($sess_data);
						$res['url'] = base_url()."dashboard/";
						$res['message'] = 'Berhasil Login Sebagai Siswa ('.$val->nama.')';
						$res['class'] = 'alert-success';
					} else {
						$res['message'] = "Tidak Dikenal";
					}	
				} else {
					$res['message'] = "Akun anda belum aktif, silakan melakukan aktivasi pada kantor LEC.";
					$res['class'] = 'alert-warning';
				}
			}
		} else {
			$res['message'] = "Username atau Password salah.";
		}
		die(json_encode($res));
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




