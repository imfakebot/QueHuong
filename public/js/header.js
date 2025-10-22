// File: public/js/main.js

document.addEventListener("DOMContentLoaded", function () {
  // --- Xử lý Ẩn/Hiện Ô Tìm Kiếm ---
  const searchBtn = document.getElementById("search-toggle-btn");
  const searchForm = document.getElementById("search-form");
  const searchInput = document.getElementById("search-input");

  if (searchBtn && searchForm && searchInput) {
    searchBtn.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      searchForm.classList.toggle("active");
      if (searchForm.classList.contains("active")) {
        searchInput.focus();
      }
    });

    // Click outside to close
    document.addEventListener("click", function (e) {
      if (!searchForm.contains(e.target) && !searchBtn.contains(e.target)) {
        searchForm.classList.remove("active");
      }
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
        ! isClickInsideNav &&
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

  // === Thêm mã cho hiệu ứng header sticky ===
  const siteHeader = document.querySelector(".site-header");
  if (siteHeader) {
    const scrollThreshold = 200; // Số pixel cần cuộn trước khi hiệu ứng được áp dụng

    window.addEventListener("scroll", function () {
      if (window.pageYOffset > scrollThreshold) {
        siteHeader.classList.add("scrolled");
      } else {
        siteHeader.classList.remove("scrolled");
      }
    });
  } else {
    console.warn(
      "Site header element (.site-header) not found for sticky effect."
    );
  }
  // === Xử lý nút Đăng nhập (mở modal nếu có, hoặc điều hướng) ===
  const loginButton = document.querySelector('.login-button');
  const loginModal = document.getElementById('login-modal');

  if (loginButton) {
    loginButton.addEventListener('click', function (e) {
      // Nếu có modal trên trang, chặn điều hướng và mở modal
      if (loginModal) {
        e.preventDefault();
        // Thêm lớp open để hiển thị modal; class và styles modal cần được định nghĩa nếu sử dụng
        loginModal.classList.add('open');
        loginModal.setAttribute('aria-hidden', 'false');
        // Tìm input đầu tiên để focus
        const firstInput = loginModal.querySelector('input, button, textarea, [tabindex]');
        if (firstInput) firstInput.focus();
      }
      // Nếu không có modal, liên kết /login sẽ hoạt động mặc định (điều hướng)
    });

    // Nếu modal tồn tại, xử lý đóng modal khi click ngoài hoặc nhấn ESC
    if (loginModal) {
      // Click outside để đóng
      loginModal.addEventListener('click', function (evt) {
        if (evt.target === loginModal) {
          loginModal.classList.remove('open');
          loginModal.setAttribute('aria-hidden', 'true');
        }
      });

      // ESC để đóng
      document.addEventListener('keydown', function (evt) {
        if (evt.key === 'Escape' && loginModal.classList.contains('open')) {
          loginModal.classList.remove('open');
          loginModal.setAttribute('aria-hidden', 'true');
        }
      });

      // Nút đóng trong modal
      const modalClose = loginModal.querySelector('.modal-close');
      if (modalClose) {
        modalClose.addEventListener('click', function () {
          loginModal.classList.remove('open');
          loginModal.setAttribute('aria-hidden', 'true');
        });
      }
    }
  }
  // === Kết thúc mã cho hiệu ứng header sticky ===
}); // Kết thúc DOMContentLoaded
