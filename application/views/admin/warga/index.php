<a class="btn btn-success mb-3" href="<?= base_url(); ?>admin/warga/tambah.html">Tambah</a>
<button class="btn btn-success mb-3"type="button" data-toggle="modal" data-target="#exampleModal">Upload</button>
<div class="form-inline">
  <form class="search-form" action="<?= base_url(); ?>admin/warga/cari.html" method="get">
    <input class="form-control mr-sm-2 mb-3" type="text" placeholder="Search ..." aria-label="Search" name="nama">
    <button type="submit" class="btn btn-success">Search</button>
  </form>
</div>

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
      <table class="table" id="bootstrap-data-table-export">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat, Tanggal Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Status Perkawinan</th>
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
                <td><img src="<?= base_url('assets/' . $key['foto']); ?>" alt="" width="50%"></td>
                <td>
                  <a href="<?= base_url('admin/warga/edit/' . $key['id_warga']); ?>" class="btn btn-success">Edit</a>
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