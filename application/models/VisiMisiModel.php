<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VisiMisiModel extends CI_Model {
  
	public function get()
	{
    return $this->db->get('visiMisi')->row_array();
	}

  public function update()
  {
    if ($this->input->post('id') == '') {
      $this->db->insert('visiMisi', [
        'id'    => '1',
        'visi'  => $this->input->post('visi'),
        'misi'  => $this->input->post('misi')
      ]);
    } else {
      $this->db->where('id', '1');
      $this->db->update('visiMisi', [
        'visi'  => $this->input->post('visi'),
        'misi'  => $this->input->post('misi')
      ]);
    }
  }
}
