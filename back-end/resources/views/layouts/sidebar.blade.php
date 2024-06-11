<div
    class="sidebar z-[100] fixed top-0 left-0 h-full flex justify-start items-start transition-all duration-500 ease">
    <!-- Sidebar Icons bar -->
    <nav
        class="siderbar bg-white h-full top-0 left-0 w-[40px] md:w-[60px] transition-all duration-500 ease">
        <div class="flex flex-col items-center px-4 pt-4">
            <div
                class="bugger md:pointer-events-none group h-8 w-8 md:h-10 md:w-10 bg-slate-100 rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 ease"
            >
                <i class="bugger ri-menu-line text-[1.5rem] text-blue-700"></i>
            </div>

            <div class="flex flex-col justify-center items-center">
                <div class="menu-icon flex flex-col gap-[20px] pt-10">
                    <ul class="menu_item list-none">
                        <li class="item">
                            <a href="#" class="link">
                                <i
                                    class="ri-home-8-line text-blue-700 font-medium text-[1.5rem]"
                                ></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="list-none">
                        <li class="item">
                            <a href="#" class="link">
                                <i class="ri-account-circle-line text-blue-700 font-medium text-[1.5rem]"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="list-none">
                        <li class="item">
                            <a href="#" class="link">
                                <i
                                    class="ri-wallet-3-line text-blue-700 font-medium text-[1.5rem]"
                                ></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="list-none">
                        <li class="item">
                            <a href="#" class="link">
                                <i
                                    class="ri-file-list-2-line text-blue-700 font-medium text-[1.5rem]"
                                ></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--End Sidebar Icons bar -->

    <!-- Sidebar menu list (Dashboard, Home, Repay my Loan etc) -->
    <nav
        class="menu bg-white h-full hidden md:flex w-[240px] transition-all duration-500 ease">
        <div
            class="menu-list pt-4 transition-all duration-700 ease w-full pr-10">
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
                    SLAS
                </h1>
            </div>
            <!-- Logo -->

            <div class="flex flex-col justify-start items-start">
                <!-------------------
                  Normal Menu items
                --------------------->
                <div id="secondary-menu" class="flex flex-col gap-[15px] pt-10 w-full">
                    <ul class="w-full list-none text-center">
                        <li
                            class="btn-load menu_item font-normal text-slate-600 bg-slate-100 rounded-tr-3xl rounded-br-3xl p-2 hover:bg-slate-300 duration-500 ease">
                            <a href="#" class="link flex">Dashboard</a>
                        </li>
                    </ul>
                    <ul class="w-full list-none">
                        <li
                            class="profile btn-load menu_item font-normal text-slate-600 bg-slate-100 rounded-tr-3xl rounded-br-3xl p-2 hover:bg-slate-300 duration-500 ease">
                            <a href="#" class="link flex amendmydetails-btn">Profile</a>
                        </li>
                    </ul>
                    <ul class="w-full list-none">
                        <li
                            class="btn-load menu_item font-normal text-slate-600 bg-slate-100 rounded-tr-3xl rounded-br-3xl p-2 hover:bg-slate-300 duration-500 ease">
                            <a href="#" class="link flex">Application History</a>
                        </li>
                    </ul>
                    <ul class="w-full list-none">
                        <li
                            class="btn-load menu_item font-normal text-slate-600 bg-slate-100 rounded-tr-3xl rounded-br-3xl p-2 hover:bg-slate-300 duration-500 ease">
                            <a href="#" class="link flex">My Statement</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
    <!--End Sidebar menu list (Dashboard, Home, Repay my Loan etc) -->
</div>
