<?php 

class daftar extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('daftar/input_pendaftaran');
	}	

	// function data_siswa(){
	// 	$this->load->view('siswa/data_siswa');
	// }

	// function daftar(){
	// 	$this->load->view('daftar/input_pendaftaran');
	// }
}