<section class="tm-white-bg section-padding-bottom">
  <div class="container">
    <div class="row">
      <div class="tm-section-header section-margin-top">
        <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
        <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Visi Misi</h2></div>
        <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
      </div>
      <?php
        foreach ($berita as $key) { ?>
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url('assets/' . $key['foto']); ?>" alt="Card image cap" style="width: 50%;">
              <div class="card-body">
                <h4 class="card-title mb-3"><?= $key['judul']; ?></h4>
                <p class="card-text"><?= $key['isi']; ?></p>
              </div>
            </div>
          </div>
        <?php }
      ?>
    </div>
  </div>
</section>