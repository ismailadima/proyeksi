<?php
	/**
	* 
	*/
	class Futsal_crud extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function insert(){
		$this->load->model('Futsal_model');
		$this->Futsal_model->insert();
		redirect(base_url());
		}

		public function coba()
		{
			$this->load->model('Futsal_model');
			$this->Futsal_model->coba();
		}
	}
?>