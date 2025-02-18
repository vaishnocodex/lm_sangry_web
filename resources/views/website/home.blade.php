@extends('website.master')          
@section('content')
        <!-- Hero Section Start -->
        <section class="hero-section hero-1">
            <div class="array-button">
                <button class="array-prev"><i class="far fa-chevron-right"></i></button>
                <button class="array-next"><i class="far fa-chevron-left"></i></button>
            </div>
            <div class="swiper hero-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero-image bg-cover" style="background-image: url('{{ asset('website') }}/assets/img/hero/01.jpg');"></div>
                        <div class="container">
                            <div class="row g-4">
                                <div class="col-lg-8">
                                    <div class="hero-content">
                                        <h6 data-animation="slideInRight" data-duration="2s" data-delay=".3s">Switch to solar and save</h6>
                                        <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                            Going green never looked so bright
                                        </h1>
                                        <div class="hero-button">
                                            <a href="{{route('welcome')}}" class="theme-btn theme-color-2" data-animation="slideInRight" data-duration="2s" data-delay=".7s">Learn More</a>
                                            <a href="{{route('welcome')}}" class="theme-btn bg-color" data-animation="slideInRight" data-duration="2s" data-delay=".7s">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-image bg-cover" style="background-image: url('{{ asset('website') }}/assets/img/hero/04.jpg');"></div>
                        <div class="container">
                            <div class="row g-4">
                                <div class="col-lg-8">
                                    <div class="hero-content">
                                        <h6 data-animation="slideInRight" data-duration="2s" data-delay=".3s">Switch to solar and save</h6>
                                        <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                            Going green never looked so bright
                                        </h1>
                                        <div class="hero-button">
                                            <a href="{{route('welcome')}}" class="theme-btn theme-color-2" data-animation="slideInRight" data-duration="2s" data-delay=".7s">Learn More</a>
                                            <a href="{{route('welcome')}}" class="theme-btn bg-color" data-animation="slideInRight" data-duration="2s" data-delay=".7s">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-image bg-cover" style="background-image: url('{{ asset('website') }}/assets/img/hero/05.jpg');"></div>
                        <div class="container">
                            <div class="row g-4">
                                <div class="col-lg-8">
                                    <div class="hero-content">
                                        <h6 data-animation="slideInRight" data-duration="2s" data-delay=".3s">Switch to solar and save</h6>
                                        <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                            Going green never looked so bright
                                        </h1>
                                        <div class="hero-button">
                                            <a href="{{route('welcome')}}" class="theme-btn theme-color-2" data-animation="slideInRight" data-duration="2s" data-delay=".7s">Learn More</a>
                                            <a href="{{route('welcome')}}" class="theme-btn bg-color" data-animation="slideInRight" data-duration="2s" data-delay=".7s">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- About Section Start -->
        <section class="about-section fix section-padding">
            <div class="container">
                <div class="about-wrapper">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="about-image">
                                <img src="{{ asset('website') }}/assets/img/about/01.jpg" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">About Us</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Get Connected for <br> Enhanced Vision</h2>
                                </div>
                                <ul class="nav mt-4 mt-md-0" role="tablist">
                                    <li class="nav-item wow fadeInUp" data-wow-delay=".3s" role="presentation">
                                        <a href="#technical" data-bs-toggle="tab" class="nav-link active" aria-selected="true" role="tab">
                                            Technical
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInUp" data-wow-delay=".5s" role="presentation">
                                        <a href="#work" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                            Our Work
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInUp" data-wow-delay=".7s" role="presentation">
                                        <a href="#ambition" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                            Ambition
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="technical" class="tab-pane fade show active" role="tabpanel">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="technical-site-item">
                                                    <div class="content">
                                                        <h3 class="wow fadeInUp" data-wow-delay=".3s">Technical Site</h3>
                                                        <p class="wow fadeInUp" data-wow-delay=".5s">Lorem ipsum dolor sit amet consectetur. Faucibus ut cursus integer id non ac. Aenean eros auctor a nulla porttitor scelerisque quisque pulvinar et. Id pellentesque mattis.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                                <div class="thumb">
                                                    <img src="{{ asset('website') }}/assets/img/about/technical-img.jpg" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-area">
                                            <div class="icon-items wow fadeInUp" data-wow-delay=".3s">
                                                <div class="icon">
                                                    <img src="{{ asset('website') }}/assets/img/about/icon/01.svg" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h5>Let’s get digital!</h5>
                                                    pLorem Ipsum is simply dummy <br> text of the yes
                                                </div>
                                            </div>
                                            <div class="icon-items wow fadeInUp" data-wow-delay=".5s">
                                                <div class="icon">
                                                    <img src="{{ asset('website') }}/assets/img/about/icon/02.svg" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h5>Let’s get digital!</h5>
                                                    pLorem Ipsum is simply dummy <br> text of the yes
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="work" class="tab-pane fade" role="tabpanel">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="technical-site-item">
                                                    <div class="content">
                                                        <h3>Technical Site</h3>
                                                        <p>Lorem ipsum dolor sit amet consectetur. Faucibus ut cursus integer id non ac. Aenean eros auctor a nulla porttitor scelerisque quisque pulvinar et. Id pellentesque mattis.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="thumb">
                                                    <img src="{{ asset('website') }}/assets/img/about/technical-img.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-area">
                                            <div class="icon-items">
                                                <div class="icon">
                                                    <img src="{{ asset('website') }}/assets/img/about/icon/01.svg" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h5>Let’s get digital!</h5>
                                                    pLorem Ipsum is simply dummy <br> text of the yes
                                                </div>
                                            </div>
                                            <div class="icon-items">
                                                <div class="icon">
                                                    <img src="{{ asset('website') }}/assets/img/about/icon/02.svg" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h5>Let’s get digital!</h5>
                                                    pLorem Ipsum is simply dummy <br> text of the yes
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ambition" class="tab-pane fade" role="tabpanel">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="technical-site-item">
                                                    <div class="content">
                                                        <h3>Technical Site</h3>
                                                        <p>Lorem ipsum dolor sit amet consectetur. Faucibus ut cursus integer id non ac. Aenean eros auctor a nulla porttitor scelerisque quisque pulvinar et. Id pellentesque mattis.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="thumb">
                                                    <img src="{{ asset('website') }}/assets/img/about/technical-img.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-area">
                                            <div class="icon-items">
                                                <div class="icon">
                                                    <img src="{{ asset('website') }}/assets/img/about/icon/01.svg" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h5>Let’s get digital!</h5>
                                                    pLorem Ipsum is simply dummy <br> text of the yes
                                                </div>
                                            </div>
                                            <div class="icon-items">
                                                <div class="icon">
                                                    <img src="{{ asset('website') }}/assets/img/about/icon/02.svg" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h5>Let’s get digital!</h5>
                                                    pLorem Ipsum is simply dummy <br> text of the yes
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Section Start -->
        <section class="service-section-3 fix section-padding section-bg">
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title">
                        <span class="wow fadeInUp">Our services</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Get the power of <br> the sun</h2>
                    </div>
                    <div class="array-button wow fadeInUp" data-wow-delay=".5s">
                        <button class="array-prev"><i class="far fa-chevron-left"></i></button>
                        <button class="array-next"><i class="far fa-chevron-right"></i></button>
                    </div>
                </div>
                <div class="swiper service-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-card-items-2">
                                <div class="service-title">
                                    <h5><a href="service-details.html">SolarBright Energy</a></h5>
                                    <p>Loren ipsum</p>
                                </div>
                                <div class="service-thumb">
                                    <img src="{{ asset('website') }}/assets/img/service/07.jpg" alt="service-img">
                                    <div class="icon">
                                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-4.svg" alt="img">
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card-items-2">
                                <div class="service-title">
                                    <h5><a href="service-details.html">EcoSun Energy</a></h5>
                                    <p>Loren ipsum</p>
                                </div>
                                <div class="service-thumb">
                                    <img src="{{ asset('website') }}/assets/img/service/08.jpg" alt="service-img">
                                    <div class="icon">
                                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-5.svg" alt="img">
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card-items-2">
                                <div class="service-title">
                                    <h5><a href="service-details.html">SunPower Systems</a></h5>
                                    <p>Loren ipsum</p>
                                </div>
                                <div class="service-thumb">
                                    <img src="{{ asset('website') }}/assets/img/service/09.jpg" alt="service-img">
                                    <div class="icon">
                                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-6.svg" alt="img">
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section Start -->
        <section class="team-section fix section-padding">
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title">
                        <span class="wow fadeInUp">Team members</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Adorn your Home with <br> Green Energy</h2>
                    </div>
                    <div class="array-button wow fadeInUp" data-wow-delay=".5s">
                        <button class="array-prev"><i class="far fa-chevron-left"></i></button>
                        <button class="array-next"><i class="far fa-chevron-right"></i></button>
                    </div>
                </div>
                <div class="swiper team-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-box-items">
                                <div class="team-image">
                                    <img src="{{ asset('website') }}/assets/img/team/01.jpg" alt="img">
                                    <div class="team-content">
                                        <p>Omitted</p>
                                        <h3><a href="team-details.html">Hub of tech</a></h3>
                                        <div class="social-profile">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                            <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-box-items">
                                <div class="team-image">
                                    <img src="{{ asset('website') }}/assets/img/team/02.jpg" alt="img">
                                    <div class="team-content">
                                        <p>Omitted</p>
                                        <h3><a href="team-details.html">Sustainable Peace</a></h3>
                                        <div class="social-profile">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                            <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-box-items">
                                <div class="team-image">
                                    <img src="{{ asset('website') }}/assets/img/team/03.jpg" alt="img">
                                    <div class="team-content">
                                        <p>Omitted</p>
                                        <h3><a href="team-details.html">Use solar</a></h3>
                                        <div class="social-profile">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                            <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Counter Section Start -->
        <section class="counter-section fix section-padding bg-cover" style="background-image: url('{{ asset('website') }}/assets/img/counter-bg.jpg');">
            <div class="container">
                <div class="counter-wrapper">
                    <div class="counter-items wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <img src="{{ asset('website') }}/assets/img/counter-icon/1.svg" alt="img">
                        </div>
                        <div class="content">
                            <h2><span class="count">200</span>+</h2>
                            <p>Team member</p>
                        </div>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon">
                            <img src="{{ asset('website') }}/assets/img/counter-icon/2.svg" alt="img">
                        </div>
                        <div class="content">
                            <h2><span class="count">7010</span>+</h2>
                            <p>Solution Members</p>
                        </div>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".6s">
                        <div class="icon">
                            <img src="{{ asset('website') }}/assets/img/counter-icon/3.svg" alt="img">
                        </div>
                        <div class="content">
                            <h2><span class="count">900</span>+</h2>
                            <p>Worldwide Partners</p>
                        </div>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".8s">
                        <div class="icon">
                            <img src="{{ asset('website') }}/assets/img/counter-icon/4.svg" alt="img">
                        </div>
                        <div class="content">
                            <h2><span class="count">6250</span>+</h2>
                            <p>Project Completed</p>
                        </div>
                    </div>
                </div>
                <div class="contact-wrapper style-padding-minus section-padding pb-0">
                    <div class="row g-0 align-items-center">
                        <div class="col-xl-7 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="contact-image">
                                <img src="{{ asset('website') }}/assets/img/contact.jpg" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="contact-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">Let’s talk</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Get free quote</h2>
                                </div>
                                <form action="#" id="contact-form" method="POST" class="mt-4 mt-md-0">
                                    <div class="row g-4">
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="phone" id="phone" placeholder="Phone number">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                            <button type="submit" class="theme-btn">
                                                Submit Now <i class="far fa-long-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Section Start -->
        <section class="project-section section-padding pt-0">
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">Our case studies</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Experience The Power of <br> The Sun at its Finest</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="project-card-items">
                            <div class="project-image">
                                <img src="{{ asset('website') }}/assets/img/project/01.jpg" alt="img">
                                <div class="project-content">
                                    <p>Delivery</p>
                                    <h3><a href="project-details.html">Modern Vehicles Fleet</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="project-card-items">
                            <div class="project-image">
                                <img src="{{ asset('website') }}/assets/img/project/02.jpg" alt="img">
                                <div class="project-content">
                                    <p>Delivery</p>
                                    <h3><a href="project-details.html">Modern Vehicles Fleet</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="project-card-items">
                            <div class="project-image">
                                <img src="{{ asset('website') }}/assets/img/project/03.jpg" alt="img">
                                <div class="project-content">
                                    <p>Delivery</p>
                                    <h3><a href="project-details.html">Modern Vehicles Fleet</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Faq Section Start -->
        <section class="faq-section fix section-padding">
            <div class="faq-image">
                <img src="{{ asset('website') }}/assets/img/faq.jpg" alt="img">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="faq-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">ask something</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Do You Have Any 
                                    Question Please?</h2>
                            </div>
                            <div class="faq-accordion pt-3">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">
                                                Contrary to popular belief, Lorem Ipsum ?
                                            </button>
                                        </h4>
                                        <div id="faq2" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                It is a long established fact that a reader will be distr acted bioiiy the readable content of a page when looking at its layout  Thoiie point of using.It is a long established fact
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                                Many desktop publishing packages page ?
                                            </button>
                                        </h4>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                It is a long established fact that a reader will be distr acted bioiiy the readable content of a page when looking at its layout  Thoiie point of using.It is a long established fact
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                Lorem Ipsum is simply dumm iandtype ?
                                            </button>
                                        </h4>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                It is a long established fact that a reader will be distr acted bioiiy the readable content of a page when looking at its layout  Thoiie point of using.It is a long established fact
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section Start -->
        <section class="testimonial-section fix section-padding">
            <div class="map-shape">
                <img src="{{ asset('website') }}/assets/img/testimonial/map-shape.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">Clients review</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Begin with an idea and <br> end with success</h2>
                </div>
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-card-items">
                                <div class="client-img bg-cover" style="background-image: url('{{ asset('website') }}/assets/img/testimonial/client-1.png');">
                                    <div class="icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                                <p>
                                    It uses a dictionary of over 200 Latin words, combined with handful model tence structures, to generate Lorem Ipsum which lo reasonable. The gener Lorem Ipsum done
                                </p>
                                <div class="client-info">
                                    <span>Founder</span>
                                    <h3>Leslie Alexander</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card-items">
                                <div class="client-img bg-cover" style="background-image: url('{{ asset('website') }}/assets/img/testimonial/client-2.png');">
                                    <div class="icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                                <p>
                                    It uses a dictionary of over 200 Latin words, combined with handful model tence structures, to generate Lorem Ipsum which lo reasonable. The gener Lorem Ipsum done
                                </p>
                                <div class="client-info">
                                    <span>Founder</span>
                                    <h3>Albert Flores</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card-items">
                                <div class="client-img bg-cover" style="background-image: url('{{ asset('website') }}/assets/img/testimonial/client-3.png');">
                                    <div class="icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                                <p>
                                    It uses a dictionary of over 200 Latin words, combined with handful model tence structures, to generate Lorem Ipsum which lo reasonable. The gener Lorem Ipsum done
                                </p>
                                <div class="client-info">
                                    <span>Founder</span>
                                    <h3>Guy Hawkins</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Work Process Section Start -->
        <section class="work-process fix section-bg section-padding">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-left">
                            <span class="wow fadeInUp">Work process</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">How we work</h2>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                Lorem ipsum amonsectetur. Nisla libero arcu adipiscing lectus ab biscuit Lorem ipsum amonsectetur. Nisla 
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="work-process-card-items">
                            <h2>01</h2>
                            <h5>Adding Green Energy to your Life</h5>
                            <p>Lorem ipsum amonsectetur. Nisla libero arcu adipiscing lectus ab biscuit</p>
                            <a href="about.html" class="link-btn">Read More <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="work-process-card-items">
                            <h2>02</h2>
                            <h5>Developing future with solar solutions</h5>
                            <p>Lorem ipsum amonsectetur. Nisla libero arcu adipiscing lectus ab biscuit</p>
                            <a href="about.html" class="link-btn">Read More <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="work-process-card-items">
                            <h2>03</h2>
                            <h5>Adorn your Home with Green Energy</h5>
                            <p>Lorem ipsum amonsectetur. Nisla libero arcu adipiscing lectus ab biscuit</p>
                            <a href="about.html" class="link-btn">Read More <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section Start -->
        <section class="news-section fix section-padding">
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title">
                        <span class="wow fadeInUp">our Blogs</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Start with a plan and <br> finish with results</h2>
                    </div>
                    <div class="array-button wow fadeInUp" data-wow-delay=".5s">
                        <button class="array-prev"><i class="far fa-chevron-left"></i></button>
                        <button class="array-next"><i class="far fa-chevron-right"></i></button>
                    </div>
                </div>
                <div class="swiper news-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="news-card-items">
                                <div class="news-image">
                                    <img src="{{ asset('website') }}/assets/img/news/01.jpg" alt="img">
                                    <img src="{{ asset('website') }}/assets/img/news/01.jpg" alt="img">
                                </div>
                                <div class="news-content">
                                    <div class="post-cat">
                                        Design
                                    </div>
                                    <ul class="post-date">
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            October 19, 2024
                                        </li>
                                        <li>
                                            <i class="far fa-user"></i>
                                            By admin
                                        </li>
                                    </ul>
                                    <h3><a href="news-details.html">Affordable, targeted media for everyone targeted</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and type Lorem Ipsum is simply dummy text</p>
                                    <a href="news-details.html" class="link-btn">
                                        read more <i class="far fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="news-card-items">
                                <div class="news-image">
                                    <img src="{{ asset('website') }}/assets/img/news/02.jpg" alt="img">
                                    <img src="{{ asset('website') }}/assets/img/news/03.jpg" alt="img">
                                </div>
                                <div class="news-content">
                                    <div class="post-cat">
                                        Design
                                    </div>
                                    <ul class="post-date">
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            October 19, 2024
                                        </li>
                                        <li>
                                            <i class="far fa-user"></i>
                                            By admin
                                        </li>
                                    </ul>
                                    <h3><a href="news-details.html">Affordable, targeted media for everyone targeted</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and type Lorem Ipsum is simply dummy text</p>
                                    <a href="news-details.html" class="link-btn">
                                        read more <i class="far fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="news-card-items">
                                <div class="news-image">
                                    <img src="{{ asset('website') }}/assets/img/news/03.jpg" alt="img">
                                    <img src="{{ asset('website') }}/assets/img/news/03.jpg" alt="img">
                                </div>
                                <div class="news-content">
                                    <div class="post-cat">
                                        Design
                                    </div>
                                    <ul class="post-date">
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            October 19, 2024
                                        </li>
                                        <li>
                                            <i class="far fa-user"></i>
                                            By admin
                                        </li>
                                    </ul>
                                    <h3><a href="news-details.html">Affordable, targeted media for everyone targeted</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and type Lorem Ipsum is simply dummy text</p>
                                    <a href="news-details.html" class="link-btn">
                                        read more <i class="far fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection