const bugger = document.querySelector(".bugger");
const menu = document.querySelector(".menu");
const menuList = document.querySelector(".menu-list");

openSiderbar();
function openSiderbar() {
  bugger.addEventListener("click", () => {
    menu.classList.toggle("active");
  });
}

const input = document.querySelector("#file");

performTask();
function performTask() {
  input.addEventListener("input", () => {
    if (input.files.length > 0) {
      //Show alert message when inputBox is empty
      this.alert("File uploaded successfully!");
    }
  });
}
