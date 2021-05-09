<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warga extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'warga/index';
    $data['warga']  = $this->WargaModel->getAll();
		$this->load->view('halamanAwal', $data);
	}

  public function saranPerubahan()
  {
    if ($this->input->post()) {
      $this->form_validation->set_rules('saran_perubahan', 'Saran Perubahan', 'required');
      if ($this->form_validation->run() == TRUE) {
        $this->SaranModel->insert();
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success" role="alert">
            Saran Perubahan Berhasil Diupload
          </div>
        ');
        redirect('warga/saran_perubahan.html');
      } else {
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-danger" role="alert">' .
            $validation_errors() .
          '</div>
        ');
      }
    }
    $data['konten'] = 'warga/saranPerubahan';
		$this->load->view('halamanAwal', $data);
  }

  public function visiMisi()
  {
    $data = $this->VisiMisiModel->get();
    if ($data == NULL) {
      $data['visi'] = '';
      $data['misi'] = '';
    }
    $data['konten'] = 'warga/visiMisi';
		$this->load->view('halamanAwal', $data);
  }

  public function beritaDesa()
  {
    $data['konten'] = 'warga/beritaDesa/index';
    $data['berita'] = $this->BeritaModel->getAll();
		$this->load->view('halamanAwal', $data);
  }

  public function cari()
  {
    $data['warga']  = $this->WargaModel->cari();
    $data['konten'] = 'warga/index';
		$this->load->view('halamanAwal', $data);
  }

  public function dataKematian()
  {
    $data['konten']   = 'warga/dataKematian';
    $data['kematian'] = $this->WargaModel->getDataKematian();
		$this->load->view('halamanAwal', $data);
  }
}
