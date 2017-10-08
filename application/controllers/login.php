
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index() {
		$this->load->library('session');
		if(!empty($this->session->id_user)) {
			if ($this->session->level == '1') {
				redirect(base_url()."dashboard/home");
			} else if ($this->session->level == '2') {
				redirect(base_url()."staf/dashboard/home");
			} else if ($this->session->level == '4') {
				redirect(base_url()."pelajar/dashboard/home");
			} else {
				redirect(base_url()."login?error=1".$this->session->level);
			}		
		} else {
			$this->load->view('login');
		}
	}
	public function check() {
		$sess_data = null;
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('m_users'); // load model_user
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
					redirect(base_url()."login?error=1".$val->user_level);
				}	
			}
		} else {
			redirect(base_url()."login?error=1". $hasil->num_rows());
		}
	}
}
?>




