// Simple scroll animation
document.addEventListener("DOMContentLoaded", function () {
  const animateElements = document.querySelectorAll(".animate-on-scroll");

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1
  });

  animateElements.forEach(el => {
    observer.observe(el);
  });
});
