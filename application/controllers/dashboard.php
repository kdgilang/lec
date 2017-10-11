<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index() {
		$data = array('title' => 'Dashboard');
		$data['content'] = null;
		$this->load->view('dashboard', $data);
	}
}