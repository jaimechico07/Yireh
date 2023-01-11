const listsFooter = document.querySelector(
  ".footer__group-grid"
);

listsFooter.addEventListener("click", function (event) {

  const boton = event.target.closest(".footer__title");

  if (!boton) return;

  const listFooter = boton.nextElementSibling;
  listFooter.classList.toggle('active');
});