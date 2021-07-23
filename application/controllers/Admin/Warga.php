<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("./vendor/autoload.php");
use Dompdf\Dompdf;
use Dompdf\Options;

class Warga extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'admin/warga/index';
    $data['warga']  = $this->WargaModel->getAll();
		$this->load->view('admin/index', $data);
	}
  
	public function tambah()
	{
    if ($this->input->post()) {
      $this->form_validation->set_rules('nik', 'NIK', 'required');
      $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
      $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
      $this->form_validation->set_rules('alamat', 'Alamat', 'required');
      $this->form_validation->set_rules('status_perkawinan', 'Status Perkawinan', 'required');
      if ($this->form_validation->run() == TRUE) {
        $data = [
          'id_warga'          => uniqid(),
          'nik'               => $this->input->post('nik'),
          'nama'              => $this->input->post('nama'),
          'tempat_lahir'      => $this->input->post('tempat_lahir'),
          'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
          'alamat'            => $this->input->post('alamat'),
          'status_perkawinan' => $this->input->post('status_perkawinan')
        ];
        $this->WargaModel->insert($data);
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success" role="alert">
            Berhasil Tambah Data Warga
          </div>
        ');
        redirect('admin/warga.html');
      } else {
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-danger" role="alert">' .
            validation_errors() .
          '</div>
        ');
      }
    }
    $data['konten'] = 'admin/warga/tambah';
		$this->load->view('admin/index', $data);
	}

  public function upload()
  {
    $fileName = $_FILES['file']['name'];
          
    $config['upload_path']    = './assets/'; //path upload
    $config['file_name']      = $fileName;  // nama file
    $config['allowed_types']  = 'xls|xlsx|csv'; //tipe file yang diperbolehkan

    $this->load->library('upload'); //meload librari upload
    $this->upload->initialize($config);
          
    if(! $this->upload->do_upload('file') ){
      echo $this->upload->display_errors();exit();
    }
              
    $inputFileName  = './assets/' . $this->upload->data('file_name');

    try {
      $inputFileType  = PHPExcel_IOFactory::identify($inputFileName);
      $objReader      = PHPExcel_IOFactory::createReader($inputFileType);
      $objPHPExcel    = $objReader->load($inputFileName);
    } catch(Exception $e) {
      die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
    }

    $sheet          = $objPHPExcel->getSheet(0);
    $highestRow     = $sheet->getHighestRow();
    $highestColumn  = $sheet->getHighestColumn();

    for ($row = 2; $row <= $highestRow; $row++) {                  //  Read a row of data into an array                 
      $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);   
      // Sesuaikan key array dengan nama kolom di database   
      $id_warga           = uniqid();
      $status_perkawinan  = strtolower($rowData[0][5]) == 'menikah' ? 'menikah' : 'belum_menikah';                                                      
      $data               = [
        "id_warga"          => $id_warga,
        "nik"               => $rowData[0][0],
        "nama"              => $rowData[0][1],
        "tempat_lahir"      => $rowData[0][2],
        "tanggal_lahir"     => $rowData[0][3],
        "alamat"            => $rowData[0][4],
        "status_perkawinan" => $status_perkawinan
      ];
      $this->WargaModel->insert($data);
    }

    file_exists('./assets/' . $this->upload->data('file_name')) ? unlink('./assets/' . $this->upload->data('file_name')) : '';

    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success" role="alert">
        Berhasil Import Data
      </div>
    ');
    redirect('admin/warga.html');
  }

  public function hapus($id_warga)
  {
    $this->WargaModel->hapus($id_warga);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success" role="alert">
        Data Berhasil Dihapus
      </div>
    ');
    redirect('admin/warga.html');
  }

  public function dataKematian()
  {
    if ($this->input->post()) {
      $this->WargaModel->tambahDataKematian();
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-success" role="alert">
          Berhasil Tambah Data
        </div>
      ');
      redirect('admin/data_kematian.html');
    }
    $data['konten']   = 'admin/dataKematian';
    $data['kematian'] = $this->WargaModel->getDataKematian();
    $data['warga']    = $this->WargaModel->getAll();
		$this->load->view('admin/index', $data);
  }

  public function hapusDataKematian($id_warga)
  {
    $this->WargaModel->hapusDataKematian($id_warga);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success" role="alert">
        Berhasil Hapus Data
      </div>
    ');
    redirect('admin/data_kematian.html');
  }

  public function cari()
  {
    $data['warga']  = $this->WargaModel->cari();
    $data['konten'] = 'admin/warga/index';
		$this->load->view('admin/index', $data);
  }

  public function edit($id_warga)
  {
    if ($this->input->post()) {
      $this->form_validation->set_rules('nik', 'NIK', 'required');
      $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
      $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
      $this->form_validation->set_rules('alamat', 'Alamat', 'required');
      $this->form_validation->set_rules('status_perkawinan', 'Status Perkawinan', 'required');
      if ($this->form_validation->run() == TRUE) {
        $this->WargaModel->edit($id_warga);
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success" role="alert">
            Berhasil Edit Data Warga
          </div>
        ');
        redirect('admin/warga.html');
      } else {
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-danger" role="alert">' .
            validation_errors() .
          '</div>
        ');
      }
    }
    $data           = $this->WargaModel->get($id_warga);
    $data['konten'] = 'admin/warga/edit';
		$this->load->view('admin/index', $data);
  }

  public function editDataKematian($id_warga)
  {
    $this->WargaModel->editDataKematian($id_warga);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success" role="alert">
        Berhasil Edit Data Kematian
      </div>
    ');
    redirect('admin/data_kematian.html');
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
}
