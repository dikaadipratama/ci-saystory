<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-8">
      <h2 class="my-3">Form Tambah Data Komik</h2>
      <form action="/komik/save" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="row align-items-center mb-3">
          <label for="judul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-6">
            <input type="text" id="judul" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" name="judul" autofocus value="<?= old('judul'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('judul'); ?>
            </div>
          </div>
          <div class="col-auto">
            <span id="passwordHelpInline" class="form-text">
              Must be 8-20 characters long.
            </span>
          </div>
        </div>
        <div class="row align-items-center mb-3">
          <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
          <div class="col-sm-6">
            <input type="text" id="penulis" class="form-control" name="penulis" value="<?= old('penulis'); ?>">
          </div>
          <div class="col-auto">
            <span id="passwordHelpInline" class="form-text">
              Must be 10-25 characters long.
            </span>
          </div>
        </div>
        <div class="row align-items-center mb-3">
          <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
          <div class="col-sm-6">
            <input type="text" id="penerbit" class="form-control" name="penerbit" value="<?= old('penerbit'); ?>">
          </div>
          <div class="col-auto">
            <span id="passwordHelpInline" class="form-text">
              Must be 12-25 characters long.
            </span>
          </div>
        </div>
        <div class="row align-items-center mb-3">
          <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
          <div class="col-sm-2">
            <img src="/img/default.png" class="img-thumbnail img-preview">
          </div>
          <div class="col-sm-5">
            <div class="custom-file">
              <input type="file" class="custom-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" onchange="previewImg()">
              <div class="invalid-feedback">
                <?= $validation->getError('sampul'); ?>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <span id="passwordHelpInline" class="form-text">
              Max size 1MB.
            </span>
          </div>
        </div>
        <div class="row align-items-center mb-3">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary w-75 ml-20">Tambah</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>