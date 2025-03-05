<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    @php
        
    
    $firm_detail= backHelper::get_fimddetails();
    @endphp
    <head>
        <!-- ========== Meta Tags ========== -->
       <!-- Meta Tags for LM Sangry - Solar Solutions -->
        <title>LM Sangry | Hybrid, On-Grid, Off-Grid Solar Systems & Solar Power Plants</title>

        <meta name="description" content="LM Sangry offers expert solar solutions, including Hybrid Solar Systems, On-Grid and Off-Grid Systems, and Solar Power Plants (3kW - 200kW) for homes, businesses, and industries. Contact us for cost-effective solar energy solutions.">

        <meta name="keywords" content="Hybrid Solar Systems, On-Grid Solar Systems, Off-Grid Solar Systems, Solar Power Plants, Solar Energy Solutions, LM Sangry, 3kW - 10kW Solar, 20kW - 100kW Solar, 100kW - 200kW Solar, Renewable Energy, Solar Panel Installation, Net Metering, Industrial Solar Solutions">

        <meta name="author" content="LM Sangry">
        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Open Graph Meta Tags for Social Media -->
        <meta property="og:title" content="LM Sangry | Solar Power Solutions">
        <meta property="og:description" content="Providing Hybrid, On-Grid, and Off-Grid Solar Systems, along with Solar Power Plants (3kW - 200kW) for homes, businesses, and industries.">
        <meta property="og:image" content="https://yourwebsite.com/solar-image.jpg">
        <meta property="og:url" content="https://yourwebsite.com">
        <meta property="og:type" content="website">

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="LM Sangry | Solar Energy Solutions">
        <meta name="twitter:description" content="LM Sangry specializes in Hybrid, On-Grid, Off-Grid Solar Systems, and large-scale Solar Power Plants.">
        <meta name="twitter:image" content="https://yourwebsite.com/solar-image.jpg">
       
        <!--<< Favicon >>-->
        <link rel="shortcut icon" href="{{ asset('website') }}/assets/img/favicon.svg">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="{{ asset('website') }}/assets/css/bootstrap.min.css">
        <!--<< Font Awesome.css >>-->
        <link rel="stylesheet" href="{{ asset('website') }}/assets/css/font-awesome.css">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="{{ asset('website') }}/assets/css/animate.css">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="{{ asset('website') }}/assets/css/magnific-popup.css">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="{{ asset('website') }}/assets/css/meanmenu.css">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="{{ asset('website') }}/assets/css/swiper-bundle.min.css">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="{{ asset('website') }}/assets/css/nice-select.css">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="{{ asset('website') }}/assets/css/main.css">
        <!--<< Style.css >>-->
        <link rel="stylesheet" href="{{ asset('website') }}/style.css">
        <style>
            .page-banner-wrap::before {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                width: 100%;
                height: 100%;
                content: "";
                background-color: #5b9b377d;
                opacity: 0.8;
                z-index: -1;
            }
            .hero-1 .hero-image::before {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                width: 100%;
                height: 100%;
                content: "";
                background: linear-gradient(90deg, rgb(91 155 55 / 0%) 33.64%, rgb(91 155 55 / 0%) 41.74%, rgba(255, 255, 255, 0) 59.42%);
                z-index: -1;
            }
            </style>
    </head>

    <body>

        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">                
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="M" class="letters-loading">
                       M
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                       A
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="Y" class="letters-loading">
                       Y
                    </span>
                    
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--<< Mouse Cursor Start >>-->  
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <!-- Back To Top Start -->
        <div class="scroll-up">
            <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="{{route('welcome')}}">
                                    <img src="{{ asset('website') }}/assets/img/logo/black-logo.svg" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-xl-block">
                            Let us help you switch to solar and take full advantage of government subsidies today!
                        </p>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">{{$firm_detail->address}}</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:info@azent.com"><span class="mailto:{{$firm_detail->email}}">{{$firm_detail->email}}</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Mon-friday, 09am -05pm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:{{$firm_detail->mobile}}">{{$firm_detail->mobile}}</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-button mt-4">
                                <a href="{{route('contact.us')}}" class="theme-btn text-center">
                                    <span>get A Quote<i class="fa-solid fa-arrow-right-long"></i></span>
                                </a>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="{{$firm_detail->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{$firm_detail->twitter}}"><i class="fab fa-twitter"></i></a>
                                <a href="{{$firm_detail->youtube}}"><i class="fab fa-youtube"></i></a>
                                <a href="{{$firm_detail->instagram}}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header Top Section Start -->
        <div class="header-top">
            <div class="container-fluid">
                <div class="header-top-wrapper">
                    <ul class="contact-list">
                        <li>
                            <i class="far fa-phone-alt"></i>
                            <a href="tel:{{$firm_detail->mobile}}">{{$firm_detail->mobile}}</a>
                        </li>
                        <li>
                            <i class="far fa-envelope"></i>
                            <a href="mailto:{{$firm_detail->email}}" class="link">{{$firm_detail->email}}</a>
                        </li>
                        <li>
                            <i class="far fa-map-marker-alt"></i>
                            {{$firm_detail->address}}
                        </li>
                    </ul>
                    <div class="top-right">
                        <div class="social-icon d-flex align-items-center">
                            <span>Follow Us:</span>
                            <a href="{{$firm_detail->facebook}}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{$firm_detail->twitter}}"><i class="fab fa-twitter"></i></a>
                            <a href="{{$firm_detail->youtube}}"><i class="fab fa-youtube"></i></a>
                            <a href="{{$firm_detail->instagram}}"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Section Start -->
        <header id="header-sticky" class="header-1">
            <div class="container-fluid">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="logo">
                            <a href="{{route('welcome')}}" class="header-logo">
                                <img src="{{ asset('website') }}/assets/img/logo/logo_or.png" alt="logo-img" style="width: 75px;height: 75px;">
                            </a>
                        </div>
                        <div class="header-left">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <a href="{{route('welcome')}}">Home</a>
                                            </li> 
                                            <li>
                                                <a href="{{route('about.us')}}">About Us</a>
                                            </li>
                                            <li>
                                                <a href="{{route('services')}}">Services</a>
                                            </li>
                                            {{-- <li>
                                                <a href="{{route('our.projects')}}">Our Projects</a>
                                            </li> --}}
                                            <li>
                                                <a href="{{route('contact.us')}}">Conatct Us</a>
                                            </li>
                                            
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a>
                            <div class="header-button">
                                <a href="{{route('contact.us')}}" class="theme-btn">
                                    Get a quote <i class="far fa-long-arrow-right"></i>
                                </a>
                            </div>
                            <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Search Area Start -->
        <div class="search-wrap">
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
        </div>

         @yield('content')
        <!-- Footer Section Start -->
        <footer class="footer-section footer-bg">
            <div class="container">
                <div class="footer-widgets-wrapper">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6  wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <a href="{{route('welcome')}}">
                                        <img src="{{ asset('website') }}/assets/img/logo/logo_or.png" alt="logo-img"  style="width: 75px;height: 75px;">
                                    </a>
                                </div>
                                <div class="footer-content">
                                    <p>
                                        Our mission is to promote sustainable energy solutions by making solar adoption simple, hassle-free, and cost-effective. Whether you need assistance with off-grid, on-grid, hybrid solar systems, or large-scale solar power plants, LM Sangry is your trusted partner in a brighter, cleaner future.
                                    </p>
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="{{$firm_detail->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{$firm_detail->twitter}}"><i class="fab fa-twitter"></i></a>
                                        <a href="{{$firm_detail->youtube}}"><i class="fab fa-youtube"></i></a>
                                        <a href="{{$firm_detail->instagram}}"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5  wow fadeInUp" data-wow-delay=".4s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h4 class="text-white">Our Services</h4>
                                </div>
                                <ul class="list-area">
                                    <li><a href="#">Hybrid Solar Systems </a></li>
                                    <li><a href="#">On-Grid Solar Systems </a></li>
                                    <li><a href="#">Off-Grid Solar Systems</a></li>
                                    <li><a href="#">Solar Power Plants</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5  wow fadeInUp" data-wow-delay=".6s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h4 class="text-white">Quick Links</h4>
                                </div>
                                <ul class="list-area">
                                    <li><a href="{{route('services')}}">Services</a></li>
                                    <li><a href="{{route('about.us')}}">About Us</a></li>
                                    <li><a href="{{route('contact.us')}}">Our Team</a></li>
                                    <li><a href="{{route('contact.us')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5  wow fadeInUp" data-wow-delay=".8s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h4 class="text-white">Gallery</h4>
                                </div>
                                <div class="footer-gallery">
                                    <div class="gallery-wrap">
                                        <div class="gallery-item">
                                            <div class="thumb">
                                                <a href="{{ asset('website') }}/assets/img/footer/gallery-1.jpg" class="img-popup">
                                                    <img src="{{ asset('website') }}/assets/img/footer/gallery-1.jpg" alt="gallery-img">
                                                    <div class="icon">
                                                        <i class="far fa-plus"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="thumb">
                                                <a href="{{ asset('website') }}/assets/img/footer/gallery-2.jpg" class="img-popup">
                                                    <img src="{{ asset('website') }}/assets/img/footer/gallery-2.jpg" alt="gallery-img">
                                                    <div class="icon">
                                                        <i class="far fa-plus"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="thumb">
                                                <a href="{{ asset('website') }}/assets/img/footer/gallery-3.jpg" class="img-popup">
                                                    <img src="{{ asset('website') }}/assets/img/footer/gallery-3.jpg" alt="gallery-img">
                                                    <div class="icon">
                                                        <i class="far fa-plus"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="gallery-item">
                                            <div class="thumb">
                                                <a href="{{ asset('website') }}/assets/img/footer/gallery-4.jpg" class="img-popup">
                                                    <img src="{{ asset('website') }}/assets/img/footer/gallery-4.jpg" alt="gallery-img">
                                                    <div class="icon">
                                                        <i class="far fa-plus"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="thumb">
                                                <a href="{{ asset('website') }}/assets/img/footer/gallery-5.jpg" class="img-popup">
                                                    <img src="{{ asset('website') }}/assets/img/footer/gallery-5.jpg" alt="gallery-img">
                                                    <div class="icon">
                                                        <i class="far fa-plus"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="thumb">
                                                <a href="{{ asset('website') }}/assets/img/footer/gallery-6.jpg" class="img-popup">
                                                    <img src="{{ asset('website') }}/assets/img/footer/gallery-6.jpg" alt="gallery-img">
                                                    <div class="icon">
                                                        <i class="far fa-plus"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-wrapper d-flex align-items-center justify-content-between">
                        <p class="wow fadeInLeft" data-wow-delay=".3s">
                            © <a href="{{route('welcome')}}">{{$firm_detail->name}}</a>  2025 | <span>All Rights</span> Reserved.
                        </p>
                        <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy & Policy</a>
                            </li>
                            <li>
                                <a href="{{route('contact.us')}}">Join Us</a>
                            </li>
                            <li>
                                <a href="{{route('contact.us')}}">Need Help ?</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!--<< All JS Plugins >>-->
        <script src="{{ asset('website') }}/assets/js/jquery-3.7.1.min.js"></script>
        <!--<< Viewport Js >>-->
        <script src="{{ asset('website') }}/assets/js/viewport.jquery.js"></script>
        <!--<< Bootstrap Js >>-->
        <script src="{{ asset('website') }}/assets/js/bootstrap.bundle.min.js"></script>
        <!--<< Nice Select Js >>-->
        <script src="{{ asset('website') }}/assets/js/jquery.nice-select.min.js"></script>
        <!--<< Waypoints Js >>-->
        <script src="{{ asset('website') }}/assets/js/jquery.waypoints.js"></script>
        <!--<< Counterup Js >>-->
        <script src="{{ asset('website') }}/assets/js/jquery.counterup.min.js"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="{{ asset('website') }}/assets/js/swiper-bundle.min.js"></script>
        <!--<< Circle Progress Js >>-->
        <script src="{{ asset('website') }}/assets/js/circle-progress.js"></script>
        <!--<< MeanMenu Js >>-->
        <script src="{{ asset('website') }}/assets/js/jquery.meanmenu.min.js"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="{{ asset('website') }}/assets/js/jquery.magnific-popup.min.js"></script>
        <!--<< Wow Animation Js >>-->
        <script src="{{ asset('website') }}/assets/js/wow.min.js"></script>
        <!--<< Main.js >>-->
        <script src="{{ asset('website') }}/assets/js/main.js"></script>
    </body>
</html>