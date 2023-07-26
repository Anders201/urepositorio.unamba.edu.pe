const carouselContainer = document.querySelector('.carousel-container');
const slides = document.querySelectorAll('.carousel-slide');

let counter = 0;
const intervalTime = 7000; // Cambiar entre imagen y mapa cada 3 segundos

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

// Función para inicializar el mapa de Google Maps
function initMap() {
  // Mantenemos la función initMap() para el mapa de Google Maps si lo necesitas en otras partes de tu proyecto.
}
