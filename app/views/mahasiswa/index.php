<div class="container mt-4">
  <div class="row">
    <div class="col-6">
      <h1>Daftar Mahasiswa</h1>

      <ul class="list-group">
        <?php foreach( $data['mhs'] as $mhs ) : ?>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <?= $mhs['nama']; ?>
          <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary text-light ">detail</a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>