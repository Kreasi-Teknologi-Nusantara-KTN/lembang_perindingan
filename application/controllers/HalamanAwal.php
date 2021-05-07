<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanAwal extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'dashboard';
		$this->load->view('halamanAwal', $data);
	}
}
