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

  public function insert()
  {
    $this->db->insert('saran', [
      'saran_perubahan' => $this->input->post('saran_perubahan')
    ]);
  }

  public function get()
  {
    return $this->db->get('saran')->result_array();
  }
}
