const carousel = document.querySelector('.carousel');
const nextBtn = document.querySelector('.next-btn');
const prevBtn = document.querySelector('.prev-btn');
const totalCards = document.querySelectorAll('.card').length;
let currentIndex = 0;

nextBtn.addEventListener('click', () => {
    if (currentIndex < totalCards - 2) { // totalCards - 2 because we're showing 2 images at a time
        currentIndex++;
        carousel.style.transform = `translateX(-${currentIndex * 50}%)`;
    }
});

prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
        carousel.style.transform = `translateX(-${currentIndex * 50}%)`;
    }
});
