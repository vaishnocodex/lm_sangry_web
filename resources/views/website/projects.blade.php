@extends('website.master')          
@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="page-banner-wrap text-center bg-cover section-padding" style="background-image: url('{{ asset('website') }}/assets/img/page-banner.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>Project</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Project</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Project Section Start -->
    <section class="project-section fix section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="project-box-items-2">
                        <div class="project-image">
                            <img src="{{ asset('website') }}/assets/img/project/09.jpg" alt="img">
                            <div class="project-content">
                                <p>Solar</p>
                                <h5><a href="project-details.html">Help Environment</a></h5>
                                <a href="project-details.html" class="icon-btn"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="project-box-items-2">
                        <div class="project-image">
                            <img src="{{ asset('website') }}/assets/img/project/10.jpg" alt="img">
                            <div class="project-content">
                                <p>GoSolar</p>
                                <h5><a href="project-details.html">Change View</a></h5>
                                <a href="project-details.html" class="icon-btn"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="project-box-items-2">
                        <div class="project-image">
                            <img src="{{ asset('website') }}/assets/img/project/11.jpg" alt="img">
                            <div class="project-content">
                                <p>Charge</p>
                                <h5><a href="project-details.html">Heal yourself</a></h5>
                                <a href="project-details.html" class="icon-btn"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="project-box-items-2">
                        <div class="project-image">
                            <img src="{{ asset('website') }}/assets/img/project/12.jpg" alt="img">
                            <div class="project-content">
                                <p>Solar</p>
                                <h5><a href="project-details.html">Green Energy</a></h5>
                                <a href="project-details.html" class="icon-btn"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="project-box-items-2">
                        <div class="project-image">
                            <img src="{{ asset('website') }}/assets/img/project/13.jpg" alt="img">
                            <div class="project-content">
                                <p>GoSolar</p>
                                <h5><a href="project-details.html">Perfect Shine</a></h5>
                                <a href="project-details.html" class="icon-btn"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="project-box-items-2">
                        <div class="project-image">
                            <img src="{{ asset('website') }}/assets/img/project/14.jpg" alt="img">
                            <div class="project-content">
                                <p>Charge</p>
                                <h5><a href="project-details.html">Think smart</a></h5>
                                <a href="project-details.html" class="icon-btn"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="project-box-items-2">
                        <div class="project-image">
                            <img src="{{ asset('website') }}/assets/img/project/15.jpg" alt="img">
                            <div class="project-content">
                                <p>Solar</p>
                                <h5><a href="project-details.html">Use solar</a></h5>
                                <a href="project-details.html" class="icon-btn"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="project-box-items-2">
                        <div class="project-image">
                            <img src="{{ asset('website') }}/assets/img/project/16.jpg" alt="img">
                            <div class="project-content">
                                <p>GoSolar</p>
                                <h5><a href="project-details.html">Sustainable Peace</a></h5>
                                <a href="project-details.html" class="icon-btn"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="project-box-items-2">
                        <div class="project-image">
                            <img src="{{ asset('website') }}/assets/img/project/17.jpg" alt="img">
                            <div class="project-content">
                                <p>Panels</p>
                                <h5><a href="project-details.html">Heal yourself</a></h5>
                                <a href="project-details.html" class="icon-btn"><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    
@endsection