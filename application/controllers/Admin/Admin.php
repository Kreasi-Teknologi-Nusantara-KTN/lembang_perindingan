<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'admin/dashboard';
		$this->load->view('admin/index', $data);
	}

  public function saranPerubahanData($id_warga)
  {
    $data['konten'] = 'admin/saran/index';
    $data['saran']  = $this->SaranModel->get($id_warga);
		$this->load->view('admin/index', $data);
  }

  public function visiMisi()
  {
    if ($this->input->post()) {
      $this->VisiMisiModel->update();
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-success" role="alert">
          Berhasil Edit Visi dan Misi
        </div>
      ');
      redirect('admin/visi_misi.html');
    }
    $data = $this->VisiMisiModel->get();
    if ($data == NULL) {
      $data['visi'] = '';
      $data['misi'] = '';
    }
    $data['konten'] = 'admin/visiMisi/index';
		$this->load->view('admin/index', $data);
  }

  public function editVisiMisi()
  {
    $data = $this->VisiMisiModel->get();
    if ($data == NULL) {
      $data['visi'] = '';
      $data['misi'] = '';
      $data['id']   = '';
    }
    $data['konten'] = 'admin/visiMisi/edit';
		$this->load->view('admin/index', $data);
  }
}
