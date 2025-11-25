// Seleccionamos las slides y los botones
const slides = document.querySelectorAll('.slide');
const prevBtn = document.getElementById('prev');
const nextBtn = document.getElementById('next');

let index = 0;

// Función para actualizar las clases de cada slide
function updateSlides() {
    slides.forEach((slide, i) => {
        slide.classList.remove('active', 'prev', 'next');
        if (i === index) {
            slide.classList.add('active'); // slide actual
        } else if (i === (index - 1 + slides.length) % slides.length) {
            slide.classList.add('prev');   // slide anterior
        } else if (i === (index + 1) % slides.length) {
            slide.classList.add('next');   // slide siguiente
        }
    });
}

// Función para cambiar de slide
function showSlide(i) {
    if (i < 0) index = slides.length - 1;
    else if (i >= slides.length) index = 0;
    else index = i;
    updateSlides();
}

// Eventos de los botones
prevBtn.addEventListener('click', () => showSlide(index - 1));
nextBtn.addEventListener('click', () => showSlide(index + 1));

// Auto-play cada 4 segundos
setInterval(() => showSlide(index + 1), 4000);

// Inicializar al cargar
updateSlides();
