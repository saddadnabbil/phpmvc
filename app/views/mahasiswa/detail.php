<div class="container">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
      <h6 class="card-subtitle mb-2 mt-4 text-muted"><?= $data['mhs']['nim']; ?></h6>
      <p class="card-text mb-2"><?= $data['mhs']['jurusan']; ?></p>
      <p class="card-text mb-2"><?= $data['mhs']['email']; ?></p>
      <br>
      <a href="<?= BASEURL; ?>/mahasiswa" class="card-link btn btn-primary btn-sm">Kembali</a>
    </div>
  </div>
</div>