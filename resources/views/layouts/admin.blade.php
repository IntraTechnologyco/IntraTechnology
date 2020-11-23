<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <title>@yield('titulo', 'Pagina Oficial') | Intratechnology</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo.png') }}" />
    <link rel="icon" href="/assets/img/logo.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="/assets/vendor/pace/pace.css">
    <script src="/assets/vendor/pace/pace.min.js"></script>
    <!--vendors-->
    <link rel="stylesheet" type="text/css" href="/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/jquery-scrollbar/jquery.scrollbar.css">
    <link rel="stylesheet" href="/assets/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="/assets/vendor/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="/assets/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/assets/vendor/timepicker/bootstrap-timepicker.min.css">
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fonts/jost/jost.css">
    <!--Material Icons-->
    <link rel="stylesheet" type="text/css" href="/assets/fonts/materialdesignicons/materialdesignicons.min.css">
    <!--Bootstrap + atmos Admin CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/atmos.min.css">
    <!-- Additional library for page -->

</head>



<body class="">
    <aside class="admin-sidebar">
        <div class="admin-sidebar-brand">
            <!-- begin sidebar branding-->
            <img class="admin-brand-logo" src="/assets/img/logo.png" width="40" alt="atmos Logo">
            <span class="admin-brand-content font-secondary"><a href="/">Equipo de trabajo</a></span>
            <!-- end sidebar branding-->
            <div class="ml-auto">
                <!-- sidebar pin-->
                <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle"></a>
                <!-- sidebar close for mobile device-->
                <a href="#" class="admin-close-sidebar"></a>
            </div>
        </div>

        <div class="admin-sidebar-wrapper js-scrollbar">
            <ul class="menu">
                <!--list item begins-->
                    <li class="menu-item">

                        <a href="{{ url('roles') }}" class="menu-link">
                            <span class="menu-label">
                                <i class="nav-icon fas fa-users"></i>

                                <span class="menu-name">Roles

                                </span>
                            </span>
                            <span class="menu-icon">

                                <i class="icon-placeholder mdi mdi-link-variant "></i>
                            </span>
                        </a>

                    </li>



                    <li class="menu-item ">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Notas
                                    <span class="menu-arrow"></span>
                                </span>
                                <span class="menu-info">Contains submenu</span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-link-variant "></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="{{ url('notas/todas') }}" class=" menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Todas</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder  ">
                                            L
                                        </i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('/notas/favoritas') }}" class=" menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Favoritas</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder  ">
                                            L
                                        </i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('/notas/archivadas') }}" class=" menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Archivadas</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder  ">
                                            L
                                        </i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                <!--list item ends-->

                <!--list item begins-->
                <li class="menu-item ">
                    <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Menu Level 2
                                <span class="menu-arrow"></span>
                            </span>
                            <span class="menu-info">Contains submenu</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder mdi mdi-link-variant "></i>
                        </span>
                    </a>
                    <!--submenu-->
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="#" class=" menu-link">
                                <span class="menu-label">
                                    <span class="menu-name">Menu Level 1.1</span>
                                </span>
                                <span class="menu-icon">
                                    <i class="icon-placeholder  ">
                                        L
                                    </i>
                                </span>
                            </a>

                        </li>
                        <li class="menu-item">
                            <a href="#" class="open-dropdown menu-link">
                                <span class="menu-label">
                                    <span class="menu-name">Menu Level 1.1
                                        <span class="menu-arrow"></span>
                                    </span>
                                </span>
                                <span class="menu-icon">
                                    <i class="icon-placeholder mdi mdi-link-variant "></i>
                                </span>
                            </a>
                            <!--submenu-->
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="#" class=" menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Menu Level 2.1 </span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder  ">
                                                L
                                            </i>
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </li>

                <!--list item ends-->
            </ul>

        </div>

    </aside>


    <!--site header ends -->
    <section class="admin-content">
        <div class=" bg-dark m-b-30 bg-stars">
            <div class="row">
                <div class="col-md- m-auto text-white p-t-10 p-b-5">

                    <h1><span class="greeting">Bienvenidos</span></h1>
                    <p class="opacity-75">
                    </p>

                </div>

            </div>


        </div>
    </section>

    <div class="container">
        @yield('content')
    </div>



    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="/assets/vendor/popper/popper.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/vendor/select2/js/select2.full.min.js"></script>
    <script src="/assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="/assets/vendor/listjs/listjs.min.js"></script>
    <script src="/assets/vendor/moment/moment.min.js"></script>
    <script src="/assets/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/assets/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="/assets/js/atmos.min.js"></script>
    <!--page specific scripts for demo-->

    <!--Additional Page includes-->
    <script src="/assets/vendor/apexchart/apexcharts.min.js"></script>
    <!--chart data for current dashboard-->
    <script src="/assets/js/dashboard-02.js"></script>

</body>

</html>
