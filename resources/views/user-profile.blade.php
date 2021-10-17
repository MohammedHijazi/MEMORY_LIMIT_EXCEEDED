<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jul 2021 10:18:21 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Disilab -  Social Questions and Answers HTML Template</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery-te-1.4.0.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/selectize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
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
                        <div class="off-canvas-menu-toggle icon-element icon-element-xs shadow-sm mr-1" data-toggle="tooltip" data-placement="top" title="Main menu">
                            <i class="la la-bars"></i>
                        </div>
                        <div class="user-off-canvas-menu-toggle icon-element icon-element-xs shadow-sm" data-toggle="tooltip" data-placement="top" title="User menu">
                            <i class="la la-user"></i>
                        </div>
                    </div>
                </div>
            </div><!-- end col-lg-2 -->
            <div class="col-lg-10">
                <div class="menu-wrapper border-left border-left-gray pl-4">
                    <nav class="menu-bar mr-auto">
                        <ul>
                            <li>
                                <a href="{{route('questions.index')}}">Home <i class="la la-angle-down fs-11"></i></a>
                            </li>

                        </ul><!-- end ul -->
                    </nav><!-- end main-menu -->
                    <form method="post" class="mr-2">
                        <div class="form-group mb-0">
                            <input class="form-control form--control form--control-bg-gray" type="text" name="search" placeholder="Type your search words...">
                            <button class="form-btn" type="button"><i class="la la-search"></i></button>
                        </div>
                    </form>
                    <div class="nav-right-button">
                        <ul class="user-action-wrap d-flex align-items-center">

                            <li class="dropdown user-dropdown">
                                <a class="nav-link dropdown-toggle dropdown--toggle pl-2" href="#" id="userMenuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                        <div class="media-img media-img-xs flex-shrink-0 rounded-full mr-2">
                                            <img src="{{asset('assets/images/img4.jpg')}}" alt="avatar" class="rounded-full">
                                        </div>
                                        <div class="media-body p-0 border-left-0">
                                            <h5 class="fs-14">{{$user->name}}</h5>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown--menu dropdown-menu-right mt-3 keep-open" aria-labelledby="userMenuDropdown">
                                    <h6 class="dropdown-header">Hi, {{$user->name}}</h6>
                                    <div class="dropdown-divider border-top-gray mb-0"></div>
                                    <div class="dropdown-item-list">
                                        <a class="dropdown-item" href="user-profile.html"><i class="la la-user mr-2"></i>Profile</a>
                                        <a class="dropdown-item" href="notifications.html"><i class="la la-bell mr-2"></i>Notifications</a>
                                        <a class="dropdown-item" href="referrals.html"><i class="la la-user-plus mr-2"></i>Referrals</a>
                                        <a class="dropdown-item" href="setting.html"><i class="la la-gear mr-2"></i>Settings</a>
                                        <a class="dropdown-item" href="index.html"><i class="la la-power-off mr-2"></i>Log out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- end nav-right-button -->
                </div><!-- end menu-wrapper -->
            </div><!-- end col-lg-10 -->
        </div><!-- end row -->
    </div><!-- end container -->

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
        END HEADER AREA
======================================-->

<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area bg-white shadow-sm overflow-hidden pt-60px">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-content">
                    <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 bg-transparent">
                        <div class="media-img media--img">
                            <img src="{{asset('assets/images/img4.jpg')}}" alt="avatar">
                        </div>
                        <div class="media-body">
                            <h5>{{$user->name}}</h5>
                            <small class="meta d-block lh-20 pb-2">
                                <span>United States, member since 11 years ago</span>
                            </small>
                        </div>
                    </div><!-- end media -->
                </div><!-- end hero-content -->
            </div><!-- end col-lg-8 -->

            <div class="col-lg-12">
                <ul class="nav nav-tabs generic-tabs generic--tabs generic--tabs-2 mt-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="user-profile-tab" data-toggle="tab" href="#user-profile" role="tab" aria-controls="user-profile" aria-selected="true">Profile</a>
                    </li>
                </ul>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!--======================================
        END HERO AREA
======================================-->

<!-- ================================
         START USER DETAILS AREA
================================= -->
<section class="user-details-area pt-30px pb-60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="user-profile" role="tabpanel" aria-labelledby="user-profile-tab">
                        <div class="user-panel-main-bar">

                            <div class="user-panel mb-30px">

                                <div class="bg-gray p-3 rounded-rounded d-flex align-items-center justify-content-between">
                                    <h3 class="fs-17">posts <span>{{$questions->count()}}</span></h3>
                                </div>

                                <div class="vertical-list">
                                    @foreach($questions as $question)
                                    <div class="item p-0">
                                        <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                            <div class="votes py-2 answered-accepted">
                                                <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                    <span class="vote-counts">{{6475}}</span>
                                                    <span class="vote-icon"></span>
                                                </div>
                                                <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                    <span class="vote-counts">22</span>
                                                    <span class="answer-icon"></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5><a href="{{route('questions.show',$question->id)}}">{{$question->title}}</a></h5>
                                                <small class="meta">
                                                    <span>May 12 '20</span>
                                                </small>
                                            </div>
                                        </div><!-- end media -->
                                    </div><!-- end item -->
                                    @endforeach


                                </div><!-- end vertical-list -->
                            </div><!-- end user-panel -->
            </div><!-- end col-lg-9 -->

        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end user-details-area -->
<!-- ================================
         END USER DETAILS AREA
================================= -->



<!-- start back to top -->
<div id="back-to-top" data-toggle="tooltip" data-placement="top" title="Return to top">
    <i class="la la-arrow-up"></i>
</div>
<!-- end back to top -->

<!-- template js files -->
<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/selectize.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/jquery-te-1.4.0.min.js')}}"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jul 2021 10:18:22 GMT -->
</html>
