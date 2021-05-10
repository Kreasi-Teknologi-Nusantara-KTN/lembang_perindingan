<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  
	public function index()
	{
    $data['konten']           = 'admin/dashboard';
    $data['jumlah_penduduk']  = count($this->WargaModel->getAll());
    $data['jumlah_kematian']  = count($this->WargaModel->getDataKematian());
    $data['jumlah_pkh']       = count($this->BantuanModel->getAll('pkh'));
    $data['jumlah_blt']       = count($this->BantuanModel->getAll('blt'));
    $data['jumlah_bst']       = count($this->BantuanModel->getAll('bst'));
		$this->load->view('admin/index', $data);
	}
  
	public function myProfile($edit = null)
	{
    if ($edit) {
      $data['edit'] = true;
    } else {
      $data['edit'] = null;
    }
    $data['konten'] = 'admin/myProfile';
		$this->load->view('admin/index', $data);
	}

  public function saranPerubahanData()
  {
    $data['konten'] = 'admin/saran/index';
    $data['saran']  = $this->SaranModel->get();
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

  public function uploadFoto()
  {
    $config['upload_path']    = './assets/'; //path upload
    $config['allowed_types']  = 'png|jpg|jpeg'; //tipe file yang diperbolehkan
    $config['max_size']       = 10000; // maksimal sizze

    $this->load->library('upload'); //meload librari upload
    $this->upload->initialize($config);
          
    if(! $this->upload->do_upload('foto') ){
      $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(['foto' => false]));
    } else {
      $foto = $this->upload->data('file_name');
      $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(['foto' => $foto]));
    }
  }
}
