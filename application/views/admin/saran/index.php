<div class="card">
  <div class="card-header">
    Data Saran
  </div>
  <div class="card-body">
    <?php if ($this->session->pesan) echo $this->session->pesan; ?>
    <div class="table-responsive">
      <table class="table" id="bootstrap-data-table-export">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Saran</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1;
            foreach ($saran as $key) { ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $key['saran_perubahan']; ?></td>
              </tr>
            <?php }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>