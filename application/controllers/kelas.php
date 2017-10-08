<?php 


class kelas extends CI_Controller{

	function __construct(){
		parent::__construct();	
		$this->load->library('form_validation'); // digunakan untuk proses validasi yg di input
		$this->load->database();	
		$this->load->model('m_kelas');
		$this->load->model('m_users');
	}		
	function index() {
		$data['title'] = 'Kelas';
		$data['data'] =  $this->m_kelas->get_kelas();
		$this->load->view('kelas/lists', $data);
	}

	function form() {
		$data['siswa'] = $this->m_users->get_users(array('level' => 4));
		$data['pengajar'] = $this->m_users->get_users(array('level' => 3));
		$data['title'] = 'Form Kelas';
		$this->load->view('kelas/form', $data);
	}	

	// function tambah_group(){
	// 	$nama_kelas = $this->input->post('nama_kelas');		
	// 	$status = $this->input->post('status');
                                                                      
	// 	$data1 = array(
	// 		'nama_kelas' => $nama_kelas,
	//  		'status' => $status				
 // 		);

	// 	$id = $this->m_jadwal->create('kelas',$data1);	

	// 	$hari = $this->input->post('hari');
	// 	$jam = $this->input->post('jam');
	// 	$target_level = $this->input->post('target_level');
	// 	$id_pengajar = $this->input->post('id_pengajar');

	// 	if(!empty($id)) {
	// 		$h = implode(",", $hari);
	// 		$data2 = array(
	// 			'hari' => strtolower($h),
	// 			'jam' => $jam,	
	// 			'target_level' => $target_level,
	// 			'id_kelas' => $id,			
	// 			'id_pengajar' => $id_pengajar			
	// 		);
	// 		$this->m_jadwal->input_data_jadwal($data2);
	// 		redirect('jadwal/data_group/');
	// 	}	
	// }

	// function rubah_group($id){
	// 	$data = array('kelas' => $this->m_jadwal->tampil_detail_group($id),
	// 					'id' => $id, 
	// 					'jadwal' => $this->m_jadwal->tampil_jadwal_group($id));
	// 	$this->load->view('jadwal/rubah_group',$data);
	// }

	// function update_group(){
	// 	$id_kelas = $this->input->post('id_kelas');
	// 	$nama_kelas = $this->input->post('nama_kelas');
	// 	$status = $this->input->post('status');

	// 	$data = array(
	// 		'nama_kelas' => $nama_kelas,
	// 		'status' => $status
	// 	);

	// 	$this->m_jadwal->update_data_group($id_kelas, $data);
		
	// 	$hari = $this->input->post('hari');
	// 	$jam = $this->input->post('jam');
	// 	$target_level = $this->input->post('target_level');
	// 	$id_pengajar = $this->input->post('id_pengajar');
	// 	$id_jadwal = $this->input->post('id_jadwal');

	// 	if(!empty($id_jadwal)) {
	// 		$h = implode(",", $hari);
	// 		$data2 = array(
	// 			'hari' => strtolower($h),
	// 			'jam' => $jam,	
	// 			'target_level' => $target_level,
	// 			'id_kelas' => $id_kelas,			
	// 			'id_pengajar' => $id_pengajar			
	// 		);
	// 		$this->m_jadwal->update_data($id_jadwal, $data2);
	// 	}			
	// 	redirect('jadwal/data_group/');
	// }

	// function hapus_group($id){
	// 	$where = array('id_kelas' => $id);
	// 	$this->m_jadwal->hapus_data_group($where,'kelas');
	// 	redirect('jadwal/data_group');
	// }

	// function kelola_group($id_kelas){
	// 	$data = array(
	// 				'jadwal' => $this->m_jadwal->tampil_jadwal_group($id_kelas),
	// 				'siswa' => $this->m_jadwal->tampil_anggota_group($id_kelas),
	// 				'kelas' => $this->m_jadwal->tampil_kelas($id_kelas),
	// 				'id_kelas' => $id_kelas
	// 			);
	// 	$this->load->view('jadwal/data_jadwal_group',$data);
	// }

	// function hapus_jadwal_group($id_kelas){
	// 	$data['id_kelas'] = $id_kelas;
	// 	$where = array('id_kelas' => $id_kelas);
	// 	$this->m_jadwal->hapus_data($where,'jadwal');
	// 	redirect('jadwal/kelola_group/'.$id_kelas);
	// }

	// public function cari_nama(){
	//  if (isset($_GET['term'])) {
	//   $result = $this->m_jadwal->cari_nama($_GET['term']);
	//    if (count($result) > 0) {
	//     foreach ($result as $pr)
	//      $arr_result[] = $pr->nama_siswa;
	//      echo json_encode($arr_result);
	//    }
	//  }
	// }

	// function rubah_siswa($id){
	// 	$data = array('siswa' => $this->m_jadwal->tampil_detail_siswa($id),
	// 					'id' => $id);
	// 	$this->load->view('jadwal/rubah_siswa',$data);
	// }

	// function update_siswa(){
	// 	$id_kelas = $this->input->post('id_kelas');
	// 	$id_anggota = $this->input->post('id_anggota');
	// 	$status = $this->input->post('status');

	// 	$data = array(
	// 		'status' => $status			
	// 		);

	// 	$this->m_jadwal->update_data_siswa($id_anggota,$data);		
	// 	redirect('jadwal/kelola_group/'.$id_kelas);
	// }

	// function data_jadwal_private (){
	//     $this->load->model('m_siswa'); //load model
	//     $data['data_jadwal'] = $this->m_siswa->get_data_private(); 
	//     $this->load->view('jadwal/data_jadwal_private',$data); //load tampilan content + mengirimkan $data
	// }

	// function detail_jadwal_private($id_pendaftaran){
	//     $this->load->model('m_jadwal'); //load model
	//     $data['data_jadwal'] = $this->m_jadwal->get_detail_private($id_pendaftaran); 
	//     $data['id_pendaftaran'] = $id_pendaftaran;
	//     $this->load->view('jadwal/detail_jadwal_private',$data); //load tampilan content + mengirimkan $data
	// }

	// function hapus_private($id_jadwal){
	// 	// $data['id_pendaftaran'] = $id_pendaftaran;
	// 	$where = array('id_jadwal' => $id_jadwal);
	// 	$this->m_jadwal->hapus_data($where,'jadwal');
	// 	redirect('jadwal/data_jadwal_private/');
	// }

	// function tambah_private($id_pendaftaran) {
	// 	$data['id_pendaftaran'] = $id_pendaftaran;
	// 	$this->load->view('jadwal/input_jadwal_private',$data);
	// }

	// function cari_siswa($id_kelas) {
	// 	$data = array('pengajar' => $this->m_jadwal->lihat_detail_pengajar($id_kelas));
 //       $data['tampil']=$this->m_jadwal->caridata();
 //       $data['id_kelas'] = $id_kelas;
       
 //       if($data['tampil']==null) {
 //          $this->cari_error($id_kelas);
 //          }
 //          else {
 //             $this->load->view('jadwal/input_siswa',$data); 
	// 	}

	// }

	// function cari_error($id_kelas) {
 //        $data['tampil'] = $this->m_jadwal->tampil();
 //        $data['id_kelas'] = $id_kelas;
 //        $this->load->view('jadwal/cari_error',$data);  
 //    }

	// function tambah_anggota(){
	// 	$id_pendaftaran = $this->input->post('id_pendaftaran');
	// 	$id_kelas = $this->input->post('id_kelas');	
	// 	$status = $this->input->post('status');		

	// 	$data1 = array(
	// 		'id_pendaftaran' => $id_pendaftaran,
	// 		'id_kelas' => $id_kelas,
	// 		'status' => $status				
	// 		);
	// 	$id = $this->m_jadwal->create('anggota_kelas',$data1);

	// 	// $id = $this->m_jadwal->create('kelas',$data1);
	// 	$anggota_kelas['id_anggota'] = $id;	

	// 	$id_pengajar = $this->input->post('id_pengajar');

	// 	$data2 = array(
	// 		'id_pendaftaran' => $id_pendaftaran,
	// 		'id_kelas' => $id_kelas,
	// 		'id_pengajar' => $id_pengajar,
	// 		'id_anggota' => $anggota_kelas['id_anggota'],				
	// 		);

	// 	$this->m_absensi->input_siswa($data2);

	// 	redirect('jadwal/cari_siswa/'.$id_kelas);
	// }

	// function rubah_jadwal_group($id_kelas){
	// 	$data = array('jadwal' => $this->m_jadwal->rubah_jadwal_group($id_kelas),
	// 					'id_kelas' => $id_kelas
	// 					);
	// 	$this->load->view('jadwal/rubah_jadwal_group',$data);
	// }

	// function rubah_private($id){
	// 	$data = array('jadwal' => $this->m_jadwal->tampil_detail_private($id),
	// 					'id' => $id);
	// 	$this->load->view('jadwal/rubah_jadwal_private',$data);
	// }	

	// function pilih_nama(){
	// 	$data = array('siswa' => $this->m_jadwal->tampil_data_siswa());
	// 	$this->load->view('jadwal/pilih_nama',$data);
	// }

	// function input_jadwal_group($id_kelas){
	// 	$data = array(
	// 				'kelas' => $this->m_jadwal->tampil_data_group($id_kelas),
	// 				'id_kelas' => $id_kelas
	// 			);
	// 	$this->load->view('jadwal/input_jadwal_group',$data);
	// }

	// function index(){
	// 	$data['pengajar']=$this->m_jadwal->pengajar();
	// 	$this->load->view('jadwal/input_jadwal_private',$data);
	// }

	// function tambah_jadwal_group($id_kelas){
	// 	$id_kelas = $this->input->post('id_kelas');
	// 	$hari = $this->input->post('hari');
	// 	$jam = $this->input->post('jam');
	// 	$id_pengajar = $this->input->post('id_pengajar');

	// 	foreach ($hari as $key => $h) {
	// 		$data = array(
	// 		'id_kelas' => $id_kelas,
	// 		'hari' => $h,
	// 		'jam' => $jam,			
	// 		'id_pengajar' => $id_pengajar			
	// 		);
	// 	$this->m_jadwal->input_data_jadwal($data);
	// 	}
		
	// 	$data['id_kelas'] = $id_kelas;
	// 	redirect('jadwal/kelola_group/'.$id_kelas);
	// }	

	// function hapus_siswa($id){
	// 	$data['id_kelas'] = $id_kelas;
	// 	$where = array('id_anggota' => $id);
	// 	$this->m_jadwal->hapus_data($where,'anggota_kelas');
	// 	$this->m_absensi->hapus_data($where,'absensi');
	// 	redirect('jadwal/data_group');
	// }

	// function tambah_jadwal_private(){
	// 	$id_pendaftaran = $this->input->post('id_pendaftaran');
	// 	$hari = $this->input->post('hari');
	// 	$jam = $this->input->post('jam');
	// 	$id_pengajar = $this->input->post('id_pengajar');

	// 	foreach ($hari as $key => $h) {
	// 		$data = array(
	// 		'id_pendaftaran' => $id_pendaftaran,
	// 		'hari' => $h,
	// 		'jam' => $jam,			
	// 		'id_pengajar' => $id_pengajar			
	// 		);
	// 	$this->m_jadwal->input_data_jadwal($data);
	// 	}
		
	// 	redirect('jadwal/detail_jadwal_private/'.$id_pendaftaran);
	// }	

	// // function rubah_jadwal_private(){
	// // 	$id_jadwal = $this->input->post('id_jadwal');
	// // 	$jam = $this->input->post('jam');
	// // 	$id_pengajar = $this->input->post('id_pengajar');

	// // 	$data = array(
	// // 		'jam' => $jam,
	// // 		'id_pengajar' => $id_pengajar
	// // 		);

	// // 	$this->m_jadwal->update_data($id_jadwal,$data);		
	// // 	redirect('jadwal/data_jadwal_private');
	// // }

	// function hapus($id){
	// 	$where = array('id_jadwal' => $id);
	// 	$this->m_jadwal->hapus_data($where,'jadwal');
	// 	redirect('jadwal/data_jadwal');
	// }
}