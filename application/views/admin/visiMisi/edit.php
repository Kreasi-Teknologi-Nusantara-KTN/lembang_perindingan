<div class="card">
  <div class="card-header">
    Edit Visi Misi
  </div>
  <div class="card-body">
    <form action="<?= base_url(); ?>admin/visi_misi.html" method="post">
      <input type="hidden" name="id" value="<?= $id; ?>">
      <div class="form-group">
        <label for="exampleInputEmail1">Visi</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $visi; ?>" name="visi" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Misi</label>
        <textarea cols="30" rows="10" class="form-control" name="misi" id="editor" required><?= $misi; ?></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </form>
  </div>
</div>