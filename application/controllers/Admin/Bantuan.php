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

  public function upload()
  {
    $fileName = $_FILES['file']['name'];
          
    $config['upload_path']    = './assets/'; //path upload
    $config['file_name']      = $fileName;  // nama file
    $config['allowed_types']  = 'xls|xlsx|csv'; //tipe file yang diperbolehkan

    $this->load->library('upload'); //meload librari upload
    $this->upload->initialize($config);
          
    if(! $this->upload->do_upload('file') ){
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger" role="alert">
          Gagal upload file
        </div>
      ');
      redirect('admin/bantuan/' . $this->input->post('jenis_bantuan'));
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

      $data_warga = $this->WargaModel->getByNik($rowData[0][0]);
      if ($data_warga) {
        $id_warga = $data_warga['id_warga'];
      } else {
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

      $data_bantuan = $this->db->get_where('bantuan', [
        'id_warga'      => $id_warga,
        'jenis_bantuan' => $this->input->post('jenis_bantuan')
      ])->row_array();
      if ($data_bantuan) {
      } else {
        $this->db->insert('bantuan', [
          'id_warga'      => $id_warga,
          'jenis_bantuan' => $this->input->post('jenis_bantuan')
        ]);
      }
    }

    file_exists('./assets/' . $this->upload->data('file_name')) ? unlink('./assets/' . $this->upload->data('file_name')) : '';

    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success" role="alert">
        Berhasil Upload Data
      </div>
    ');
    redirect('admin/warga.html');
  }
}
