<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("./vendor/autoload.php");
use Dompdf\Dompdf;
use Dompdf\Options;

class Bantuan extends CI_Controller {
  
	public function index($jenis_bantuan)
	{
    $data['konten']       = 'admin/bantuan/index';
    $data['bantuan']      = $this->BantuanModel->getAll($jenis_bantuan);
    $data['warga']        = $this->WargaModel->getAll();
    $data['jenisBantuan'] = $jenis_bantuan;
		$this->load->view('admin/index', $data);
	}
  
	public function tambah()
	{
    $this->BantuanModel->tambah();
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success" role="alert">
        Berhasil Tambah Data Bantuan
      </div>
    ');
    redirect('admin/bantuan/' . $this->input->post('jenis_bantuan'));
	}

  public function hapus($id_bantuan)
  {
    $data = $this->BantuanModel->hapus($id_bantuan);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success" role="alert">
        Berhasil Hapus Data
      </div>
    ');
    redirect('admin/bantuan/' . $data);
  }
  
	public function edit($id_bantuan)
	{
    $this->BantuanModel->edit($id_bantuan);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success" role="alert">
        Berhasil Tambah Data Bantuan
      </div>
    ');
    redirect('admin/bantuan/' . $this->input->post('jenis_bantuan'));
	}

  public function cetak($jenis_bantuan)
  {
    $data['bantuan']  = $this->BantuanModel->getAll($jenis_bantuan);
    ob_start();
      $this->load->view('admin/bantuan/pdf', $data);
      $html = ob_get_contents();
    ob_end_clean();
    ob_clean();
    $filename   = uniqid();
    $options  	= new Options();
    $options->set('isRemoteEnabled', TRUE);
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('legal', 'portrait');
    $dompdf->render();
    $dompdf->stream($filename, array("Attachment" => 0) );
  }
}
