<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");

include_once(__DIR__ . "/../public/data/attributes.php");
?>

<header class="header">
  <div class="header__inner">
    <a href="/views/home/home.php" class="header__logo">
      <img src="/public/img/nav/logo.png" alt="Logo">
      <span>Publicidad Yireh</span>
    </a>
    <div class="header__icon">
      <i class="fa-solid fa-bars" id="burger"></i>
    </div>

    <nav class="nav-mobile" id="menu">
      <ul class="header__list">
        <li class="header__item"><a href="<?= $activePage === "home" ? '#!' : '/views/home/home.php'; ?>" class="header__link <?= ($activePage === "home") ? "active" : "" ?>">Inicio</a></li>
        <li class="header__item"><a href="<?= $activePage === "about-us" ? '#!' : '/views/about-us/about-us.php'; ?>" class="header__link <?= ($activePage === "nosotros") ? "active" : "" ?>">Nosotros</a></li>
        <li class="header__item header__item--submenu">
          <a class="header__link <?= ($activePage === "products") ? "active" : "" ?>">Productos <i class="fa-solid fa-angle-down header__arrow"></i></a>
          <ul class="header__list--submenu">
            <?php foreach ($subMenuLinks as $subLink) : ?>
              <li class="header__item"><a href="/views/product-details/product-details.php?category=<?php echo $subLink["url"]; ?>" class="header__link--sub"><?php echo $subLink["title"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li class="header__item"><a href="<?= $activePage === "contact" ? '#!' : '/views/contact/contact.php'; ?>" class="header__link">Contacto</a></li>
      </ul>
    </nav>

    <nav class="nav-desktop">
      <ul class="header__list">
        <li class="header__item"><a href="<?= $activePage === "home" ? '#!' : '/views/home/home.php'; ?>" class="header__link <?= ($activePage === "home") ? "active" : "" ?>">Inicio</a></li>
        <li class="header__item"><a href="<?= $activePage === "about-us" ? '#!' : '/views/about-us/about-us.php'; ?>" class="header__link <?= ($activePage === "about-us") ? "active" : "" ?>">Nosotros</a></li>
        <li class="header__item header__item--submenu">
          <a class="header__link <?= ($activePage === "products") ? "active" : "" ?>">Productos <i class="fa-solid fa-angle-down header__arrow"></i></a>
          <ul class="header__list--submenu">
            <?php foreach ($subMenuLinks as $subLink) : ?>
              <li class="header__item"><a href="/views/products/products.php?category=<?php echo $subLink["url"] ?>" class="header__link--sub"><?php echo $subLink["title"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li class="header__item"><a href="<?= $activePage === "contact" ? '#!' : '/views/contact/contact.php'; ?>" class="header__link <?= ($activePage === "contact") ? "active" : "" ?>">Contacto</a></li>
    </nav>
  </div>
</header>