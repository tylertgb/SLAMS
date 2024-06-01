document.addEventListener('DOMContentLoaded', function() {
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
  //SideBar toggling
  openAmendSiderbar();
  function openAmendSiderbar() {
    const bugger = document.querySelector(".amendBugger");
    const menu = document.querySelector(".amendMenu");
    bugger.addEventListener("click", () => {
      menu.classList.toggle("active");
    });
  }
  //End SideBar toggling
}); //


//Notification toggling
document.addEventListener('DOMContentLoaded', function() {
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
});


document.addEventListener('DOMContentLoaded', () => {
  const menuItems = document.querySelectorAll('.menu_item, .menu_item a');
  const contentDiv = document.getElementById('content');

  // Function to fetch the page content
  async function loadPage(url) {
      try {
          const response = await fetch(url);
          if (!response.ok) {
              throw new Error(`Network response was not ok: ${response.statusText}`);
          }
          const data = await response.text();
          return data;
      } catch (error) {
          console.error('There was a problem with the fetch operation:', error);
          return `<p>Failed to load page: ${error.message}</p>`;
      }
  }

  // Function to set the current page
  async function setCurrentPage(url) {
      const content = await loadPage(url);
      contentDiv.innerHTML = content;

      // Update active menu item
      document.querySelectorAll('.menu_item').forEach(item => item.classList.remove('active'));
      const activeLink = document.querySelector(`a[href="${url}"]`);
      if (activeLink) {
          activeLink.closest('.menu_item').classList.add('active');
      }

      // Attach event listeners to dynamically loaded content
      attachDynamicListeners();

      // Check if the loaded page is profile.html and handle sidebar visibility
      if (url === 'profile.html') {
          showAmendSidebar(); // Show amend sidebar when navigating to profile.html
      }
  }

  // Event listener for menu items and links
  menuItems.forEach(item => {
      item.addEventListener('click', async (e) => {
          e.preventDefault(); // Prevent default link behavior
          const link = item.tagName === 'A' ? item : item.querySelector('a');
          if (link) {
              const url = link.getAttribute('href');
              await setCurrentPage(url);
          }
      });
  });

  // Function to attach event listeners to dynamic content
  function attachDynamicListeners() {
      const submitAppButton = document.getElementById('submitanAppBtn');
      if (submitAppButton) {
          const appLink = submitAppButton.querySelector('a');
          if (appLink) {
              appLink.addEventListener('click', async (e) => {
                  e.preventDefault();
                  const url = appLink.getAttribute('href');
                  await setCurrentPage(url);
              });
          }
      }

      const homeTabLinks = document.getElementById('homeTabLinks');
      if (homeTabLinks) {
          const links = homeTabLinks.querySelectorAll('a');
          links.forEach(link => {
              link.addEventListener('click', async (e) => {
                  e.preventDefault();
                  const url = link.getAttribute('href');
                  await setCurrentPage(url);
              });
          });
      }

      // Attach event listener for return home buttons
      const returnHomeButtons = document.querySelectorAll('.returnHomeBtn');
      returnHomeButtons.forEach(button => {
          button.addEventListener('click', async (e) => {
              e.preventDefault();
              await setCurrentPage('home.html');
              showOriginalSidebar(); // Show original sidebar when returning home
          });
      });
  }

  // Function to show the amend sidebar and hide the original sidebar
  function showAmendSidebar() {
      const originalSidebar = document.querySelector('.sidebar');
      const amendSidebar = document.querySelector('.amend-sidebar');
      if (originalSidebar && amendSidebar) {
          originalSidebar.classList.add('inactive');
          originalSidebar.classList.remove('active');
          amendSidebar.classList.add('active');
          amendSidebar.classList.remove('inactive');
      }
  }

  // Function to show the original sidebar and hide the amend sidebar
  function showOriginalSidebar() {
      const originalSidebar = document.querySelector('.sidebar');
      const amendSidebar = document.querySelector('.amend-sidebar');
      if (originalSidebar && amendSidebar) {
          originalSidebar.classList.add('active');
          originalSidebar.classList.remove('inactive');
          amendSidebar.classList.add('inactive');
          amendSidebar.classList.remove('active');
      }
  }

  // Set default page
  setCurrentPage('home.html');
});




//End Showing and displaying respective contents or div when clicked on (Application form, Dashboard, Home, Submit application)
// $(this).closest('.amendments').hide(); // Hide the parent div of the clicked link


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

