<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Vaksin Covid</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url(); ?>admin/vaksin_covid/tambah" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Warga</label>
            <select name="id_warga" id="id_warga" class="form-control">
              <option>Pilih Warga</option>
              <?php
                foreach ($warga as $key) { ?>
                  <option value="<?= $key['id_warga']; ?>"><?= $key['nama']; ?></option>
                <?php }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tanggal</label>
            <input type="date" name="tanggal" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    Data Vaksin Covid
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
            <th scope="col">Tanggal</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1;
            foreach ($vaksin as $key) { ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $key['nik']; ?></td>
                <td><?= $key['nama']; ?></td>
                <td><?= tgl_indo($key['tanggal']); ?></td>
                <td>
                  <?php
                    switch ($key['status']) {
                      case 'belum': ?>
                        <button class="btn btn-danger">Belum</button>
                        <?php break;
                      case 'sudah': ?>
                        <button class="btn btn-success">Sudah</button>
                        <?php break;
                      
                      default:
                        # code...
                        break;
                    }
                  ?>
                <td>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ubahStatus<?= $key['id_vaksin']; ?>">
                    Ubah Status
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="ubahStatus<?= $key['id_vaksin']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Vaksin Covid</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Anda yakin akan mengubah status dari <?= $key['nama']; ?>?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <a href="<?= base_url('admin/vaksin_covid/edit/' . $key['id_vaksin']); ?>" class="btn btn-success">Ubah Status</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $key['id_vaksin']; ?>">
                    Hapus
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="hapus<?= $key['id_vaksin']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Vaksin Covid</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Anda yakin akan menghapus data dari <?= $key['nama']; ?>?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <a href="<?= base_url('admin/vaksin_covid/hapus/' . $key['id_vaksin']); ?>" class="btn btn-danger">Hapus</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            <?php }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>