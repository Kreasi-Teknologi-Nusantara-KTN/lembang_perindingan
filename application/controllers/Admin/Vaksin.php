<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vaksin extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'admin/vaksin/index';
    $data['vaksin'] = $this->WargaModel->getVaksinCovid();
    $data['warga']  = $this->WargaModel->getAll();
		$this->load->view('admin/index', $data);
	}

  public function tambah()
  {
    $this->WargaModel->tambahVaksin();
    $this->session->set_flashdata([
      'pesan' => '<div class="alert alert-success" role="alert">
        Berhasil menambah data vaksin covid
      </div>'
    ]);
    redirect('admin/vaksin_covid');
  }

  public function edit($id_vaksin)
  {
    $this->WargaModel->editVaksin($id_vaksin);
    $this->session->set_flashdata([
      'pesan' => '<div class="alert alert-success" role="alert">
        Berhasil mengubah data vaksin covid
      </div>'
    ]);
    redirect('admin/vaksin_covid');
  }

  public function hapus($id_vaksin)
  {
    $this->WargaModel->hapusVaksin($id_vaksin);
    $this->session->set_flashdata([
      'pesan' => '<div class="alert alert-success" role="alert">
        Berhasil menghapus data vaksin covid
      </div>'
    ]);
    redirect('admin/vaksin_covid');
  }
}
