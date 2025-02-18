@extends('website.master')          
@section('content')
 <!-- Breadcrumb Section Start -->
 <div class="page-banner-wrap text-center bg-cover section-padding" style="background-image: url('{{ asset('website') }}/assets/img/page-banner.jpg')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Service</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Service</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Service Section Start -->
<section class="service-section fix section-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="service-box-items mt-0">
                    <div class="service-content">
                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-1.svg" alt="img">
                        <h3><a href="service-details.html">Solar-power</a></h3>
                        <ul>
                            <li>Your digital marketing sources</li>
                            <li>Showing the world who you are</li>
                            <li>Making the world talk about you</li>
                        </ul>
                        <a href="service-details.html" class="link-btn">
                            <i class="far fa-plus"></i> read more 
                        </a>
                    </div>
                    <div class="service-image">
                        <img src="{{ asset('website') }}/assets/img/service/04.jpg" alt="img">
                        <img src="{{ asset('website') }}/assets/img/service/04.jpg" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="service-box-items mt-0">
                    <div class="service-content">
                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-2.svg" alt="img">
                        <h3><a href="service-details.html">Solar brings</a></h3>
                        <ul>
                            <li>Your digital marketing sources</li>
                            <li>Showing the world who you are</li>
                            <li>Making the world talk about you</li>
                        </ul>
                        <a href="service-details.html" class="link-btn">
                            <i class="far fa-plus"></i> read more 
                        </a>
                    </div>
                    <div class="service-image">
                        <img src="{{ asset('website') }}/assets/img/service/05.jpg" alt="img">
                        <img src="{{ asset('website') }}/assets/img/service/05.jpg" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="service-box-items mt-0">
                    <div class="service-content">
                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-3.svg" alt="img">
                        <h3><a href="service-details.html">Generate electricity</a></h3>
                        <ul>
                            <li>Your digital marketing sources</li>
                            <li>Showing the world who you are</li>
                            <li>Making the world talk about you</li>
                        </ul>
                        <a href="service-details.html" class="link-btn">
                            <i class="far fa-plus"></i> read more 
                        </a>
                    </div>
                    <div class="service-image">
                        <img src="{{ asset('website') }}/assets/img/service/06.jpg" alt="img">
                        <img src="{{ asset('website') }}/assets/img/service/06.jpg" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="service-box-items mt-0">
                    <div class="service-content">
                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-1.svg" alt="img">
                        <h3><a href="service-details.html">Solar-power</a></h3>
                        <ul>
                            <li>Your digital marketing sources</li>
                            <li>Showing the world who you are</li>
                            <li>Making the world talk about you</li>
                        </ul>
                        <a href="service-details.html" class="link-btn">
                            <i class="far fa-plus"></i> read more 
                        </a>
                    </div>
                    <div class="service-image">
                        <img src="{{ asset('website') }}/assets/img/service/04.jpg" alt="img">
                        <img src="{{ asset('website') }}/assets/img/service/04.jpg" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="service-box-items mt-0">
                    <div class="service-content">
                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-2.svg" alt="img">
                        <h3><a href="service-details.html">Solar brings</a></h3>
                        <ul>
                            <li>Your digital marketing sources</li>
                            <li>Showing the world who you are</li>
                            <li>Making the world talk about you</li>
                        </ul>
                        <a href="service-details.html" class="link-btn">
                            <i class="far fa-plus"></i> read more 
                        </a>
                    </div>
                    <div class="service-image">
                        <img src="{{ asset('website') }}/assets/img/service/05.jpg" alt="img">
                        <img src="{{ asset('website') }}/assets/img/service/05.jpg" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="service-box-items mt-0">
                    <div class="service-content">
                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-3.svg" alt="img">
                        <h3><a href="service-details.html">Generate electricity</a></h3>
                        <ul>
                            <li>Your digital marketing sources</li>
                            <li>Showing the world who you are</li>
                            <li>Making the world talk about you</li>
                        </ul>
                        <a href="service-details.html" class="link-btn">
                            <i class="far fa-plus"></i> read more 
                        </a>
                    </div>
                    <div class="service-image">
                        <img src="{{ asset('website') }}/assets/img/service/06.jpg" alt="img">
                        <img src="{{ asset('website') }}/assets/img/service/06.jpg" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection