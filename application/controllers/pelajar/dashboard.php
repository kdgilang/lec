<?php 

class dashboard extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function home(){
		$this->load->view('pelajar/home');
	}
}