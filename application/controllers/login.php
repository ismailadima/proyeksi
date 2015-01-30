<?php

	class Login extends CI_Controller
	{
		public $data = array('pesan'=> '');
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model('Login_model','login', TRUE);
		}

		public function index()
		{
			if($this->session->userdata('login') == TRUE)
			{
				redirect(base_url('/index.php/futsal/sudah'));
			}
			else
			{
				if($this->login->validasi())
				{
					if($this->login->cek_user())
					{
						redirect(base_url('/index.php/futsal/berhasil'));
					}
					else
					{
						$this->data['pesan'] = 'Username atau Password Salah';
						redirect(base_url('/index.php/futsal/salah'));
					}
				}
				else
				{
					redirect(base_url('/index.php/futsal/salah'));
				}
			}

		}


		public function logout()
		{
			$this->login->logout();
			redirect(base_url());
		}
	}
?>