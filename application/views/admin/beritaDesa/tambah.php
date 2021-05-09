<div class="card">
  <div class="card-header">
    Tambah Berita Desa
  </div>
  <div class="card-body">
    <?php if ($this->session->pesan) echo $this->session->pesan; ?>
    <form action="<?= base_url(); ?>admin/berita_desa/tambah.html" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputPassword1">Foto</label>
        <input type="file" class="form-control" id="exampleInputPassword1" name="foto">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Judul Berita</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Judul Berita" name="judul" value="<?= set_value('judul'); ?>" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Isi Berita</label>
        <textarea cols="30" rows="10" class="form-control" name="isi" id="editor"><?= set_value('isi'); ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>