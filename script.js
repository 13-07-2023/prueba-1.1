const slides = document.querySelectorAll('.slide-content');
let currentSlide = 0;

function showSlide(slideIndex) {
    slides.forEach((slide, index) => {
        slide.style.display = index === slideIndex ? 'flex' : 'none';
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

// Inicializar el carrusel
showSlide(currentSlide);
setInterval(nextSlide, 3000); // Cambiar de imagen cada 3 segundos
