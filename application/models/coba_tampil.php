<?php

class Coba_tampil extends CI_model{

	public function lihat_semua()
	{
		$this->load->database();
		return $this->db->get('coba');
	}
}
?>