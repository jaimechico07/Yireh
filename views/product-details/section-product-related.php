<section class="section-product-related">
  <h2 class="section-product-related__title">Productos relacionados</h2>
  <p class="section-product-related__p">Si no dispone de un diseño, indíquenos su idea y realizaremos un diseño con opciones para que pueda elegir el de su preferencia.
  </p>
  <div class="swiper swiper--product-related">
    <div class="swiper-wrapper">
      <?php foreach ($related_products as $related) : ?>
        <div class="swiper-slide">
          <div class="card">
            <figure>
              <a class="" href="/views/product-details/product-details.php?category=<?= $related["id_category"] ?>&slug=<?= $related["slug"] ?>"><img src="/public/img/<?= $related["images"][0]["imageUrl"] ?>" alt="<?= $related["images"][0]["imageUrl"] ?>" class=""></a>
            </figure>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <div class="section-product-related__contArrow">
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>

</section>