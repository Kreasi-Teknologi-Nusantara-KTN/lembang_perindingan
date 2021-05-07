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
                <td><img src="<?= base_url('assets/' . $key['foto']); ?>" alt="" width="15%"></td>
              </tr>
            <?php }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>