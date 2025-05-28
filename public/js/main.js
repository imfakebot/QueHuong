document.addEventListener("DOMContentLoaded", function () {
  const slider = {
    container: document.querySelector(".tour-swiper"),
    wrapper: document.querySelector(".swiper-wrapper"),
    slides: document.querySelectorAll(".swiper-slide"),
    prevBtn: document.querySelector(".tour-nav-prev"), // Updated selector
    nextBtn: document.querySelector(".tour-nav-next"), // Updated selector
    pagination: document.querySelector(".swiper-pagination"),
    currentSlide: 0,
    slidesPerView: 3,
    slideWidth: 0,
    autoplayInterval: null,

    init() {
      if (!this.container || !this.wrapper || !this.slides.length) {
        console.warn("Slider elements not found");
        return;
      }

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
      const containerWidth = this.container.offsetWidth;
      this.slideWidth = containerWidth / this.slidesPerView;
      const totalWidth = this.slideWidth * this.slides.length;

      this.wrapper.style.width = `${totalWidth}px`;

      this.slides.forEach((slide) => {
        slide.style.width = `${this.slideWidth}px`;
        slide.style.flex = `0 0 ${this.slideWidth}px`;
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

      // Update navigation buttons state
      if (this.prevBtn && this.nextBtn) {
        this.prevBtn.style.opacity = this.currentSlide <= 0 ? "0.5" : "1";
        this.nextBtn.style.opacity =
          this.currentSlide >= this.slides.length - this.slidesPerView
            ? "0.5"
            : "1";
      }
    },

    nextSlide() {
      const maxSlide = this.slides.length - this.slidesPerView;
      if (this.currentSlide < maxSlide) {
        this.currentSlide++;
        this.updateSlider();
      } else {
        // Smooth loop to first slide
        this.currentSlide = 0;
        this.wrapper.style.transition = "none";
        this.updateSlider();
        setTimeout(() => {
          this.wrapper.style.transition = "transform 0.5s ease";
        }, 50);
      }
    },

    prevSlide() {
      if (this.currentSlide > 0) {
        this.currentSlide--;
        this.updateSlider();
      } else {
        // Smooth loop to last slide
        this.currentSlide = this.slides.length - this.slidesPerView;
        this.wrapper.style.transition = "none";
        this.updateSlider();
        setTimeout(() => {
          this.wrapper.style.transition = "transform 0.5s ease";
        }, 50);
      }
    },

    goToSlide(index) {
      this.currentSlide = index;
      this.updateSlider();
    },

    startAutoplay() {
      this.autoplayInterval = setInterval(() => this.nextSlide(), 4000);

      this.container.addEventListener("mouseenter", () => {
        clearInterval(this.autoplayInterval);
      });

      this.container.addEventListener("mouseleave", () => {
        this.autoplayInterval = setInterval(() => this.nextSlide(), 4000);
      });
    },

    makeResponsive() {
      const updateView = () => {
        const width = window.innerWidth;
        if (width < 768) {
          this.slidesPerView = 1;
        } else if (width < 1024) {
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
  };

  // Initialize the slider
  slider.init();
});
