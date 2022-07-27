<?php 

/**
 * 
 */
class Index extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){

		$this->load->view('template/header');
		$this->load->view('utama/index');
		$this->load->view('template/footer');
	}

	function data_aduan(){

		$this->load->view('template/header');
		$this->load->view('utama/data_aduan');
		$this->load->view('template/footer');
	}

	function data_aduan_all(){

		$this->load->viw('template/header');
		$this->load->view('utama/data_aduan_all');
		$this->load->view('template/footer');
	}

	function lapora_proses(){

		$this->load->viw('template/header');
		$this->load->view('utama/laporan_proses');
		$this->load->view('template/footer');

	}

	function buat_laporan(){
		$this->form_validation->set_rules('nama', 'name', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('nohp', 'no telp', 'required');
		$this->form_validation->set_rules('aduan', 'aduan', 'required');
		$this->form_validation->set_rules('judul_aduan', 'judul aduan', 'required');
		// $this->form_validation->set_rules('gambar', 'gambar', 'required');

		if ($this->form_validation->run() == false) {
			
			$this->load->view('template/header');
			$this->load->view('utama/buat_laporan');
			$this->load->view('template/footer');
		}else{

			$config['upload_path']          = './assets/aduan/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['min_size']             = 9000000;
			$config['remove_spaces']        = false;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Gambar yang anda masukan terlalu besar", "", "warning" );');
				redirect('index/buat_laporan');

			}else{

				$data = [

					'nama' => $this->input->post('nama'),
					'email' => $this->input->post('email'),
					'nohp' => $this->input->post('nohp'),
					'alamat_aduan' => $this->input->post('alamat'),
					'judul_aduan' => $this->input->post('judul_aduan'),
					'aduan' => $this->input->post('aduan'),
					'gambar' => $_FILES['gambar']['name'],
				];

				$this->db->insert('tbl_aduan', $data);
				$this->session->set_flashdata('message', 'swal("Yess!", "Aduan anda berhasil dikirim", "success" );');
				redirect('Index/buat_laporan');
			}
		}
	}

	function profil(){

		$this->load->viw('template/header');
		$this->load->view('utama/profil');
		$this->load->view('template/footer');
	}





}
?>