// JavaScript: Código para el carrusel de imágenes
const carouselContainer = document.querySelector('.carousel-container');
const slides = document.querySelectorAll('.carousel-slide');

let counter = 0;
const intervalTime = 5000; // Cambiar entre imágenes cada 7 segundos (ajustable según tus necesidades)

function nextSlide() {
  counter++;
  if (counter >= slides.length) {
    counter = 0;
  }
  updateCarousel();
}

function updateCarousel() {
  slides.forEach((slide, index) => {
    if (index === counter) {
      slide.style.display = 'block';
    } else {
      slide.style.display = 'none';
    }
  });
}

setInterval(nextSlide, intervalTime);

