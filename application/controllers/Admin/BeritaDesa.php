<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaDesa extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'admin/beritaDesa/index';
    $data['berita'] = $this->BeritaModel->getAll();
		$this->load->view('admin/index', $data);
	}

  public function tambah()
  {
    if ($this->input->post()) {
      $this->form_validation->set_rules('judul', 'Judul Berita', 'required');
      $this->form_validation->set_rules('isi', 'Isi Berita', 'required');
      if ($this->form_validation->run() == TRUE) {
        $this->BeritaModel->tambah();
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success" role="alert">
            Berhasil Tambah Berita Desa
          </div>
        ');
        redirect('admin/berita_desa.html');
      } else {
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-danger" role="alert">' .
            validation_errors() .
          '</div>
        ');
      }
    }
    $data['konten'] = 'admin/beritaDesa/tambah';
		$this->load->view('admin/index', $data);
  }

  public function edit($id_berita)
  {
    if ($this->input->post()) {
      $this->form_validation->set_rules('judul', 'Judul Berita', 'required');
      $this->form_validation->set_rules('isi', 'Isi Berita', 'required');
      if ($this->form_validation->run() == TRUE) {
        $this->BeritaModel->edit($id_berita);
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success" role="alert">
            Berhasil Edit Berita Desa
          </div>
        ');
        redirect('admin/berita_desa.html');
      } else {
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-danger" role="alert">' .
            validation_errors() .
          '</div>
        ');
      }
    }
    $data           = $this->BeritaModel->get($id_berita);
    $data['konten'] = 'admin/beritaDesa/edit';
		$this->load->view('admin/index', $data);
  }

  public function hapus($id_berita)
  {
    $this->BeritaModel->hapus($id_berita);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success" role="alert">
        Berhasil Hapus Berita Desa
      </div>
    ');
    redirect('admin/berita_desa.html');
  }
}
