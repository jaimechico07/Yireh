const bloque = document.querySelectorAll('.section-frequent-questions__block')
const title = document.querySelectorAll('.section-frequent-questions__contTitle')

title.forEach((ctitle, i) => {

  title[i].addEventListener('click', () => {

    bloque[i].classList.toggle('active')
    bloque[i].classList.toggle('inactive')
    bloque[i].classList.toggle('replace')

  })
})