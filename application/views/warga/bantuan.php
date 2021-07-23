<section class="tm-white-bg section-padding-bottom">
  <div class="container">
    <div class="row">
      <div class="card">
        <div class="card-header">
          <div class="tm-section-header section-margin-top">
            <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
            <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Data Bantuan <?= strtoupper($jenisBantuan); ?></h2></div>
            <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
          </div>
        </div>
        <div class="card-body">
          <a class="btn btn-success mb-3" href="<?= base_url('bantuan/' . $jenisBantuan . '/cetak.html'); ?>" target="_blank">Cetak</a>
          <div class="form-inline">
            <form class="search-form" action="<?= base_url(); ?>warga/cari.html" method="get">
              <input class="form-control mr-sm-2 mb-3" type="text" placeholder="Search ..." aria-label="Search" name="nama">
              <button type="submit" class="btn btn-success">Search</button>
            </form>
          </div>
          <?php if ($this->session->pesan) echo $this->session->pesan; ?>
          <div class="table-responsive">
            <table class="table" id="myTable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">NIK</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tempat, Tanggal Lahir</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Status Perkawinan</th>
                  <th scope="col">Foto</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no = 1;
                  foreach ($bantuan as $key) { ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $key['nik']; ?></td>
                      <td><?= $key['nama']; ?></td>
                      <td><?= $key['tempat_lahir'] . ', ' . $key['tanggal_lahir']; ?></td>
                      <td><?= $key['alamat']; ?></td>
                      <td>
                        <?php 
                          switch ($key['status_perkawinan']) {
                            case 'menikah':
                              echo 'Menikah';
                              break;
                            case 'belum_menikah':
                              echo 'Belum Menikah';
                              break;
                            
                            default:
                              # code...
                              break;
                          }
                        ?>
                      </td>
                      <td><img src="<?= base_url('assets/' . $key['foto']); ?>" alt="" width="30%"></td>
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