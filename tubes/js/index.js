const burgerIcon = document.querySelector('#burger');
const navbarMenu = document.querySelector('#nav-links');

burgerIcon.addEventListener('click', () => {
  navbarMenu.classList.toggle('is-active');
})

$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar");
    var $header = $(".header");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $header.height());
  });
});

$(document).ready(function () {
  $('.slider-best-choice').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ],
  });
});


const keyword = document.querySelector('.keyword');
const container = document.querySelector('.data');

keyword.addEventListener('keyup', function () {

  fetch('../php/ajax.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));
});
