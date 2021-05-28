<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
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
        <th scope="col">Aksi</th>
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
            <td>
              <button class="btn btn-success mb-3" type="button" data-toggle="modal" data-target="#exampleModal<?= $key['id_warga']; ?>">Edit</button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal<?= $key['id_warga']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="<?= base_url('admin/data_kematian/edit/' . $key['id_warga']); ?>" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Data Warga</label>
                          <select name="id_warga" id="id_warga" class="form-control" required>
                            <option>Pilih Warga</option>
                            <?php
                              foreach ($warga as $value) {
                                if ($value['id_warga'] == $key['id_warga']) {
                                  $selected = 'selected';
                                } else {
                                  $selected = '';
                                }
                                echo '<option value="' . $value['id_warga'] . '"' . $selected . '>' . $value['nama'] . '</option>';
                              }
                            ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tanggal Kematian</label>
                          <input type="date" name="tanggal_kematian" class="form-control" required value="<?= $key['tanggal_kematian']; ?>">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <a href="<?= base_url('admin/data_kematian/hapus/' . $key['id_warga']); ?>" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        <?php }
      ?>
    </tbody>
  </table>
</body>
</html>