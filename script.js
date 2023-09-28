const links = document.querySelectorAll("nav li");

icons.addEventListener("click", () => {
  nav.classList.toggle("active");
})

links.forEach((link) => {
  link.addEventListener('click', () => {
    nav.classList.remove("active");
  });
});

document.addEventListener("DOMContentLoaded", function() {
  let currentSlide = 0; 
  const slides = document.querySelectorAll('.slide');
  const prevBtn = document.querySelector('.slide-prev');
  const nextBtn = document.querySelector('.slide-next');
  const indicatorsContainer = document.querySelector('.slide-indicators');

  slides.forEach((_, idx) => {
      const indicator = document.createElement('span');
      indicator.addEventListener('click', () => goToSlide(idx));
      indicatorsContainer.appendChild(indicator);
  });

  const indicators = document.querySelectorAll('.slide-indicators span');

  function showSlide(slideNumber) {
      slides.forEach(slide => slide.style.display = 'none');
      indicators.forEach(indicator => indicator.classList.remove('active'));

      slides[slideNumber].style.display = 'block';
      indicators[slideNumber].classList.add('active');
  }

  function goToSlide(slideNumber) {
      currentSlide = slideNumber;
      showSlide(currentSlide);
  }

  prevBtn.addEventListener('click', function() {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      showSlide(currentSlide);
  });

  nextBtn.addEventListener('click', function() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
  });

  showSlide(currentSlide); 
});
