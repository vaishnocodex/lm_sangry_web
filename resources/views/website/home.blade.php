@extends('website.master')          
@section('content')

<style>
    .faq-section .faq-image {
    height: 983px;
    position: absolute;
    bottom: 0;
    right: 0;
    z-index: 9;
    max-width: 1150px;
    z-index: 1;
}
    </style>
        <!-- Hero Section Start -->
        <section class="hero-section hero-1">
            <div class="array-button">
                <button class="array-prev"><i class="far fa-chevron-right"></i></button>
                <button class="array-next"><i class="far fa-chevron-left"></i></button>
            </div>
            <div class="swiper hero-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero-image bg-cover" style="background-image: url('{{ asset('website') }}/assets/img/hero/m1.webp');"></div>
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
                        <div class="hero-image bg-cover" style="background-image: url('{{ asset('website') }}/assets/img/hero/2.png');"></div>
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
                        <div class="hero-image bg-cover" style="background-image: url('{{ asset('website') }}/assets/img/hero/3.png');"></div>
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
                                <img src="{{ asset('website') }}/assets/img/about/about-1.jpg" alt="img">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">About Us</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        Get Connected for <br> Enhanced Vision</h2>
                                </div>
                                <ul class="nav mt-4 mt-md-0" role="tablist">
                                    <li class="nav-item wow fadeInUp" data-wow-delay=".3s" role="presentation">
                                        <a href="#technical" data-bs-toggle="tab" class="nav-link active" aria-selected="true" role="tab">
                                            About
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInUp" data-wow-delay=".5s" role="presentation">
                                        <a href="#work" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                            Mission
                                        </a>
                                    </li>
                                    <li class="nav-item wow fadeInUp" data-wow-delay=".7s" role="presentation">
                                        <a href="#ambition" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                            Vision
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="technical" class="tab-pane fade show active" role="tabpanel">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="technical-site-item">
                                                    <div class="content">
                                                        <h3 class="wow fadeInUp" data-wow-delay=".3s">About LM Sangry</h3>
                                                        <p class="wow fadeInUp" data-wow-delay=".5s">
                                                            Founded by LM Sangry, SolarGlow reflects a deep commitment to environmental sustainability and a passion for advancing renewable energy technologies. Guided by a vision of a cleaner planet, we aim to inspire others to embrace solar energy for a brighter, more sustainable future</p>
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
                                                    <h5>Expertise in Solar Solutions</h5>
                                                    With years of industry experience and a team of skilled engineers,
                                                </div>
                                            </div>
                                            <div class="icon-items wow fadeInUp" data-wow-delay=".5s">
                                                <div class="icon">
                                                    <img src="{{ asset('website') }}/assets/img/about/icon/02.svg" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h5>Commitment to Sustainability</h5>
                                                    We are dedicated to promoting a sustainable and eco-friendly
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="work" class="tab-pane fade" role="tabpanel">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="technical-site-item">
                                                    <div class="content">
                                                        <h3>Mission Statement</h3>
                                                        <p>At SolarGlow, our mission is to provide cutting-edge solar energy solutions that enhance energy independence, reduce costs, and minimize environmental impact. We are committed to excellence in design, installation, and maintenance, ensuring that our clients receive the highest quality of service and technology.</p>
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
                                                    <h5>Delivering High-Quality Solar Solutions</h5>
                                                    Our mission is to provide customized solar energy systems 
                                                </div>
                                            </div>
                                            <div class="icon-items">
                                                <div class="icon">
                                                    <img src="{{ asset('website') }}/assets/img/about/icon/02.svg" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h5>Advancing Clean Energy Practices</h5>
                                                    We are committed to advancing clean energy solutions
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ambition" class="tab-pane fade" role="tabpanel">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="technical-site-item">
                                                    <div class="content">
                                                        <h3>Vision Statement</h3>
                                                        <p>To be the leading force in the transition to a sustainable future by empowering individuals and businesses with innovative solar energy solutions that harness the sun’s power."</p>
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
                                                    <h5>Leading the Renewable Energy Transition</h5>
                                                    To be recognized as a pioneer in solar energy, driving the shift towards sustainable energ
                                                </div>
                                            </div>
                                            <div class="icon-items">
                                                <div class="icon">
                                                    <img src="{{ asset('website') }}/assets/img/about/icon/02.svg" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h5>Empowering Communities Through Solar</h5>
                                                    We strive to empower individuals and businesses by making solar energy access
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
                                    <h5><a href="#">Hybrid Solar Systems</a></h5>
                                    <p>Smart & Reliable Energy</p>
                                </div>
                                <div class="service-thumb">
                                    <img src="{{ asset('website') }}/assets/img/service/1.png" alt="service-img">
                                    <div class="icon">
                                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-4.svg" alt="img">
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>Hybrid Solar Systems combine the benefits of both on-grid and off-grid solutions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card-items-2">
                                <div class="service-title">
                                    <h5><a href="#">On-Grid Solar Systems </a></h5>
                                    <p>Cost-Effective & Efficient  </p>
                                </div>
                                <div class="service-thumb">
                                    <img src="{{ asset('website') }}/assets/img/service/2.png" alt="service-img">
                                    <div class="icon">
                                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-5.svg" alt="img">
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>On-Grid Solar Systems are connected directly to the utility grid, allowing you to use solar power while feeding excess energy back into the grid</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card-items-2">
                                <div class="service-title">
                                    <h5><a href="#">Off-Grid Solar Systems</a></h5>
                                    <p>Cost-Effective & Efficient</p>
                                </div>
                                <div class="service-thumb">
                                    <img src="{{ asset('website') }}/assets/img/service/3.png" alt="service-img">
                                    <div class="icon">
                                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-6.svg" alt="img">
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>Designed for rural homes, farms, and businesses, off-grid systems ensure a reliable and sustainable energy source without relying on external power</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card-items-2">
                                <div class="service-title">
                                    <h5><a href="#">Solar Power Plants</a></h5>
                                    <p>Large-Scale Energy Solutions</p>
                                </div>
                                <div class="service-thumb">
                                    <img src="{{ asset('website') }}/assets/img/service/4.png" alt="service-img">
                                    <div class="icon">
                                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-6.svg" alt="img">
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p> reducing dependency on traditional power sources and lowering carbon footprints.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card-items-2">
                                <div class="service-title">
                                    <h5><a href="#">Solar Power Plants</a></h5>
                                    <p>3kW - 10kw</p>
                                </div>
                                <div class="service-thumb">
                                    <img src="{{ asset('website') }}/assets/img/service/5.png" alt="service-img">
                                    <div class="icon">
                                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-6.svg" alt="img">
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>3kW - 10kW Solar Power Plants are perfect for residential properties, small offices, and shops.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card-items-2">
                                <div class="service-title">
                                    <h5><a href="#">Solar Power Plants</a></h5>
                                    <p>20kW - 100kw</p>
                                </div>
                                <div class="service-thumb">
                                    <img src="{{ asset('website') }}/assets/img/service/6.png" alt="service-img">
                                    <div class="icon">
                                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-6.svg" alt="img">
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>20kW - 100kW Solar Power Plants offer a cost-effective solution to meet higher energy demands.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card-items-2">
                                <div class="service-title">
                                    <h5><a href="#">Solar Power Plants</a></h5>
                                    <p>100kW - 200kw</p>
                                </div>
                                <div class="service-thumb">
                                    <img src="{{ asset('website') }}/assets/img/service/7.png" alt="service-img">
                                    <div class="icon">
                                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-6.svg" alt="img">
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>Designed for industries, large-scale commercial establishments, and government projects, our 100kW - 200kW Solar Power Plants generate substantial clean energy</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Counter Section Start -->
        <section class="counter-section fix section-padding bg-cover" style="background-image: url('{{ asset('website') }}/assets/img/bg-2.jpg');">
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
                                <img src="{{ asset('website') }}/assets/img/about/1.png" alt="img">
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
                                <img src="{{ asset('website') }}/assets/projects/img-01.jpg" alt="img" style="height: 400px;width:400px;">
                                <div class="project-content">
                                    <p>Delivery</p>
                                    <h3><a href="#">Project site images</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="project-card-items">
                            <div class="project-image">
                                <img src="{{ asset('website') }}/assets/projects/img-02.jpg" alt="img" style="height: 400px;width:400px;">
                                <div class="project-content">
                                    <p>Delivery</p>
                                    <h3><a href="#">Project site images</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="project-card-items">
                            <div class="project-image">
                                <img src="{{ asset('website') }}/assets/projects/img-03.jpg" alt="img" style="height: 400px;width:400px;">
                                <div class="project-content">
                                    <p>Delivery</p>
                                    <h3><a href="#">Project site images</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="project-card-items">
                            <div class="project-image">
                                <img src="{{ asset('website') }}/assets/projects/img-04.jpg" alt="img" style="height: 400px;width:400px;">
                                <div class="project-content">
                                    <p>Delivery</p>
                                    <h3><a href="#">Project site images</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="project-card-items">
                            <div class="project-image">
                                <img src="{{ asset('website') }}/assets/projects/img-05.jpg" alt="img" style="height: 400px;width:400px;">
                                <div class="project-content">
                                    <p>Delivery</p>
                                    <h3><a href="#">Project site images</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="project-card-items">
                            <div class="project-image">
                                <img src="{{ asset('website') }}/assets/projects/img-06.jpg" alt="img" style="height: 400px;width:400px;">
                                <div class="project-content">
                                    <p>Delivery</p>
                                    <h3><a href="#">Project site images</a></h3>
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
                <img src="{{ asset('website') }}/assets/img/faqbg.png" alt="img">
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
                                                Which solar system is best for my home or business?
                                            </button>
                                        </h4>
                                        <div id="faq2" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                On-Grid is ideal for areas with reliable grid power, Off-Grid is best for remote locations, and Hybrid is suitable for places with frequent power outages.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                                How much solar power do I need?
                                            </button>
                                        </h4>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                3kW - 10kW is ideal for homes, 20kW - 100kW suits businesses, and 100kW - 200kW is best for industries and large-scale applications.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                Can I sell excess solar energy back to the grid?
                                            </button>
                                        </h4>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes, On-Grid systems allow surplus energy to be exported through net metering, reducing electricity bills.
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
        {{-- <section class="testimonial-section fix section-padding">
            <div class="map-shape">
                <img src="{{ asset('website') }}/assets/img/bg_img1.jpg" alt="shape-img">
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
        </section> --}}

        <!-- Work Process Section Start -->
        <section class="work-process fix section-bg section-padding">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="work-process-left">
                            <span class="wow fadeInUp">Work process</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">How we work</h2>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                we are dedicated to making solar energy more accessible and affordable for everyone. We specialize in customer support services for solar power solutions, helping individuals and businesses navigate the process of installation, government approvals, and subsidies.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="work-process-card-items">
                            <h2>01</h2>
                            <h5>Consultation & Eligibility Check</h5>
                            <p>Our team understands your energy needs and budget.We check your eligibility for government subsidies and inform you about available financial benefits.</p>
                            <a href="{{route('about.us')}}" class="link-btn">Read More <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="work-process-card-items">
                            <h2>02</h2>
                            <h5> Documentation & Approval</h5>
                            <p>We assist in filling out paperwork and submitting subsidy applications.We handle all government approvals, net metering applications, and compliance requirements.</p>
                            <a href="{{route('about.us')}}" class="link-btn">Read More <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="work-process-card-items">
                            <h2>03</h2>
                            <h5>Installation & Support</h5>
                            <p>Once approvals are done, we assist in installing your solar system.Our team ensures proper testing and commissioning for optimal performance.</p>
                            <a href="{{route('about.us')}}" class="link-btn">Read More <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       

@endsection