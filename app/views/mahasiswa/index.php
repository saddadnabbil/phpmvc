<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-6">

      <div class="row">
        <div class="col lg-6">
          <?php Flasher::flash() ?>
        </div>
      </div>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Mahasiswa
      </button>

      <h3>Daftar Mahasiswa</h3>

      <ul class="list-group">
        <?php foreach( $data['mhs'] as $mhs ) : ?>
        <li class="list-group-item">
          <?= $mhs['nama']; ?>
          <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>"
            class="badge bg-danger text-light float-end mx-1 text-decoration-none"
            onclick="return confirm('yakin')">delete</a>
          <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>"
            class="badge bg-success text-light float-end mx-1 text-decoration-none tampilModalUbah"
            data-bs-toggle="modal" data-bs-target="#formModal">ubah</a>
          <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"
            class="badge bg-primary text-light float-end mx-1 text-decoration-none">detail</a>

        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <div class="mb-2">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

          <div class="mb-2">
            <label for="nim" class="form-label">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim">
          </div>

          <div class="mb-2">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>

          <div class="mb-2">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select id="jurusan" class="form-select" name="jurusan">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Konversi Energi">Konversi Energi</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
            </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
      </div>

      </form>

    </div>
  </div>
</div>