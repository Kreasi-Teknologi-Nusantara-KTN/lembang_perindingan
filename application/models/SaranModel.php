<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaranModel extends CI_Model {

  public function getAll()
  {
    $data = $this->db->get('saran')->result_array();
    for ($i=0; $i < count($data); $i++) { 
      $key                = $data[$i];
      $data[$i]['warga']  = $this->db->get_where('warga', [
        'id_warga'  => $key['id_warga']
      ])->row_array();
    }
    return $data;
  }

  public function insert($id_warga)
  {
    if ($_FILES['foto']['name']) {
      $config['upload_path']    = './assets/'; //path upload
      $config['allowed_types']  = 'png|jpg|jpeg'; //tipe file yang diperbolehkan
      $config['max_size']       = 10000; // maksimal sizze
  
      $this->load->library('upload'); //meload librari upload
      $this->upload->initialize($config);
            
      if(! $this->upload->do_upload('foto') ){
        echo $this->upload->display_errors();exit();
      } else {
        $foto = $this->upload->data('file_name');
      }
    } else {
      $foto = $this->input->post('foto_lama');
    }
    
    $this->db->insert('saran', [
      'id_warga'  => $id_warga,
      'nik'       => $this->input->post('nik'),
      'nama'      => $this->input->post('nama'),
      'foto'      => $foto
    ]);
  }

  public function get($id_warga)
  {
    return $this->db->get('saran', [
      'id_warga'  => $id_warga
    ])->result_array();
  }
}
