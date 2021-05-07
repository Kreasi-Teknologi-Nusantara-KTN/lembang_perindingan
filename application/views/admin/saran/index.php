<div class="card">
  <div class="card-header">
    Data Saran
  </div>
  <div class="card-body">
    <?php if ($this->session->pesan) echo $this->session->pesan; ?>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1;
            foreach ($saran as $key) { ?>
              <tr>
                <td><?= $key['nik']; ?></td>
                <td><?= $key['nama']; ?></td>
                <td><img src="<?= base_url('assets/' . $key['foto']); ?>" alt="" width="15%"></td>
                <td></td>
              </tr>
            <?php }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>