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
      if (!this.container || !this.wrapper || !this.slides.length) {
        console.warn("Slider elements not found");
        return;
      }

      // Set initial styles
      this.wrapper.style.display = "flex";
      this.wrapper.style.transition = "transform 0.5s ease";
      this.wrapper.style.width = `${this.slides.length * 100}%`; // Add this line
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

      this.slides.forEach((slide) => {
        slide.style.width = `${this.slideWidth}px`;
        slide.style.flex = `0 0 ${this.slideWidth}px`;
        slide.style.padding = "0 10px";
        slide.style.boxSizing = "border-box";
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
      this.wrapper.style.width = `${this.slides.length * this.slideWidth}px`; // Add this line

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

  // Destination slider object
  const destinationSlider = {
    container: document.querySelector(".destination-swiper"),
    wrapper: document.querySelector(".destination-swiper .swiper-wrapper"),
    slides: document.querySelectorAll(".destination-swiper .swiper-slide"),
    prevBtn: document.querySelector(".destination-swiper .swiper-button-prev"),
    nextBtn: document.querySelector(".destination-swiper .swiper-button-next"),
    pagination: document.querySelector(".destination-swiper .swiper-pagination"),
    currentSlide: 0,
    slidesPerView: 3,
    slideWidth: 0,
    autoplayInterval: null,

    init() {
      if (!this.container || !this.wrapper || !this.slides.length) {
        console.warn("Destination slider elements not found");
        return;
      }

      // Set initial styles
      this.wrapper.style.display = "flex";
      this.wrapper.style.transition = "transform 0.5s ease";
      this.wrapper.style.width = `${this.slides.length * 100}%`;
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

      this.slides.forEach((slide) => {
        slide.style.width = `${this.slideWidth}px`;
        slide.style.flex = `0 0 ${this.slideWidth}px`;
        slide.style.padding = "0 10px";
        slide.style.boxSizing = "border-box";
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
      this.wrapper.style.width = `${this.slides.length * this.slideWidth}px`;

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

  // Initialize the destination slider
  destinationSlider.init();

  // Select all destination items
  const destinations = document.querySelectorAll(".destination-item");

  // Options for the Intersection Observer
  const options = {
    root: null, // use viewport
    threshold: 0.2, // trigger when 20% of item is visible
    rootMargin: "0px",
  };

  // Callback function when items become visible
  const animateOnScroll = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = "1";
        entry.target.style.transform = "translateY(0)";
        // Stop observing after animation
        observer.unobserve(entry.target);
      }
    });
  };

  // Create the observer
  const observer = new IntersectionObserver(animateOnScroll, options);

  // Add initial styles and observe each destination
  destinations.forEach((destination, index) => {
    // Set initial styles
    destination.style.opacity = "0";
    destination.style.transform = "translateY(50px)";
    destination.style.transition = `all 0.6s ease ${index * 0.1}s`;

    // Start observing
    observer.observe(destination);
  });
});
