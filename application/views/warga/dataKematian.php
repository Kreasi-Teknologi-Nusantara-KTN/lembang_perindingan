<section class="tm-white-bg section-padding-bottom">
  <div class="container">
    <div class="row">
      <div class="card">
        <div class="card-header">
          <div class="tm-section-header section-margin-top">
            <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
            <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Data Kematian</h2></div>
            <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
          </div>
        </div>
        <div class="card-body"> 
          <a class="btn btn-success mb-3" href="<?= base_url(); ?>warga/data_kematian/cetak.html" target="_blank">Cetak</a>
          <div class="table-responsive">
            <table class="table" id="myTable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">NIK</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tempat, Tanggal Lahir</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Tanggal Kematian</th>
                  <th scope="col">Foto</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no = 1;
                  foreach ($kematian as $key) { ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $key['nik']; ?></td>
                      <td><?= $key['nama']; ?></td>
                      <td><?= $key['tempat_lahir'] . ', ' . $key['tanggal_lahir']; ?></td>
                      <td><?= $key['alamat']; ?></td>
                      <td><?= $key['tanggal_kematian']; ?></td>
                      <td><img src="<?= base_url('assets/' . $key['foto']); ?>" alt="" width="50%"></td>
                    </tr>
                  <?php }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>