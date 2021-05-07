<a class="btn btn-success mb-3" href="<?= base_url(); ?>admin/warga/tambah.html">Tambah</a>
<button class="btn btn-success mb-3"type="button" data-toggle="modal" data-target="#exampleModal">Upload</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url(); ?>admin/warga/upload.html" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <label for="exampleInputEmail1">Upload</label>
          <input type="file" class="form-control" id="exampleInputEmail1" name="file" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    Data Warga
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
                <td>
                  <a href="<?= base_url('admin/saran_perubahan_data/' . $key['id_warga']); ?>" class="btn btn-success">Saran Perubahan Data</a>
                  <a href="<?= base_url('admin/warga/hapus/' . $key['id_warga']); ?>" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
            <?php }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>