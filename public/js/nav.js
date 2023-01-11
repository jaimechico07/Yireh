const burgerIcon = document.getElementById("burger");
const navMenu = document.getElementById("menu");
const arrows = [...document.querySelectorAll(".header__arrow")];
const hasSubMenu = [...document.querySelectorAll(".header__item--submenu")];
const subMenus = [...document.querySelectorAll(".header__list--submenu")];
const logo = document.querySelector(".header__logo");
const header_inner = document.querySelector(".header_inner");

burgerIcon.addEventListener("click", () => {
  if (burgerIcon.classList.contains("fa-bars")) {
    burgerIcon.classList.remove("fa-bars");
    burgerIcon.classList.add("fa-circle-xmark");
  } else {
    burgerIcon.classList.remove("fa-circle-xmark");
    burgerIcon.classList.add("fa-bars");
    logo.classList.remove("hidden");
  }
  navMenu.classList.toggle("active");
});

hasSubMenu.forEach((subItem) => {
  subItem.addEventListener("click", () => {
    arrows.forEach((arrow) => {
      arrow.classList.toggle("active");
    });
    subMenus.forEach((subMenu) => {
      if (subMenu.classList.contains("active")) {
        subMenu.classList.remove("active");
        subMenu.style.maxHeight = `${0}px`;
      } else {
        subMenu.classList.add("active");
        subMenu.style.maxHeight = `${subMenu.scrollHeight / 2}px`;
      }
    });
  });

  subItem.addEventListener("mouseleave", () => {
    subItem.classList.remove("active");
    arrows.forEach((arrow) => {
      if (arrow.classList.contains("active")) {
        arrow.classList.toggle("active");
      }
    });
    subMenus.forEach((subMenu) => {
      subMenu.classList.remove("active");
      subMenu.style.maxHeight = `${0}px`;
    });
  });
});
