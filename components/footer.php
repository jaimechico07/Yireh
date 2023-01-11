<footer class="footer">
  <div class="footer__container">
    <div class="footer__group-grid">
      <div class="footer__col-1">
        <div class="footer__contact">
          <i class="footer__icon fa-solid fa-phone"></i>
          <div class="footer__row">
            <a href="tel:+017916377" target="_blank">(01) 791 6377 </a> /
            <a href="https://api.whatsapp.com/send?phone=+51980762280&text=hola,%20¿qué%20tal,%20deseo%20más%20información?" target="_blank"> 980 762 280</a>
          </div>
        </div>
        <div class="footer__contact">
          <i class="footer__icon fa-solid fa-location-dot"></i><a href="https://goo.gl/maps/2QQM336nUX6TUhcEA" target="_blank">Calle Bartolome Herrera 178 - Piso 4 /<br class="hidden sm:block" /> Ate - Salamanca</a>
        </div>
        <div class="footer__contact">
          <i class="footer__icon fa-solid fa-envelope"></i>
          <div>
            <a class="break-all" href="mailto:ventas@tazaspersonalizadas.com.pe">ventas@tazaspersonalizadas.com.pe</a>
          </div>
        </div>
      </div>
      <div class="footer__col-2">
        <h3 class="footer__title">CATEGORIAS<i class="footer__title--icon fa-solid fa-caret-up"></i></h3>
        <ul class="footer__list">
          <?php foreach ($subMenuLinks as $subLink) : ?>
            <li><a href="/views/products/products.php?category=<?php echo $subLink["url"]; ?>"><?php echo $subLink["title"]; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <div class="footer__bottom">
      <a href="https://www.facebook.com/tazaspersonalizadaspublicitarias/"><i class="mr-4 text-2xl fa-brands fa-facebook-f"></i></a>
      <a href="#!" target="_blank"><i class="mr-4 text-2xl fa-brands fa-twitter"></i></a>
      <a href="#!" target="_blank"><i class="text-2xl fa-brands fa-google-plus-g"></i></a>
    </div>
    <div class="footer__copy">
      <p>© COPYRIGHT TAZAS PERSONALIZADAS 2022. DISEÑADO POR <a class="footer__agency" href="https://limadigital.pe/" target="_blank">LIMA DIGITAL </a></p>
    </div>
  </div>
</footer>