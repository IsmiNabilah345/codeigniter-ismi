<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slidedua.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slide.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" role="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" role="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
    <?php foreach ($matkul as $m) : ?>
    <div class="row" style="text-align: center">
        <div class="card m-3" style="width: 16rem;">
            <img src="img/<?= $m['gambar']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?= $m['nama_matkul']; ?></h5>
            <h6><?= $m['keterangan']; ?></h6>
            <h6><?= $m['kategori']; ?> <?= $m['sks']; ?> </h6>
            <p class="card-text">Jika ingin mangambil matakuliah silahkan klik button dibawah ini.</p>
            <a href="#" class="btn btn-primary">Ambil Matakuliah</a><br><br>
            <a href="#" class="btn btn-primary">Detail</a>
        </div>
    </div>
    <?php endforeach; ?>
</div>
</div>
</div>
<?= $this->endSection(); ?>