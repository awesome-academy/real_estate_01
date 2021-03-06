<div class="left_col scroll-view">
    <div class="navbar nav_title">
        <div class="navbar nav_title">
            <a href="#" class="site_title"><i class="fa fa-paw">
                    <img class="logo_image" src="{{ config('common.logo') }}logo.png" alt="logo.png">
                </i>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- menu profile quick info -->
    <div class="profile clearfix">
        @if (Auth::check())
            <div class="profile_pic">
                <img src="{{ config('common.img') }}img.jpg" alt="assets." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}
                    <small><i class="fa fa-circle" style="color: green"></i></small>
                </h2>
            </div>
        @endif
    </div>
    <!-- /menu profile quick info -->

    <br/>

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{ route('admin') }}">Dashboard</a></li>
                    </ul>
                </li>
                {{--<li><a> <i class="fa fa-cubes"></i></i> Apartments <span class="fa fa-chevron-down"></span></a>--}}
                {{--<ul class="nav child_menu">--}}
                {{--<li><a href="{{ route('apartments.index') }}">List of Apartments</a></li>--}}
                {{--<li><a href="{{ route('apartments.create') }}">Create New Apartments</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                <li><a><i class="fa fa-sitemap ion"></i>Category <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="">List of Category</a></li>
                        <li><a href="">Create New Category</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Post <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#">General Form</a></li>
                        <li><a href="#">Advanced Components</a></li>
                        <li><a href="#">Form Validation</a></li>
                        <li><a href="#">Form Wizard</a></li>
                        <li><a href="#">Form Upload</a></li>
                        <li><a href="#">Form Buttons</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#">General Elements</a></li>
                        <li><a href="#">Media Gallery</a></li>
                        <li><a href="#">Typography</a></li>
                        <li><a href="#">Icons</a></li>
                        <li><a href="#">Glyphicons</a></li>
                        <li><a href="#">Widgets</a></li>
                        <li><a href="#">Invoice</a></li>
                        <li><a href="#">Inbox</a></li>
                        <li><a href="#">Calendar</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#">Chart JS</a></li>
                        <li><a href="#">Chart JS2</a></li>
                        <li><a href="#">Moris JS</a></li>
                        <li><a href="#">ECharts</a></li>
                        <li><a href="#">Other Charts</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#">Fixed Sidebar</a></li>
                        <li><a href="#">Fixed Footer</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="menu_section">
            <h3>Live On</h3>
            <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#">E-commerce</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Project Detail</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Profile</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#">403 Error</a></li>
                        <li><a href="#">404 Error</a></li>
                        <li><a href="#">500 Error</a></li>
                        <li><a href="#">Plain Page</a></li>
                        <li><a href="#">Login Page</a></li>
                        <li><a href="#">Pricing Tables</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li class="sub_menu"><a href="#">Level Two</a>
                                </li>
                                <li><a href="#">Level Two</a>
                                </li>
                                <li><a href="#">Level Two</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Level One</a>
                        </li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span
                            class="label label-success pull-right">Coming Soon</span></a></li>
            </ul>
        </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div>
