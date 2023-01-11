const swiperHero = new Swiper(".swiper--home-hero", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 100,
  grabCursor: true,
  direction: "vertical",
  pagination: {
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    type: "progressbar",
  },
  scrollbar: {
    verticalClass: "swiper-scrollbar-vertical",
  },
});

const swiperOurMerchandising = new Swiper(
  ".swiper--our-merchandising > .swiper",
  {
    loop: true,
    slidesPerView: 1,
    grabCursor: true,
    navigation: {
      nextEl: ".swiper-button-next--merchandising ",
      prevEl: ".swiper-button-prev--merchandising",
    },
    autoplay: {
      delay: 3000,
    },

    breakpoints: {
      640: {
        slidesPerView: 2,
      },
    },
  }
);

const swiperFavorites = new Swiper(".swiper--favorites", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  grabCursor: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    1024: {
      slidesPerView: 2,
    },
    1280: {
      slidesPerView: 3,
    },

    1536: {
      slidesPerView: 4,
    },
  },
});

// sección postres
const swiperDesserts = new Swiper(".swiper--desserts", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  grabCursor: true,
  pagination: {
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    1024: {
      slidesPerGroup: 3,
      slidesPerView: 2,
    },
    1280: {
      slidesPerView: 3,
      slidesPerGroup: 3,
    },
  },
});

const swiperOurTeam = new Swiper(".swiper--our-team", {
  loop: true,
  slidesPerView: 1,
  grabCursor: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const swiperDetails = new Swiper(".swiper--details-Highlights", {
  loop: true,
  spaceBetween: 80,
  slidesPerView: 1,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 80,
      loop: true,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 80,
      loop: false,
    },
  },
});

const swiperProductRelated = new Swiper(".swiper--product-related", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  grabCursor: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 3000,
  },

  breakpoints: {
    640: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

const swiperWelcome = new Swiper(".swiper--welcome", {
  loop: true,
  slidesPerView: 1,
  grabCursor: true,
  navigation: {
    nextEl: ".swiper-button-next--bienvenido",
    prevEl: ".swiper-button-prev--bienvenido",
  },
  autoplay: {
    delay: 3000,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});

const swiperFilter = new Swiper(".swiper--filter", {
  // loop: true,
  speed: 400,
  // spaceBetween: 50,
  grabCursor: true,
  // autoplay: {
  //   delay: 2000,
  // },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
