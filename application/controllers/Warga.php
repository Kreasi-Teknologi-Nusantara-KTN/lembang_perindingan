<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("./vendor/autoload.php");
use Dompdf\Dompdf;
use Dompdf\Options;

class Warga extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'warga/index';
    $data['warga']  = $this->WargaModel->getAll();
		$this->load->view('halamanAwalKonten', $data);
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
		$this->load->view('halamanAwalKonten', $data);
  }

  public function visiMisi()
  {
    $data = $this->VisiMisiModel->get();
    if ($data == NULL) {
      $data['visi'] = '';
      $data['misi'] = '';
    }
    $data['konten'] = 'warga/visiMisi';
		$this->load->view('halamanAwalKonten', $data);
  }

  public function beritaDesa()
  {
    $data['konten'] = 'warga/beritaDesa/index';
    $data['berita'] = $this->BeritaModel->getAll();
		$this->load->view('halamanAwalKonten', $data);
  }

  public function cari()
  {
    $data['warga']  = $this->WargaModel->cari();
    $data['konten'] = 'warga/index';
		$this->load->view('halamanAwalKonten', $data);
  }

  public function dataKematian()
  {
    $data['konten']   = 'warga/dataKematian';
    $data['kematian'] = $this->WargaModel->getDataKematian();
		$this->load->view('halamanAwalKonten', $data);
  }

  public function cetak()
  {
    $data['warga']  = $this->WargaModel->getAll();
    ob_start();
      $this->load->view('admin/warga/pdf', $data);
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

  public function cetakDataKematian()
  {
    $data['kematian'] = $this->WargaModel->getDataKematian();
    ob_start();
      $this->load->view('admin/pdf_kematian', $data);
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
