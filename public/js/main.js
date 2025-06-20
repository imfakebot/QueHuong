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

  // Initialize Swiper for Exciting Activities
  if (
    document.querySelector(".exciting-activities-slider .activities-swiper")
  ) {
    // Sửa selector section
    const activitiesSwiper = new Swiper(
      ".exciting-activities-slider .activities-swiper", // Sửa selector section
      {
        loop: true,
        grabCursor: true,
        pagination: {
          el: ".exciting-activities-slider .activities-pagination", // Sửa selector section
          clickable: true,
        },
        navigation: {
          nextEl: ".exciting-activities-slider .activity-nav-next", // Sửa selector nút next
          prevEl: ".exciting-activities-slider .activity-nav-prev", // Sửa selector nút prev
        },
        autoplay: {
          delay: 4000, // Thời gian tự động chuyển slide (ms), có thể khác các slider khác
          disableOnInteraction: false,
        },
        // Responsive breakpoints cho activities
        slidesPerView: 1, // Mặc định cho màn hình nhỏ nhất
        spaceBetween: 20, // Khoảng cách mặc định
        breakpoints: {
          // Khi chiều rộng màn hình >= 768px (tablets)
          768: {
            slidesPerView: 2,
            spaceBetween: 25,
          },
          // Khi chiều rộng màn hình >= 1024px (desktops)
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      }
    );
  } else {
    console.log(
      "Activities Swiper (.exciting-activities-slider .activities-swiper) not found. Swiper not initialized for activities."
    );
  }
});

// festivals
document.addEventListener('DOMContentLoaded', () => {
    const monthButtons = document.querySelectorAll('.timeline-month');
    const allMonthSections = document.querySelectorAll('.month-events');

    monthButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all
            monthButtons.forEach(b => b.classList.remove('active'));
            button.classList.add('active');

            const selectedMonth = button.dataset.month;

            // Show corresponding events
            allMonthSections.forEach(section => {
                if (section.dataset.month === selectedMonth) {
                    section.style.display = 'flex';
                } else {
                    section.style.display = 'none';
                }
            });
        });
    });
});
