const navEl = document.querySelector('.nav');
const hamburgerEl = document.querySelector('.hamburger');
hamburgerEl.addEventListener('click',() =>{
navEl.classList.toggle('nav__open');
hamburgerEl.classList.toggle('hamburger__open');
});

navEl.addEventListener('click', () => {
  navEl.classList.remove('nav__open');
  hamburgerEl.classList.remove('hamburger__open');


});