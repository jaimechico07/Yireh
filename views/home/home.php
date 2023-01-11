<!DOCTYPE html>
<html lang="es">

<head>
  <?php $title = "Inicio | Publicidad Yireh  "; ?>
  <?php include_once(__DIR__ . "/../../components/head.php"); ?>
  <link rel="stylesheet" href="/public/css/home.css" />
  <link rel="stylesheet" href="/public/css/vendors/all.min.css" />

  <link rel="stylesheet" href="/public/css/vendors/swiper-bundle.css" />
</head>

<body>
  <?php
  include_once(__DIR__ . "/../../components/nav.php");
  ?>

  <main>
    <?php

    include_once("section-home-hero.php");

    include("section-banner.php");

    include_once("section-our-merchandising.php");

    include_once("section-mugs-magics.php");

    include_once("section-call-us.php");
    ?>
  </main>
  <!-- CSS/VENDORS -->
  <?php include_once(__DIR__ . "/../../components/footer.php");
  ?>
  <!-- CUSTOM  -->
  <script src="/public/js/vendors/swiper-bundle.min.js"></script>
  <script src="/public/js/slider.js"></script>
  <script src="/public/js/nav.js"></script>
</body>

</html>