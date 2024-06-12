<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SLAS Student Dashboard</title>

    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"/>

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

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100">
<!------------
  PreLoader
------------->
<div
    id="preloader"
    class="preloader fixed top-0 left-0 w-full h-full bg-white bg-opacity-50 z-[200] inset-0 hidden flex-col justify-center items-center"
>
    <img
        class="loader w-[50px] md:w-[100px]"
        src="/icons/loading-icon.png"
        alt=""
    />
</div>
<!---------------
  End Preloader
----------------->

<!----------
  SIDEBAR
------------>
@include('layouts.sidebar')
<!------------
          END SIDEBAR
        --------------->
<!--------------------
  AMENDMENTS SIDEBAR
---------------------->
<div
    class="amend-sidebar z-[100] fixed top-0 left-0 h-full hidden justify-start items-start transition-all duration-500 ease">
    <!-- Sidebar Icons bar -->
    <nav
        class="siderbar bg-white h-full top-0 left-0 w-[40px] md:w-[60px] transition-all duration-500 ease"
    >
        <div class="flex flex-col items-center px-4 pt-4">
            <div
                class="amendBugger md:pointer-events-none group h-8 w-8 md:h-10 md:w-10 bg-slate-100 rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 ease"
            >
                <i class="amendBugger ri-menu-line text-[1.5rem] text-blue-700"></i>
            </div>

            <div class="flex flex-col justify-center items-center">
                <div class="menu-icon flex flex-col gap-[20px] pt-10">
                    <ul class="list-none">
                        <li class="item">
                            <a href="#" class="link">
                                <i
                                    class="ri-account-circle-line text-blue-700 font-medium text-[1.5rem]"
                                ></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--End Sidebar Icons bar -->
    <!-- Profile List information (Personal Info, Contact Info, Academic info, etc) -->
    <nav
        class="amendMenu bg-white h-full hidden md:flex w-[240px] transition-all duration-500 ease"
    >
        <div
            class="menu-list pt-4 transition-all duration-700 ease w-full pr-10"
        >
            <!-- Logo -->
            <div class="flex items-center gap-4 w-full">
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

            <div class="flex flex-col justify-start items-start">

                <!-------------------
                  Normal Menu items
                --------------------->
                <div id="amend-menu" class="flex flex-col gap-[15px] pt-10 w-full">
                    <ul class="list-none">
                        <li class="text-white font-semibold pointer-events-none bg-blue-700 rounded-tr-3xl rounded-br-3xl p-2">
                            <a href="#" class=""> <span class="">Profile</span> </a>
                        </li>
                    </ul>
                </div>
                <!-------------------
                  End Normal Menu items
                --------------------->

                <!---------------------------------
                  Profile Information List items
                ------------------------------------>
                <div id="amendments-menu" class="amendments-menu flex flex-col gap-2 pt-7 w-full">
                    <ul class="list-none">
                        <li class="item group bg-slate-100 rounded-tr-3xl rounded-br-3xl p-2 hover:bg-slate-300 duration-500 ease">
                            <a href="#amend-personalinformation" class="link flex">
                                <span class="text-slate-600 font-normal">Personal Information</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="list-none">
                        <li class="item group bg-slate-100 rounded-tr-3xl rounded-br-3xl p-2 hover:bg-slate-300 duration-500 ease">
                            <a href="#amend-contactinformation" class="link flex">
                                <span class="text-slate-600 font-normal">Contact Information</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="list-none">
                        <li
                            class="item group bg-slate-100 rounded-tr-3xl rounded-br-3xl p-2 hover:bg-slate-300 duration-500 ease"
                        >
                            <a href="#amend-academicinformation" class="link flex">
                    <span class="text-slate-600 font-normal"
                    >Academic Information</span
                    >
                            </a>
                        </li>
                    </ul>
                    <ul class="list-none">
                        <li
                            class="item group bg-slate-100 rounded-tr-3xl rounded-br-3xl p-2 hover:bg-slate-300 duration-500 ease"
                        >
                            <a href="#amend-financialinformation" class="link flex">
                    <span class="text-slate-600 font-normal"
                    >Financial Information</span
                    >
                            </a>
                        </li>
                    </ul>
                    <ul class="list-none">
                        <li
                            class="item group bg-slate-100 rounded-tr-3xl rounded-br-3xl p-2 hover:bg-slate-300 duration-500 ease"
                        >
                            <a href="#amend-loandetails" class="link flex">
                                <span class="text-slate-600 font-normal">Loan Details</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="list-none">
                        <li
                            class="item group bg-slate-100 rounded-tr-3xl rounded-br-3xl p-2 hover:bg-slate-300 duration-500 ease"
                        >
                            <a href="#amend-dependencystatus" class="link flex">
                    <span class="text-slate-600 font-normal"
                    >Dependency Status</span
                    >
                            </a>
                        </li>
                    </ul>
                    <ul class="list-none">
                        <li
                            class="item group bg-slate-100 rounded-tr-3xl rounded-br-3xl p-2 hover:bg-slate-300 duration-500 ease">
                            <a
                                id="lastmenu"
                                href="#amend-additionaldocuments"
                                class="link flex">
                    <span class="text-slate-600 font-normal"
                    >Additional Documents</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!---------------------------------------
                  End Profile Information List items
                ---------------------------------------->
            </div>
        </div>
    </nav>
    <!--End profile List information (Personal Info, Contact Info, Academic info, etc -->
</div>
<!------------------------
  END PROFILE SIDEBAR
-------------------------->

<!------------------------------------------------------------
  System App, SideBar, Main top navbar, Components & Footer
------------------------------------------------------------->
<main class="min-h-screen mx-auto w-full md:pl-[300px]">

    @include('layouts.top-bar')
    <!----------------------------
      End Main top navigation bar
    ------------------------------->

    <!-- CONTENTS of other PAGES with .html are loaded and displayed within the id="content" below -->
    <div id="content" class="mx-auto p-14 flex flex-col justify-start items-center">
        {{$slot}}
    </div>
    <!-- End CONTENTS of other PAGES are loaded and displayed within the id="content" below -->


</main>
<!---------------------------------------------------------------
  End System App, SideBar, Main top navbar, Components & Footer
----------------------------------------------------------------->

<footer class="bg-white">
    <div class="flex flex-col md:flex-row justify-between items-center gap-8 pl-[350px] px-14 py-3"    >
        <!-- Logo -->
        <div class="flex items-center gap-4">
            <div   class="h-10 w-10 bg-slate-100 border-blue-700 rounded-full flex items-center p-1"  >
                <i class="ri-bubble-chart-fill text-blue-700 text-[2rem]"></i>
            </div>
            <h1 class="text-[1.3rem] font-medium text-slate-500">SLAS</h1>
        </div>
        <!-- Logo -->
        <h3 class="text-[0.7rem] text-center text-slate-400 font-medium">
            &copy; 2024 Student Loan Application System
        </h3>
        <h3 class="text-[0.7rem] text-center text-slate-400 font-medium">
            Computer Science Department
        </h3>
    </div>
</footer>

{{--<script src="js/script.js"></script>--}}
</body>
</html>
