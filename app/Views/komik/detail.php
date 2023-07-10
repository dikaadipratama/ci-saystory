<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container justify-content-center d-flex">
  <div class="row">
    <div class="col">
      <h2 class="mt-4">Detail Komik</h2>
      <div class="card mb-3" style="width: 850px;">
        <div class="row g-1">
          <div class="col-md-4">
            <img src="/img/<?= $komik['sampul']; ?>" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mb-3"><?= $komik['judul']; ?></h5>
              <p class="card-text"><b>Penulis : </b> <?= $komik['penulis']; ?></p>
              <p class="card-text"><small class="text-muted"><b>Penerbit : <?= $komik['penerbit']; ?></b></small></p>
              <small class="mt-4 text-muted">Last updated 3 mins ago</small>
              <br><br>
              <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-warning w-25">Edit</a>

              <form action="/komik/<?= $komik['id']; ?>" method="POST" class="d-inline">
              <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger w-25" onclick="return confirm('apakah anda yakin ingin menghapus?')">Delete</button>
              </form>

              <br><br>
              <a href="/komik" class="btn btn-primary w-50">Kembali ke Daftar Komik</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>