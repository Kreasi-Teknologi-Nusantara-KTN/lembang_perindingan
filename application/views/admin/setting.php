<div id="alert"></div>
<ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Ubah Password</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tambah Admin</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
    <form action="<?= base_url(); ?>admin/ganti_password.html" method="post">
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Masukan Password" name="password" required>
      </div>
      <div class="form-group">
        <label for="passwordKonfirmasi">Konfirmasi Password</label>
        <input type="password" class="form-control" id="passwordKonfirmasi" placeholder="Masukan Konfirmasi Password" name="passwordKonfirmasi" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <?= $this->session->pesan1 ? $this->session->pesan1 : '' ; ?>
    <form action="<?= base_url(); ?>admin/tambah_admin.html" method="post">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email" required>
      </div>
      <div class="form-group">
        <label for="passwordAdmin">Password</label>
        <input type="password" class="form-control" id="passwordAdmin" placeholder="Masukan Password" name="passwordAdmin" required>
      </div>
      <div class="form-group">
        <label for="passwordKonfirmasiAdmin">Konfirmasi Password</label>
        <input type="password" class="form-control" id="passwordKonfirmasiAdmin" placeholder="Masukan Konfirmasi Password" name="passwordAdminKonfirmasi" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>