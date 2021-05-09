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