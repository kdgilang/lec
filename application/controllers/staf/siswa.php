<?php 


class siswa extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_siswa');
		$this->load->helper('url');
	}

	function data_siswa()
	{
		$data = null;
		if (isset($_POST['q'])) {
			$data['ringkasan'] = $this->input->post('cari');
		}

		// load model
		$this->load->model('m_siswa');

		$this->db->like('nama_siswa', $data['ringkasan']);
        $this->db->from('siswa');

		// pagination limit
		$pagination['base_url'] = base_url().'staf/siswa/data_siswa/page/';
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

		$data['siswa'] = $this->m_siswa->ambildata($pagination['per_page'],$this->uri->segment(5,0),$data['ringkasan']);

		$this->load->vars($data);
		$this->load->view('staf/siswa/data_siswa');
	}

	function detail_siswa($id){
		$data = array('siswa' => $this->m_siswa->detail_siswa($id),
					 'list_jadwal' => $this->m_siswa->list_jadwal($id)
						);
		$this->load->view('staf/siswa/detail_siswa',$data);
	}

	function hapus($id){
		$where = array('id_pendaftaran' => $id);
		$this->m_siswa->hapus_data($where,'siswa');
		redirect('staf/siswa/data_siswa');
	}

	function tambah(){
		$this->load->view('staf/siswa/input_siswa');
	}

	function select_kelas(){
		$this->form_validation->set_rules('kelas', 'Placeholder', 'trim|required|xss_clean|callback_dropdown_check');
		$this->form_validation->set_rules('nama_group', 'Placeholder Text','trim|xss_clean');
	}

	function tambah_siswa(){
		$nama_siswa = $this->input->post('nama_siswa');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$telpon = $this->input->post('telpon');
		$email = $this->input->post('email');		
		$kelas = $this->input->post('kelas');	
		$target_level = $this->input->post('target_level');		
		$pembayaran = $this->input->post('pembayaran');
		$password = $this->input->post('password');	

		$data = array(
			'nama_siswa' => $nama_siswa,			
			'tgl_lahir' => $tgl_lahir,
			'alamat' => $alamat,
			'telpon' => $telpon,
			'email' => $email,
			'kelas' => $kelas,
			'target_level' => $target_level,					
			'pembayaran' => $pembayaran,
			'password' => $password			
			);

		$id = $this->m_siswa->create('siswa',$data);
		$absen['id_pendaftaran'] = $id;			
		$this->m_siswa->create('absensi',$absen);	

		// $this->m_siswa->input_data_siswa($data);
		redirect('staf/siswa/data_siswa');
	}	

	function rubah($id){
		$data = array('siswa' => $this->m_siswa->tampil_detail_siswa($id),
						'id' => $id);
		$this->load->view('staf/siswa/rubah_siswa',$data);
	}	

	function update_siswa(){
		$id_pendaftaran = $this->input->post('id_pendaftaran');
		$nama_siswa = $this->input->post('nama_siswa');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$telpon = $this->input->post('telpon');
		$email = $this->input->post('email');
		$target_level = $this->input->post('target_level');
		$kelas = $this->input->post('kelas');		
		$pembayaran = $this->input->post('pembayaran');
		$password = $this->input->post('password');

		$data = array(
			'nama_siswa' => $nama_siswa,
			'tgl_lahir' => $tgl_lahir,
			'alamat' => $alamat,
			'telpon' => $telpon,
			'email' => $email,			
			'target_level' => $target_level,			
			'kelas' => $kelas,
			'pembayaran' => $pembayaran,
			'password' => $password
			);

		$this->m_siswa->update_data($id_pendaftaran,$data);		
		redirect('staf/siswa/data_siswa');
	}
	
}