<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BantuanModel extends CI_Model {
  
	public function getAll($jenis_bantuan)
	{
    $this->db->join('warga', 'bantuan.id_warga = warga.id_warga');
    return $this->db->get_where('bantuan', [
      'jenis_bantuan' => $jenis_bantuan
    ])->result_array();
	}

  public function tambah()
  {
    $this->db->insert('bantuan', [
      'id_warga'      => $this->input->post('id_warga'),
      'jenis_bantuan' => $this->input->post('jenis_bantuan')
    ]);
  }

  public function hapus($id_bantuan)
  {
    $data = $this->db->get_where('bantuan', [
      'id_bantuan'  => $id_bantuan
    ])->row_array();
    $this->db->where('id_bantuan', $id_bantuan);
    $this->db->delete('bantuan');
    return $data['jenis_bantuan'];
  }

  public function edit($id_bantuan)
  {
    $this->db->where('id_bantuan', $id_bantuan);
    $this->db->update('bantuan', [
      'id_warga'      => $this->input->post('id_warga'),
      'jenis_bantuan' => $this->input->post('jenis_bantuan')
    ]);
  }
}
