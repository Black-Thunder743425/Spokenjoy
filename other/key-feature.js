document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".feature-card");
  
    // Add delay for the animation effect
    cards.forEach((card, index) => {
      setTimeout(() => {
        card.classList.add("active");
      }, index * 300); // Staggered effect
    });
  });
  