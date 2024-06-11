//Website Pre-loader
const preloader = document.querySelector(".preloader");
const buttons = document.querySelector("#btn-load");
loadLogin = document.querySelector(".loadLogin");

loadLogin.classList.add("hidden");

document.addEventListener("DOMContentLoaded", function () {
  preloader.classList.add("active");
  setTimeout(function () {
    loadLogin.classList.remove("hidden");
    preloader.classList.remove("active");
  }, 3000); // Simulate content loading delay
});

buttons.addEventListener("click", () => {
  preloader.classList.add("active");
  setTimeout(function () {
    preloader.classList.remove("active");
  }, 3000); // Simulate content loading delay
});
