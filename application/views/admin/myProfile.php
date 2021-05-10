<div class="card">
  <div class="card-header">
    My Profile
  </div>
  <div class="card-body">
    <?php if ($this->session->pesan) echo $this->session->pesan; ?>
    <form id="formEdit">
      <div class="form-group">
        <?= $edit == true ? '<input type="file" name="foto" id="foto">' : '<img src="" alt="" id="photoUrl">' ; ?>
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" <?= $edit == true ? '' : 'readonly' ; ?> name="nama">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" <?= $edit == true ? '' : 'readonly' ; ?> name="email">
      </div>
      <?php
        if ($edit) { ?>
          <button type="button" class="btn btn-success" onclick="updateProfile('<?= base_url(); ?>')">Simpan</button>
        <?php } else { ?>
          <a href="<?= base_url(); ?>admin/my_profile/edit.html" class="btn btn-primary">Edit</a>
        <?php }
      ?>
    </form>
  </div>
</div>