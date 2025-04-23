document.addEventListener("DOMContentLoaded", function () {
  // --- Xử lý nút tìm kiếm ---
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

    // Ngăn click vào form làm ẩn form
    searchForm.addEventListener("click", function (event) {
      event.stopPropagation();
    });
  }

  // --- Xử lý Dropdown/Mega Menu (Cơ bản cho Touch/Click & Đóng bên ngoài) ---
  const menuItemsWithSubmenu = document.querySelectorAll(
    ".nav-item.has-simple-dropdown, .nav-item.has-mega-menu"
  );

  menuItemsWithSubmenu.forEach((item) => {
    const link = item.querySelector("a"); // Lấy thẻ a bên trong
    const panel = item.querySelector(
      ".simple-dropdown-panel, .mega-menu-panel"
    );

    // Thêm ARIA attributes cho accessibility
    if (link && panel) {
      link.setAttribute("aria-haspopup", "true");
      link.setAttribute("aria-expanded", "false");
      panel.setAttribute("aria-hidden", "true");
      panel.style.display = "none"; // Ẩn ban đầu bằng JS để tránh FOUC
    }

    // Xử lý click vào mục menu cha (cho touch)
    item.addEventListener("click", function (event) {
      // Nếu màn hình đủ rộng (không phải mobile theo CSS) và panel tồn tại
      if (window.innerWidth > 992 && panel) {
        // Ngăn link điều hướng nếu chỉ muốn mở menu
        // Nếu bạn muốn link vẫn hoạt động VÀ mở menu thì bỏ dòng này
        // event.preventDefault();

        event.stopPropagation(); // Ngăn lan ra document

        // Kiểm tra xem menu này có đang mở không
        const isOpen = item.classList.contains("menu-is-open");

        // Đóng tất cả các menu khác trước khi mở menu này
        closeAllSubmenus();

        // Nếu menu này chưa mở thì mở nó ra
        if (!isOpen) {
          item.classList.add("menu-is-open");
          panel.style.display = "block"; // Hiện panel
          link.setAttribute("aria-expanded", "true");
          panel.setAttribute("aria-hidden", "false");
          // Delay nhỏ để transition CSS hoạt động
          setTimeout(() => {
            panel.style.opacity = "1";
            panel.style.visibility = "visible";
            panel.style.transform = "translateY(0)";
          }, 10);
        }
      }
    });

    // (Tùy chọn) Xử lý hover cho desktop (CSS đã xử lý nhưng JS có thể thêm class)
    item.addEventListener("mouseenter", function () {
      if (window.innerWidth > 992 && panel) {
        // Có thể thêm class 'is-hovering' nếu cần
        // Hiển thị panel (CSS hover đã làm)
        panel.style.display = "block";
        panel.setAttribute("aria-hidden", "false");
        setTimeout(() => {
          panel.style.opacity = "1";
          panel.style.visibility = "visible";
          panel.style.transform = "translateY(0)";
        }, 10);
      }
    });
    item.addEventListener("mouseleave", function () {
      if (
        window.innerWidth > 992 &&
        panel &&
        !item.classList.contains(
          "menu-is-open"
        ) /* Chỉ đóng khi không mở bằng click */
      ) {
        // Ẩn panel (CSS hover đã làm)
        panel.style.opacity = "0";
        panel.style.visibility = "hidden";
        panel.style.transform = "translateY(10px)";
        panel.setAttribute("aria-hidden", "true");
        // Có thể dùng setTimeout để chờ transition xong mới display:none
        setTimeout(() => {
          if (!item.classList.contains("menu-is-open")) {
            // Kiểm tra lại trước khi ẩn hẳn
            panel.style.display = "none";
          }
        }, 300); // Phải khớp với thời gian transition CSS
      }
    });
  });

  // --- Hàm đóng tất cả submenu và form tìm kiếm ---
  function closeAllSubmenus() {
    menuItemsWithSubmenu.forEach((item) => {
      item.classList.remove("menu-is-open");
      const panel = item.querySelector(
        ".simple-dropdown-panel, .mega-menu-panel"
      );
      const link = item.querySelector("a");
      if (panel && link) {
        panel.style.opacity = "0";
        panel.style.visibility = "hidden";
        panel.style.transform = "translateY(10px)";
        link.setAttribute("aria-expanded", "false");
        panel.setAttribute("aria-hidden", "true");
        // Có thể dùng setTimeout để chờ transition xong mới display:none
        setTimeout(() => {
          if (!item.classList.contains("menu-is-open")) {
            panel.style.display = "none";
          }
        }, 300);
      }
    });
    // Đóng cả form tìm kiếm
    if (searchForm && !searchForm.classList.contains("hidden")) {
      searchForm.classList.add("hidden");
    }
  }

  // --- Xử lý đóng khi click ra ngoài ---
  document.addEventListener("click", function (event) {
    // Kiểm tra xem click có phải bên trong một mục menu hoặc panel không
    let clickedInsideMenu = false;
    menuItemsWithSubmenu.forEach((item) => {
      if (item.contains(event.target)) {
        clickedInsideMenu = true;
      }
    });

    // Kiểm tra click có phải trong form tìm kiếm không
    const clickedInsideSearch = searchForm
      ? searchForm.contains(event.target)
      : false;
    const clickedOnSearchToggle = searchToggleButton
      ? searchToggleButton.contains(event.target)
      : false;

    // Nếu không click vào menu, không click vào form tìm kiếm, không click vào nút search
    if (!clickedInsideMenu && !clickedInsideSearch && !clickedOnSearchToggle) {
      closeAllSubmenus(); // Đóng tất cả
    }
  });

  // (Cần thêm) Xử lý Responsive:
  // - Thêm nút Hamburger
  // - Thêm JS để toggle menu chính trên mobile khi click hamburger
  // - Điều chỉnh lại cách hoạt động của submenu trên mobile (vd: thành accordion)

  // --- Đặt lại chiều rộng container của Mega Menu ---
  //   const megaMenu = document.querySelector(".mega-menu-panel");
  //   if (megaMenu) {
  //     const menuContainer = megaMenu.querySelector(".mega-menu-container");
  //     // Đặt lại chiều rộng container nếu cần
  //     menuContainer.style.width = `${
  //       document.querySelector(".site-header").offsetWidth
  //     }px`;
  //   }
});
