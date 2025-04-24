// File: public/js/main.js

document.addEventListener("DOMContentLoaded", function () {
  // --- Xử lý Ẩn/Hiện Ô Tìm Kiếm ---
  const searchToggleButton = document.getElementById("search-toggle-btn");
  const searchForm = document.getElementById("search-form");
  const searchInput = document.getElementById("search-input");

  if (searchToggleButton && searchForm && searchInput) {
    searchToggleButton.addEventListener("click", function (event) {
      event.stopPropagation();
      searchForm.classList.toggle("hidden");

      if (!searchForm.classList.contains("hidden")) {
        searchInput.focus();
      }
    });

    document.addEventListener("click", function (event) {
      const isClickInsideForm = searchForm.contains(event.target);
      const isClickOnToggleButton = searchToggleButton.contains(event.target);

      if (
        !searchForm.classList.contains("hidden") &&
        !isClickInsideForm &&
        !isClickOnToggleButton
      ) {
        searchForm.classList.add("hidden");
      }
    });

    searchForm.addEventListener("click", function (event) {
      event.stopPropagation();
    });
  } else {
    console.error("Search toggle button, form, or input element not found!");
  }

  // --- Xử lý Hamburger Menu ---
  const hamburgerButton = document.getElementById("hamburger-button");
  const mainNavigation = document.querySelector(".main-navigation"); // Lấy thẻ nav chứa ul

  if (hamburgerButton && mainNavigation) {
    hamburgerButton.addEventListener("click", function () {
      // Toggle class 'is-active' cho nút hamburger
      this.classList.toggle("is-active");

      // Toggle class 'is-open' cho menu navigation
      mainNavigation.classList.toggle("is-open");

      // Cập nhật aria-expanded cho accessibility
      const isOpen = mainNavigation.classList.contains("is-open");
      this.setAttribute("aria-expanded", isOpen);
    });

    // (Tùy chọn) Đóng menu khi click vào link trên mobile
    const navLinks = mainNavigation.querySelectorAll("a");
    navLinks.forEach((link) => {
      link.addEventListener("click", function () {
        if (mainNavigation.classList.contains("is-open")) {
          hamburgerButton.classList.remove("is-active");
          mainNavigation.classList.remove("is-open");
          hamburgerButton.setAttribute("aria-expanded", "false");
        }
      });
    });

    // (Tùy chọn) Đóng menu khi click ra ngoài khu vực menu
    document.addEventListener("click", function (event) {
      const isClickInsideNav = mainNavigation.contains(event.target);
      const isClickOnHamburger = hamburgerButton.contains(event.target);

      if (
        mainNavigation.classList.contains("is-open") &&
        !isClickInsideNav &&
        !isClickOnHamburger
      ) {
        hamburgerButton.classList.remove("is-active");
        mainNavigation.classList.remove("is-open");
        hamburgerButton.setAttribute("aria-expanded", "false");
      }
    });
  } else {
    console.error("Hamburger button or main navigation element not found!");
  }
}); // Kết thúc DOMContentLoaded// File: public/js/main.js

document.addEventListener("DOMContentLoaded", function () {
  // --- Xử lý Ẩn/Hiện Ô Tìm Kiếm ---
  const searchToggleButton = document.getElementById("search-toggle-btn");
  const searchForm = document.getElementById("search-form");
  const searchInput = document.getElementById("search-input");

  if (searchToggleButton && searchForm && searchInput) {
    searchToggleButton.addEventListener("click", function (event) {
      event.stopPropagation();
      searchForm.classList.toggle("hidden");

      if (!searchForm.classList.contains("hidden")) {
        searchInput.focus();
      }
    });

    document.addEventListener("click", function (event) {
      const isClickInsideForm = searchForm.contains(event.target);
      const isClickOnToggleButton = searchToggleButton.contains(event.target);

      if (
        !searchForm.classList.contains("hidden") &&
        !isClickInsideForm &&
        !isClickOnToggleButton
      ) {
        searchForm.classList.add("hidden");
      }
    });

    searchForm.addEventListener("click", function (event) {
      event.stopPropagation();
    });
  } else {
    console.error("Search toggle button, form, or input element not found!");
  }

  // --- Xử lý Hamburger Menu ---
  const hamburgerButton = document.getElementById("hamburger-button");
  const mainNavigation = document.querySelector(".main-navigation"); // Lấy thẻ nav chứa ul

  if (hamburgerButton && mainNavigation) {
    hamburgerButton.addEventListener("click", function () {
      // Toggle class 'is-active' cho nút hamburger
      this.classList.toggle("is-active");

      // Toggle class 'is-open' cho menu navigation
      mainNavigation.classList.toggle("is-open");

      // Cập nhật aria-expanded cho accessibility
      const isOpen = mainNavigation.classList.contains("is-open");
      this.setAttribute("aria-expanded", isOpen);
    });

    // (Tùy chọn) Đóng menu khi click vào link trên mobile
    const navLinks = mainNavigation.querySelectorAll("a");
    navLinks.forEach((link) => {
      link.addEventListener("click", function () {
        if (mainNavigation.classList.contains("is-open")) {
          hamburgerButton.classList.remove("is-active");
          mainNavigation.classList.remove("is-open");
          hamburgerButton.setAttribute("aria-expanded", "false");
        }
      });
    });

    // (Tùy chọn) Đóng menu khi click ra ngoài khu vực menu
    document.addEventListener("click", function (event) {
      const isClickInsideNav = mainNavigation.contains(event.target);
      const isClickOnHamburger = hamburgerButton.contains(event.target);

      if (
        mainNavigation.classList.contains("is-open") &&
        !isClickInsideNav &&
        !isClickOnHamburger
      ) {
        hamburgerButton.classList.remove("is-active");
        mainNavigation.classList.remove("is-open");
        hamburgerButton.setAttribute("aria-expanded", "false");
      }
    });
  } else {
    console.error("Hamburger button or main navigation element not found!");
  }
}); // Kết thúc DOMContentLoaded
