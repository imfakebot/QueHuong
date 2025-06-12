const gallerySwiper = new Swiper('.gallery-swiper', {
  loop: true,
  spaceBetween: 20,
  slidesPerView: 1.2,
  centeredSlides: true,
  navigation: {
    nextEl: '.gallery-nav-next',
    prevEl: '.gallery-nav-prev',
  },
  breakpoints: {
    768: {
      slidesPerView: 2.5,
    },
    1024: {
      slidesPerView: 3.5,
    },
  },
});
