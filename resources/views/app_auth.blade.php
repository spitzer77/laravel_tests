<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <title>Dashboard ecommerce - Vuexy - Bootstrap HTML admin template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
          content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <link rel="apple-touch-icon" href="/vuexy/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/vuexy/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
          rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/vuexy/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/vuexy/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="/vuexy/app-assets/vendors/css/extensions/toastr.min.css">


    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/vuexy/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/vuexy/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/vuexy/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/vuexy/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="/vuexy/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/vuexy/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="/vuexy/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/vuexy/app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="/vuexy/app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="/vuexy/app-assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="/vuexy/app-assets/css/plugins/extensions/ext-component-toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/vuexy/assets/css/style.css">
    <!-- END: Custom CSS-->

    <link rel="stylesheet" type="text/css" href="/vuexy/app-assets/css/plugins/forms/form-validation.css">

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])

    @inertiaHead
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover"
      data-menu="horizontal-menu" data-col="">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center"
     data-nav="brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav">
            <li class="nav-item"><a class="navbar-brand"
                                    href="../../../html/ltr/horizontal-menu-template/index.html"><span
                        class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                                    y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                                    x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>

                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                  d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                  style="fill:currentColor"></path>
                                            <path id="Path1"
                                                  d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                  fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                     points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                     points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                                     points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                    <h2 class="brand-text mb-0">Vuexy</h2>
                </a></li>
        </ul>
    </div>
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item dropdown dropdown-language">
                <a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="flag-icon"></i>
                    <span class="selected-language"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="/vuexy/app-assets/images/icons/xls.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                        Manager</small>
                </div>
            </div>
            <small class="search-data-size me-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="/vuexy/app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
            <small class="search-data-size me-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="/vuexy/app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                        Marketing Manager</small>
                </div>
            </div>
            <small class="search-data-size me-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="/vuexy/app-assets/images/icons/doc.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
            <small class="search-data-size me-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="/vuexy/app-assets/images/portrait/small/avatar-s-8.jpg" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="/vuexy/app-assets/images/portrait/small/avatar-s-1.jpg" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="/vuexy/app-assets/images/portrait/small/avatar-s-14.jpg" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                        Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="/vuexy/app-assets/images/portrait/small/avatar-s-6.jpg" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between"><a
            class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span>
            </div>
        </a></li>
</ul>
<!-- END: Header-->

<!-- BEGIN: Main Menu-->
<div class="horizontal-menu-wrapper">
    <div
        class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border container-xxl"
        role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
        <div class="navbar-header">
        </div>
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include ../../../includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                @if (auth()->check() && auth()->user()->is_admin === 1)
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="{{ route('user.index') }}">
                            <i data-feather="home"></i><span data-i18n="Dashboards">Managers</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center"  href="{{ route('test.index') }}">
                            <i data-feather="package"></i><span data-i18n="Apps">Tests</span></a>
                    </li>
                @endif

                @if (auth()->check() && auth()->user()->is_admin === 0)
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center"  href="{{ route('test2.index') }}">
                            <i data-feather="package"></i><span data-i18n="Apps">Tests</span></a>
                    </li>
                @endif

                <li class="nav-item d-flex align-items-center ml-4">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="">
                            <i data-feather="package"></i><span data-i18n="Apps">Logout</span>
                        </button>
                    </form>
                </li>

                <li class="nav-item d-flex align-items-center ml-auto">Logged as: <p class="font-bold ml-2">{{  auth()->user()->name }}</p></li>

            </ul>
        </div>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            @inertia
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a
                class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span
                class="d-none d-sm-inline-block">, All rights Reserved</span></span><span
            class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->

<!-- BEGIN: Vendor JS-->
<script src="/vuexy/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="/vuexy/app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="/vuexy/app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="/vuexy/app-assets/vendors/js/extensions/toastr.min.js"></script>


<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="/vuexy/app-assets/js/core/app-menu.js"></script>
<!-- END: Theme JS-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/datepicker.min.js"></script>

<script>
    $(window).on('load', function () {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
</body>
<!-- END: Body-->

</html>