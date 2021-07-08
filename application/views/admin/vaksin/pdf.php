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
  <table table class="table" id="bootstrap-data-table-export">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NIK</th>
        <th scope="col">Nama</th>
        <th scope="col">Tempat, Tanggal Lahir</th>
        <th scope="col">Alamat</th>
        <th scope="col">Status Perkawinan</th>
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
          </tr>
        <?php }
      ?>
    </tbody>
  </table>
</body>
</html>