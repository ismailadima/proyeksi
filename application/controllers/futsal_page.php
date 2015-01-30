<?php

class Futsal_page extends CI_Controller{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->view('header');
		$this->load->view('futsal_index');
		$this->load->view('footer');
	}

	public function reg_opt()
	{
		$this->load->view('header');
		$this->load->view('option_reg');
		$this->load->view('footer');
	}

	public function register()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function berhasil()
	{
		$this->load->view('berhasil_login');
	}
	public function sudah()
	{
		$this->load->view('sudah_login');
	}

	public function salah()
	{
		$this->load->view('salah');
	}
	public function login_form()
	{
		$this->load->view('header');
	}
}