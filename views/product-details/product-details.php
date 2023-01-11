<?php include_once(__DIR__ . "/../../public/data/attributes.php") ?>

<?php
if (isset($_GET["slug"]) && isset($_GET["category"])) {
  $subcategory = $_GET["category"];
  $slug = $_GET["slug"];
  $related_products = [];
  foreach ($pageProducts as $data) {
    foreach ($data['sub_categories'] as $sub) {
      if ($sub['id'] == $subcategory) {
        foreach ($data['products'] as $p) {
          if ($p['id_category'] === $subcategory) {
            array_push($related_products, $p);
            if ($p["slug"] === $slug) {
              $titleDetail = $p["title"];
              $code = $p['code'];
              $description = $p["description"];
              $img = $p['images'][0]['imageUrl'];
              $alt = $p['images'][0]['alt'];

              $delete = array_search($p, $related_products);
              unset($related_products[$delete]);
            }
          }
        }
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php $title = "Details | Publicidad Yireh "; ?>
  <?php include_once(__DIR__ . "/../../components/head.php"); ?>
  <link rel="stylesheet" href="/public/css/product-details.css" />
  <link rel="stylesheet" href="/public/css/vendors/all.min.css" />

  <link rel="stylesheet" href="/public/css/vendors/swiper-bundle.css" />
</head>

<body>
  <?php
  include_once(__DIR__ . "/../../components/nav.php");
  ?>

  <main>
    <?php
    include("section-product-details.php");
    include("section-product-related.php");

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