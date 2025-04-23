document.addEventListener("DOMContentLoaded", () => {
  const searchToggleButton = document.getElementById("search-toggle-btn");
  const searchForm = document.getElementById("search-form");
  const searchInput = document.getElementById("search-input"); // Lấy thêm ô input

  // Kiểm tra xem các phần tử có tồn tại không
  if (searchToggleButton && searchForm && searchInput) {
    searchToggleButton.addEventListener("click", (event) => {
      // Ngăn sự kiện click lan ra document (quan trọng cho "click outside")
      event.stopPropagation();

      // Toggle class 'hidden' trên form
      // Nếu form đang có class 'hidden', nó sẽ bị xóa -> form hiện
      // Nếu form không có class 'hidden', nó sẽ được thêm -> form ẩn
      searchForm.classList.toggle("hidden");

      // Tự động focus vào ô input khi form hiện ra
      if (!searchForm.classList.contains("hidden")) {
        searchInput.focus();
      }
    });

    // (Tùy chọn - Rất nên có) Ẩn form khi click ra bên ngoài
    document.addEventListener("click", (event) => {
      const isClickInsideForm = searchForm.contains(event.target);
      const isClickOnToggleButton = searchToggleButton.contains(event.target);

      // Nếu form đang hiển thị (!hidden) VÀ click không phải nút toggle VÀ click không phải bên trong form
      if (
        !searchForm.classList.contains("hidden") &&
        !isClickInsideForm &&
        !isClickOnToggleButton
      ) {
        searchForm.classList.add("hidden"); // Thêm lại class hidden để ẩn form
      }
    });

    // (Tùy chọn) Ngăn việc click vào bên trong form làm ẩn form
    searchForm.addEventListener("click", (event) => {
      event.stopPropagation();
    });
  } else {
    // Thông báo lỗi nếu không tìm thấy phần tử cần thiết
    console.error("Không tìm thấy nút hoặc form tìm kiếm trên trang.");
  }
});
