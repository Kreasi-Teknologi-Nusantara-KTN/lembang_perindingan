<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WargaModel extends CI_Model {
  
	public function insert($data)
	{
    $this->db->insert('warga', $data);
	}
  
	public function edit($id_warga)
	{
    if ($_FILES['foto']['name'] == '') {
      $foto = $this->input->post('foto_lama');
    } else {
      $config['upload_path']    = './assets/'; //path upload
      $config['allowed_types']  = 'png|jpg|jpeg'; //tipe file yang diperbolehkan

      $this->load->library('upload'); //meload librari upload
      $this->upload->initialize($config);
            
      if(! $this->upload->do_upload('foto') ){
        echo $this->upload->display_errors();exit();
      } else {
        $foto = $this->upload->data('file_name');
      }
    }

    $this->db->where('id_warga', $id_warga);
    $this->db->update('warga', [
      'nik'               => $this->input->post('nik'),
      'nama'              => $this->input->post('nama'),
      'tempat_lahir'      => $this->input->post('tempat_lahir'),
      'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
      'alamat'            => $this->input->post('alamat'),
      'status_perkawinan' => $this->input->post('status_perkawinan'),
      'foto'              => $foto
    ]);
	}

  public function getAll()
  {
    return $this->db->get_where('warga', ['status_kematian' => '0'])->result_array();
  }

  public function get17()
  {
    $warga  = $this->getAll();
    $data   = [];
    
    foreach ($warga as $key) {
      $birthDate  = new DateTime($key['tanggal_lahir']);
      $today      = new DateTime("today");
      $y          = $today->diff($birthDate)->y;
      if ($y >= 17) {
        array_push($data, $key);
      }
    }

    return $data;
  }

  public function hapus($id_warga)
  {
    $this->db->where('id_warga', $id_warga);
    $this->db->delete('warga');
  }

  public function get($id_warga)
  {
    return $this->db->get_where('warga', [
      'id_warga'  => $id_warga
    ])->row_array();
  }

  public function getByNik($nik)
  {
    return $this->db->get_where('warga', [
      'nik'  => $nik
    ])->row_array();
  }

  public function getDataKematian()
  {
    return $this->db->get_where('warga', [
      'status_kematian' => '1'
    ])->result_array();
  }

  public function tambahDataKematian()
  {
    $this->db->where('id_warga', $this->input->post('id_warga'));
    $this->db->update('warga', [
      'status_kematian'   => '1',
      'tanggal_kematian'  => $this->input->post('tanggal_kematian')
    ]);
  }

  public function editDataKematian($id_warga)
  {
    $this->db->where('id_warga', $id_warga);
    $this->db->update('warga', [
      'status_kematian'   => '0'
    ]);
    $this->db->where('id_warga', $this->input->post('id_warga'));
    $this->db->update('warga', [
      'status_kematian'   => '1',
      'tanggal_kematian'  => $this->input->post('tanggal_kematian')
    ]);
  }

  public function hapusDataKematian($id_warga)
  {
    $this->db->where('id_warga', $id_warga);
    $this->db->update('warga', [
      'status_kematian' => '0'
    ]);
  }

  public function cari()
  {
    $this->db->like('nama', $this->input->get('nama'));
    return $this->db->get('warga')->result_array();
  }

  public function getVaksinCovid()
  {
    $this->db->join('warga', 'vaksin_covid.id_warga = warga.id_warga');
    return $this->db->get('vaksin_covid')->result_array();
  }

  public function tambahVaksin()
  {
    $this->db->insert('vaksin_covid', [
      'id_warga'  => $this->input->post('id_warga'),
      'tanggal'   => $this->input->post('tanggal')
    ]);
  }

  public function editVaksin($id_vaksin)
  {
    $data = $this->db->get_where('vaksin_covid', ['id_vaksin' => $id_vaksin])->row_array();
    switch ($data['status']) {
      case 'sudah':
        $status = 'belum';
        break;
      case 'belum':
        $status = 'sudah';
        break;
      
      default:
        # code...
        break;
    }
    $this->db->update('vaksin_covid', ['status' => $status], ['id_vaksin' => $id_vaksin]);
  }

  public function hapusVaksin($id_vaksin)
  {
    $this->db->delete('vaksin_covid', ['id_vaksin' => $id_vaksin]);
  }
}
