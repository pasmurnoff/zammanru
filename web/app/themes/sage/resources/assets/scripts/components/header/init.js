export default function () {
  // There will be a JS-code for header
  console.log('header Code')
}

$('.hamburger').on('click', function(e) {
  $('.path').toggleClass('active');
  $('.home').toggleClass('overflow');
  $('.mobmenu').toggleClass('act');
  $('.mobmenu__menu').toggleClass('act');
  $('.header').toggleClass('act');
  $('.header').addClass('scrolled');

  e.preventDefault();
});

window.addEventListener('scroll', function() {
  const header = document.querySelector('.header');
  if (window.scrollY > 50) { // 50px - порог, после которого фон становится черным
      header.classList.add('scrolled');
  } else {
      header.classList.remove('scrolled');
  }
});