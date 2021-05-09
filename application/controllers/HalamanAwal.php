<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanAwal extends CI_Controller {
  
	public function index()
	{
    $data['konten']           = 'dashboard';
    $data['jumlah_penduduk']  = count($this->WargaModel->getAll());
    $data['jumlah_kematian']  = count($this->WargaModel->getDataKematian());
    $data['jumlah_pkh']       = count($this->BantuanModel->getAll('pkh'));
    $data['jumlah_blt']       = count($this->BantuanModel->getAll('blt'));
    $data['jumlah_bst']       = count($this->BantuanModel->getAll('bst'));
		$this->load->view('halamanAwal', $data);
	}
}
