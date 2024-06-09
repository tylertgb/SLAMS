<nav class="bg-white z-50">
    <div class="py-4 px-14 w-full flex justify-between items-center">
        <div class="w-full flex justify-between items-center">
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
                    SLAS
                </h1>
            </div>
            <!-- Logo -->
            <h1 class="text-[1rem] md:text-[1.5rem] font-medium text-slate-500 hidden md:flex">
                Student Loan Application System
            </h1>
            <div class="flex items-center gap-3">
                <!-- Notification Box and Drodown Notification List -->
                <div class="notification-box relative">
                    <div
                        id="notification-box "
                        class="h-8 w-8 bg-slate-100 rounded-full flex justify-center cursor-pointer"
                    >
                        <!-- Active notification here -->
                        <span class="absolute -top-2 -right-1 text-red-600">
                    <i class="ri-circle-fill text-[10px]"></i>
                  </span>
                        <!-- Active notification here -->
                        <!-- Notification Bel icon -->
                        <a href="#" class="link">
                            <i
                                class="ri-notification-4-line text-blue-700 font-medium text-[1.5rem]"
                            ></i>
                        </a>
                        <!-- End Notification Bel icon -->
                    </div>
                    <!-- Notification Dropdown -->
                    <div
                        id="notificationDropdown"
                        class="notificationDropdown hidden absolute top-14 -left-32 overflow-hidden"
                    >
                        <div
                            class="w-[300px] overflow-hidden p-4 bg-white rounded-tl-0 rounded-tr-3xl rounded-bl-3xl rounded-br-3xl"
                        >
                            <div
                                class="flex flex-col justify-start items-start border-b mb-4"
                            >
                                <!-- Notification list here -->
                                <ul>
                                    <li class="text-[12px] text-blue-700 font-normal py-1">
                                        <a href="#">You have 1 new notification</a>
                                    </li>
                                </ul>
                                <!-- End Notification list here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Notification Box and Drodown Notification List -->

                <!-- Profile Box and Its Dropdown -->
                <div id="profile-box" class="flex items-center gap-3">
                    <div class="profile-box relative">
                        <a href="#" class="flex items-center gap-3">
                            <div
                                class="h-8 w-8 bg-slate-100 rounded-full flex justify-center items-center">
                                <i
                                    class="ri-user-3-fill text-blue-700 font-medium text-[1.3rem]"></i>
                            </div>
                            <h1 class="text-[1.1rem] font-normal text-slate-400">
                                Bright Gobka
                            </h1>
                            <i class="ri-arrow-down-s-fill text-slate-400 text-xl"></i>
                        </a>
                        <!-- Dropdown Profile -->
                        <div
                            id="profileDropdown"
                            class="profileDropdown hidden absolute top-14 overflow-hidden">
                            <div
                                class="w-[200px] overflow-hidden p-4 bg-white rounded-tl-0 rounded-tr-3xl rounded-bl-3xl rounded-br-3xl">
                                <div
                                    class="flex flex-col justify-start items-start border-b mb-4">
                                    <!-- Student ID -->
                                    <p class="text-[1.1rem] text-blue-700 font-normal">
                                        20210404130
                                    </p>
                                    <!-- End Student ID -->
                                    <span
                                        class="text-[1.1rem] text-slate-400 font-normal py-1">
                          <a href="#">Reset Password</a>
                        </span>
                                </div>
                                <!-- Logout of your account -->
                                <span class="text-[1.1rem] text-slate-400 font-normal">
                        <a href="student_login.html">Logout</a>
                      </span>
                                <!-- End Logout of your account -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Profile Box and Its Dropdown -->

            </div>
        </div>
    </div>
</nav>
