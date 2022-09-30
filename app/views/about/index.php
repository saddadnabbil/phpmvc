<div class="container">
  <div class="jumbotron mt-4">
    <h1 class="display-4">About Me</h1>
    <div class="row">
      <div class="col-2">
        <img class="rounded mx-4" src="<?= BASEURL; ?>/img/foto.jpg" alt="foto" width="100px">
      </div>
      <div class="col">
        <p class="lead">Halo, nama saya <?= $data['nama']; ?>, umur saya <?= $data['umur']; ?> tahun, saya adalah
          seorang
          <?= $data['jenis']; ?></p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
          <a class="btn btn-primary" href="#" role="button">Learn more</a>
        </p>
      </div>
    </div>

  </div>
</div>