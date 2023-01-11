/*=========== MIXITUP FILTER ================*/

const filterActive = document.querySelectorAll(".btn--filter");

function activeBtn() {
  filterActive.forEach((l) => {
    l.classList.remove("active");
  });

  this.classList.add("active");
}

filterActive.forEach((l) => {
  l.addEventListener("click", activeBtn);
});

let mixerPorfolio = mixitup(".card-product__grid", {
  selectors: {
    target: ".card-product",
  },
  animation: {
    duration: 300,
  },
});
