document.addEventListener("DOMContentLoaded", function () {
  const filterButtons = document.querySelectorAll(
    ".filter-controls .filter-button"
  );
  const tourCards = document.querySelectorAll(".tour-grid .tour-card");

  filterButtons.forEach((button) => {
    button.addEventListener("click", function () {
      // Cập nhật trạng thái active cho button
      filterButtons.forEach((btn) => btn.classList.remove("active"));
      this.classList.add("active");

      const selectedDifficulty = this.getAttribute("data-filter");

      tourCards.forEach((card) => {
        const cardDifficulty = card.getAttribute("data-difficulty");

        // Xử lý logic hiển thị dựa trên độ khó
        // Ví dụ: 'easy-medium' sẽ hiển thị cho cả filter 'easy' và 'medium'
        // 'medium-hard' sẽ hiển thị cho cả filter 'medium' và 'hard'

        if (selectedDifficulty === "all") {
          card.style.display = ""; // Hiển thị tất cả
        } else if (cardDifficulty === selectedDifficulty) {
          card.style.display = ""; // Hiển thị nếu khớp chính xác
        } else if (
          selectedDifficulty === "easy" &&
          cardDifficulty === "easy-medium"
        ) {
          card.style.display = "";
        } else if (
          selectedDifficulty === "medium" &&
          (cardDifficulty === "easy-medium" || cardDifficulty === "medium-hard")
        ) {
          card.style.display = "";
        } else if (
          selectedDifficulty === "hard" &&
          cardDifficulty === "medium-hard"
        ) {
          card.style.display = "";
        } else {
          card.style.display = "none"; // Ẩn nếu không khớp
        }
      });
    });
  });
});
