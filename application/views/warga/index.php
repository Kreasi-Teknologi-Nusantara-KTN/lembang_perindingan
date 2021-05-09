<div class="form-inline">
  <form class="search-form" action="<?= base_url(); ?>warga/cari.html" method="get">
    <input class="form-control mr-sm-2 mb-3" type="text" placeholder="Search ..." aria-label="Search" name="nama">
    <button type="submit" class="btn btn-success">Search</button>
  </form>
</div>
<div class="card">
  <div class="card-header">
    Data Warga
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
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1;
            foreach ($warga as $key) { ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $key['nik']; ?></td>
                <td><?= $key['nama']; ?></td>
                <td><img src="<?= base_url('assets/' . $key['foto']); ?>" alt="" width="15%"></td>
                <td><a href="<?= base_url('warga/saran_perubahan/' . $key['id_warga']); ?>" class="btn btn-success">Saran Perubahan</a></td>
              </tr>
            <?php }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>