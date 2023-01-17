<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>GoodWill Logistics</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">
        <!--Morris Chart-->
        <link rel="stylesheet" href="{{asset('assets/libs/morris-js/morris.css')}}" />
        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/main-style.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
        @stack('owncss')
    </head>
    <body>
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                        <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>
                            <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                <span class="float-right">
                                    <a href="" class="text-dark">
                                        <small>Clear All</small>
                                    </a>
                                </span>Notification
                                </h5>
                            </div>
                            <div class="slimscroll noti-scroll">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon">
                                    <img src="/assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Hi, How are you? What about our next meeting</small>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">1 min ago</small>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                    <img src="/assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Wow ! this admin looks good and awesome design</small>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning">
                                        <i class="mdi mdi-account-plus"></i>
                                    </div>
                                    <p class="notify-details">New user registered.
                                        <small class="text-muted">5 hours ago</small>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">4 days ago</small>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-secondary">
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked
                                        <b>Admin</b>
                                        <small class="text-muted">13 days ago</small>
                                    </p>
                                </a>
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="/assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                {{auth()->user()->name}} <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <!-- item-->



                <a class="dropdown-item mdi mdi-power" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}


        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        {{ csrf_field() }}
                    </form>

                            </a>




                        </div>
                    </li>
                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li>
                </ul>
                <!-- LOGO -->
                <div class="logo-box">
                    <a href="{{url('admin/dashboard')}}" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="16">
                            <!-- <span class="logo-lg-text-light">Xeria</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="24">
                        </span>
                    </a>
                </div>
                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile disable-btn waves-effect">
                        <i class="fe-menu"></i>
                        </button>
                    </li>
                    <li>
                        <h4 class="page-title-main">@stack('page-title')</h4>
                    </li>

                </ul>
            </div>
            <!-- end Topbar -->
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">
                <div class="slimscroll-menu">
                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="/assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-lg">
                        <div class="dropdown">
                            <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">{{auth()->user()->name}}</a>
                            <div class="dropdown-menu user-pro-dropdown">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user mr-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings mr-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock mr-1"></i>
                                    <span>Lock Screen</span>
                                </a>


                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out mr-1"></i>
                                    <span>Logoutsancjachwv</span>
                                </a>


                            </div>
                        </div>
                        <p class="text-muted">Admin Head</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="text-muted">
                                    <i class="mdi mdi-settings"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href= "{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"class="text-custom">
                                    <i class="mdi mdi-power"></i>




                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        {{ csrf_field() }}
                    </form>
                                </a>
                            </li>


                        </ul>
                    </div>
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Navigation</li>
                            <li>
                                <a href="/admin">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('orders.index')}}">
                                    <i class="mdi mdi-texture"></i>
                                    <span> Order </span>
                                </a>
                            </li>


                            <li>
                                <a href="{{ route('pallet.index')}}">
                                    <i class="mdi mdi-format-font"></i>
                                    <span> Palletrate </span>
                                </a>
                            </li>


                            <li>
                                <a href="{{ route('postcode.index')}}">
                                    <i class="mdi mdi-format-font"></i>
                                    <span> Postcode </span>
                                </a>
                            </li>
                             <li>
                                <a href="{{ route('postcode-group.index')}}">
                                    <i class="mdi mdi-format-font"></i>
                                    <span> Post Code Group </span>
                                </a>
                            </li>


{{--                            <li>--}}
{{--                                <a href="typography.html">--}}
{{--                                    <i class="mdi mdi-format-font"></i>--}}
{{--                                    <span> Typography </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{----}}
{{----}}
{{--                            <li>--}}
{{--                                <a href="javascript: void(0);">--}}
{{--                                    <i class="mdi mdi-invert-colors"></i>--}}
{{--                                    <span> User Interface </span>--}}
{{--                                    <span class="menu-arrow"></span>--}}
{{--                                </a>--}}
{{--                                <ul class="nav-second-level" aria-expanded="false">--}}
{{--                                    <li><a href="ui-buttons.html">Buttons</a></li>--}}
{{--                                    <li><a href="ui-cards.html">Cards</a></li>--}}
{{--                                    <li><a href="ui-draggable-cards.html">Draggable Cards</a></li>--}}
{{--                                    <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>--}}
{{--                                    <li><a href="ui-material-icons.html">Material Design Icons</a></li>--}}
{{--                                    <li><a href="ui-font-awesome-icons.html">Font Awesome</a></li>--}}
{{--                                    <li><a href="ui-dripicons.html">Dripicons</a></li>--}}
{{--                                    <li><a href="ui-themify-icons.html">Themify Icons</a></li>--}}
{{--                                    <li><a href="ui-modals.html">Modals</a></li>--}}
{{--                                    <li><a href="ui-notification.html">Notification</a></li>--}}
{{--                                    <li><a href="ui-range-slider.html">Range Slider</a></li>--}}
{{--                                    <li><a href="ui-components.html">Components</a>--}}
{{--                                    <li><a href="ui-sweetalert.html">Sweet Alert</a>--}}
{{--                                    <li><a href="ui-treeview.html">Tree view</a>--}}
{{--                                    <li><a href="ui-widgets.html">Widgets</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="javascript: void(0);">--}}
{{--                                    <i class="mdi mdi-texture"></i>--}}
{{--                                    <span class="badge badge-warning float-right">7</span>--}}
{{--                                    <span> Forms </span>--}}
{{--                                </a>--}}
{{--                                <ul class="nav-second-level" aria-expanded="false">--}}
{{--                                    <li><a href="form-elements.html">General Elements</a></li>--}}
{{--                                    <li><a href="form-advanced.html">Advanced Form</a></li>--}}
{{--                                    <li><a href="form-validation.html">Form Validation</a></li>--}}
{{--                                    <li><a href="form-wizard.html">Form Wizard</a></li>--}}
{{--                                    <li><a href="form-fileupload.html">Form Uploads</a></li>--}}
{{--                                    <li><a href="form-quilljs.html">Quilljs Editor</a></li>--}}
{{--                                    <li><a href="form-xeditable.html">X-editable</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="javascript: void(0);">--}}
{{--                                    <i class="mdi mdi-view-list"></i>--}}
{{--                                    <span> Tables </span>--}}
{{--                                    <span class="menu-arrow"></span>--}}
{{--                                </a>--}}
{{--                                <ul class="nav-second-level" aria-expanded="false">--}}
{{--                                    <li><a href="tables-basic.html">Basic Tables</a></li>--}}
{{--                                    <li><a href="tables-datatable.html">Data Tables</a></li>--}}
{{--                                    <li><a href="tables-responsive.html">Responsive Table</a></li>--}}
{{--                                    <li><a href="tables-editable.html">Editable Table</a></li>--}}
{{--                                    <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="javascript: void(0);">--}}
{{--                                    <i class="mdi mdi-chart-donut-variant"></i>--}}
{{--                                    <span> Charts </span>--}}
{{--                                    <span class="menu-arrow"></span>--}}
{{--                                </a>--}}
{{--                                <ul class="nav-second-level" aria-expanded="false">--}}
{{--                                    <li><a href="charts-flot.html">Flot Charts</a></li>--}}
{{--                                    <li><a href="charts-morris.html">Morris Charts</a></li>--}}
{{--                                    <li><a href="charts-chartist.html">Chartist Charts</a></li>--}}
{{--                                    <li><a href="charts-chartjs.html">Chartjs Charts</a></li>--}}
{{--                                    <li><a href="charts-other.html">Other Charts</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="calendar.html">--}}
{{--                                    <i class="mdi mdi-calendar"></i>--}}
{{--                                    <span> Calendar </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="inbox.html">--}}
{{--                                    <i class="mdi mdi-email"></i>--}}
{{--                                    <span> Mail </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="javascript: void(0);">--}}
{{--                                    <i class="mdi mdi-page-layout-sidebar-left"></i>--}}
{{--                                    <span class="badge badge-purple float-right">New</span>--}}
{{--                                    <span> Layouts </span>--}}
{{--                                </a>--}}
{{--                                <ul class="nav-second-level" aria-expanded="false">--}}
{{--                                    <li><a href="layouts-sidebar-sm.html">Small Sidebar</a></li>--}}
{{--                                    <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>--}}
{{--                                    <li><a href="layouts-dark-topbar.html">Dark Topbar</a></li>--}}
{{--                                    <li><a href="layouts-preloader.html">Preloader</a></li>--}}
{{--                                    <li><a href="layouts-sidebar-collapsed.html">Sidebar Collapsed</a></li>--}}
{{--                                    <li><a href="layouts-boxed.html">Boxed</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="javascript: void(0);">--}}
{{--                                    <i class="mdi mdi-google-pages"></i>--}}
{{--                                    <span> Pages </span>--}}
{{--                                    <span class="menu-arrow"></span>--}}
{{--                                </a>--}}
{{--                                <ul class="nav-second-level" aria-expanded="false">--}}
{{--                                    <li><a href="pages-starter.html">Starter Page</a></li>--}}
{{--                                    <li><a href="pages-login.html">Login</a></li>--}}
{{--                                    <li><a href="pages-register.html">Register</a></li>--}}
{{--                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>--}}
{{--                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>--}}
{{--                                    <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>--}}
{{--                                    <li><a href="pages-404.html">Error 404</a></li>--}}
{{--                                    <li><a href="pages-500.html">Error 500</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="javascript: void(0);">--}}
{{--                                    <i class="mdi mdi-layers"></i>--}}
{{--                                    <span> Extra Pages </span>--}}
{{--                                    <span class="menu-arrow"></span>--}}
{{--                                </a>--}}
{{--                                <ul class="nav-second-level" aria-expanded="false">--}}
{{--                                    <li><a href="extras-projects.html">Projects</a></li>--}}
{{--                                    <li><a href="extras-tour.html">Tour</a></li>--}}
{{--                                    <li><a href="extras-taskboard.html">Taskboard</a></li>--}}
{{--                                    <li><a href="extras-taskdetail.html">Task Detail</a></li>--}}
{{--                                    <li><a href="extras-profile.html">Profile</a></li>--}}
{{--                                    <li><a href="extras-maps.html">Maps</a></li>--}}
{{--                                    <li><a href="extras-contact.html">Contact list</a></li>--}}
{{--                                    <li><a href="extras-pricing.html">Pricing</a></li>--}}
{{--                                    <li><a href="extras-timeline.html">Timeline</a></li>--}}
{{--                                    <li><a href="extras-invoice.html">Invoice</a></li>--}}
{{--                                    <li><a href="extras-faq.html">FAQs</a></li>--}}
{{--                                    <li><a href="extras-gallery.html">Gallery</a></li>--}}
{{--                                    <li><a href="extras-email-templates.html">Email Templates</a></li>--}}
{{--                                    <li><a href="extras-maintenance.html">Maintenance</a></li>--}}
{{--                                    <li><a href="extras-comingsoon.html">Coming Soon</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="javascript: void(0);">--}}
{{--                                    <i class="mdi mdi-share-variant"></i>--}}
{{--                                    <span> Multi Level </span>--}}
{{--                                    <span class="menu-arrow"></span>--}}
{{--                                </a>--}}
{{--                                <ul class="nav-second-level nav" aria-expanded="false">--}}
{{--                                    <li>--}}
{{--                                        <a href="javascript: void(0);">Level 1.1</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="javascript: void(0);" aria-expanded="false">Level 1.2--}}
{{--                                            <span class="menu-arrow"></span>--}}
{{--                                        </a>--}}
{{--                                        <ul class="nav-third-level nav" aria-expanded="false">--}}
{{--                                            <li>--}}
{{--                                                <a href="javascript: void(0);">Level 2.1</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="javascript: void(0);">Level 2.2</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                    <!-- End Sidebar -->
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->
            </div>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h4 class="m-0 text-white">Settings</h4>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="/assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>

                    <h5><a href="javascript: void(0);">{{auth()->user()->name}}</a> </h5>
                    <p class="text-muted mb-0"><small>Admin Head</small></p>
                </div>
                <!-- Settings -->
                <hr class="mt-0" />
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox1" type="checkbox" checked>
                        <label for="Rcheckbox1">
                            Notifications
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox2" type="checkbox" checked>
                        <label for="Rcheckbox2">
                            API Access
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox3" type="checkbox">
                        <label for="Rcheckbox3">
                            Auto Updates
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox4" type="checkbox" checked>
                        <label for="Rcheckbox4">
                            Online Status
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-0">
                        <input id="Rcheckbox5" type="checkbox" checked>
                        <label for="Rcheckbox5">
                            Auto Payout
                        </label>
                    </div>
                </div>
                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        </div> <!-- end inbox-widget -->
                        </div> <!-- end .p-3-->
                        </div> <!-- end slimscroll-menu-->
                    </div>
                    <!-- /Right-bar -->
                    <!-- Right bar overlay-->
                    <div class="rightbar-overlay"></div>
                    <!-- Vendor js -->
                    <script src="{{asset('/assets/js/vendor.min.js')}}"></script>
                    <!-- knob plugin -->
                    <script src="{{asset('/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>
                    <!--Morris Chart-->
                    <script src="{{asset('/assets/libs/morris-js/morris.min.js')}}"></script>
                    <script src="{{asset('assets/libs/raphael/raphael.min.js')}}"></script>
                    <!-- Dashboard init js-->
                    <script src="{{asset('/assets/js/pages/dashboard.init.js')}}"></script>
                    <!-- App js -->
                    <script src="{{asset('/assets/js/app.min.js')}}"></script>
                    <script src="{{asset('/assets/libs/jquery-ui/jquery-ui.min.js')}}"></script>
                    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
                    @stack('scripts')
                </body>
            </html>
