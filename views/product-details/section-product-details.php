<section class="section-product-details">
  <h1 class="section-product-details__title"><?php echo $titleDetail; ?></h1>
  <div class="bg-primary-300">
    <div class="section-product-details__containt">
      <ul class="section-product-details__ul">
        <li class="section-product-details__list"><?php echo $description; ?></li>
        <h2 class=" section-product-details__code">Código <?php echo $code; ?></h2>
      </ul>
    </div>
    <figure class="section-product-details__figure">
      <img class="section-product-details__img" src="/public/img/<?= $img ?>" alt="<?= $alt ?>">
    </figure>
  </div>
  <div class="section-product-details__containt-boton">
    <a href="/views/contact/contact.php" class="section-product-details__quote">Cotizar ahora</a>
  </div>
</section>