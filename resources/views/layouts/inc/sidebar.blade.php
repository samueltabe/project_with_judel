<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="user-box">

                <div class="float-left">
                    <img src="{{ asset('admin/images/users/avatar-1.jpg') }}" alt="" class="avatar-md rounded-circle">
                </div>
                <div class="user-info">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{ Auth::user()->name }}<i class="mdi mdi-chevron-down"></i>
                                        </a>
                        <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 29px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-face-profile mr-2"></i> Profile<div class="ripple-wrapper"></div></a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-settings mr-2"></i> Settings</a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-lock mr-2"></i> Lock screen</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="mdi mdi-power-settings mr-2"></i>
                                {{ __('Logout') }}
                            </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </ul>
                    </div>
                    <p class="font-13 text-muted m-0">{{ Auth::user()->email }}</p>
                </div>
            </div>

            <ul class="metismenu" id="side-menu">

                <li>
                    <a href="/dashboard" class="waves-effect">
                        <i class="mdi mdi-home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fas fa-palette"></i>
                        <span> Categories </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url('categories') }}">Categories List</a></li>
                        <li><a href="{{ url('add-categories') }}">Add Category</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fab fa-product-hunt"></i>
                        <span> Products </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url('product') }}">Products List</a></li>
                        <li><a href="{{ url('add-product') }}">Add Products</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fas fa-dharmachakra"></i>
                        <span> Varients </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url('variant') }}">Variants List</a></li>
                        <li><a href="{{ url('add-variant') }}">Add Variants</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
