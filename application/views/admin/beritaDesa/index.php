<a class="btn btn-success mb-3" href="<?= base_url(); ?>admin/berita_desa/tambah.html">Tambah</a>

<div class="card">
  <div class="card-header">
    Data Berita Desa
  </div>
  <div class="card-body">
    <?php if ($this->session->pesan) echo $this->session->pesan; ?>
    <div class="table-responsive">
      <table class="table" id="bootstrap-data-table-export">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Foto</th>
            <th scope="col">Judul Berita</th>
            <th scope="col">Isi Berita</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1;
            foreach ($berita as $key) { ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><img src="<?= base_url('assets/' . $key['foto']); ?>" alt="" width="30%"></td>
                <td><?= $key['judul']; ?></td>
                <td><?= $key['isi']; ?></td>
                <td>
                  <a href="<?= base_url('admin/berita_desa/edit/' . $key['id_berita']); ?>" class="btn btn-success">Edit</a>
                  <a href="<?= base_url('admin/berita_desa/hapus/' . $key['id_berita']); ?>" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
            <?php }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>