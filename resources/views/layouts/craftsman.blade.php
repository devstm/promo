<!DOCTYPE html>
<html lang="ar" direction="rtl" dir="rtl">
<head>
    <base href="">
    <meta charset="utf-8"/>
    <title>Craftsmen</title>
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->
    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="/assets/css/pages/wizard/wizard-4.rtl.css" rel="stylesheet" type="text/css"/>
    <!--end::Page Vendors Styles -->
    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{asset('assets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles -->
    <!--begin::Layout Skins(used by all pages) -->
    <link href="{{asset('assets/css/skins/header/base/light.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/skins/header/menu/light.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/skins/brand/dark.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/skins/aside/dark.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}"/>
</head>
<!-- end::Head -->
<!-- begin::Body -->
<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
<!-- begin:: Page -->
<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="index.html">
            <img alt="Logo" src="{{asset('assets/media/logos/logo-light.png')}}"/>
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler">
            <span></span></button>
        <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                class="flaticon-more"></i></button>
    </div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <!-- begin:: Header -->
    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " style="right: 0">

        <!-- begin:: Header Menu -->

        <!-- Uncomment this to display the close button of the panel
<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
-->
        <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
            <div id="kt_header_menu"
                 class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
                <ul class="kt-menu__nav ">
                    <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here kt-menu__item--active"
                        data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                                                                   class="kt-menu__link kt-menu__toggle"><span
                                class="kt-menu__link-text">Crafts</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                        data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                                                                   class="kt-menu__link kt-menu__toggle"><span
                                class="kt-menu__link-text">Craftsmen</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                        data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                                                                   class="kt-menu__link kt-menu__toggle"><span
                                class="kt-menu__link-text">Reports</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a></li>
                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                        data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                                                                   class="kt-menu__link kt-menu__toggle"><span
                                class="kt-menu__link-text">Likes</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a></li>
                </ul>
            </div>
        </div>

        <!-- end:: Header Menu -->

        <!-- begin:: Header Topbar -->
        <div class="kt-header__topbar">

            <!--begin: Search -->

            <!--begin: Search -->
            <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown"
                 id="kt_quick_search_toggle">
                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
									<span class="kt-header__topbar-icon">
										<svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"/>
												<path
                                                    d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"/>
												<path
                                                    d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                    fill="#000000" fill-rule="nonzero"/>
											</g>
										</svg> </span>
                </div>
                <div
                    class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                    <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact"
                         id="kt_quick_search_dropdown">
                        <form method="get" class="kt-quick-search__form">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i
                                            class="flaticon2-search-1"></i></span></div>
                                <input type="text" class="form-control kt-quick-search__input"
                                       placeholder="Search...">
                                <div class="input-group-append"><span class="input-group-text"><i
                                            class="la la-close kt-quick-search__close"></i></span></div>
                            </div>
                        </form>
                        <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325"
                             data-mobile-height="200">
                        </div>
                    </div>
                </div>
            </div>

            <div class="kt-header__topbar-item kt-header__topbar-item--langs">
                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
									<span class="kt-header__topbar-icon">
										<img class="" src="{{asset('assets/media/flags/226-united-states.svg')}}"
                                             alt=""/>
									</span>
                </div>
                <div
                    class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround">
                    <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
                        <li class="kt-nav__item kt-nav__item--active">
                            <a href="#" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><img
                                                src="{{asset('assets/media/flags/226-united-states.svg')}}"
                                                alt=""/></span>
                                <span class="kt-nav__link-text">English</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><img
                                                src="{{asset('assets/media/flags/128-spain.svg')}}" alt=""/></span>
                                <span class="kt-nav__link-text">Spanish</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><img
                                                src="{{asset('assets/media/flags/162-germany.svg')}}" alt=""/></span>
                                <span class="kt-nav__link-text">German</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="kt-header__topbar-item kt-header__topbar-item--user">
                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                    <div class="kt-header__topbar-user">
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @if(auth('craftsman'))
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{auth('craftsman')->user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @else
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif


                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <!--end: User Bar -->
        </div>

        <!-- end:: Header Topbar -->
    </div>
    <!-- end:: Header -->
    <!-- begin:: image -->
    <div
        style="width:100%; text-align: center ; margin-top: 4% ;height: 480px ; background-image: linear-gradient(#d5d5d5,white);">
        <img style="width:90% ; height: 300px" src="https://ccute.cc/wp-content/uploads/2018/06/4767.jpg">
        <h1 style="margin-top: 3% ;margin-bottom: 1.5%;font-size: 2rem">{{optional(auth('craftsman')->user())->name}}</h1>
        <div class="kt-separator kt-separator--solid" style="width: 60%;margin-right :20%;margin-bottom: 0"></div>
        <ul class="nav nav-tabs  nav-tabs-line " style="margin-right: 20%; margin-left:20% ; ">
            <li class="nav-item">
                <a class="nav-link active" style="font-size: 22px" data-toggle="tab" href="#kt_tabs_3_1" role="tab">المنشورات</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link"  style="font-size: 19px" role="tab" href="{{url('craftsman')}}" aria-haspopup="true"
                   aria-expanded="false">الصفحة الرئيسية</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" style="font-size: 19px" href="#" role="tab">الرسائل</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" style="font-size: 19px" href="#" role="tab">التقييم</a>
            </li>
            <li class="nav-item dropdown " style="left: -58% ;">
                <a class="nav-link dropdown-toggle " data-toggle="dropdown"
                   style="font-size: 19px;background-color: #e4e6eb; border-radius: 5px;padding: 5px ;margin-top: 10px"
                   href="#" role="button" aria-haspopup="true" aria-expanded="false">المزيد</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" data-toggle="tab" href="#kt_tabs_3_2">Action</a>
                    <a class="dropdown-item" data-toggle="tab" href="#kt_tabs_3_2">Another action</a>
                    <a class="dropdown-item" data-toggle="tab" href="#kt_tabs_3_2">Something else here</a>
                </div>
            </li>
        </ul>


    </div>
    <!-- end:: image -->
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper"
             style="margin-right: 18% ;padding: 0">
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                    <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
                        @yield('content')
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
<!-- begin:: Footer -->
<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-footer__copyright">
            2021&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/metronic" target="_blank"
                                     class="kt-link">CRAFTSMEN
                SYSTEM</a>
        </div>
    </div>
</div>
<!-- end:: Footer -->
</div>


<!-- end:: Page -->


<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                ],
                "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                ]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
<script src="{{asset('assets/plugins/custom/gmaps/gmaps.js')}}" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{asset('assets/js/pages/dashboard.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/pages/custom/user/add-user.js')}}" type="text/javascript"></script>
<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
