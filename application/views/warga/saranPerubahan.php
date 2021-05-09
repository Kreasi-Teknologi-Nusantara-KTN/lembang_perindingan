<div class="card">
  <div class="card-header">
    Saran Perubahan
  </div>
  <div class="card-body">
    <form action="<?= base_url('warga/saran_perubahan/' . $id_warga); ?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">Saran Perubahan</label>
        <textarea name="saran_perubahan" id="saran_perubahan" cols="30" rows="10" placeholder="Masukan Saran Perubahan" required class="form-control"><?= set_value('saran_perubahan'); ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>