@extends('layouts.main')
@section('content')
    <div class="breadcumb-area">
        <div class="breadcumb-wrapper" data-bg-src="{{ asset('demo/assets/img/bg/breadcumb-bg.jpg') }}">
            <div class="container">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title text-anime">Our Services</h1>
                    <ul class="breadcumb-menu">
                        <li class="wow fadeInUp" data-wow-delay=".2s"><a href="{{ route('home') }}">Home</a></li>
                        <li class="wow fadeInUp" data-wow-delay=".3s">All Services</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="breadcumb-shape ShapeAni" data-bg-src="{{ asset('demo/assets/img/shape/scale.png') }}"></div>
    </div>

    <section class="position-relative overflow-hidden space" id="service-sec">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-8">
                    <div class="title-area">
                        <h2 class="sec-title style3 split-text">Our Services...</h2>
                    </div>
                </div>
            </div> --}}

            <div class="slider-wrap">
                <div class="swiper th-slider serviceSlide1 has-shadow" id="serviceSlide1"
                    data-slider-options='{"paginationType": "progressbar","spaceBetween": 70,"loop":false,"mousewheel": {"enabled": true,"sensitivity": 4,"releaseOnEdges":true},"breakpoints": {"0":{"slidesPerView": 1},"576": {"slidesPerView": 1},"768": {"slidesPerView": 1},"1200": {"slidesPerView": 2}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-img global-img img-anim-top"><img
                                        src="{{ asset('demo/assets/img/service/service_1_1.jpg') }}" alt=""></div>
                                <div class="box-content">
                                    <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/service_1_1.svg') }}"
                                            alt="Icon"></div>
                                    <h3 class="box-title"><a href="{{ route('service.details', ['id' => 1]) }}">Interior
                                            Design</a></h3>
                                    <p class="box-text">The design process begins with a thorough analysis</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-img global-img img-anim-top"><img
                                        src="{{ asset('demo/assets/img/service/service_1_2.jpg') }}" alt=""></div>
                                <div class="box-content">
                                    <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/service_1_2.svg') }}"
                                            alt="Icon"></div>
                                    <h3 class="box-title"><a href="{{ route('service.details', ['id' => 2]) }}">3D
                                            Modeling</a></h3>
                                    <p class="box-text">The design process begins with a thorough analysis</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-img global-img img-anim-top"><img
                                        src="{{ asset('demo/assets/img/service/service_1_3.jpg') }}" alt=""></div>
                                <div class="box-content">
                                    <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/service_1_3.svg') }}"
                                            alt="Icon"></div>
                                    <h3 class="box-title"><a href="{{ route('service.details', ['id' => 3]) }}">Residential
                                            Design</a></h3>
                                    <p class="box-text">The design process begins with a thorough analysis</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-img global-img img-anim-top"><img
                                        src="{{ asset('demo/assets/img/service/service_1_4.jpg') }}" alt=""></div>
                                <div class="box-content">
                                    <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/service_1_4.svg') }}"
                                            alt="Icon"></div>
                                    <h3 class="box-title"><a
                                            href="{{ route('service.details', ['id' => 4]) }}">Architecture Plan</a></h3>
                                    <p class="box-text">The design process begins with a thorough analysis</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-img global-img img-anim-top"><img
                                        src="{{ asset('demo/assets/img/service/service_1_5.jpg') }}" alt=""></div>
                                <div class="box-content">
                                    <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/service_1_5.svg') }}"
                                            alt="Icon"></div>
                                    <h3 class="box-title"><a href="{{ route('service.details', ['id' => 5]) }}">Commercial
                                            Space</a></h3>
                                    <p class="box-text">The design process begins with a thorough analysis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-controller">
                        <div class="slider-pagination" data-slider-id="#serviceSlide1"></div>
                    </div>
                </div>
            </div>

            {{-- *********** --}}
            <div class="service-area3">
                <div class="row gy-4 justify-content-center">
                    <div class="col-md-6 col-xl-4">
                        <div class="service-item wow fadeInUp" data-wow-delay=".1s">
                            <div class="box-content">
                                <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/service_3_1.svg') }}"
                                        alt="Icon"></div>
                                <h3 class="box-title"><a href="{{ route('service.details', ['id' => 6]) }}">Architectural
                                        Design & Planning</a>
                                </h3>
                                <p class="box-text">Architectural design is the art and science of enhancing the
                                    interiors of a space to create a more aesthetically pleasing and functional</p><a
                                    href="{{ route('service.details', ['id' => 6]) }}" class="line-btn">Read More <i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="service-item wow fadeInUp" data-wow-delay=".3s">
                            <div class="box-content">
                                <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/service_3_1.svg') }}"
                                        alt="Icon"></div>
                                <h3 class="box-title"><a href="{{ route('service.details', ['id' => 7]) }}">Urban &
                                        Master Planning</a></h3>
                                <p class="box-text">Architectural design is the art and science of enhancing the
                                    interiors of a space to create a more aesthetically pleasing and functional</p><a
                                    href="{{ route('service.details', ['id' => 7]) }}" class="line-btn">Read More <i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="service-item wow fadeInUp" data-wow-delay=".5s">
                            <div class="box-content">
                                <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/service_3_1.svg') }}"
                                        alt="Icon"></div>
                                <h3 class="box-title"><a href="{{ route('service.details', ['id' => 8]) }}">Visualization
                                        & Rendering</a></h3>
                                <p class="box-text">Architectural design is the art and science of enhancing the
                                    interiors of a space to create a more aesthetically pleasing and functional</p><a
                                    href="{{ route('service.details', ['id' => 8]) }}" class="line-btn">Read More <i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
