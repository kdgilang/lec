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
		$res = array('message'=>null, 'url' => '', 'class'=> 'alert-danger');
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
		$result = $this->m_users->is_login($data);
		if ($result->num_rows() == 1) {
			foreach ($result->result() as $val) {
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
		$res = array('message'=>null, 'class'=> 'alert-danger');
		$username = $this->input->post('username', TRUE);	
		$nama = $this->input->post('nama', TRUE);	
		$email = $this->input->post('email', TRUE);	
		$alamat = $this->input->post('alamat');
		$tgl_lahir = $this->input->post('tgl_lahir', TRUE);
		$no_tlp = $this->input->post('telpon', TRUE);
		$password = $this->input->post('password', TRUE);
		$status = "tidak aktif";
		$level = 4;
		$data = array(
			'username' => $username,
			'nama' => $nama,
			'email' => $email,
			'alamat' => $alamat,
			'level' => $level,
			'tgl_lahir' => $tgl_lahir,
			'telpon' => $no_tlp,
			'status' => $status,
			'password' => md5($password)
		);
		$user = $this->m_users->add_users($data, null, null, true);
		if($user) {
			$res['message'] = 'Berhasil mendaftar, Silakan melakukan aktivasi akun anda pada kantor LEC.';
			$res['class'] = 'alert-success';
		} else {
			$error = $this->db->error();
			$res['message'] = "Gagal mendaftar, \n";
			foreach ($error as $val) {
				$res['message'] .= $error['message'];
			}
		}
		die(json_encode($res));
	}
	function logout() {
		$sess_data = array('logged_in', 'id_user', 'username', 'level');
		$this->session->unset_userdata($sess_data);
		redirect(base_url());
	}
}
?>




