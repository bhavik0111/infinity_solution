@extends('layouts.main')
@section('content')
    <div class="breadcumb-area">
        <div class="breadcumb-wrapper" data-bg-src="{{ asset('demo/assets/img/bg/breadcumb-bg.jpg')}}">
            <div class="container">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title text-anime">Awesome Gallery</h1>
                    <ul class="breadcumb-menu">
                        <li class="wow fadeInUp" data-wow-delay=".2s"><a href="{{ route('home') }}">Home</a></li>
                        <li class="wow fadeInUp" data-wow-delay=".3s">Gallery Page</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="breadcumb-shape ShapeAni" data-bg-src="{{ asset('demo/assets/img/shape/scale.png')}}"></div>
    </div>
    <div class="overflow-hidden space overflow-hidden" id="project-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="filter-menu indicator-active mb-60 filter-menu-active"><button data-filter="*"
                            class="tab-btn active" type="button">View All</button> <button data-filter=".cat1"
                            class="tab-btn" type="button">Interior</button> <button data-filter=".cat2" class="tab-btn"
                            type="button">Architecture</button> <button data-filter=".cat3" class="tab-btn"
                            type="button">Building</button> <button data-filter=".cat4" class="tab-btn"
                            type="button">Exterior</button> <button data-filter=".cat5" class="tab-btn"
                            type="button">Shape</button></div>
                </div>
            </div>
            <div class="row gy-4 gallery-row filter-active">
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat2 cat5">
                    <div class="gallery-card">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/gallery/gallery_2_1.jpg')}}" alt="gallery image">
                            <a href="{{ asset('demo/assets/img/gallery/gallery_2_1.jpg')}}" class="icon-btn th-popup-image"><i
                                    class="far fa-plus"></i></a>
                            <div class="shape">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <h2 class="box-title">Open Kitchen Interior Design</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat3 cat2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/gallery/gallery_2_2.jpg')}}" alt="gallery image">
                            <a href="{{ asset('demo/assets/img/gallery/gallery_2_2.jpg')}}" class="icon-btn th-popup-image"><i
                                    class="far fa-plus"></i></a>
                            <div class="shape">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <h2 class="box-title">Open Kitchen Interior Design</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat3 cat5">
                    <div class="gallery-card">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/gallery/gallery_2_3.jpg')}}" alt="gallery image">
                            <a href="{{ asset('demo/assets/img/gallery/gallery_2_3.jpg')}}" class="icon-btn th-popup-image"><i
                                    class="far fa-plus"></i></a>
                            <div class="shape">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <h2 class="box-title">Open Kitchen Interior Design</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat1 cat5">
                    <div class="gallery-card">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/gallery/gallery_2_4.jpg')}}" alt="gallery image">
                            <a href="{{ asset('demo/assets/img/gallery/gallery_2_4.jpg')}}" class="icon-btn th-popup-image"><i
                                    class="far fa-plus"></i></a>
                            <div class="shape">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <h2 class="box-title">Open Kitchen Interior Design</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat4 cat2 cat1">
                    <div class="gallery-card">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/gallery/gallery_2_5.jpg')}}"
                                alt="gallery image"> <a href="{{ asset('demo/assets/img/gallery/gallery_2_5.jpg')}}"
                                class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                            <div class="shape">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <h2 class="box-title">Open Kitchen Interior Design</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat4 cat3 cat1">
                    <div class="gallery-card">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/gallery/gallery_2_6.jpg')}}"
                                alt="gallery image"> <a href="{{ asset('demo/assets/img/gallery/gallery_2_6.jpg')}}"
                                class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                            <div class="shape">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <h2 class="box-title">Open Kitchen Interior Design</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat3 cat5">
                    <div class="gallery-card">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/gallery/gallery_2_7.jpg')}}"
                                alt="gallery image"> <a href="{{ asset('demo/assets/img/gallery/gallery_2_7.jpg')}}"
                                class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                            <div class="shape">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <h2 class="box-title">Open Kitchen Interior Design</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat1 cat5">
                    <div class="gallery-card">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/gallery/gallery_2_8.jpg')}}"
                                alt="gallery image"> <a href="{{ asset('demo/assets/img/gallery/gallery_2_8.jpg')}}"
                                class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                            <div class="shape">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <h2 class="box-title">Open Kitchen Interior Design</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat4 cat2 cat1">
                    <div class="gallery-card">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/gallery/gallery_2_9.jpg')}}"
                                alt="gallery image"> <a href="{{ asset('demo/assets/img/gallery/gallery_2_9.jpg')}}"
                                class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                            <div class="shape">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <h2 class="box-title">Open Kitchen Interior Design</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
