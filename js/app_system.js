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
  $("#dashboard a, #amendbackhome a, #submitanAppBtn a, #primary-menu a, #menu a, #homeTabLinks a").click(function (e) {
    e.preventDefault(); // Prevent the default anchor behavior

    var targetDiv = $(this).attr("href"); // Get the href attribute which is the ID of the target div
    $(".dashboard, .applicationForm, .applicationlist").hide(); // Hide all divs
    $(".home, .amendments, .repaymyloan, .statements").hide(); // Hide all divs
    //Show targetDiv after 5seconds
    setTimeout(function () {
      $(targetDiv).show(); // Show the targeted div
    }, 2000); // Simulate content loading delay
  });
});
//End Showing and displaying respective contents or div when clicked on (Application form, Dashboard, Home, Submit application)
// $(this).closest('.amendments').hide(); // Hide the parent div of the clicked link


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


//Sidebars toggle or changing functionality (Original Sidebar & Amendment Sidebar)
document.addEventListener('DOMContentLoaded', function() {
  // Cache the DOM elements
  const amendMyDetailsButton = document.querySelector('.amendmydetails-btn');
  const homeAmendMyDetailsButton = document.querySelector('.home-amendmydetails-btn');
  const amendBackHomeButton = document.getElementById('amendbackhomeBtn');
  const originalSidebar = document.querySelector('.sidebar');
  const amendSidebar = document.querySelector('.amend-sidebar');

  // Function to show the amend sidebar and hide the original sidebar
  function showAmendSidebar(event) {
    event.preventDefault();
    originalSidebar.classList.add('inactive');
    originalSidebar.classList.remove('active');
    amendSidebar.classList.add('active');
    amendSidebar.classList.remove('inactive');
  }

  // Function to show the original sidebar and hide the amend sidebar
  function showOriginalSidebar(event) {
    event.preventDefault();
    originalSidebar.classList.add('active');
    originalSidebar.classList.remove('inactive');
    amendSidebar.classList.add('inactive');
    amendSidebar.classList.remove('active');
  }

  // Add event listeners
  if (amendMyDetailsButton) {
    amendMyDetailsButton.addEventListener('click', showAmendSidebar);
  }
  
  if (homeAmendMyDetailsButton) {
    homeAmendMyDetailsButton.addEventListener('click', showAmendSidebar);
  }
  
  if (amendBackHomeButton) {
    amendBackHomeButton.addEventListener('click', showOriginalSidebar);
  }
});
//End Sidebars toggle or changing functionality (Original Sidebar & Amendment Sidebar)



/*****************************************************************************************
 * Functionality to show each respective target div when click on the link anchor, and also 
change the Title and Description of Amendment: Also show the Save and Submit Button **/
$(document).ready(function() {
  // When an amendment link is clicked
  $("#amendmentsList a, .amendments-menu a").click(function(e) {
    e.preventDefault(); // Prevent the default anchor behavior
    
    var targetDiv = $(this).attr("href"); // Get the href attribute which is the ID of the target div
    $(".amend-form").hide(); // Hide all amendment forms and buttons
    $(targetDiv).show(); // Show the targeted div
    $('.amendBtns').show(); // Hide

    $('#amendmentsList').hide(); // Hide the amendments list

    // Update the text of amendTitle and amendDescription
    $(".amendTitle").text("Change of Details");
    $(".amendDescription").text("Make changes to your details here");
  });

  // When the back home button is clicked
  $(".amendbackhomeBtn").click(function(e) {
    e.preventDefault(); // Prevent the default anchor behavior
    
    $(".amend-form, .amendBtns").hide(); // Hide all amendment forms and buttons
    $('#amendmentsList').show(); // Show the amendments list

    // // Revert the text of amendTitle and amendDescription
    // $(".amendTitle").text("Amendments"); // Replace with the original title
    // $(".amendDescription").text(" Choose the Amendment Type from the list below"); // Replace with the original description
  });
});

/*****************************************************************************************
 *End Functionality to show each respective target div when click on the link anchor, and also 
change the Title and Description of Amendment: Also show the Save and Submit Button **/