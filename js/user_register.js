//Website Pre-loader
const preloader = document.querySelector(".preloader");
const buttons = document.querySelector(".btn-load");

document.addEventListener("DOMContentLoaded", function () {
  preloader.classList.add("active");
  setTimeout(function () {
    preloader.classList.remove("active");
  }, 5000); // Simulate content loading delay
});

buttons.addEventListener("click", () => {
  preloader.classList.add("active");
  setTimeout(function () {
    preloader.classList.remove("active");
  }, 5000); // Simulate content loading delay
});
