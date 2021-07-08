<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  
	public function index()
	{
    if ($this->input->post()) {
      $data = $this->db->get_where('user', [
        'email'     => $this->input->post('email'),
        'password'  => $this->input->post('password'),
      ])->row_array();
      if ($data) {
        $this->session->set_userdata([
          'email'     => $data['email'],
          'login'     => TRUE,
          'foto'      => $data['foto'],
          'nama'      => $data['nama'],
          'id_user'   => $data['id_user']
        ]);
        redirect('admin.html');
      } else {
        $this->session->set_flashdata([
          'pesan' => '<div class="alert alert-danger" role="alert">
            Username atau password salah
          </div>'
        ]);
        redirect('login');
      }
    }
		$this->load->view('login');
	}
}
