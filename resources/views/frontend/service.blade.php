@extends('layouts.main')
@section('content')
    <div class="breadcumb-area">
        <div class="breadcumb-wrapper" data-bg-src="{{ asset('demo/assets/img/bg/service-header-foto.jpeg') }}">
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

    <div class="position-relative overflow-hidden space-bottom overflow-hidden">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-4">
                    <div class="title-area text-center text-lg-start"><span class="sub-title text-anime">WORK IN
                            PROGRESS</span>
                        <h2 class="sec-title style2 split-text">Quality <span class="text-theme">Feasibility
                            </span>Sustainability</h2>
                        <p class="sec-text wow fadeInUp" data-wow-delay=".3s">We believe That great interior has the
                            power to sustainablity and improve lives, and we are dedicated to delivering projects.</p>
                    </div>
                    <div class="mt-140 text-center text-lg-start wow fadeInUp" data-wow-delay=".5s"><a
                            href="contact.html" class="th-btn th-icon">Discover More</a></div>
                </div>
                <div class="col-xl-8">
                    <div class="main-container wow fadeInLeft" data-wow-delay=".2s">
                        <div class="image-container"></div><img class="panorama-img"
                            src="{{ asset('demo/assets/img/normal/progress-img.jpg')}}" alt="Panorama Image" style="display: none;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="choose-area3 position-relative overflow-hidden space-bottom overflow-hidden">
        <div class="container">
            <div class="row gy-5 justify-content-between">
                <div class="col-xl-5">
                    <div class="title-area"><span class="sub-title sub-title2">Why Choose Us</span></div>
                </div>
                <div class="col-xl-7">
                    <div class="title-area ps-xl-5 ms-xl-5">
                        <h2 class="sec-title style5 split-text mt-0">Creating Eco-Friendly Structures for a Sustainable
                            Tomorrow</h2>
                        <p>Real Estate Architectural Services combine innovation, functionality, and aesthetics to
                            transform visions into reality. These services focus on creating well-planned, sustainable,
                            and visually appealing structures that meet both client goals and regulatory standards.</p>
                    </div>
                    <div class="choose-progress-bar">
                        <div class="progress-bar">
                            <div class="progress-track">
                                <div class="progress-fill"><span class="counter">85%</span>
                                    <p class="text">Renovations & Retrofitting</p>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-track">
                                <div class="progress-fill"><span class="counter">45%</span>
                                    <p class="text">Custom Homes</p>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-track">
                                <div class="progress-fill"><span class="counter">55%</span>
                                    <p class="text">Modular/Prefab Design</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="choose-bottom-line">
                </div>
            </div>
        </div>
        <div class="shape-mockup d-none d-xl-block" data-bottom="10%" data-left="0%"><img
                src="{{ asset('demo/assets/img/normal/choose-img.png') }}" alt=""></div>
    </div>
@endsection
