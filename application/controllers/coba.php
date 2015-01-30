<?php

class Coba extends CI_Controller{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Coba_tampil','coba');	
		$data['coba'] = $this->coba->lihat_semua()->result();

		$this->load->view('coba_lihat',$data);
	}
}
?>