<?php include_once(__DIR__ . "/../../public/data/attributes.php") ?>
<?php
if (isset($_GET["category"])) {
  $slug = $_GET["category"];
  foreach ($pageProducts as $pageProduct) {
    if ($pageProduct["id_category"] === $slug) {
      $title = $pageProduct["title"];
      $description = $pageProduct["description"];
      $products = $pageProduct["products"];
      $filterTabs = $pageProduct["sub_categories"];
      $images = $pageProduct["images"];
    }
  }
} else {
  header('Location: //localhost:3000');
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php $pageTitle = "Products | Publicidad Yireh"; ?>
  <?php include_once(__DIR__ . "/../../components/head.php"); ?>
  <link rel="stylesheet" href="/public/css/vendors/all.min.css" />
  <link rel="stylesheet" href="/public/css/vendors/swiper-bundle.css" />
  <link rel="stylesheet" href="/public/css/products.css" />
</head>

<body>
  <?php
  include_once(__DIR__ . "/../../components/nav.php");
  ?>

  <main>
    <?php include_once("section-products-hero.php"); ?>
    <?php include_once("section-products-content.php"); ?>
    <?php include_once("section-filter.php"); ?>
  </main>

  <?php include_once(__DIR__ . "/../../components/footer.php"); ?>
  <script src="/public/js/vendors/mixitup.min.js"></script>
  <script src="/public/js/vendors/swiper-bundle.min.js"></script>
  <script src="/public/js/slider.js"></script>
  <script src="/public/js/filter.js"></script>
  <script src="/public/js/nav.js"></script>
</body>

</html>