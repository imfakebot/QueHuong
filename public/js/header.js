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

  // chức năng login và test bằng API
  document.addEventListener('submit', async function (e) {
    if (e.target && e.target.classList.contains('login-form')) {
      e.preventDefault();
      const formData = new FormData(e.target);
      const payload = {
        username: formData.get('username'),
        password: formData.get('password'),
      };
      try {
        const resp = await fetch('/api/login', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(payload),
        });
        const data = await resp.json();
        if (!data.ok) {
          alert(data.error || 'Đăng nhập thất bại');
          return;
        }
        alert(`Đăng nhập thành công! Xin chào, ${data.user.userName}`);
      } catch (err) {
        console.error(err);
        alert('Lỗi mạng');
      }
    }
  });

  // === Kết thúc mã cho hiệu ứng header sticky ===
}); // Kết thúc DOMContentLoaded
