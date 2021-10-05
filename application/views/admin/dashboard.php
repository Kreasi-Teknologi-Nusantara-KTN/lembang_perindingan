<div class="row">
  <div class="col-md-4">
    <div class="card">
      <div class="card-header bg-success">
        <strong class="card-title text-light">Jumlah Penduduk</strong>
        <strong class="text-light pull-right"><?= $jumlah_penduduk; ?></strong>
      </div>
      <div class="card-body text-white bg-success">
        <p class="card-text text-light"><a href="<?= base_url(); ?>admin/warga.html" class="text-white">Lihat Detail</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header bg-success">
        <strong class="card-title text-light">Jumlah Kematian</strong>
        <strong class="text-light pull-right"><?= $jumlah_kematian; ?></strong>
      </div>
      <div class="card-body text-white bg-success">
        <p class="card-text text-light"><a href="<?= base_url(); ?>admin/data_kematian.html" class="text-white">Lihat Detail</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header bg-success">
        <strong class="card-title text-light">Penerima PKH</strong>
        <strong class="text-light pull-right"><?= $jumlah_pkh; ?></strong>
      </div>
      <div class="card-body text-white bg-success">
        <p class="card-text text-light"><a href="<?= base_url(); ?>admin/bantuan/pkh" class="text-white">Lihat Detail</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header bg-success">
        <strong class="card-title text-light">Penerima BLT</strong>
        <strong class="text-light pull-right"><?= $jumlah_blt; ?></strong>
      </div>
      <div class="card-body text-white bg-success">
        <p class="card-text text-light"><a href="<?= base_url(); ?>admin/bantuan/blt" class="text-white">Lihat Detail</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header bg-success">
        <strong class="card-title text-light">Penerima BST</strong>
        <strong class="text-light pull-right"><?= $jumlah_bst; ?></strong>
      </div>
      <div class="card-body text-white bg-success">
        <p class="card-text text-light"><a href="<?= base_url(); ?>admin/bantuan/bst" class="text-white">Lihat Detail</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header bg-success">
        <strong class="card-title text-light">Jumlah Umur 7 Tahun Keatas</strong>
        <strong class="text-light pull-right"><?= $jumlah_17; ?></strong>
      </div>
      <div class="card-body text-white bg-success">
        <p class="card-text text-light"><a href="#" class="text-white">Lihat Detail</a></p>
      </div>
    </div>
  </div>
</div>