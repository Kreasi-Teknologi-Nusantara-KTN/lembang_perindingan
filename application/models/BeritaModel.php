<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaModel extends CI_Model {
  
	public function getAll()
	{
    return $this->db->get('berita')->result_array();
	}

  public function tambah()
  {
    $config['upload_path']    = './assets/'; //path upload
    $config['allowed_types']  = 'png|jpg|jpeg'; //tipe file yang diperbolehkan
    $config['max_size']       = 10000; // maksimal sizze

    $this->load->library('upload'); //meload librari upload
    $this->upload->initialize($config);
          
    if(! $this->upload->do_upload('foto') ){
      echo $this->upload->display_errors();exit();
    }

    $this->db->insert('berita', [
      'judul' => $this->input->post('judul'),
      'isi'   => $this->input->post('isi'),
      'foto'  => $this->upload->data('file_name')
    ]);
  }

  public function edit($id_berita)
  {
    if ($_FILES['foto']['name'] == '') {
      $foto = $this->input->post('foto_lama');
    } else {
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
    }

    $this->db->where('id_berita', $id_berita);
    $this->db->update('berita', [
      'judul' => $this->input->post('judul'),
      'isi'   => $this->input->post('isi'),
      'foto'  => $foto
    ]);
  }

  public function get($id_berita)
  {
    return $this->db->get_where('berita', [
      'id_berita' => $id_berita
    ])->row_array();
  }

  public function hapus($id_berita)
  {
    $this->db->where('id_berita', $id_berita);
    $this->db->delete('berita');
  }
}
