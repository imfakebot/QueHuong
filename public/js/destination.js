 const swiper = new Swiper('.swiper', {
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      slidesPerView: 1,
      spaceBetween: 20,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
      }
    });

    const faders = document.querySelectorAll('.fade-in');
    window.addEventListener('scroll', () => {
      const trigger = window.innerHeight / 1.1;
      faders.forEach(el => {
        const rect = el.getBoundingClientRect();
        if (rect.top < trigger) {
          el.classList.add('visible');
        }
      });
    });