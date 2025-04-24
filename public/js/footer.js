document.addEventListener("DOMContentLoaded", function () {
  // --- Back to Top Button Logic ---
  const backToTopButton = document.querySelector(".back-to-top");

  if (backToTopButton) {
    // Ngưỡng cuộn để nút xuất hiện (ví dụ: 200px)
    const scrollThreshold = 200;

    // Hàm kiểm tra vị trí cuộn và hiển thị/ẩn nút
    const toggleBackToTopButton = () => {
      if (window.scrollY > scrollThreshold) {
        // Thêm class 'visible' nếu cuộn đủ xa
        backToTopButton.classList.add("visible");
      } else {
        // Xóa class 'visible' nếu ở gần đầu trang
        backToTopButton.classList.remove("visible");
      }
    };

    // Lắng nghe sự kiện cuộn trang
    window.addEventListener("scroll", toggleBackToTopButton);

    // Kiểm tra trạng thái ban đầu khi tải trang
    toggleBackToTopButton();

    // Lắng nghe sự kiện click vào nút
    backToTopButton.addEventListener("click", function (event) {
      event.preventDefault(); // Ngăn hành vi nhảy mặc định của href="#top"

      // Cuộn mượt lên đầu trang
      window.scrollTo({
        top: 0,
        behavior: "smooth", // Đây là phần làm cho nó cuộn mượt
      });
    });
  } else {
    console.warn("Back to top button not found."); // Cảnh báo nếu không tìm thấy nút
  }
}); // Kết thúc DOMContentLoaded
