<div class="sidebar-menu">
    <ul>
        <li>
            <a>
                <span>Staff: {{session('firstName')}} {{session('lastName')}}</span>
            </a>
        </li>

        <li>
            <a class="p-space-0.1 tablinks" id="defaultOpen" onclick="switchcommon(event, 'main-1')"
               style="cursor: pointer">
                My Dashboard
            </a>
        </li>

        <li>
            <a class="p-space-0.1 tablinks" id="defaultOpen" onclick="switchcommon(event, 'main-2')"
               style="cursor: pointer">
                My Stations
            </a>
        </li>

        <li>
            <a class="p-space-0.1 tablinks" id="defaultOpen" onclick="switchcommon(event, 'main-3')"
               style="cursor: pointer">
                Shift Hours
            </a>
        </li>

        <li>
            <a class="p-space-0.1 tablinks" id="defaultOpen" onclick="switchcommon(event, 'main-4')"
               style="cursor: pointer">
                Clock-in and clock-out
            </a>
        </li>

        <li>
            <a class="p-space-0.1 tablinks" id="defaultOpen" onclick="switchcommon(event, 'main-5')"
               style="cursor: pointer">
                Forum
            </a>
        </li>
        <li>
            <a class="p-space-0.1 tablinks" onclick="switchcommon(event, 'main-last')" style="cursor: pointer">
                Settings
            </a>
        </li>
        <li>
            <a href="/logout"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>