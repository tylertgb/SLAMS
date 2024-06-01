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
}); 


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


// start: Sidebar
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
// end: Sidebar

document.addEventListener('DOMContentLoaded', () => {
  const menuItems = document.querySelectorAll('.menu_item');
  const dashboard = document.getElementById('dashboard');
  const current = document.getElementById('content');

  menuItems.forEach(item => {
      item.addEventListener('click', async (event) => {
          event.preventDefault();  // Prevent default link behavior
          console.log('menu item clicked');
          const pageUrl = item.getAttribute('href');

          try {
              const response = await fetch(pageUrl);
              if (!response.ok) throw new Error('Network response was not ok');
              const content = await response.text();

              current.innerHTML = content;  // Load the content into #current
              current.classList.remove('hidden');  // Show #current
              dashboard.classList.add('hidden');  // Hide #dashboard
          } catch (error) {
              console.error('Error loading page:', error);
          }
      });
  });
});


  
