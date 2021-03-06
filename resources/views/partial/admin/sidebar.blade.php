   <!-- SIDEBAR -->
    <div class="sidebar bg-skin-base fixed right-0 top-0 overflow-y-auto h-screen">
        <div class="h-40 relative px-2.5 py-1.5 flex items-center justify-center">
            <img src="" alt="" class="h-11 max-w-full">
            <div class="sidebar-close" id="sidebar-close"><i class="bx bx-right-arrow-alt"></i></div>
        </div>
        <div class="p-2 items-center justify-between flex flex-row-reverse">
            <div class="flex items-center">
                <img src="https://avatars.githubusercontent.com/u/43324519?v=4" alt="" class="profile-img w-11 h-11 rounded-full">
                <div class="capitalize text-xl font-bold ml-2">
                    maz develop
                </div>
            </div>
            <button class="bg-transparent grid place-items-center cursor-pointer text-blue-400 hover:bg-blue-400 hover:text-white p-2 rounded"><i class="bx bx-log-out bx-flip-horizontal text-xl "></i></button>
        </div>
        <!-- SIDEBAR MENU -->
        <ul class="list-none sidebar-menu">
            <li><a href="{{ route('admin') }}" class="p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600"><i class="bx bx-home ml-3 text-2xl"></i><span class="text-sm">داشبورد</span></a></li>
            <li class="sidebar-submenu">
                <a class="relative sidebar-menu-dropdown p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600" href="#">
                    <i class="bx bx-user-circle ml-3 text-2xl"></i>
                    <span class="text-sm">کاربران</span>
                    <div class=" dropdown-icon"></div>
                </a>
                <ul class="list-none sidebar-menu  sidebar-menu-dropdown-content px-6">
                    <li><a href="{{ route('user.create') }}" class="text-xs p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600">ایجاد کاربر</a></li>
                    <li><a href="{{ route('user.index') }}" class="text-xs p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600">تنظیمات پروفایل</a></li>
                </ul>
            </li>
            <li class="sidebar-submenu">
                <a class="relative sidebar-menu-dropdown p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600" href="#">
                    <i class='bx bx-copy-alt ml-3 text-2xl'></i>
                    <span class="text-sm">پست ها</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="list-none sidebar-menu sidebar-menu-dropdown-content px-6">
                    <li><a href="{{ route('post.index') }}" class="text-xs p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600">فهرست</a></li>
                    <li><a href="{{ route('post.create') }}" class="text-xs p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600">ایجاد</a></li>
                </ul>
            </li>
            <li class="sidebar-submenu">
                <a class="relative sidebar-menu-dropdown p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600" href="#">
                    <i class="bx bx-category ml-3 text-2xl"></i>
                    <span class="text-sm">دسته بندی ها</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="list-none sidebar-menu sidebar-menu-dropdown-content px-6">
                    <li><a href="{{ route('category.index') }}" class="text-xs p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600">فهرست</a></li>
                    <li><a href="{{ route('category.create') }}" class="text-xs p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600">ایجاد</a></li>
                </ul>
            </li>
            <li class="sidebar-submenu">
                <a class="relative sidebar-menu-dropdown p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600" href="#">
                    <i class="bx bx-file-blank ml-3 text-2xl"></i>
                    <span class="text-sm">فایل</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="list-none sidebar-menu sidebar-menu-dropdown-content px-6">
                    <li><a href="{{ route('photo.index') }}" class="text-xs p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600">فهرست</a></li>
                    <li><a href="{{ route('photo.create') }}" class="text-xs p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600">ایجاد</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('comment.index') }}" class="p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600">
                    <i class="bx bx-comment ml-3 text-2xl"></i>
                    <span class="text-sm">نظرات</span>
                </a>
            </li>
            <li class="sidebar-submenu">
                <a class="relative sidebar-menu-dropdown p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600" href="#">
                    <i class="bx bx-cog ml-3 text-2xl"></i>
                    <span class="text-sm">تنظیمات</span>
                    <div class=" dropdown-icon"></div>
                </a>
                <ul class="list-none sidebar-menu  sidebar-menu-dropdown-content px-6">
                    <li>
                        <a href="#" class="darkmode-toggle text-sm p-4 w-full h-11 flex items-center flex-row-reverse transition-colors duration-500 ease-in-out hover:text-blue-600"  id="darkmode-toggle" >
                            حالت مشکی
                            <span class="darkmode-switch"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->