<div class="card">
  <div class="card-header">
    Tambah Warga
  </div>
  <div class="card-body">
    <form action="<?= base_url('warga/saran_perubahan/' . $id_warga); ?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">NIK</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIK" name="nik" value="<?= set_value('nik', $nik); ?>" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nama Lengkap</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Lengkap" name="nama" value="<?= set_value('nama', $nama); ?>" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Foto</label>
        <input type="file" class="form-control" id="exampleInputPassword1" name="foto">
        <input type="hidden" class="form-control" id="exampleInputPassword1" name="foto_lama" required value="<?= set_value('nama', $foto); ?>">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>