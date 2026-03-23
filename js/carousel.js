var slides = document.querySelectorAll('.carousel-slide');
var dots = document.querySelectorAll('.carousel-dot');
var prevBtn = document.getElementById('carouselPrev');
var nextBtn = document.getElementById('carouselNext');
var currentIndex = 0;

function showSlide(n) {
    slides[currentIndex].classList.remove('active');
    dots[currentIndex].classList.remove('active');

    currentIndex = n;

    if (currentIndex >= slides.length) {
        currentIndex = 0;
    }
    if (currentIndex < 0) {
        currentIndex = slides.length - 1;
    }

    slides[currentIndex].classList.add('active');
    dots[currentIndex].classList.add('active');
}

if (nextBtn) {
    nextBtn.onclick = function () {
        showSlide(currentIndex + 1);
    };
}

if (prevBtn) {
    prevBtn.onclick = function () {
        showSlide(currentIndex - 1);
    };
}

for (var i = 0; i < dots.length; i++) {
    (function (idx) {
        dots[idx].onclick = function () {
            showSlide(idx);
        };
    })(i);
}

setInterval(function () {
    showSlide(currentIndex + 1);
}, 5000);
