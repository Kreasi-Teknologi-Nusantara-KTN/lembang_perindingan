<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bantuan extends CI_Controller {
  
	public function index($jenis_bantuan)
	{
    $data['konten']       = 'warga/bantuan';
    $data['bantuan']      = $this->BantuanModel->getAll($jenis_bantuan);
    $data['jenisBantuan'] = $jenis_bantuan;
		$this->load->view('halamanAwal', $data);
	}
}
