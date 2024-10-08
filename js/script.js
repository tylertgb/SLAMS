// Sidebar and Top Navigation dropdowns************************
document.addEventListener('DOMContentLoaded', function() {
  // Function to set up the event listeners
  function setupEventListeners() {
      // SideBar toggling
      const bugger = document.querySelector(".bugger");
      const menu = document.querySelector(".menu");
      if (bugger && menu) {
          bugger.addEventListener("click", () => {
              menu.classList.toggle("active");
          });
      }

      // Notification toggling
      const notificationDropdown = document.querySelector("#notificationDropdown");
      const notification = document.querySelector(".notification-box a");
      if (notification && notificationDropdown) {
          notification.addEventListener("click", () => {
              notificationDropdown.classList.toggle("active");
          });
      }

      // Profile Avatar toggling and Dropdown toggling
      const profile = document.querySelector("#profile-box a");
      const profileDropdown = document.querySelector("#profileDropdown");
      if (profile && profileDropdown) {
          profile.addEventListener("click", () => {
              console.log("profile dropdown clicked");
              profileDropdown.classList.toggle("active");
          });
      }
  }

  // Call the function to set up the event listeners initially
  setupEventListeners();

  // Use a MutationObserver to detect when new content is loaded into the DOM
  const observer = new MutationObserver((mutationsList, observer) => {
      for (const mutation of mutationsList) {
          if (mutation.type === 'childList' && mutation.addedNodes.length > 0) {
              // Call the function to set up the event listeners when new content is added
              setupEventListeners();
          }
      }
  });

  // Configure the observer to watch for changes in the document
  observer.observe(document.body, { childList: true, subtree: true });
});
// End Sidebar and Top Navigation dropdowns************************

// start: Admin Sidebar Dropdown************************************************
document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (item) {
  item.addEventListener('click', function (e) {
      e.preventDefault()
      console.log('slected');
      const parent = item.closest('.group')
      if (parent.classList.contains('selected')) {
          parent.classList.remove('selected')
      } else {
          document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (i) {
              i.closest('.group').classList.remove('selected')
          })
          parent.classList.add('selected')
      }
  })
})
// end: Sidebar*******************************************************************


// PRELOADERS*************************************************************
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


//Website Pre-loader
document.addEventListener('DOMContentLoaded', function() {
  const preloader = document.querySelector(".preloader");
  const buttons = document.querySelectorAll(".btn-load");

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
});

// END PRELOADERS*********************************************************