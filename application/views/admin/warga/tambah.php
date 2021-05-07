<div class="card">
  <div class="card-header">
    Tambah Warga
  </div>
  <div class="card-body">
    <?php if ($this->session->pesan) echo $this->session->pesan; ?>
    <form action="<?= base_url(); ?>admin/warga/tambah.html" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">NIK</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIK" name="nik" value="<?= set_value('nik'); ?>" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nama Lengkap</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Lengkap" name="nama" value="<?= set_value('nama'); ?>" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Foto</label>
        <input type="file" class="form-control" id="exampleInputPassword1" name="foto">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>