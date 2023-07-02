function handleScrollAnimation() {
    const animatedElements = document.querySelectorAll('.animated');
    
    animatedElements.forEach((element) => {
      const elementTop = element.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      
      if (elementTop < windowHeight) {
        element.classList.add('fade-in');
      } else {
        element.classList.remove('fade-in');
      }
    });
  }
  
  document.addEventListener('DOMContentLoaded', handleScrollAnimation);
  document.addEventListener('scroll', handleScrollAnimation);
  