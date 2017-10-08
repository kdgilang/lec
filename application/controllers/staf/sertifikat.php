<?php 


class sertifikat extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_sertifikat');
		$this->load->helper('url');
		$this->load->library('pagination');
	}

	function data_sertifikat()
	{
		$data = null;
		if (isset($_POST['q'])) {
			$data['ringkasan'] = $this->input->post('cari');
		}

		// load model
		$this->load->model('m_sertifikat');

		$this->db->like('nama_siswa', $data['ringkasan']);
		$this->db->or_like('target_level', $data['ringkasan']);
        $this->db->from('siswa');

		// pagination limit
		$pagination['base_url'] = base_url().'staf/sertifikat/data_sertifikat/page/';
		$pagination['total_rows'] = $this->db->count_all_results();
		$pagination['full_tag_open'] = "<p><div class=\"pagination\" style='letter-spacing:2px;'>";
		$pagination['full_tag_close'] = "</div></p>";
		$pagination['cur_tag_open'] = "<span class=\"current\">";
		$pagination['cur_tag_close'] = "</span>";
		// $pagination['num_tag_open'] = "<span class=\"disabled\">";
		$pagination['num_tag_close'] = "</span>";
		$pagination['per_page'] = "5";
		$pagination['uri_segment'] = 5;
		$pagination['num_links'] = 5;

		$this->pagination->initialize($pagination);

		$data['sertifikat'] = $this->m_sertifikat->ambildata($pagination['per_page'],$this->uri->segment(5,0),$data['ringkasan']);

		$this->load->vars($data);
		$this->load->view('staf/sertifikat/data_sertifikat');
	}

    function cari() {
       $data['tampil']=$this->m_sertifikat->caridata();
       
       if($data['tampil']==null) {
          $this->cari_error();
          }
          else {
             $this->load->view('staf/sertifikat/input_sertifikat',$data); 
		}
	}

	function cari_error() {
        $data['tampil'] = $this->m_sertifikat->tampil();
        $this->load->view('staf/sertifikat/cari_error',$data);  
    }	

	function tampil_sertifikat($id_sertifikat){
		$data = array('sertifikat' => $this->m_sertifikat->lihat_detail_sertifikat($id_sertifikat));
		$this->load->view('staf/sertifikat/cetak_sertifikat',$data);
	}

	function detail_sertifikat($id_sertifikat){
		$data = array('sertifikat' => $this->m_sertifikat->lihat_detail_sertifikat($id_sertifikat));
		$this->load->view('staf/sertifikat/detail_sertifikat',$data);
	}

	function cari_private() {
		$data['pengajar']=$this->m_sertifikat->pengajar();
		// $this->load->view('jadwal/input_jadwal_private',$data);
       	$data['tampil']=$this->m_sertifikat->caridata();
       	//jika data yang dicari tidak ada maka akan keluar informasi 
       	//bahwa data yang dicari tidak ada
       	if($data['tampil']==null) {
          $this->cari_error();
          }
       	else {
          $this->load->view('jadwal/input_sertifikat',$data); 

		}
	}

	function tambah_sertifikat(){
		$id_pendaftaran = $this->input->post('id_pendaftaran');
		$id_pengajar = $this->input->post('id_pengajar');		
		$keterangan = $this->input->post('keterangan');
		$tgl_cetak = $this->input->post('tgl_cetak');
		$tgl_terbit = $this->input->post('tgl_terbit');
		$tgl_mengambil = $this->input->post('tgl_mengambil');
		$pemberi = $this->input->post('pemberi');		

		$data = array(
			'id_pendaftaran' => $id_pendaftaran,
			'id_pengajar' => $id_pengajar,
			'keterangan' => $keterangan,
			'tgl_cetak' => $tgl_cetak,
			'tgl_terbit' => $tgl_terbit,
			'tgl_mengambil' => $tgl_mengambil,
			'pemberi' => $pemberi						
			);
		$this->m_sertifikat->input_data_sertifikat($data);
		redirect('staf/sertifikat/data_sertifikat');
	}

	function rubah($id_sertifikat){
		$data['id_sertifikat'] = $id_sertifikat;
		$data = array('sertifikat' => $this->m_sertifikat->tampil_detail_sertifikat($id_sertifikat));
		$this->load->view('staf/sertifikat/rubah_sertifikat',$data);
	}

	function update_sertifikat(){
		$id_sertifikat = $this->input->post('id_sertifikat');
		$id_pengajar = $this->input->post('id_pengajar');
		$keterangan = $this->input->post('keterangan');	
		$tgl_cetak = $this->input->post('tgl_cetak');
		$tgl_terbit = $this->input->post('tgl_terbit');
		$tgl_mengambil = $this->input->post('tgl_mengambil');
		$pemberi = $this->input->post('pemberi');

		$data = array(	
			'keterangan' => $keterangan,
			'id_pengajar' => $id_pengajar,
			'tgl_cetak' => $tgl_cetak,
			'tgl_terbit' => $tgl_terbit,
			'tgl_mengambil' => $tgl_mengambil,
			'pemberi' => $pemberi
			);

		$this->m_sertifikat->update_data($id_sertifikat,$data);		
		redirect('staf/sertifikat/data_sertifikat');
	}

	function hapus($id){
		$where = array('id_sertifikat' => $id);
		$this->m_sertifikat->hapus_data($where,'sertifikat');
		redirect('staf/sertifikat/data_sertifikat');
	}

	function print_sertifikat($id_sertifikat)
	{

		// $css = $this->load->view('staf/sertifikat/bootstrap.css');
  //       $stylesheet = file_get_contents('http://localhost/lec/assets/css/bootstrap.min.css');

		$this->load->library('pdfgenerator');		
		$data = array('sertifikat' => $this->m_sertifikat->lihat_detail_sertifikat($id_sertifikat));
	    $html = $this->load->view('staf/sertifikat/print_sertifikat', $data, true);
	    $this->pdfgenerator->generate($html,'sertifikat');

	    $mpdf->WriteHTML($stylesheet, 1);
	}

	// function detail_sertifikat($id_sertifikat){
	// 	$data = array('sertifikat' => $this->m_sertifikat->lihat_detail_sertifikat($id_sertifikat));
	// 	$this->load->view('staf/sertifikat/cetak_sertifikat',$data);
	// }
}