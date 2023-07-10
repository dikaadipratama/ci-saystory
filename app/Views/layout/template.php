<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title><?= $title; ?></title>
  <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/img/logoutama.png" />

  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet" type="text/css" />
  <link type="text/css" rel="stylesheet" href="css/slider.css" media="screen,projection" />

  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="<?= base_url(); ?>/css/style.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>/css/cobahover.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>/css/parallax.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>/css/slider.css" rel="stylesheet" >

</head>

<body id="page-top">

  <?= $this->include('layout/navbar'); ?>
  <?= $this->renderSection('content'); ?>

  <!-- Bootstrap core JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

  <!-- Contact form JS-->
  <script src="<?= base_url(); ?>/js/jqBootstrapValidation.js"></script>
  <script src="<?= base_url(); ?>/js/contact_me.js"></script>

  <!-- Core theme JS-->
  <script src="<?= base_url(); ?>/js/scripts.js"></script>
  <script src="<?= base_url(); ?>/js/materialize.min.js"></script>
  <script>
    const slider = document.querySelectorAll(".slider");
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 600,
      interval: 3000,
    });

    const parallax = document.querySelectorAll(".parallax");
    M.Parallax.init(parallax);

    const materialbox = document.querySelectorAll(".materialboxed");
    M.Materialbox.init(materialbox);

    const scroll = document.querySelectorAll(".scrollspy");
    M.ScrollSpy.init(scroll, {
      scrollOffset: 50,
    });
  </script>
</body>

</html>