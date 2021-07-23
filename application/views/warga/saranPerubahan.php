<section class="tm-white-bg section-padding-bottom">
  <div class="container">
    <div class="row">
      <div class="card">
        <div class="card-header">
          <div class="tm-section-header section-margin-top">
            <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
            <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Saran Perubahan</h2></div>
            <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
          </div>
        </div>
        <div class="card-body">
          <?php if ($this->session->pesan) echo $this->session->pesan; ?>
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
          <form action="<?= base_url('warga/saran_perubahan.html'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Saran Perubahan</label>
              <textarea name="saran_perubahan" id="saran_perubahan" cols="30" rows="10" placeholder="Masukan Saran Perubahan" required class="form-control"><?= set_value('saran_perubahan'); ?></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Foto</label>
              <input type="file" name="foto" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>