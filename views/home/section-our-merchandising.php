<?php
include_once(__DIR__ . "/../../public/data/attributes.php");
?>

<section class="section-our-merchandising">
  <div class="section-our-merchandising__content">
    <div class="section-our-merchandising__contText">
      <h2 class="section-our-merchandising__title">Nuestro Merchandising</h2>
      <p class="section-our-merchandising__description">Contamos con una gran gama de Artículos Publicitarios
      </p>
    </div>

    <div class="section-our-merchandising__contCard">
      <?php foreach ($categoriesHome as $categorie) : ?>
        <div class="section-our-merchandising__card">

          <figure>
            <img class="h-[250px]" src="<?= $categorie["image"] ?>" alt="<?= $categorie["alt"] ?>">
          </figure>

          <a href="/views/products/products.php?category=<?= $categorie["linkPage"] ?>" class="section-our-merchandising__cardLinkText"><?= $categorie["title"] ?></a>
        </div>
      <?php endforeach ?>
    </div>

    <!-- swiper -->
    <div class="swiper--our-merchandising">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php foreach ($categoriesHome as $categorie) : ?>
            <div class="swiper-slide">
              <div class="section-our-merchandising__cardSwiper">
                <figure>
                  <img class="h-[170px]" src="<?= $categorie["image"] ?>" alt="<?= $categorie["alt"] ?>">
                </figure>
                <a href="/views/products/products.php?category=<?= $categorie["linkPage"] ?>" class="section-our-merchandising__cardLinkText"><?= $categorie["title"] ?></a>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
      <div class="section-our-merchandising__contArrow">
        <div class="swiper-button-prev swiper-button-prev--merchandising"></div>
        <div class="swiper-button-next swiper-button-prev--merchandising"></div>
      </div>
    </div>
  </div>
</section>