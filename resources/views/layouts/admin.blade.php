<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords"
        content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
    <meta name="author" content="DashboardKit ">
    <link rel="icon" href="{{ asset('admin/images/logo-bengkalis.png') }}">



    <!-- font css -->
    <link rel="stylesheet" href="{{ asset('admin/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/fonts/material.css') }}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>

    @stack('map-style')

</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class=" loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Mobile header ] start -->
    <div class="pc-mob-header pc-header">

        <div class="pcm-toolbar ml-auto">
            <a href="#!" class="pc-head-link" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>

            <a href="#!" class="pc-head-link" id="header-collapse">
                <i data-feather="more-vertical"></i>
            </a>
        </div>
    </div>
    <!-- [ Mobile header ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pc-sidebar ">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="index.html" class="b-brand m-auto">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="{{ asset('admin/images/logo-bengkalis.png') }}" alt="" width="80px"
                        class="align-self-center">
                    <img src="{{ asset('admin/images/logo-bengkalis.png') }}" alt="" class="logo-sm">
                </a>
            </div>
            <div class="navbar-content mt-5">
                <ul class="pc-navbar">
                    <li class="pc-item pc-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('admin.home') }}" class="pc-link "><span class="pc-micon"><i
                                    class="material-icons-two-tone">home</i></span><span
                                class="pc-mtext">Dashboard</span></a>
                    </li>
                    <li class="pc-item pc-caption">
                        <label>Pengelolaan</label>
                    </li>

                    <li class="pc-item pc-hasmenu pc-trigger">

                        <a href="#!" class="pc-link "><span class="pc-micon"><i
                                    class="material-icons-two-tone">featured_play_list</i></span><span
                                class="pc-mtext">Berita</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="{{ route('admin.berita.create') }}">Tambah
                                    Berita</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="{{ route('admin.berita.index') }}">Semua
                                    Berita</a></li>

                        </ul>


                    </li>
                    <li class="pc-item pc-hasmenu pc-trigger">

                        <a href="#!" class="pc-link "><span class="pc-micon"><i
                                    class="material-icons-two-tone">home_work</i></span><span
                                class="pc-mtext">Kecamatan</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link"
                                    href="{{ route('admin.kecamatan.create') }}">Tambah
                                    Data</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="{{ route('admin.kecamatan.index') }}">Semua
                                    Kecamatan</a></li>

                        </ul>

                        <ul class="pc-submenu" style="">
                            <li class="pc-item pc-hasmenu">
                                <a href="#!" class="pc-link">Kecamatan Bengkalis<span class="pc-arrow"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-chevron-right">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg></span></a>
                                <ul class="pc-submenu" style="display: none;">
                                    <li class="pc-item"><a class="pc-link" href="#!">Profil</a></li>
                                    <li class="pc-item"><a class="pc-link" href="#!">Kegiatan KIM</a></li>
                                    <li class="pc-item"><a class="pc-link" href="#!">Jumlah KIM</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="pc-header ">
        <div class="header-wrapper">

            <div class="ml-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="material-icons-two-tone">search</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pc-h-dropdown drp-search">
                            <form class="px-3">
                                <div class="form-group mb-0 d-flex align-items-center">
                                    <i data-feather="search"></i>
                                    <input type="search" class="form-control border-0 shadow-none"
                                        placeholder="Search here. . .">
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            {{-- <img src="assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar"> --}}
                            <span>
                                <span class="user-name">{{ Auth::user()->name }}</span>
                                <span class="user-desc">Administrator</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="material-icons-two-tone">chrome_reader_mode</i>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </header>
    <!-- [ Header ] end -->

    @yield('content')
    <!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Js -->
    <script src="{{ asset('admin/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/feather.min.js') }}"></script>
    <script src="{{ asset('admin/js/pcoded.min.js') }}"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script> -->
    <!-- <script src="{{ asset('admin/js/plugins/clipboard.min.js') }}"></script> -->
    <!-- <script src="{{ asset('admin/js/uikit.min.js') }}"></script> -->

    <!-- Apex Chart -->
    <script src="{{ asset('admin/js/plugins/apexcharts.min.js') }}"></script>


    <!-- custom-chart js -->
    <script src="{{ asset('admin/js/pages/dashboard-sale.js') }}"></script>
    @stack('map-script')

    @stack('ckeditor-script')
</body>

</html>
