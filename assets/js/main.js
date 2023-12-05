function openMenu(event) {
  event.preventDefault()
  const btnMenu = document.querySelector('.menu__btn');
  const listMenu = document.querySelector('.menu__list');
  const btnElement = document.querySelector('.menu__btn__element');
  btnMenu.classList.toggle('menu__btn--close');
  listMenu.classList.toggle('menu__list--active');
  btnElement.classList.toggle('menu__btn__element--close');
}
function openFAQ(event) {
  event.preventDefault()
  let items = document.querySelectorAll('.faq__box__items');
  let faqId = event.target.getAttribute('data-faqid');
  for (let i = 0; i < items.length; i++) {

    let id = items[i].getAttribute('data-id')
    console.log(id)
    console.log(faqId)
    if (id === faqId) {
      items[i].classList.toggle('faq__box__items--active');
    }
  }
}
function openDropMenu(event) {
  event.preventDefault();
  const dropMenu = document.querySelector('.drop__menu');
  dropMenu.classList.toggle('drop__menu--open');
}

window.onscroll = function () { fixHeader() }

let header = document.querySelector('.header')
let sticky = header.offsetTop
let bodyTop = document.querySelector('body')

function fixHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("header--fixed")
    bodyTop.classList.add("body--top")
  } else {
    header.classList.remove("header--fixed")
    bodyTop.classList.remove("body--top")
  }
}