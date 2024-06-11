<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SLAMS Student Login</title>

    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!--Icons-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/remixicon@4.0.1/fonts/remixicon.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- <link rel="stylesheet" href="css/main.css" /> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="bg-slate-100">
    <!------------ 
      PreLoader
    ------------->
    <div
      id="preloader"
      class="preloader fixed top-0 left-0 w-full h-full bg-white bg-opacity-50 z-[200] inset-0 hidden flex-col justify-center items-center">
      <img
        class="loader w-[50px] md:w-[100px]"
        src="icons/loading-icon.png"
        alt=""
      />
    </div>
    <!------------ 
      End PreLoader
    ------------->

    <!-----------------------
      Login Content & Footer
    ------------------------->
    <main class="loadLogin min-h-screen my-auto flex flex-col justify-between">
      <div class="pt-4 px-2 md:px-[200px]">
        <h3 class="text-slate-400 font-medium text-center md:text-left">
          SLAMS | Student Loan Application System
        </h3>
      </div>

      {{$slot}}

      <footer class="bg-white mt-20">
        <div
          class="flex flex-col md:flex-row justify-between items-center gap-8 px-[200px] py-4"
        >
          <!-- Logo -->
          <div class="flex items-center gap-4">
            <div
              class="h-10 w-10 bg-slate-100 border-blue-700 rounded-full flex items-center p-1"
            >
              <i class="ri-bubble-chart-fill text-blue-700 text-[2rem]"></i>
            </div>
            <h1
              class="text-[1.5rem] md:text-[1.5rem] font-medium text-slate-500"
            >
              SLAMS
            </h1>
          </div>
          <!-- Logo -->
          <h3 class="text-[0.7rem] text-center text-slate-400 font-medium">
            &copy; 2024 Student Loan Application and Management System
          </h3>
          <h3 class="text-[0.7rem] text-center text-slate-400 font-medium">
            Computer Science Department
          </h3>
        </div>
      </footer>
    </main>
    <!-----------------------------
      End Login Content & Footer
    ----------------------------->

    <!--SCRIPTS-->
    <!-- <script src="js/student_login.js"></script> -->
  </body>
</html>
