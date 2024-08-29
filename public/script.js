const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');
const carouselImages = document.querySelector('.carrossel');
const images = document.querySelectorAll('.carrossel img');
const imageCount = images.length;

let index = 0;

function showImage(newIndex) {
    index = (newIndex + imageCount) % imageCount;
    const offset = -index * 100;
    carouselImages.style.transform = `translateX(${offset}%)`;
}

prevButton.addEventListener('click', () => showImage(index - 1));
nextButton.addEventListener('click', () => showImage(index + 1));

// Optional: Auto-slide every 3 seconds
setInterval(() => showImage(index + 1), 3000);
