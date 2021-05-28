<a class="btn btn-success mb-3" href="<?= base_url('bantuan/' . $jenisBantuan . '/cetak.html'); ?>" target="_blank">Cetak</a>
<div class="card">
  <div class="card-header">
    Data Bantuan <?= strtoupper($jenisBantuan); ?>
  </div>
  <div class="card-body">
    <?php if ($this->session->pesan) echo $this->session->pesan; ?>
    <div class="table-responsive">
      <table class="table">
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