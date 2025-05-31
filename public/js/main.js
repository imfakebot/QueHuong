document.addEventListener("DOMContentLoaded", function () {
  const slider = {
    container: document.querySelector(".tour-swiper"), // Container của slider
    wrapper: document.querySelector(".tour-swiper .swiper-wrapper"), // Wrapper chứa các slide
    slides: document.querySelectorAll(".tour-swiper .swiper-slide"), // Tất cả các slide
    prevBtn: document.querySelector(".tour-nav-prev"),
    nextBtn: document.querySelector(".tour-nav-next"),
    pagination: document.querySelector(".tour-swiper .swiper-pagination"),
    currentSlide: 0,
    slidesPerView: 3, // Số slide hiển thị cùng lúc (mặc định)
    spaceBetween: 20, // Khoảng trống giữa các slide (tính bằng pixel)
    slideWidthWithSpace: 0, // Chiều rộng thực tế của một slide bao gồm cả khoảng trống (nếu có)
    slideActualWidth: 0, // Chiều rộng của slide không tính khoảng trống
    autoplayInterval: null,
    autoplayDelay: 3000, // Thời gian tự động chuyển slide

    init() {
      if (!this.container || !this.wrapper || !this.slides.length) {
        // console.warn("Core slider elements for tour-swiper not found, not initializing.");
        return;
      }

      // Áp dụng CSS ban đầu cho wrapper
      this.wrapper.style.display = "flex";
      this.wrapper.style.transition = "transform 0.5s ease";
      // Đảm bảo container không bị cắt xén bởi overflow: hidden nếu các slide có margin/padding
      // this.container.style.overflow = "visible"; // Cân nhắc nếu cần

      this.addEventListeners();
      this.makeResponsive(); // Gọi để tính toán và cập nhật ban đầu
      this.startAutoplay();
    },

    calculateSlideWidth() {
      if (!this.container || this.slides.length === 0) return;

      const containerWidth = this.container.offsetWidth;

      // Tính toán chiều rộng của một slide không bao gồm khoảng trống
      // Tổng khoảng trống là (slidesPerView - 1) * spaceBetween
      let totalSpace = 0;
      if (this.slidesPerView > 1) {
        totalSpace = (this.slidesPerView - 1) * this.spaceBetween;
      }

      this.slideActualWidth =
        (containerWidth - totalSpace) / this.slidesPerView;

      // Chiều rộng mà mỗi slide sẽ chiếm (bao gồm cả khoảng trống bên phải nó, trừ slide cuối cùng trong view)
      this.slideWidthWithSpace = this.slideActualWidth + this.spaceBetween;

      if (this.slideActualWidth <= 0) {
        // console.warn("Calculated slideActualWidth is 0 or negative. Container might not be visible or have no width, or spaceBetween is too large.");
        // Để tránh lỗi, gán giá trị tối thiểu
        this.slideActualWidth = containerWidth / this.slidesPerView;
        this.slideWidthWithSpace = this.slideActualWidth; // Không có space nếu lỗi
      }

      // Tổng chiều rộng của wrapper
      // (slideActualWidth * numSlides) + (spaceBetween * (numSlides - 1))
      const totalWrapperWidth =
        this.slideActualWidth * this.slides.length +
        this.spaceBetween * (this.slides.length - 1);
      this.wrapper.style.width = `${totalWrapperWidth}px`;

      // Áp dụng style cho từng slide
      this.slides.forEach((slide, index) => {
        slide.style.width = `${this.slideActualWidth}px`;
        slide.style.flex = `0 0 ${this.slideActualWidth}px`;
        // Áp dụng margin-right cho khoảng trống, trừ slide cuối cùng
        if (index < this.slides.length - 1) {
          slide.style.marginRight = `${this.spaceBetween}px`;
        } else {
          slide.style.marginRight = "0px"; // Slide cuối cùng không có margin-right
        }
      });
    },

    createPaginationDots() {
      if (!this.pagination) return;
      this.pagination.innerHTML = "";

      if (this.slides.length === 0) {
        this.pagination.style.display = "none";
        return;
      }

      // Số trang = tổng số slide / số slide mỗi lần trượt (slidesPerGroup)
      // Trong trường hợp này, giả sử slidesPerGroup = slidesPerView
      const numPages = Math.ceil(this.slides.length / this.slidesPerView);

      if (numPages <= 1) {
        this.pagination.style.display = "none";
        return;
      }
      this.pagination.style.display = "flex"; // Sử dụng flex để các dot cách đều

      for (let i = 0; i < numPages; i++) {
        const dot = document.createElement("span");
        dot.classList.add("swiper-pagination-bullet");
        dot.addEventListener("click", () => {
          // Khi click dot, di chuyển đến slide đầu tiên của trang đó
          let targetSlide = i * this.slidesPerView;
          this.goToSlide(targetSlide);
          this.resetAutoplay();
        });
        this.pagination.appendChild(dot);
      }
      this.updateActivePaginationDot();
    },

    updateActivePaginationDot() {
      if (!this.pagination || this.slides.length === 0) return;

      let activeDotIndex = 0;
      if (this.slidesPerView > 0) {
        // Tính toán trang hiện tại dựa trên currentSlide và slidesPerView
        // Cần đảm bảo không vượt quá số trang
        const numPages = Math.ceil(this.slides.length / this.slidesPerView);
        activeDotIndex = Math.floor(this.currentSlide / this.slidesPerView);
        if (
          this.currentSlide + this.slidesPerView > this.slides.length &&
          this.slides.length > this.slidesPerView
        ) {
          // Nếu đang ở gần cuối, và số slide còn lại ít hơn slidesPerView
          // thì trang active là trang cuối cùng.
          activeDotIndex = numPages - 1;
        }
        activeDotIndex = Math.min(activeDotIndex, numPages - 1); // Không để vượt quá
        activeDotIndex = Math.max(0, activeDotIndex); // Không để nhỏ hơn 0
      }

      const dots = this.pagination.querySelectorAll(
        ".swiper-pagination-bullet"
      );
      dots.forEach((dot, index) => {
        dot.classList.toggle(
          "swiper-pagination-bullet-active",
          index === activeDotIndex
        );
      });
    },

    updateSlider() {
      // Offset tính bằng currentSlide nhân với chiều rộng của slide cộng với khoảng trống
      // nhưng chiều rộng này là slideWidthWithSpace chỉ dùng khi tính toán vị trí trượt
      // thực tế, wrapper sẽ trượt một khoảng bằng tổng của (slideActualWidth + spaceBetween) cho mỗi slide
      // offset = -this.currentSlide * (this.slideActualWidth + this.spaceBetween);
      // Tuy nhiên, vì slide cuối cùng trong view không có spaceAfter nó, cách tính này chưa hoàn toàn đúng cho mọi trường hợp
      // Cách chính xác hơn là tính tổng width của các slide trước đó + tổng space giữa chúng

      let offset = 0;
      for (let i = 0; i < this.currentSlide; i++) {
        offset -= this.slideActualWidth + this.spaceBetween;
      }

      this.wrapper.style.transform = `translateX(${offset}px)`;
      this.updateActivePaginationDot();
      this.updateNavButtonsState();
    },

    updateNavButtonsState() {
      if (!this.prevBtn || !this.nextBtn) return;

      const atStart = this.currentSlide <= 0;
      // atEnd khi currentSlide là slide cuối cùng có thể bắt đầu một view đầy đủ
      const atEnd =
        this.currentSlide >= this.slides.length - this.slidesPerView;

      this.prevBtn.disabled = atStart;
      this.prevBtn.style.opacity = atStart ? "0.5" : "1";
      this.prevBtn.style.cursor = atStart ? "default" : "pointer";

      this.nextBtn.disabled = atEnd;
      this.nextBtn.style.opacity = atEnd ? "0.5" : "1";
      this.nextBtn.style.cursor = atEnd ? "default" : "pointer";
    },

    nextSlide() {
      const maxSlideIndex = Math.max(
        0,
        this.slides.length - this.slidesPerView
      );
      if (this.currentSlide < maxSlideIndex) {
        this.currentSlide++;
      } else {
        // Logic vòng lặp: quay về slide đầu tiên
        this.currentSlide = 0;
        // Tạm thời bỏ transition để nhảy về đầu không bị hiệu ứng
        this.wrapper.style.transition = "none";
        this.updateSlider(); // Cập nhật vị trí ngay
        // Dùng requestAnimationFrame để đảm bảo DOM đã cập nhật rồi mới bật lại transition
        requestAnimationFrame(() => {
          requestAnimationFrame(() => {
            // double rAF for robustness in some browsers
            this.wrapper.style.transition = "transform 0.5s ease";
          });
        });
        // Không return ở đây để updateSlider() bên dưới vẫn chạy
      }
      this.updateSlider();
    },

    prevSlide() {
      if (this.currentSlide > 0) {
        this.currentSlide--;
      } else {
        // Logic vòng lặp: đi đến slide cuối cùng có thể
        this.currentSlide = Math.max(
          0,
          this.slides.length - this.slidesPerView
        );
        this.wrapper.style.transition = "none";
        this.updateSlider();
        requestAnimationFrame(() => {
          requestAnimationFrame(() => {
            this.wrapper.style.transition = "transform 0.5s ease";
          });
        });
        // Không return
      }
      this.updateSlider();
    },

    goToSlide(index) {
      const maxAllowedIndex = Math.max(
        0,
        this.slides.length - this.slidesPerView
      );
      this.currentSlide = Math.max(0, Math.min(index, maxAllowedIndex));
      this.updateSlider();
    },

    resetAutoplay() {
      clearInterval(this.autoplayInterval);
      // Chỉ bắt đầu lại autoplay nếu có nhiều hơn số slide hiển thị
      if (this.slides.length > this.slidesPerView) {
        this.autoplayInterval = setInterval(
          () => this.nextSlide(),
          this.autoplayDelay
        );
      }
    },

    startAutoplay() {
      if (this.slides.length <= this.slidesPerView) return; // Không autoplay nếu không đủ slide
      clearInterval(this.autoplayInterval); // Xóa interval cũ nếu có
      this.autoplayInterval = setInterval(
        () => this.nextSlide(),
        this.autoplayDelay
      );

      // Dừng autoplay khi hover
      this.container.addEventListener("mouseenter", () => {
        clearInterval(this.autoplayInterval);
      });

      // Tiếp tục autoplay khi rời chuột
      this.container.addEventListener("mouseleave", () => {
        this.resetAutoplay();
      });
    },

    addEventListeners() {
      if (this.nextBtn) {
        this.nextBtn.addEventListener("click", () => {
          if (this.nextBtn.disabled) return;
          this.nextSlide();
          this.resetAutoplay();
        });
      }
      if (this.prevBtn) {
        this.prevBtn.addEventListener("click", () => {
          if (this.prevBtn.disabled) return;
          this.prevSlide();
          this.resetAutoplay();
        });
      }
    },

    makeResponsive() {
      const updateView = () => {
        const oldSlidesPerView = this.slidesPerView;
        const windowWidth = window.innerWidth;

        // Xác định slidesPerView dựa trên chiều rộng cửa sổ
        if (windowWidth < 768) {
          this.slidesPerView = 1;
          this.spaceBetween = 10; // Điều chỉnh spaceBetween cho mobile
        } else if (windowWidth < 1024) {
          this.slidesPerView = 2;
          this.spaceBetween = 15; // Điều chỉnh spaceBetween cho tablet
        } else {
          this.slidesPerView = 3; // Mặc định cho màn hình lớn
          this.spaceBetween = 20; // Giá trị ban đầu
        }

        // Nếu slidesPerView thay đổi hoặc chưa có slideWidth, tính toán lại
        if (
          oldSlidesPerView !== this.slidesPerView ||
          this.slideActualWidth === 0
        ) {
          this.calculateSlideWidth();
          // Điều chỉnh currentSlide nếu nó vượt quá giới hạn mới
          const maxPossibleSlideIndex = Math.max(
            0,
            this.slides.length - this.slidesPerView
          );
          if (this.currentSlide > maxPossibleSlideIndex) {
            this.currentSlide = maxPossibleSlideIndex;
          }
          this.createPaginationDots(); // Tạo lại pagination nếu slidesPerView thay đổi
        } else {
          // Nếu slidesPerView không đổi nhưng kích thước cửa sổ thay đổi, vẫn cần tính lại width
          this.calculateSlideWidth();
        }
        this.updateSlider(); // Cập nhật vị trí slider
      };

      let resizeTimer;
      window.addEventListener("resize", () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(updateView, 250); // Debounce để tránh gọi liên tục
      });

      updateView(); // Gọi lần đầu để thiết lập
    },
  };

  // Khởi tạo slider cho tours
  // Đảm bảo các selector là duy nhất cho slider này nếu có nhiều slider trên trang
  if (document.querySelector(".tour-swiper")) {
    slider.init();
  } else {
    console.log("Tour Swiper not found. Custom slider not initialized.");
  }

  // Khởi tạo slider cho Destinations
  const destinationSlider = Object.assign({}, slider, {
    container: document.querySelector(".destination-swiper"),
    wrapper: document.querySelector(".destination-swiper .swiper-wrapper"),
    slides: document.querySelectorAll(".destination-swiper .swiper-slide"),
    prevBtn: document.querySelector(".destination-nav-prev"),
    nextBtn: document.querySelector(".destination-nav-next"),
    pagination: document.querySelector(
      ".destination-swiper .swiper-pagination"
    ),
    // Bạn có thể tùy chỉnh slidesPerView và spaceBetween mặc định ở đây nếu muốn
    // Tuy nhiên, hàm makeResponsive sẽ ghi đè chúng dựa trên kích thước màn hình.
    // Ví dụ:
    // slidesPerView: 4,
    // spaceBetween: 15,
  });

  if (destinationSlider.container && destinationSlider.slides.length > 0) {
    destinationSlider.init();
  }
});
