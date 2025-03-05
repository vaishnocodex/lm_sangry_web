@extends('website.master')
@section('content')
<!-- Contact Info Section Start -->
      <!-- Breadcrumb Section Start -->
      <div class="page-banner-wrap text-center bg-cover section-padding" style="background-image: url('assets/img/page-banner.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>about us</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- About Section Start -->
    <section class="about-section fix section-padding">
        <div class="container">
            <div class="about-wrapper-2">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="{{ asset('website') }}/assets/img/about/1.png" alt="img" class="wow fadeInLeft" data-wow-delay=".3s">
                            <div class="dot-shape">
                                <img src="{{ asset('website') }}/assets/img/about/dot.png" alt="img">
                            </div>
                            <div class="icon-items wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon">
                                    <img src="{{ asset('website') }}/assets/img/about/icon/03.svg" alt="img">
                                </div>
                                <h5>
                                    Innovative Ways To <br>
                                    Harness Nature <br> Renewable 
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">About us</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Get the power of the sun</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">LM Sangry, we provide expert consultation, assistance, and support for customers looking to install solar power plants. From guidance on government policies to helping with paperwork for subsidies, we ensure a smooth process for individuals and businesses transitioning to solar energy. Our team helps you access government-approved financial incentives, making solar adoption more affordable. </p>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">LM Sangry, we are dedicated to making solar energy more accessible and affordable for everyone. We specialize in customer support services for solar power solutions, helping individuals and businesses navigate the process of installation, government approvals, and subsidies. </p>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">We understand that switching to solar can feel overwhelming, which is why our expert team is here to guide you every step of the way—from selecting the right solar system to ensuring you receive maximum government financial benefits. </p>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">Our mission is to promote sustainable energy solutions by making solar adoption simple, hassle-free, and cost-effective. Whether you need assistance with off-grid, on-grid, hybrid solar systems, or large-scale solar power plants, LM Sangry is your trusted partner in a brighter, cleaner future. </p>
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faq Section Start -->
    <section class="faq-section-2 fix section-bg section-padding">
        <div class="container">
            <div class="faq-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="faq-content style-2">
                            <div class="section-title">
                                <span class="wow fadeInUp">Some FAQ’s</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Let the sunshine inside your house</h2>
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
                                                Why should I choose LM Sangry?
                                            </button>
                                        </h4>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                We offer high-quality solar solutions, expert installation, customized designs, and cost-effective energy alternatives.                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                Are solar power plants suitable for industrial use?                                            </button>
                                        </h4>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes, large-scale solar power plants (100kW - 200kW) provide stable, cost-effective energy for industries.                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="faq-image-2">
                            <img src="{{ asset('website') }}/assets/img/about/about2.png" alt="faq-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Cta Contact Section Start -->
     <section class="cta-contact-section fix">
        <div class="container">
            <div class="cta-contact-wrapper">
                <div class="contact-shape-1">
                    <img src="{{ asset('website') }}/assets/img/contact-shape-1.png" alt="shape-img">
                </div>
                <div class="contact-shape-2">
                    <img src="{{ asset('website') }}/assets/img/contact-shape-2.png" alt="shape-img">
                </div>
                <div class="cta-contact-left">
                    <div class="section-title">
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">We made passion <br> our raw material</h2>
                    </div>
                    <div class="icon-items mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                        <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn ripple video-popup">
                            <i class="fas fa-play"></i>
                        </a>
                        <div class="content">
                            <p>Call us now</p>
                            <h5><a href="tel:+447700900217">+44 7700 900217</a></h5>
                        </div>
                    </div>
                </div>
                <div class="contact-image wow fadeInUp" data-wow-delay=".4s">
                    <img src="{{ asset('website') }}/assets/img/about/2.png" alt="img">
                </div>
            </div>
        </div>
    </section>

    <!-- About Company Section Start -->
    <section class="about-company-section fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp">About Our Company</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Create and convert</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="about-card-items">
                        <div class="icon">
                            <img src="{{ asset('website') }}/assets/img/about/icon/04.svg" alt="img">
                        </div>
                        <div class="content">
                            <h2><span class="count">1400</span></h2>
                            <p>Best Adviser</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="about-card-items">
                        <div class="icon">
                            <img src="{{ asset('website') }}/assets/img/about/icon/05.svg" alt="img">
                        </div>
                        <div class="content">
                            <h2><span class="count">2800</span></h2>
                            <p>Customers</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-card-items">
                        <div class="icon">
                            <img src="{{ asset('website') }}/assets/img/about/icon/06.svg" alt="img">
                        </div>
                        <div class="content">
                            <h2><span class="count">800</span></h2>
                            <p>Team</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="about-card-items">
                        <div class="icon">
                            <img src="{{ asset('website') }}/assets/img/about/icon/07.svg" alt="img">
                        </div>
                        <div class="content">
                            <h2><span class="count">1900</span></h2>
                            <p>Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection