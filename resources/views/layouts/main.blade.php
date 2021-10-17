<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/home-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jul 2021 10:18:19 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Questions and Answers</title>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/selectize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-te-1.4.0.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/upvotejs.min.css')}}">
    <!-- end inject -->
</head>

<body>
    <!-- start cssload-loader -->
    <div id="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div>
    <!-- end cssload-loader -->
    <!--======================================
            START HEADER AREA
     ======================================-->
    <header class="header-area bg-white border-bottom border-bottom-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="logo-box">
                        <a href="{{route('questions.index')}}" class="logo"><img src="{{asset('assets/images/logo-black.png')}}" alt="logo"></a>
                        <div class="user-action">
                            <div class="search-menu-toggle icon-element icon-element-xs shadow-sm mr-1" data-toggle="tooltip" data-placement="top" title="Search">
                                <i class="la la-search"></i>
                            </div>
                            <div class="off-canvas-menu-toggle icon-element icon-element-xs shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                                <i class="la la-bars"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-2 -->

                @if(\Illuminate\Support\Facades\Auth::check())
                <div class="col-lg-10">
                    <div class="menu-wrapper border-left border-left-gray pl-4 justify-content-end">
                        <nav class="menu-bar mr-auto">
                            <ul>
                                <li>
                                    <a href="{{route('questions.index')}}">Home <i class="la la-angle-down fs-11"></i></a>
                                </li>
                                <li class="is-mega-menu">
                                    <a href="#">pages <i class="la la-angle-down fs-11"></i></a>
                                    <div class="dropdown-menu-item mega-menu">
                                        <ul class="row">
                                            <li class="col-lg-3">
                                                <a href="{{route('profile',\Illuminate\Support\Facades\Auth::id())}}">user profile</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul><!-- end ul -->
                        </nav><!-- end main-menu -->
                        <form method="get" action="{{route('search')}}" class="mr-4" >
                            @csrf
                            <div class="form-group mb-0">
                                <input class="form-control form--control form--control-bg-gray" type="search" name="search" placeholder="Type your search words...">
                                <button class="form-btn" type="submit"><i class="la la-search"></i></button>
                            </div>
                        </form>
                        <x-notification-menu />
                        <div class="nav-right-button">
                            <a href="{{route('profile',\Illuminate\Support\Facades\Auth::id())}}" class="btn theme-btn"><i class="la la-user mr-1"></i> Account</a>
                        </div><!-- end nav-right-button -->

                    </div><!-- end menu-wrapper -->
                </div><!-- end col-lg-10 -->
            </div><!-- end row -->
        </div><!-- end container -->
        @endif

        @if(\Illuminate\Support\Facades\Auth::check()==false)
            <div class="col-lg-10">
                <div class="menu-wrapper border-left border-left-gray pl-4 justify-content-end">
                    <nav class="menu-bar mr-auto">
                        <ul>
                            <li>
                                <a href="#">Home <i class="la la-angle-down fs-11"></i></a>
                                <ul class="dropdown-menu-item">
                                    <li><a href="{{route('questions.index')}}">Home - landing</a></li>
                                </ul>
                            </li>
                        </ul><!-- end ul -->
                    </nav><!-- end main-menu -->

                    <form method="get" action="{{route('search')}}" class="mr-4" >
                        @csrf
                        <div class="form-group mb-0">
                            <input class="form-control form--control form--control-bg-gray" type="search" name="search" placeholder="Type your search words...">
                            <button class="form-btn" type="submit"><i class="la la-search"></i></button>
                        </div>
                    </form>

                    <div class="nav-right-button">
                        <a href="{{route('login')}}" class="btn theme-btn theme-btn-outline mr-2"><i class="la la-sign-in mr-1"></i> Login</a>
                        <a href="{{route('register')}}" class="btn theme-btn"><i class="la la-user mr-1"></i> Sign up</a>
                    </div><!-- end nav-right-button -->
                </div><!-- end menu-wrapper -->
            </div><!-- end col-lg-10 -->
            </div><!-- end row -->
            </div><!-- end container -->
            <div class="off-canvas-menu custom-scrollbar-styled">
                <div class="off-canvas-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
                    <i class="la la-times"></i>
                </div><!-- end off-canvas-menu-close -->
                <ul class="generic-list-item off-canvas-menu-list pt-90px">
                    <li>
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="{{route('questions.index')}}">Home - landing</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="user-profile.blade.php">user profile</a></li>
                        </ul>
                    </li>

                </ul>
                <div class="off-canvas-btn-box px-4 pt-5 text-center">
                    <a href="#" class="btn theme-btn theme-btn-sm theme-btn-outline" data-toggle="modal" data-target="#loginModal"><i class="la la-sign-in mr-1"></i> Login</a>
                    <span class="fs-15 fw-medium d-inline-block mx-2">Or</span>
                    <a href="#" class="btn theme-btn theme-btn-sm" data-toggle="modal" data-target="#signUpModal"><i class="la la-plus mr-1"></i> Sign up</a>
                </div>
            </div><!-- end off-canvas-menu -->
        @endif
        <div class="mobile-search-form">
            <div class="d-flex align-items-center">
                <form method="post" class="flex-grow-1 mr-3">
                    <div class="form-group mb-0">
                        <input class="form-control form--control pl-40px" type="text" name="search" placeholder="Type your search words...">
                        <span class="la la-search input-icon"></span>
                    </div>
                </form>
                <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                    <i class="la la-times"></i>
                </div><!-- end off-canvas-menu-close -->
            </div>
        </div><!-- end mobile-search-form -->
        <div class="body-overlay"></div>
    </header><!-- end header-area -->

    <!--======================================
        START HERO AREA
    ======================================-->
    @if(\Illuminate\Support\Facades\Auth::check()==false)
    <section class="hero-area pt-80px pb-50px bg-white shadow-sm">
        <span class="stroke-shape stroke-shape-1"></span>
        <span class="stroke-shape stroke-shape-2"></span>
        <span class="stroke-shape stroke-shape-3"></span>
        <span class="stroke-shape stroke-shape-4"></span>
        <span class="stroke-shape stroke-shape-5"></span>
        <span class="stroke-shape stroke-shape-6"></span>
        <div class="container">
            <div class="hero-content text-center pb-5">
                <h2 class="section-title pb-3 theme-font-2 fs-40">The Social Q&A Community</h2>
                <p class="section-desc">The question and answer site designed to help people, to help each other: <br>
                    To ask, to learn, to share, to grow.
                </p>
                <div class="hero-btn-box py-4">
                    <a href="{{route('register')}}" class="btn theme-btn mr-2">Join the community</a>
                    <a href="{{route('questions.create')}}" class="btn theme-btn theme-btn-outline">Ask a Question</a>
                </div>
            </div><!-- end hero-content -->
        </div><!-- end hero-list -->
        </div><!-- end container -->
    </section>
    @endif
    <!--======================================
            END HERO AREA
    ======================================-->
    @yield('body')
</body>
@if(\Illuminate\Support\Facades\Auth::check())
    @yield('scripts')
@endif
</html>
