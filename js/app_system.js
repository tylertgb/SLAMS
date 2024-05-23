//SideBar toggling
openSiderbar();
function openSiderbar() {
  const bugger = document.querySelector(".bugger");
  const menu = document.querySelector(".menu");
  bugger.addEventListener("click", () => {
    menu.classList.toggle("active");
  });
}
//End SideBar toggling

//Notification toggling
opennotification();
function opennotification() {
  const notificationDropdown = document.querySelector("#notificationDropdown");
  const notification = document.querySelector(".notification-box a");
  notification.addEventListener("click", () => {
    notificationDropdown.classList.toggle("active");
  });
}
//End Notification toggling

//Profile Avator toggling and Dropdown toggling
openProfile();
function openProfile() {
  const profile = document.querySelector("#profile-box a");
  const profileDropdown = document.querySelector("#profileDropdown");
  profile.addEventListener("click", () => {
    profileDropdown.classList.toggle("active");
  });
}
//End Profile Avator toggling and Dropdown toggling

//File upload success message
fileUpload();
function fileUpload() {
  const input = document.querySelector("#file");
  input.addEventListener("input", () => {
    if (input.files.length > 0) {
      //Show alert message when inputBox is empty
      this.alert("File uploaded successfully!");
    }
  });
}
//End File upload success message

//Form Previous and Next Button to handle form navigation process during filling
var visibleDiv = 0;

function showDiv() {
  $(".form").hide();
  $(".form:eq(" + visibleDiv + ")").show();

  if (visibleDiv === $(".form").length - 1) {
    $("#nextButton").hide();
    $("#submitButton").show();
  } else {
    $("#nextButton").show();
    $("#submitButton").hide();
  }

  if (visibleDiv === 0) {
    $("#prevButton").hide();
  } else {
    $("#prevButton").show();
  }
}
showDiv();

$("#nextButton").click(function () {
  if (visibleDiv < $(".form").length - 1) {
    visibleDiv++;
    showDiv();
  }
});

$("#prevButton").click(function () {
  if (visibleDiv > 0) {
    visibleDiv--;
    showDiv();
  }
});
//End Form Previous and Next Button to handle form navigation process during filling

//Showing and displaying respective contents or div when clicked on (Application form, Dashboard, Home, Submit application)
$(document).ready(function () {
  $(
    "#dashboard a, #amendbackhome a, #submitanAppBtn a, #primary-menu a, #menu a, #homeLinks a"
  ).click(function (e) {
    e.preventDefault(); // Prevent the default anchor behavior

    var targetDiv = $(this).attr("href"); // Get the href attribute which is the ID of the target div
    $(".dashboard, .applicationForm").hide(); // Hide all divs
    $(".home, .amendments").hide(); // Hide all divs
    //Show targetDiv after 5seconds
    setTimeout(function () {
      $(targetDiv).show(); // Show the targeted div
    }, 2000); // Simulate content loading delay
  });
});
//End Showing and displaying respective contents or div when clicked on (Application form, Dashboard, Home, Submit application)

//Website Pre-loader
const preloader = document.querySelector(".preloader");
const buttons = document.querySelectorAll(".btn-load");
const contentLoad = document.querySelectorAll(".content-load");

document.addEventListener("DOMContentLoaded", function () {
  preloader.classList.add("active");
  setTimeout(function () {
    preloader.classList.remove("active");
  }, 2000); // Simulate content loading delay
});

buttons.forEach((button) => {
  button.addEventListener("click", function () {
    preloader.classList.add("active");
    setTimeout(function () {
      preloader.classList.remove("active");
    }, 2000); // Simulate content loading delay
  });
});
