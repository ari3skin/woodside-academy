<div class="w-[16%] h-v-h bg-green-op fixed overflow-x-hidden rounded-r-lg">

    <div class="flex flex-col justify-between h-[90%] overflow-auto">

        <div class="p-space-0.2">
            <a href="/" class="text-brown rounded-xl text-x bg-green-op-1 p-space-0.1">
                Administrator: {{session('firstName')}} {{session('lastName')}}
            </a>
        </div>

        <hr class="text-[black]">

        <a class="p-space-0.1 tablinks" id="defaultOpen" onclick="switchcommon(event, 'main-1')"
           style="cursor: pointer">
            <i class="uil uil-dashboard text-[30px] text-brown-light-1"></i>
            <span class="text-brown rounded-xl text-xl bg-green-op-1 p-space-0.1">My Dashboard</span>
        </a>

        <div class="dropdown p-space-0.1 cursor-pointer w-fit">
            <i class="uil uil-book text-[30px] text-brown-light-1"></i>
            <span class="text-brown rounded-xl text-xl bg-green-op-1 p-space-0.1">Applications</span>

            <div class="dropdown-content w-[89px] ml-36 top-0">
                <a class="p-space-0.1 tablinks" onclick="switchcommon(event, 'main-2')" style="cursor: pointer">
                    <span
                        class="flex justify-center text-brown hover:text-white rounded-xl text-x p-space-0.1">
                        Student's
                    </span>
                </a>

                <a class="p-space-0.1 tablinks" onclick="switchcommon(event, 'main-3')" style="cursor: pointer">
                    <span class="flex justify-center text-brown hover:text-white rounded-xl text-x p-space-0.1">
                        Lecturer's
                    </span>
                </a>

                <a class="p-space-0.1 tablinks" onclick="switchcommon(event, 'main-4')" style="cursor: pointer">
                    <span class="flex justify-center text-brown hover:text-white rounded-xl text-x p-space-0.1">
                        Staff's
                    </span>
                </a>
            </div>
        </div>

        <a class="p-space-0.1 tablinks" onclick="switchcommon(event, 'main-5')" style="cursor: pointer">
            <i class="uil uil-microphone text-[30px] text-brown-light-1"></i>
            <span class="text-brown rounded-xl text-xl bg-green-op-1 p-space-0.1">Communications</span>
        </a>

        <div class="dropdown p-space-0.1 cursor-pointer w-fit">
            <i class="uil uil-book text-[30px] text-brown-light-1"></i>
            <span class="text-brown rounded-xl text-xl bg-green-op-1 p-space-0.1">Course Actions</span>

            <div class="dropdown-content w-[89px] ml-36 top-0"></div>
        </div>

        <a class="p-space-0.1 tablinks" onclick="switchcommon(event, 'main-last')" style="cursor: pointer">
            <i class="uil uil-setting text-[30px] text-brown-light-1"></i>
            <span class="text-brown rounded-xl text-xl bg-green-op-1 p-space-0.1">Settings</span>
        </a>

        <a href="/logout" class="p-space-0.1">
            <i class="uil uil-signout text-[30px] text-brown-light-1"></i>
            <span class="text-brown rounded-xl text-xl bg-green-op-1 p-space-0.1">Logout</span>
        </a>
    </div>

</div>

{{--<div class="sidebar-menu">--}}
{{--    <ul>--}}
{{--        <li>--}}
{{--            <a href="#"><span class="las la-address-book"></span>--}}
{{--                <span>Home</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li>--}}
{{--            <a href="../Application/view_student_application.php"><span class="las la-address-book"></span>--}}
{{--                <span>Lecturer's Application Details</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#">--}}
{{--                <span class="las la-archive"></span>--}}
{{--                <span>My Courses</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#">--}}
{{--                <span class="las la-book"></span>--}}
{{--                <span>Coursework material</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#"><span class="las la-user-friends"></span>--}}
{{--                <span>Coursework Marks</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="../lecturers/lecturer_details.php"><span class="las la-chalkboard-teacher"></span>--}}
{{--                <span>Student attendance</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span>--}}
{{--                <span>Logout</span></a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</div>--}}

