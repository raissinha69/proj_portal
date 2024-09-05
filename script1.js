document.addEventListener("DOMContentLoaded", function() {
    const carrosselInner = document.querySelector(".carrossel .carrossel-inner");
    const prevButton = document.querySelector(".carrossel .prev");
    const nextButton = document.querySelector(".carrossel .next");

    if (carrosselInner && prevButton && nextButton) {
        const images = carrosselInner.querySelectorAll("img");

        let counter = 0;
        const slideWidth = images[0].clientWidth;

        function updateCarousel() {
            carrosselInner.style.transform = `translateX(-${counter * slideWidth}px)`;
        }

        prevButton.addEventListener("click", function() {
            if (counter > 0) {
                counter--;
                updateCarousel();
            }
        });

        nextButton.addEventListener("click", function() {
            if (counter < images.length - 1) {
                counter++;
                updateCarousel();
            }
        });
    } 
});
