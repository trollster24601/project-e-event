<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">
            <!-- Logo container-->
            <div class="logo">
                <!-- Text Logo -->
                <!--<a href="index.html" class="logo">-->
                <!--Urora-->
                <!--</a>-->
                <!-- Image Logo -->
                <a href="index.html" class="logo">
                    <img src="<?= base_url(); ?>/assets/images/logo-sm.png" alt="" height="50" class="logo-small" />
                    <img src="<?= base_url(); ?>/assets/images/logo-h-lg.png" alt="" class="logo-large" />
                </a>
            </div>
            <!-- End Logo container-->

            <div class="menu-extras topbar-custom">
                <ul class="list-inline float-right mb-0">
                    <!-- language-->

                    <li class="list-inline-item dropdown notification-list">
                        <div class="list-inline-item hide-phone app-search">
                            <form role="search" class="">
                                <div class="form-group pt-1">
                                    <input type="text" class="form-control" placeholder="Search.." />
                                    <a href=""><i class="fa fa-search"></i></a>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ti-email noti-icon"></i>
                            <span class="badge badge-danger heartbit noti-icon-badge">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title align-self-center">
                                <h5><span class="badge badge-danger float-right">745</span>Messages</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon"><img src="<?= base_url(); ?>/assets/images/users/avatar-2.jpg"
                                        alt="user-img" class="img-fluid rounded-circle" /></div>
                                <p class="notify-details"><b>Charles M. Jones</b><small class="text-muted">Dummy
                                        text of the printing and typesetting industry.</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon"><img src="<?= base_url(); ?>/assets/images/users/avatar-3.jpg"
                                        alt="user-img" class="img-fluid rounded-circle" /></div>
                                <p class="notify-details"><b>Thomas J. Mimms</b><small class="text-muted">You have
                                        87 unread messages</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon"><img src="<?= base_url(); ?>/assets/images/users/avatar-4.jpg"
                                        alt="user-img" class="img-fluid rounded-circle" /></div>
                                <p class="notify-details"><b>Luis M. Konrad</b><small class="text-muted">It is a
                                        long established fact that a reader will</small></p>
                            </a>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item"> View All </a>
                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ti-bell noti-icon"></i>
                            <span class="badge badge-success a-animate-blink noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5><span class="badge badge-danger float-right">87</span>Notification</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy
                                        text of the printing and typesetting industry.</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details"><b>New Message received</b><small class="text-muted">You
                                        have 87 unread messages</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                                <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is
                                        a long established fact that a reader will</small></p>
                            </a>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item"> View All </a>
                        </div>
                    </li>
                    <li class="list-inline-item dropdown notification-list">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?= base_url(); ?>/assets/images/users/avatar-3.jpg" alt="user"
                                    class="rounded-circle" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5>Welcome</h5>
                                </div>
                                <a class="dropdown-item" href="#"><i
                                        class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5 text-muted"></i> My
                                    Wallet</a>
                                <a class="dropdown-item d-block" href="#"><span
                                        class="badge badge-success float-right">5</span><i
                                        class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i
                                        class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i>
                                    Logout</a>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link" id="mobileToggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
                </ul>
            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>
        </div>
        <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <!-- MENU Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu text-center">
                    <li class="has-submenu">
                        <a href="/admin/dashboard"><i class="mdi mdi-view-dashboard"></i>Dashboard</a>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="mdi mdi-cards"></i>Kelola Akun</a>
                        <ul class="submenu">
                            <li><a href="/admin/kelola/user">User</a></li>
                            <li><a href="/admin/kelola/eo">EO (Event Organizer)</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="/admin/event"><i class="mdi mdi-calendar-clock"></i>Event</a>
                    </li>

                    <li class="has-submenu">
                        <a href="/admin/laporan"><i class="mdi mdi-animation"></i>Laporan</a>
                    </li>

                    <li class="has-submenu">
                        <a href="/admin/pembayaran"><i class="mdi mdi-layers"></i>Pembayaran</a>
                    </li>

                </ul>
                <!-- End navigation menu -->
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->