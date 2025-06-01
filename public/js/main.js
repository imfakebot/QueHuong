document.addEventListener("DOMContentLoaded", function () {
  // Initialize Swiper for Featured Tours
  if (document.querySelector(".featured-tours .tour-swiper")) {
    const tourSwiper = new Swiper(".featured-tours .tour-swiper", {
      loop: true,
      grabCursor: true,
      pagination: {
        el: ".featured-tours .swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".featured-tours .tour-nav-next",
        prevEl: ".featured-tours .tour-nav-prev",
      },
      autoplay: {
        delay: 3000, // Thời gian tự động chuyển slide (ms)
        disableOnInteraction: false, // Tiếp tục autoplay sau khi người dùng tương tác
      },
      // Responsive breakpoints
      slidesPerView: 1, // Mặc định cho màn hình nhỏ nhất
      spaceBetween: 10, // Khoảng cách mặc định cho màn hình nhỏ nhất
      breakpoints: {
        // Khi chiều rộng màn hình >= 768px (tablets)
        768: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        // Khi chiều rộng màn hình >= 1024px (desktops)
        1024: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
      },
    });
  } else {
    console.log(
      "Tour Swiper (.featured-tours .tour-swiper) not found. Swiper not initialized for tours."
    );
  }

  // Initialize Swiper for Must-Visit Destinations
  if (document.querySelector(".featured-destinations .destination-swiper")) {
    const destinationSwiper = new Swiper(
      ".featured-destinations .destination-swiper",
      {
        loop: true,
        grabCursor: true,
        pagination: {
          el: ".featured-destinations .swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".featured-destinations .destination-nav-next",
          prevEl: ".featured-destinations .destination-nav-prev",
        },
        autoplay: {
          delay: 3500, // Có thể đặt thời gian khác cho slider này
          disableOnInteraction: false,
        },
        // Responsive breakpoints cho destinations
        // Các mục destinations thường nhỏ hơn, có thể hiển thị nhiều hơn
        slidesPerView: 2, // Mặc định cho màn hình nhỏ nhất (ví dụ: 2 destinations)
        spaceBetween: 10, // Khoảng cách mặc định
        breakpoints: {
          // Khi chiều rộng màn hình >= 640px (mobile lớn / tablet nhỏ)
          640: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
          // Khi chiều rộng màn hình >= 768px (tablets)
          768: {
            slidesPerView: 4,
            spaceBetween: 15,
          },
          // Khi chiều rộng màn hình >= 1024px (desktops)
          1024: {
            slidesPerView: 5, // Hiển thị nhiều destinations hơn trên desktop
            spaceBetween: 20,
          },
        },
      }
    );
  } else {
    console.log(
      "Destination Swiper (.featured-destinations .destination-swiper) not found. Swiper not initialized for destinations."
    );
  }
});
