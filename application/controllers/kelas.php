<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kelas extends CI_Controller{
	function __construct(){
		parent::__construct();	
		$this->load->model('m_kelas');
		$this->load->model('m_users');
	}		
	function index() {
		$data['title'] = 'Kelas';
		$data['data'] =  $this->m_kelas->get_kelas();
		$data['content'] = 'kelas/lists';
		$this->load->view('dashboard', $data);
	}
	function form($id="") {
		$data['siswa'] = $this->m_users->get_users(array('level' => 4, 'status'=> 'aktif'));
		$data['pengajar'] = $this->m_users->get_users(array('level' => 3, 'status'=> 'aktif'));
		$data['title'] = 'Form Kelas';
		$data['content'] = 'kelas/form';
		$data['slug'] = 'kelas';
		if(isset($id)) {
			$data['kelas'] = $this->m_kelas->detail_kelas(array('id'=>$id));
		}
		$this->load->view('dashboard', $data);
	}	
	function add() {
		$nama = $this->input->post('nama');		
		$status = $this->input->post('status');
        $hari = $this->input->post('hari');
        $tipe = $this->input->post('tipe');
		$jam = $this->input->post('jam');
		$pertemuan = $this->input->post('pertemuan');
		$level = $this->input->post('level');
		$id_pengajar = $this->input->post('id_pengajar');
		$id_siswa = $this->input->post('id_siswa');
		$pertemuan = empty($pertemuan) ? 0 : $pertemuan;
		$jam = implode(" - ", $jam);
		$id_siswa = empty($id_siswa) ? "" : implode(",", $id_siswa); 
 		$hari = empty($hari) ? "" : implode(",", $hari);                  
		$data = array(
			'nama' => $nama,
	 		'status' => $status,	
	 		'tipe' => $tipe,
 			'hari' => strtolower($hari),
			'jam' => $jam,	
			'pertemuan' => $pertemuan,
			'level' => $level,
			'id_siswa' => $id_siswa,			
			'id_pengajar' => $id_pengajar			
 		);
		$this->m_kelas->add_kelas($data);
		redirect('kelas');	
	}
	function edit() {
		$id = $this->input->post('id');	
		$nama = $this->input->post('nama');		
		$status = $this->input->post('status');
        $hari = $this->input->post('hari');
        $tipe = $this->input->post('tipe');
		$jam = $this->input->post('jam');
		$pertemuan = $this->input->post('pertemuan');
		$level = $this->input->post('level');
		$id_pengajar = $this->input->post('id_pengajar');
		$id_siswa = $this->input->post('id_siswa');
		$jam = implode(" - ", $jam);
		$id_siswa = empty($id_siswa) ? "" : implode(",", $id_siswa); 
 		$hari = empty($hari) ? "" : implode(",", $hari);
		$data = array(
			'nama' => $nama,
	 		'status' => $status,	
	 		'tipe' => $tipe,
 			'hari' => strtolower($hari),
			'jam' => $jam,
			'pertemuan' => $pertemuan,	
			'level' => $level,
			'id_siswa' => $id_siswa,			
			'id_pengajar' => $id_pengajar			
 		);
		$this->load->view('jadwal/rubah_group',$data);
		$this->m_kelas->update_kelas($data, array('id'=>$id));	
		redirect('kelas');		
	}
	function absensi ($id='') {
		$data['kelas'] = $this->m_kelas->detail_kelas(array('id' => $id));
		$data['title'] = 'Absensi Kelas';
		$data['content'] = 'kelas/absensi';
		$data['slug'] = 'absensi';
		$this->load->view('dashboard', $data);
	}
	function detail ($id='') {
		$data['kelas'] = $this->m_kelas->detail_kelas(array('id' => $id));
		$data['title'] = 'Detail Kelas';
		$data['content'] = 'kelas/detail';
		$data['slug'] = 'detail';
		$this->load->view('dashboard', $data);
	}
	function update_absen ($id = '') {
		$absensi = $this->input->post('absensi');
		$pertemuan = $this->input->post('pertemuan');
		if(!empty($absensi)) {
			foreach ($absensi as $key => $val) {
				$namameta = "absensi-".$key;
				$nilai = implode(",", $val); 
				$data = array(
					'nama_meta' => $namameta,
					'nilai_meta' => $nilai,
					'id_kelas' => $id
				);
				$this->m_kelas->update_meta($data, array('nama_meta' => $namameta, 'id_kelas' => $id));
			}
		}
		die();
	}
}