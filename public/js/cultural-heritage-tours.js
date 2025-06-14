document.addEventListener("DOMContentLoaded", function () {
  const filterButtons = document.querySelectorAll(".filter-bar .filter-button");
  const tourCards = document.querySelectorAll(".tour-grid .tour-card");

  filterButtons.forEach((button) => {
    button.addEventListener("click", function () {
      // Xóa class 'active' khỏi tất cả các nút
      filterButtons.forEach((btn) => btn.classList.remove("active"));
      // Thêm class 'active' vào nút được nhấp
      this.classList.add("active");

      const filterValue = this.getAttribute("data-filter");

      tourCards.forEach((card) => {
        const cardRegion = card.getAttribute("data-region");
        if (filterValue === "all" || cardRegion === filterValue) {
          card.style.display = ""; // Hiển thị card
        } else {
          card.style.display = "none"; // Ẩn card
        }
      });
    });
  });
});
