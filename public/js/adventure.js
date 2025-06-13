document.addEventListener("DOMContentLoaded", function () {
  const animatedElements = document.querySelectorAll(".animate-on-scroll");

  if (!animatedElements.length) {
    return;
  }

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        // Khi phần tử đi vào viewport
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          // Optional: ngừng quan sát sau khi đã hiện animation 1 lần
          // observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.1, // Kích hoạt khi 10% phần tử được nhìn thấy
    }
  );

  animatedElements.forEach((el) => {
    observer.observe(el);
  });
});
