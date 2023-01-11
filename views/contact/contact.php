<!DOCTYPE html>
<html lang="es">

<head>
  <?php $title = "Contacto | Publicidad Yireh "; ?>
  <?php include_once(__DIR__ . "/../../components/head.php"); ?>
  <link rel="stylesheet" href="/public/css/contact.css" />
  <link rel="stylesheet" href="/public/css/vendors/all.min.css" />

  <link rel="stylesheet" href="/public/css/vendors/swiper-bundle.css" />
</head>

<body>
  <?php
  $page = "Contacto";
  include_once(__DIR__ . "/../../components/nav.php");
  ?>

  <main>
    <?php
    include("section-contact.php");

    ?>
  </main>

  <?php
  include_once(__DIR__ . "/../../components/footer.php");
  ?>

  <!-- CSS/VENDORS -->
  <?php include_once(__DIR__ . "/../../components/footer.php");
  ?>
  <!-- CUSTOM  -->
  <script src="/public/js/vendors/swiper-bundle.min.js"></script>
  <script src="/public/js/slider.js"></script>
  <script src="/public/js/nav.js"></script>
  <script src="/public/js/footer.js"></script>

</body>

</html>