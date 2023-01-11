<section class="section-filters">
  <div class="section-filters__inner swiper swiper--filter">
    <div class="swiper-wrapper">
      <?php foreach ($filterTabs as $key => $filterTab) : ?>
        <div class="swiper-slide">
          <div class="section-filters__tab-wrapper">
            <button class="btn btn--filter <?= ($key === 0) ? "active" : "" ?>" data-filter=".<?= $filterTab["id"] ?>"><?= $filterTab["title"] ?></button>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>

  <div class="section-filters__tabs">
    <div class="">
      <button class="btn btn--filter active" data-filter="all">All</button>
    </div>
    <?php foreach ($filterTabs as $key => $filterTab) : ?>
      <div class="">
        <button class="btn btn--filter" data-filter=".<?= $filterTab["id"] ?>"><?= $filterTab["title"] ?></button>
      </div>
    <?php endforeach ?>
  </div>

  <div class="card-product__grid">
    <?php foreach ($products as $key => $product) : ?>
      <a href="/views/product-details/product-details.php?category=<?= $product["id_category"] ?>&slug=<?= $product["slug"] ?>" class="card-product mix <?php echo $product["id_category"] ?>">
        <figure class="card-product__figure">
          <img class="" src="/public/img/<?php echo $product["images"][0]["imageUrl"] ?>" alt="<?php echo $product["images"][0]["alt"] ?>" loading="lazy">
        </figure>
        <span class="card-product__title"><?php echo $product["title"] ?></span>
      </a>
    <?php endforeach ?>

  </div>
</section>