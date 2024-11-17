// Add Scroll Animation
window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('.content-section');
    sections.forEach((section) => {
      const sectionTop = section.getBoundingClientRect().top;
      if (sectionTop < window.innerHeight - 100) {
        section.style.opacity = '1';
        section.style.transform = 'translateY(0)';
      }
    });
  });
  