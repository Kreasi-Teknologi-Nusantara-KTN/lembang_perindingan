<div class="card">
  <div class="card-header">
    Data Saran
  </div>
  <div class="card-body">
    <?php if ($this->session->pesan) echo $this->session->pesan; ?>
    <div class="table-responsive">
      <table class="table" id="bootstrap-data-table-export" width="100%">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Saran</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1;
            foreach ($saran as $key) { ?>
              <tr>
                <td width="5%"><?= $no++; ?></td>
                <td width="30%"><?= $key['saran_perubahan']; ?></td>
                <td width="35%">
                  <!-- <div class="zoom"> -->
                    <img src="<?= base_url('assets/' . $key['foto']); ?>" alt="" width="25%" id="image-link">
                  <!-- </div> -->
                </td>
                <td width="30%">
                  <a href="<?= base_url('assets/' . $key['foto']); ?>" class="btn btn-success" download>Download Gambar</a>
                  <a href="<?= base_url('admin/saran_perubahan/hapus/' . $key['id_saran']); ?>" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
            <?php }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>