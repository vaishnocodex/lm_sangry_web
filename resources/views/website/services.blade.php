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
              <li class="breadcrumb-item active" aria-current="page">Services</li>
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
                        <h3><a href="#">Hybrid Solar Systems – Smart & Reliable Energy</a></h3>
                        <p>
                            Our Hybrid Solar Systems combine solar power with battery storage and grid connectivity. These systems ensure uninterrupted power supply, making them ideal for areas with frequent power outages while reducing electricity costs.
                        </p>
                        <a href="#" class="link-btn">
                            <i class="far fa-plus"></i> read more 
                        </a>
                    </div>
                    <div class="service-image">
                        <img src="{{ asset('website') }}/assets/img/service/1.png" alt="img">
                        <img src="{{ asset('website') }}/assets/img/service/1.png" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="service-box-items mt-0">
                    <div class="service-content">
                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-2.svg" alt="img">
                        <h3><a href="#"> On-Grid Solar Systems – Cost-Effective & Efficient</a></h3>
                        <p>
                            On-Grid Solar Systems are connected directly to the utility grid, allowing you to use solar power while feeding surplus energy back into the grid. Perfect for homes, businesses, and industries looking to save on electricity bills and benefit from net metering.
                        </p>
                        <a href="#" class="link-btn">
                            <i class="far fa-plus"></i> read more 
                        </a>
                    </div>
                    <div class="service-image">
                        <img src="{{ asset('website') }}/assets/img/service/2.png" alt="img">
                        <img src="{{ asset('website') }}/assets/img/service/2.png" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="service-box-items mt-0">
                    <div class="service-content">
                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-3.svg" alt="img">
                        <h3><a href="#">Off-Grid Solar Systems – Complete Energy Independence</a></h3>
                        <p>
                            For remote locations without grid access, our Off-Grid Solar Systems provide a sustainable power solution. Equipped with high-efficiency batteries, these systems store solar energy for 24/7 electricity, ensuring energy security.
                        </p>
                        <a href="#" class="link-btn">
                            <i class="far fa-plus"></i> read more 
                        </a>
                    </div>
                    <div class="service-image">
                        <img src="{{ asset('website') }}/assets/img/service/3.png" alt="img">
                        <img src="{{ asset('website') }}/assets/img/service/3.png" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="service-box-items mt-0">
                    <div class="service-content">
                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-1.svg" alt="img">
                        <h3><a href="#"> Solar Power Plants – Large-Scale Energy Solutions</a></h3>
                        <p>
                            We design and install Solar Power Plants for industrial, commercial, and utility-scale applications. These high-capacity systems generate clean, renewable energy, reducing dependency on traditional power sources and lowering carbon footprints                        </p>
                        <a href="#" class="link-btn">
                            <i class="far fa-plus"></i> read more 
                        </a>
                    </div>
                    <div class="service-image">
                        <img src="{{ asset('website') }}/assets/img/service/4.png" alt="img">
                        <img src="{{ asset('website') }}/assets/img/service/4.png" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="service-box-items mt-0">
                    <div class="service-content">
                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-2.svg" alt="img">
                        <h3><a href="#"> 3kW - 10kW Solar Power Plants</a></h3>
                        <p>
                            3kW - 10kW Solar Power Plants are perfect for residential properties, small offices, and shops. These systems provide sufficient energy to power essential appliances, reduce electricity bills, and promote sustainable living. With an easy installation process and high efficiency, this range is an excellent choice for those looking to switch to renewable energy.
                        </p>
                        <a href="#" class="link-btn">
                            <i class="far fa-plus"></i> read more 
                        </a>
                    </div>
                    <div class="service-image">
                        <img src="{{ asset('website') }}/assets/img/service/5.png" alt="img">
                        <img src="{{ asset('website') }}/assets/img/service/5.png" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="service-box-items mt-0">
                    <div class="service-content">
                        <img src="{{ asset('website') }}/assets/img/service/icon/icon-3.svg" alt="img">
                        <h3><a href="#">20kW - 100kW Solar Power Plants</a></h3>
                      <p>For medium to large businesses, 20kW - 100kW Solar Power Plants offer a cost-effective solution to meet higher energy demands. Ideal for factories, warehouses, schools, and commercial spaces, these systems significantly reduce operational electricity costs while ensuring a stable and uninterrupted power supply.</p>
                        <a href="#" class="link-btn">
                            <i class="far fa-plus"></i> read more 
                        </a>
                    </div>
                    <div class="service-image">
                        <img src="{{ asset('website') }}/assets/img/service/6.png" alt="img">
                        <img src="{{ asset('website') }}/assets/img/service/6.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection