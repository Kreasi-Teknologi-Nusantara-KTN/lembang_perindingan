<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  
	public function index()
	{
    $data['konten']           = 'admin/dashboard';
    $data['jumlah_penduduk']  = count($this->WargaModel->getAll());
    $data['jumlah_kematian']  = count($this->WargaModel->getDataKematian());
    $data['jumlah_pkh']       = count($this->BantuanModel->getAll('pkh'));
    $data['jumlah_blt']       = count($this->BantuanModel->getAll('blt'));
    $data['jumlah_bst']       = count($this->BantuanModel->getAll('bst'));
    $data['jumlah_vaksin']    = count($this->WargaModel->getVaksinCovid());
		$this->load->view('admin/index', $data);
	}
  
	public function myProfile($edit = null)
	{
    if ($edit) {
      if ($this->input->post()) {
        if ($_FILES['foto']['name'] == '') {
          $foto = $this->session->foto;
        } else {
          if (file_exists('assets/' . $this->session->foto)) {
            unlink('assets/' . $this->session->foto);
          }

          $config['upload_path']    = './assets';
          $config['allowed_types']  = 'jpg|png|jpeg';
  
          $this->upload->initialize($config);
  
          if (!$this->upload->do_upload('foto'))
          {
            print_r($this->upload->display_errors());
            die();
          } else {
            $foto = $this->upload->data('file_name');
          }
        }
        $this->db->update('user', [
          'foto'  => $foto,
          'nama'  => $this->input->post('nama'),
          'email' => $this->input->post('email')
        ], ['id_user' => $this->session->id_user]);

        $this->session->set_userdata([
          'email'     => $this->input->post('email'),
          'foto'      => $foto,
          'nama'      => $this->input->post('nama')
        ]);
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success" role="alert">
            Data berhasil diedit
          </div>
        ');
        redirect('admin/my_profile.html');
      }
      $data['edit'] = true;
    } else {
      $data['edit'] = null;
    }
    $data['konten'] = 'admin/myProfile';
		$this->load->view('admin/index', $data);
	}

  public function saranPerubahanData()
  {
    $data['konten'] = 'admin/saran/index';
    $data['saran']  = $this->SaranModel->get();
		$this->load->view('admin/index', $data);
  }

  public function hapusSaranPerubahanData($id_saran)
  {
    $this->SaranModel->hapus($id_saran);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success" role="alert">
        Berhasil Hapus Saran
      </div>
    ');
    redirect('admin/saran_perubahan.html');
  }

  public function visiMisi()
  {
    if ($this->input->post()) {
      $this->VisiMisiModel->update();
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-success" role="alert">
          Berhasil Edit Visi dan Misi
        </div>
      ');
      redirect('admin/visi_misi.html');
    }
    $data = $this->VisiMisiModel->get();
    if ($data == NULL) {
      $data['visi'] = '';
      $data['misi'] = '';
    }
    $data['konten'] = 'admin/visiMisi/index';
		$this->load->view('admin/index', $data);
  }

  public function editVisiMisi()
  {
    $data = $this->VisiMisiModel->get();
    if ($data == NULL) {
      $data['visi'] = '';
      $data['misi'] = '';
      $data['id']   = '';
    }
    $data['konten'] = 'admin/visiMisi/edit';
		$this->load->view('admin/index', $data);
  }

  public function uploadFoto()
  {
    $config['upload_path']    = './assets/'; //path upload
    $config['allowed_types']  = 'png|jpg|jpeg'; //tipe file yang diperbolehkan
    $config['max_size']       = 10000; // maksimal sizze

    $this->load->library('upload'); //meload librari upload
    $this->upload->initialize($config);
          
    if(! $this->upload->do_upload('foto') ){
      $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(['foto' => false]));
    } else {
      $foto = $this->upload->data('file_name');
      $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(['foto' => $foto]));
    }
  }

  public function setting()
  {
    $data['konten'] = 'admin/setting';
		$this->load->view('admin/index', $data);
  }

  public function gantiPassword()
  {
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('passwordKonfirmasi', 'Password Konfirmas', 'required|matches[password]');
    if ($this->form_validation->run() !== FALSE) {
      $this->db->update('user', ['password' => $this->input->post('password')], ['id_user'  => $this->session->id_user]);
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-success" role="alert">
          Password berhasil diganti
        </div>
      ');
    } else {
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger" role="alert">
          Password tidak sama
        </div>
      ');
    }
    redirect('admin/setting.html');
  }

  public function tambahAdmin()
  {
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('passwordAdmin', 'Password', 'required');
    $this->form_validation->set_rules('passwordAdminKonfirmasi', 'Password Konfirmasi', 'required|matches[passwordAdmin]');
    if ($this->form_validation->run() !== FALSE) {
      $this->db->insert('user', [
        'email'     => $this->input->post('email'),
        'password'  => $this->input->post('passwordAdmin')
      ]);
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-success" role="alert">
          Berhasil tambah admin
        </div>
      ');
    } else {
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger" role="alert">'
          . validation_errors() . 
        '</div>
      ');
    }
    redirect('admin/setting.html');
  }
}
