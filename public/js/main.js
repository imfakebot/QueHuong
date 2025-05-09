document.addEventListener("DOMContentLoaded", function () {
  const slider = {
    container: document.querySelector(".tour-swiper"),
    wrapper: document.querySelector(".swiper-wrapper"),
    slides: document.querySelectorAll(".swiper-slide"),
    prevBtn: document.querySelector(".swiper-button-prev"),
    nextBtn: document.querySelector(".swiper-button-next"),
    pagination: document.querySelector(".swiper-pagination"),
    currentSlide: 0,
    slidesPerView: 3,
    slideWidth: 0,
    autoplayInterval: null,

    init() {
      // Set initial styles
      this.wrapper.style.display = "flex";
      this.wrapper.style.transition = "transform 0.5s ease";
      this.calculateSlideWidth();
      this.createPaginationDots();
      this.addEventListeners();
      this.updateSlider();
      this.startAutoplay();
      this.makeResponsive();
    },

    calculateSlideWidth() {
      this.slideWidth = this.container.offsetWidth / this.slidesPerView;
      this.slides.forEach((slide) => {
        slide.style.flex = `0 0 ${this.slideWidth}px`;
        slide.style.padding = "0 10px";
      });
    },

    createPaginationDots() {
      for (
        let i = 0;
        i < Math.ceil(this.slides.length / this.slidesPerView);
        i++
      ) {
        const dot = document.createElement("span");
        dot.classList.add("swiper-pagination-bullet");
        if (i === 0) dot.classList.add("swiper-pagination-bullet-active");
        dot.addEventListener("click", () =>
          this.goToSlide(i * this.slidesPerView)
        );
        this.pagination.appendChild(dot);
      }
    },

    updateSlider() {
      const offset = -this.currentSlide * this.slideWidth;
      this.wrapper.style.transform = `translateX(${offset}px)`;

      // Update pagination
      const activeDotIndex = Math.floor(this.currentSlide / this.slidesPerView);
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

    nextSlide() {
      if (this.currentSlide < this.slides.length - this.slidesPerView) {
        this.currentSlide++;
        this.updateSlider();
      } else {
        // Loop to first slide
        this.currentSlide = 0;
        this.updateSlider();
      }
    },

    prevSlide() {
      if (this.currentSlide > 0) {
        this.currentSlide--;
        this.updateSlider();
      } else {
        // Loop to last slide
        this.currentSlide = this.slides.length - this.slidesPerView;
        this.updateSlider();
      }
    },

    goToSlide(index) {
      this.currentSlide = index;
      this.updateSlider();
    },

    startAutoplay() {
      this.autoplayInterval = setInterval(() => this.nextSlide(), 5000);

      // Pause on hover
      this.container.addEventListener("mouseenter", () => {
        clearInterval(this.autoplayInterval);
      });

      this.container.addEventListener("mouseleave", () => {
        this.autoplayInterval = setInterval(() => this.nextSlide(), 5000);
      });
    },

    makeResponsive() {
      const updateView = () => {
        if (window.innerWidth < 768) {
          this.slidesPerView = 1;
        } else if (window.innerWidth < 1024) {
          this.slidesPerView = 2;
        } else {
          this.slidesPerView = 3;
        }
        this.calculateSlideWidth();
        this.updateSlider();
      };

      window.addEventListener("resize", updateView);
      updateView();
    },

    addEventListeners() {
      this.prevBtn.addEventListener("click", () => this.prevSlide());
      this.nextBtn.addEventListener("click", () => this.nextSlide());

      // Touch events
      let startX, moveX;
      this.wrapper.addEventListener("touchstart", (e) => {
        startX = e.touches[0].clientX;
      });

      this.wrapper.addEventListener("touchmove", (e) => {
        moveX = e.touches[0].clientX;
      });

      this.wrapper.addEventListener("touchend", () => {
        if (startX - moveX > 50) {
          this.nextSlide();
        } else if (moveX - startX > 50) {
          this.prevSlide();
        }
      });
    },
  };

  // Initialize the slider
  slider.init();
});
