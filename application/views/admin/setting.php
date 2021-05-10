<div id="alert"></div>
<ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Ubah Password</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Masukan Password" name="password" required>
    </div>
    <div class="form-group">
      <label for="passwordKonfirmasi">Konfirmasi Password</label>
      <input type="password" class="form-control" id="passwordKonfirmasi" placeholder="Masukan Konfirmasi Password" name="password" required>
    </div>
    <button type="button" class="btn btn-primary" onclick="gantiPassword()">Simpan</button>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
</div>