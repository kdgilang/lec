<?php 

class M_daftar extends CI_Model{	
	function __construct(){
		parent::__construct();						
		$this->load->library('session');
		$this->load->database();
	}		
}