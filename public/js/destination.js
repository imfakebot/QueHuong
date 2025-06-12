document.addEventListener("DOMContentLoaded", function () {
  // Initialize Swiper for the gallery
  const gallerySwiperElement = document.querySelector(".gallery-swiper");

  if (gallerySwiperElement) {
    const swiper = new Swiper(gallerySwiperElement, {
      // Sử dụng selector cụ thể hơn
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      slidesPerView: 1,
      spaceBetween: 20,
      navigation: {
        nextEl: ".gallery-nav-next", // Selector cụ thể hơn cho nút next
        prevEl: ".gallery-nav-prev", // Selector cụ thể hơn cho nút prev
      },
      // Bạn có thể thêm pagination ở đây nếu muốn, ví dụ:
      // pagination: {
      //   el: '.gallery-swiper .swiper-pagination', // Đảm bảo phần tử này tồn tại trong HTML
      //   clickable: true,
      // },
      breakpoints: {
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
      },
    });
  } else {
    // Tùy chọn: Ghi log nếu không tìm thấy phần tử Swiper để dễ debug
    // console.warn('Gallery Swiper element (.gallery-swiper) not found on this page.');
  }

  // Fade-in effect using IntersectionObserver for better performance
  const faders = document.querySelectorAll(".fade-in");

  if (faders.length > 0) {
    const appearOptions = {
      threshold: 0.1, // Phần tử được coi là hiển thị khi 10% của nó vào viewport
      // rootMargin: "0px 0px -50px 0px" // Tùy chọn: điều chỉnh vùng kích hoạt
    };

    const appearOnScroll = new IntersectionObserver(function (
      entries,
      observer
    ) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target); // Ngừng theo dõi sau khi đã hiển thị
        }
      });
    },
    appearOptions);

    faders.forEach((fader) => {
      appearOnScroll.observe(fader);
    });
  }

  // Lightbox configuration
  lightbox.option({
    resizeDuration: 200,
    wrapAround: true,
    albumLabel: "Ảnh %1 / %2",
    fadeDuration: 300,
    imageFadeDuration: 300,
    positionFromTop: 100,
  });

  // Handle image loading animations
  const images = document.querySelectorAll(".card img");

  images.forEach((img) => {
    if (img.complete) {
      img.classList.add("loaded");
    } else {
      img.addEventListener("load", () => {
        img.classList.add("loaded");
      });
    }
  });
});
