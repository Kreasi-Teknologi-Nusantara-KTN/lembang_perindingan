<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("./vendor/autoload.php");
use Dompdf\Dompdf;
use Dompdf\Options;

class Bantuan extends CI_Controller {
  
	public function index($jenis_bantuan)
	{
    $data['konten']       = 'warga/bantuan';
    $data['bantuan']      = $this->BantuanModel->getAll($jenis_bantuan);
    $data['jenisBantuan'] = $jenis_bantuan;
		$this->load->view('halamanAwalKonten', $data);
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
