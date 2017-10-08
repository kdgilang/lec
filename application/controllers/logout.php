
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {
	public function index() {
		$this->load->library('session');
		$sess_data = array('logged_in', 'id_user', 'username', 'level');
		$this->session->unset_userdata($sess_data);
		redirect(base_url());
	}
}

?>