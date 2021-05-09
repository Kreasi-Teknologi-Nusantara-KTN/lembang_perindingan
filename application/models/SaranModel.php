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
    $this->db->insert('saran', [
      'id_warga'        => $id_warga,
      'saran_perubahan' => $this->input->post('saran_perubahan')
    ]);
  }

  public function get($id_warga)
  {
    $this->db->join('warga', 'saran.id_warga = warga.id_warga');
    return $this->db->get('saran', [
      'id_warga'  => $id_warga
    ])->result_array();
  }
}
