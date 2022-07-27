<?php 
	/**
	 * e
	 */
	class Login extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();

		}

		function index(){

			$this->load->view('login/login');
		}

		function act_login(){


			$email = $this->input->post('email');
			$pass = $this->input->post('pass');

			$this->db->where('email', $email);
			$cek = $this->db->get('tbl_register')->row_array();
			if ($cek == true) { 
				if (password_verify($pass, $cek['pass'])) {

					$data = [

						'username' => $cek['email'],
						'nik' => $cek['nik'],
					];

					$this->session->set_userdata($data);
					redirect('index/');
				}else{

					$this->session->set_flashdata('message', 'swal("Opps!", "password anda salah", "warning" );');
					redirect('login/');
				}

			}else{

				$this->session->set_flashdata('message', 'swal("Opps!", "Akun anda tidak terdaftar,cek verifikasi akun anda", "error" );');
				redirect('login/');
			}	

		}

		function register(){

			$this->form_validation->set_rules('nama', 'name', 'required');
			$this->form_validation->set_rules('email', 'email', 'required|is_unique[tbl_register.email]');
			$this->form_validation->set_rules('nik', 'nik', 'required|max_length[16]|is_unique[tbl_register.nik]');
			$this->form_validation->set_rules('alamat', 'alamat', 'required');
			$this->form_validation->set_rules('pass', 'password', 'required|min_length[6]');
			$this->form_validation->set_rules('pass1', 'confirmasi password', 'required|matches[pass]|min_length[6]');
			$this->form_validation->set_rules('cek', 'confirmasi', 'required');

			if ($this->form_validation->run() == false) {
				$this->load->view('login/register');
			}else{

				$data = [

					'nama' => $this->input->post('nama'),
					'email' => $this->input->post('email'),
					'nik' => $this->input->post('nik'),
					'alamat' => $this->input->post('alamat'),
					'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
				];

				$input = $this->db->insert('tbl_register', $data);
				$this->session->set_flashdata('message', 'swal("Yess!", "Anda berhasil register", "success" );');
				redirect('Login/');
			}
		}
	}

?>