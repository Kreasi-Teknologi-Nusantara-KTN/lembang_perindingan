<div class="card">
  <div class="card-header">
    Data Warga 17 Tahun
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