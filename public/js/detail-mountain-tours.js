document.addEventListener("DOMContentLoaded", function () {
  // Lấy các phần tử cần thiết
  const modal = document.getElementById("image-modal-viewer");
  if (!modal) return; // Dừng lại nếu không có modal trên trang

  const modalImg = document.getElementById("modal-image");
  const galleryImages = document.querySelectorAll(".tour-gallery img");
  const closeBtn = document.querySelector(".close-modal-btn");
  const prevBtn = document.querySelector(".prev-btn");
  const nextBtn = document.querySelector(".next-btn");

  if (galleryImages.length === 0) return; // Dừng nếu không có ảnh

  // Tạo mảng chứa các đường dẫn ảnh để dễ dàng điều hướng
  const imageUrls = Array.from(galleryImages).map((img) => img.src);
  let currentIndex = 0;

  // Hàm mở modal
  function openModal(index) {
    currentIndex = index;
    modalImg.src = imageUrls[currentIndex];
    modal.style.display = "flex"; // Hiển thị modal
  }

  // Hàm đóng modal
  function closeModal() {
    modal.style.display = "none";
  }

  // Hàm hiển thị ảnh tiếp theo
  function showNextImage() {
    currentIndex = (currentIndex + 1) % imageUrls.length; // Quay vòng về ảnh đầu
    modalImg.src = imageUrls[currentIndex];
  }

  // Hàm hiển thị ảnh trước đó
  function showPrevImage() {
    currentIndex = (currentIndex - 1 + imageUrls.length) % imageUrls.length; // Quay vòng về ảnh cuối
    modalImg.src = imageUrls[currentIndex];
  }

  // Gán sự kiện click cho từng ảnh trong gallery
  galleryImages.forEach((img, index) => {
    img.addEventListener("click", () => {
      openModal(index);
    });
  });

  // Gán sự kiện cho các nút điều khiển
  closeBtn.addEventListener("click", closeModal);
  nextBtn.addEventListener("click", showNextImage);
  prevBtn.addEventListener("click", showPrevImage);

  // Đóng modal khi click ra ngoài vùng ảnh
  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      closeModal();
    }
  });

  // Đóng modal khi nhấn phím Escape
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && modal.style.display === "flex") {
      closeModal();
    } else if (e.key === "ArrowRight" && modal.style.display === "flex") {
      showNextImage();
    } else if (e.key === "ArrowLeft" && modal.style.display === "flex") {
      showPrevImage();
    }
  });
});
