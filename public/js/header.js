// File: public/js/main.js

// Đảm bảo code chạy sau khi toàn bộ cấu trúc HTML (DOM) đã được tải
document.addEventListener("DOMContentLoaded", function () {
  // Lấy các phần tử cần thiết từ HTML bằng ID
  const searchToggleButton = document.getElementById("search-toggle-btn");
  const searchForm = document.getElementById("search-form");
  const searchInput = document.getElementById("search-input");

  // --- Xử lý ẩn/hiện ô tìm kiếm ---

  // Kiểm tra xem các phần tử có thực sự tồn tại trên trang không trước khi thêm sự kiện
  if (searchToggleButton && searchForm && searchInput) {
    // 1. Bắt sự kiện click vào nút icon tìm kiếm
    searchToggleButton.addEventListener("click", function (event) {
      // Ngăn sự kiện click lan ra các phần tử cha (như document)
      // Điều này quan trọng để tính năng "click bên ngoài để ẩn" hoạt động đúng
      event.stopPropagation();

      // Toggle class 'hidden' trên form tìm kiếm
      // Nếu form đang có class 'hidden', nó sẽ bị xóa (form hiện ra)
      // Nếu form không có class 'hidden', nó sẽ được thêm vào (form ẩn đi)
      searchForm.classList.toggle("hidden");

      // Tự động focus vào ô input khi form vừa được hiện ra
      // Kiểm tra xem form CÓ KHÔNG chứa class 'hidden' (tức là đang hiện)
      if (!searchForm.classList.contains("hidden")) {
        searchInput.focus(); // Đặt con trỏ vào ô nhập liệu
      }
    });

    // 2. (Tùy chọn nhưng nên có) Bắt sự kiện click vào bất cứ đâu trên trang (document)
    // để ẩn form nếu người dùng click ra bên ngoài
    document.addEventListener("click", function (event) {
      // Kiểm tra xem form có đang hiện không (!hidden)
      // VÀ kiểm tra xem nơi click có nằm BÊN NGOÀI form không
      // VÀ kiểm tra xem nơi click có phải là nút toggle không
      const isClickInsideForm = searchForm.contains(event.target);
      const isClickOnToggleButton = searchToggleButton.contains(event.target);

      if (
        !searchForm.classList.contains("hidden") &&
        !isClickInsideForm &&
        !isClickOnToggleButton
      ) {
        searchForm.classList.add("hidden"); // Thêm class 'hidden' để ẩn form
      }
    });

    // 3. (Tùy chọn) Ngăn việc click vào BÊN TRONG form làm ẩn form
    // Do cơ chế "event bubbling", nếu không có dòng này, click vào input
    // cũng có thể bị coi là click vào document và làm ẩn form ở bước 2.
    searchForm.addEventListener("click", function (event) {
      event.stopPropagation(); // Ngăn sự kiện click lan ra document
    });
  } else {
    // Thông báo lỗi nếu không tìm thấy các phần tử cần thiết
    // Giúp dễ dàng debug nếu đặt sai ID trong HTML
    console.error("Search toggle button, form, or input element not found!");
  }

  // --- (Tùy chọn) Xử lý Mega Menu (nếu cần bằng JS, ví dụ cho mobile) ---
  // Hiện tại Mega Menu đang hoạt động bằng CSS :hover.
  // Nếu bạn muốn điều khiển bằng click hoặc làm menu hamburger cho mobile,
  // bạn sẽ thêm code xử lý tương tự ở đây.
  // Ví dụ cơ bản để xử lý click (chỉ là ý tưởng):
  /*
    const megaMenuToggleLinks = document.querySelectorAll('.nav-item.has-mega-menu > a');

    megaMenuToggleLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            // Chỉ ngăn hành động mặc định nếu dùng cho mobile toggle
            // if (window.innerWidth < 992) {
            //     event.preventDefault();
            //     const parentLi = this.closest('.nav-item');
            //     if (parentLi) {
            //         parentLi.classList.toggle('menu-is-open'); // Thêm class để điều khiển bằng CSS/JS
            //     }
            // }
        });
    });
    */
});
