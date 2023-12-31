<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <a href="/komik/create" class="btn btn-success mb-3 float-end mt-2">Tambah Data</a>
      <h1>Daftar Buku</h1>
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>
      <div class="table-responsive w-100">
        <table class="table table-hover">
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Sampul</th>
              <th scope="col">Judul</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($komik as $k) : ?>
              <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><img src="/img/<?= $k['sampul']; ?>" class="sampul"></td>
                <td><?= $k['judul']; ?></td>
                <td>
                  <a href="/komik/<?= $k['slug']; ?>" class="btn btn-primary">Detail</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>