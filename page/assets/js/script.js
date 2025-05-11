const burger = document.querySelector('.burger');
const mainNav = document.querySelector('.main-nav');

burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    mainNav.classList.toggle('active');
})

document.querySelectorAll('main-nav a').forEach(link => {
    link.addEventListener('click',() => {
        burger.classList.remove('active');
        mainNav.classList.remove('active')
  })
})