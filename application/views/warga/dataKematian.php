<div class="card">
  <div class="card-header">
    Data Kematian
  </div>
  <div class="card-body">
    <?php if ($this->session->pesan) echo $this->session->pesan; ?>
    <div class="table-responsive">
      <table class="table" id="bootstrap-data-table-export">
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