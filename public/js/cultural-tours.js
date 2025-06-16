document.addEventListener("DOMContentLoaded", function () {
  // ===========================================
  // LOGIC FOR IMAGE GALLERY MODAL (LIGHTBOX)
  // ===========================================
  const modal = document.getElementById("image-modal-viewer");
  if (modal) {
    const modalImg = document.getElementById("modal-image");
    const galleryImages = document.querySelectorAll(".tour-gallery img");
    const closeBtn = document.querySelector(".close-modal-btn");
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");

    if (galleryImages.length > 0) {
      const imageUrls = Array.from(galleryImages).map((img) => img.src);
      let currentIndex = 0;

      function openModal(index) {
        currentIndex = index;
        modalImg.src = imageUrls[currentIndex];
        modal.style.display = "flex";
      }

      function closeModal() {
        modal.style.display = "none";
      }

      function showNextImage() {
        currentIndex = (currentIndex + 1) % imageUrls.length;
        modalImg.src = imageUrls[currentIndex];
      }

      function showPrevImage() {
        currentIndex = (currentIndex - 1 + imageUrls.length) % imageUrls.length;
        modalImg.src = imageUrls[currentIndex];
      }

      galleryImages.forEach((img, index) => {
        img.addEventListener("click", () => openModal(index));
      });

      closeBtn.addEventListener("click", closeModal);
      nextBtn.addEventListener("click", showNextImage);
      prevBtn.addEventListener("click", showPrevImage);
      modal.addEventListener(
        "click",
        (e) => e.target === modal && closeModal()
      );
      document.addEventListener("keydown", (e) => {
        if (modal.style.display !== "flex") return;
        if (e.key === "Escape") closeModal();
        if (e.key === "ArrowRight") showNextImage();
        if (e.key === "ArrowLeft") showPrevImage();
      });
    }
  }

  // ===========================================
  // LOGIC FOR TAB SWITCHER
  // ===========================================
  const tabContainer = document.querySelector(".tour-tabs");
  if (tabContainer) {
    const tabButtons = tabContainer.querySelectorAll(".tab-button");
    const tabContents = tabContainer.querySelectorAll(".tab-content");

    tabButtons.forEach((button) => {
      button.addEventListener("click", () => {
        const targetTabId = button.dataset.tab;
        const targetTabContent = document.getElementById(targetTabId);

        tabButtons.forEach((btn) => btn.classList.remove("active"));
        tabContents.forEach((content) => content.classList.remove("active"));

        button.classList.add("active");
        if (targetTabContent) {
          targetTabContent.classList.add("active");
        }
      });
    });
  }
});
