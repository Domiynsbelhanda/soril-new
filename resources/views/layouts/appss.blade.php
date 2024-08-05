<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Soril</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/animate.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/flaticon.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/font.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/themify-icons.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/metisMenu.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/nice-select.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/slick.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/main.css") }}">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->
    <!-- header-area start -->
    <header class="head-one">
        <div class="main-header-area main-header-two heding-bg">
            <div class="container">
                <div class="row no-gutters align-items-center">
                    <div class="col-xl-2 col-lg-3 col-md-6 col-6">
                        <div class="logo">
                            <a class="logo-img" href="{{route('home')}}"><img src="{{ asset("assets/img/logo/header_logo_one.png") }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 d-none d-lg-block">
                        <div class="main-menu menu-01 d-none d-lg-block text-right">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{route('home')}}">Home</a>
                                    </li>


                                    <li>
                                        <a href="{{route('about')}}">About Us</a>
                                    </li>


                                    <li>
                                        <a href="{{route('framework')}}">The Framework</a>
                                    </li>

                                    <li><a href="{{route('journal.index')}}">The Journal</a></li>


                                    <li>
                                        <a href="{{route('evenementss')}}">Events</a>
                                    </li>

                                    <li><a href="{{route('library')}}">Library</a></li>


{{--                                    <li><a href="#">Membership <i class="far fa-chevron-down"></i></a>--}}
{{--                                        <ul class="submenu">--}}
{{--                                            <li><a href="{{route('individual')}}">Individual Membership</a></li>--}}
{{--                                            <li><a href="{{route('collective')}}">Corporate Membership</a></li>--}}
{{--                                            <li><a href="{{route('membre')}}">Member Associations</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{url('https://www.education.soril.org')}}">Educations</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{route('certification')}}">Certifications</a>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#">Resources <i class="far fa-chevron-down"></i></a>--}}
{{--                                        <ul class="submenu">--}}

{{--                                            --}}
{{--                                            <li><a href="{{route('emplois')}}">Job offers</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-1 col-md-6 col-6 text-right">
                        <div class="hamburger-menu d-md-block d-lg-none">
                            <a href="javascript:void(0);">
                                <i class="far fa-bars"></i>
                            </a>
                        </div>
                        <div class="main-header-right-one d-none d-xl-block">
                            <div class="donate">
                                <a href="{{route('login')}}" class="theme_btn theme_btn2">Login <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area end -->

     <!-- slide-bar start -->
     <aside class="slide-bar">
        <div class="close-mobile-menu">
            <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
        </div>

        <!-- offset-sidebar start -->
        <div class="offset-sidebar">
            <div class="offset-widget offset-logo mb-30">
                <a href="index.html">
                    <img src="{{ asset("assets/img/logo/header_logo_one.png") }}" alt="logo">
                </a>
            </div>
        </div>
        <!-- offset-sidebar end -->

        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu">
            <ul id="mobile-menu-active">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('about')}}">About Us</a>
                </li>
                <li>
                    <a href="{{route('evenementss')}}">Events</a>
                </li>
                <li><a href="#">Membership <i class="far fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="{{route('individual')}}">Individual Membership</a></li>
                        <li><a href="{{route('collective')}}">Corporate Membership</a></li>
                        <li><a href="{{route('membre')}}">Member Associations</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('certification')}}">Certifications</a>
                </li>

                <li><a href="#">Resources <i class="far fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="{{route('journal.index')}}">Journal</a></li>
                        <li><a href="{{route('library')}}">Library</a></li>
                        <li><a href="{{route('emplois')}}">Job offers</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>
    <div class="body-overlay"></div>
    <!-- slide-bar end -->

    <main>
        @yield('content')
    </main>
    <!--footer-area start-->
    <footer id="top-menu" class="footer-area pos-rel black-bg-soft5 pt-100">
        <div class="container">
            <div class="row mb-40">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="footer__widget footer__widget__02 mb-30">
                        <div class="row">
                            <div class="col-xl-4 col-lg-5 col-md-6 col-4">

                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-6 col-8">
                                 <h6 class="fot-title mb-30">Useful Links</h6>

                                <ul class="fot-list">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Individual Members</a></li>
                                    <li><a href="#">Corporate Members</a></li>
                                    <li><a href="#">Certification</a></li>
                                    <li><a href="#">The Journal</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="footer__widget mb-25">
                        <div class="footer__widget--box" style="background-image: url(assets/img/bg/fot-bg-box1.png);">
                            <div class="logo-area">
                                <a href="{{route('home')}}" class="footer-logo mb-30"><img
                                        src="assets/img/logo/footer-logo2.png" alt=""></a>
                            </div>
                            <ul class="box-list">
                                <li><i class="fal fa-envelope"></i> infos@arimas.org</li>
                                <li><i class="fal fa-phone"></i> 011 277 583</li>
                                <li><i class="fal fa-phone"></i> 071 573 4653</li>
                                <li><i class="fal fa-map-marker-alt"></i> 08, Meadowbrook Lane, Epsom Downs, Sandton</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="footer__widget mb-30">
                        <h6 class="fot-title mb-30">Annual Conference</h6>
                        <div class="post d-flex align-items-center mb-10">
                            <div class="post__thumb mr-20">
                                <img src="assets/img/news/post1.jpg" alt="">
                            </div>
                            <div class="post__content">
                                <span><i class="fal fa-calendar-alt"></i> {{ Carbon\Carbon::parse(\App\Models\Evenement::where('typeEvent', 'annual')->first()->date)->format('F, d Y') }}</span>
                                <h6 class="fot-title">
                                    <a href="{{route('conference', \App\Models\Evenement::where('typeEvent', 'annual')->first()->id)}}">
                                        {{\App\Models\Evenement::where('typeEvent', 'annual')->first()->titre}}
                                    </a>
                                </h6>
                            </div>
                        </div>
                        <h6 class="fot-title mb-30 mt-30">Seminars</h6>
                        @forelse (\App\Models\Evenement::orderBy('date', 'desc')->take(2)->get() as $item)
                            <div class="post d-flex align-items-center mb-10">
                                <div class="post__thumb mr-20">
                                    <img src="assets/img/news/post2.jpg" alt="">
                                </div>
                                <div class="post__content">
                                    <span><i class="fal fa-calendar-alt"></i>
                                        {{ Carbon\Carbon::parse($item->date)->format('F, d Y') }}
                                    </span>
                                    <h6 class="fot-title"><a href="{{route('conference', $item->id)}}">{{$item->titre}}</a></h6>
                                </div>
                            </div>
                        @empty

                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copy-right black-bg-soft2 pt-25 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-4 col-md-8">
                        <div class="fot-nav">
                            <ul class="fot-nav-list">

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8 col-md-4">
                        <div class="copy-right-area-02 text-right">
                            <span>Copyright By <a href="https://www.ngomadigitech.com/">NgomaDigiTech</a> - <script>
                                document.write(new Date().getFullYear())
                            </script></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer-area end-->



    <!-- JS here -->
    <script src="{{ asset("assets/js/vendor/modernizr-3.5.0.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/jquery-3.5.1.min.js") }}"></script>
    <script src="{{ asset("assets/js/popper.min.js") }}"></script>
    <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("assets/js/isotope.pkgd.min.js") }}"></script>
    <script src="{{ asset("assets/js/one-page-nav-min.js") }}"></script>
    <script src="{{ asset("assets/js/slick.min.js") }}"></script>
    <script src="{{ asset("assets/js/jquery.meanmenu.min.js") }}"></script>
    <script src="{{ asset("assets/js/metisMenu.min.js") }}"></script>
    <script src="{{ asset("assets/js/jquery.nice-select.js") }}"></script>
    <script src="{{ asset("assets/js/ajax-form.js") }}"></script>
    <script src="{{ asset("assets/js/wow.min.js") }}"></script>
    <script src="{{ asset("assets/js/jquery.counterup.min.js") }}"></script>
    <script src="{{ asset("assets/js/jquery.scrollUp.min.js") }}"></script>
    <script src="{{ asset("assets/js/imagesloaded.pkgd.min.js") }}"></script>
    <script src="{{ asset("assets/js/jquery.magnific-popup.min.js") }}"></script>
    <script src="{{ asset("assets/js/jquery.easypiechart.js") }}"></script>
    <script src="{{ asset("assets/js/tilt.jquery.js") }}"></script>
    <script src="{{ asset("assets/js/plugins.js") }}"></script>
    <script src="{{ asset("assets/js/main.js") }}"></script>
</body>

</html>
