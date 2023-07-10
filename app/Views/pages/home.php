<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('pages/header'); ?>
<?= $this->include('pages/slider'); ?>
<?= $this->include('pages/best-seller'); ?>
<?= $this->include('pages/menu'); ?>
<?= $this->include('pages/testimoni'); ?>
<?= $this->include('pages/about'); ?>
<?= $this->include('pages/team'); ?>
<?= $this->include('pages/clients'); ?>
<?= $this->include('pages/contact'); ?>
<?= $this->include('pages/footer'); ?>

<?= $this->endSection(); ?>