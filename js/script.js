document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".slide");
    const slider = document.querySelector(".slides");
    const dots = document.querySelectorAll(".dot");
    let currentIndex = 0;
    let interval;
  
    function goToSlide(index) {
      if (index < 0) {
        currentIndex = slides.length - 1;
      } else if (index >= slides.length) {
        currentIndex = 0;
      } else {
        currentIndex = index;
      }
      const offset = -currentIndex * slides[0].offsetWidth;
      slider.style.transform = `translateX(${offset}px)`;
  
      slides.forEach((slide, i) => {
        slide.classList.toggle("active", i === currentIndex);
      });
  
      dots.forEach((dot, i) => {
        dot.classList.toggle("active", i === currentIndex);
      });
    }
  

    function clickDot(index) {
      goToSlide(index);
      restartAutoSlide(); 
    }
  
    dots.forEach((dot, index) => {
      dot.addEventListener("click", () => {
        clickDot(index);
      });
    });
  
    function startAutoSlide() {
      interval = setInterval(() => {
        goToSlide(currentIndex + 1);
      }, 3000);
    }
  
    function restartAutoSlide() {
      clearInterval(interval);
      startAutoSlide();
    }
  
    startAutoSlide();
  });

  function toggleCard(card) {
    card.classList.toggle('open');
}
  function toggleFAQ(faq){
    faq.classList.toggle('open'); 
  }
