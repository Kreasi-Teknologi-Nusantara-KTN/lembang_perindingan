<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WargaModel extends CI_Model {
  
	public function insert()
	{
    $config['upload_path']    = './assets/'; //path upload
    $config['allowed_types']  = 'png|jpg|jpeg'; //tipe file yang diperbolehkan
    $config['max_size']       = 10000; // maksimal sizze

    $this->load->library('upload'); //meload librari upload
    $this->upload->initialize($config);
          
    if(! $this->upload->do_upload('foto') ){
      echo $this->upload->display_errors();exit();
    }

    $this->db->insert('warga', [
      'nik'   => $this->input->post('nik'),
      'nama'  => $this->input->post('nama'),
      'foto'  => $this->upload->data('file_name')
    ]);
	}

  public function getAll()
  {
    return $this->db->get('warga')->result_array();
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
}
