// SLIDER
let prev = document.querySelector(".prev");
let next = document.querySelector(".next");
let slides = document.querySelectorAll(".slide");
let dots = document.querySelectorAll(".dot");
let sliderOffsetX = 100;
let sliderMovetime = 9000;
let s = 0;

function initialSlidesPosition() {
  slides.forEach(function (slide, i) {
    slide.style.transform = "translateX(" + sliderOffsetX * i + "%" + ")";
    setInterval(() => (slide.style.opacity = "1"), 1500 * i);
  });
}
initialSlidesPosition();

function slideTranslateX() {
  slides.forEach(function (slide, i) {
    slide.style.transform =
      "translateX(" + -sliderOffsetX * (-i + s) + "%" + ")";
  });
}
function dotsActive() {
  dots.forEach((dotActive) => dotActive.classList.remove("active"));
  dots[s].classList.add("active");
}
function previousSlide() {
  s -= 1;
  if (s < 0) {
    s = slides.length - 1;
  }
  dotsActive();
  slideTranslateX();
}
function nextSlide() {
  s += 1;
  if (s >= slides.length) {
    s = 0;
  }
  dotsActive();
  slideTranslateX();
}

function moveSlides() {
  prev.addEventListener("click", function () {
    previousSlide();
    resetInterval();
  });
  document.addEventListener("keydown", function (event) {
    if (event.code == "ArrowLeft") {
      previousSlide();
      resetInterval();
    }
  });
  next.addEventListener("click", function () {
    nextSlide();
    resetInterval();
  });
  document.addEventListener("keydown", function (event) {
    if (event.code == "ArrowRight") {
      nextSlide();
      resetInterval();
    }
  });
  dots.forEach(function (dot, dotIndex) {
    dot.addEventListener("click", function () {
      resetInterval();
      dots.forEach((dotActive) => dotActive.classList.remove("active"));
      this.classList.add("active");
      s = dotIndex;
      slideTranslateX();
    });
  });
}

moveSlides();

let slideInterval = setInterval(nextSlide, sliderMovetime);

function resetInterval() {
  clearInterval(slideInterval);
  slideInterval = setInterval(nextSlide, sliderMovetime);
}
