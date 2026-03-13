@extends('layouts.main')
@section('content')
    <div class="breadcumb-area">
        <div class="breadcumb-wrapper" data-bg-src="{{ asset('demo/assets/img/bg/breadcumb-bg.jpg') }}">
            <div class="container">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title text-anime">Our Porfolios</h1>
                    <ul class="breadcumb-menu">
                        <li class="wow fadeInUp" data-wow-delay=".2s"><a href="{{ route('home') }}">Home</a></li>
                        <li class="wow fadeInUp" data-wow-delay=".3s">Our Porfolios</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="breadcumb-shape ShapeAni" data-bg-src="{{ asset('demo/assets/img/shape/scale.png') }}"></div>
    </div>
    <section class="position-relative space-top overflow-hidden" id="project-sec">
        <div class="container">
            <div class="row gy-4 space-bottom">
                <div class="col-lg-5">
                    <div class="title-area mb-0"><span class="number wow fadeInLeft" data-wow-delay=".2s">01 <span
                                class="line"></span>04</span>
                        <h2 class="sec-title split-text">Excellence Kitchen Interior Design</h2>
                        <p class="sec-text3 wow fadeInUp" data-wow-delay=".3s">Faren architects is a team of young
                            talented experts whose professional activity is entirely dedicated to creating unique
                            architectural and design solutions.</p>
                        <div class="wow fadeInUp" data-wow-delay=".4s"><a href="project-details.html"
                                class="th-btn black-border th-icon">View Projects</a></div>
                    </div>
                    <div class="shape-mockup spin d-none d-xxl-block" data-bottom="8%" data-right="12%"><img
                            src="assets/img/shape/element-5.png" alt=""></div>
                </div>
                <div class="col-lg-7">
                    <div class="img-box6">
                        <div class="img1 global-img"><img src="{{ asset('demo/assets/img/project/project_img_1.jpg') }}" alt=""></div>
                        <div class="img2 global-img"><img src="{{ asset('demo/assets/img/project/project_img_2.jpg') }}" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="row gy-4 space-bottom flex-row-reverse justify-content-between">
                <div class="col-lg-5">
                    <div class="title-area mb-0 ps-xl-5 ms-xl-5"><span class="number wow fadeInLeft" data-wow-delay=".2s">02
                            <span class="line"></span>04</span>
                        <h2 class="sec-title split-text">Top-notch Living Room Interior</h2>
                        <p class="sec-text3 wow fadeInUp" data-wow-delay=".3s">Faren architects is a team of young
                            talented experts whose professional activity is entirely dedicated to creating unique
                            architectural and design solutions.</p>
                        <div class="wow fadeInUp" data-wow-delay=".4s"><a href="project-details.html"
                                class="th-btn black-border th-icon">View Projects</a></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="img-box6">
                        <div class="img1 global-img"><img src="{{ asset('demo/assets/img/project/project_img_3.jpg') }}" alt=""></div>
                        <div class="img2 global-img"><img src="{{ asset('demo/assets/img/project/project_img_4.jpg') }}" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="row gy-4 space-bottom justify-content-between">
                <div class="col-lg-5">
                    <div class="title-area mb-0"><span class="number wow fadeInLeft" data-wow-delay=".2s">03 <span
                                class="line"></span>04</span>
                        <h2 class="sec-title split-text">Excellence Dining Space Interior Design</h2>
                        <p class="sec-text3 wow fadeInUp" data-wow-delay=".3s">Faren architects is a team of young
                            talented experts whose professional activity is entirely dedicated to creating unique
                            architectural and design solutions.</p>
                        <div class="wow fadeInUp" data-wow-delay=".4s"><a href="{{ route('project.details', ['id' => 3]) }}"
                                class="th-btn black-border th-icon">View Projects</a></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="img-box6">
                        <div class="img1 global-img"><img src="{{ asset('demo/assets/img/project/project_img_5.jpg') }}" alt=""></div>
                        <div class="img2 global-img"><img src="{{ asset('demo/assets/img/project/project_img_6.jpg') }}" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="row gy-4 flex-row-reverse justify-content-between">
                <div class="col-lg-5">
                    <div class="title-area mb-0 ps-xl-5 ms-xl-4"><span class="number wow fadeInLeft" data-wow-delay=".2s">04
                            <span class="line"></span>04</span>
                        <h2 class="sec-title split-text">Architecture Design Nordic Space</h2>
                        <p class="sec-text3 wow fadeInUp" data-wow-delay=".3s">Faren architects is a team of young
                            talented experts whose professional activity is entirely dedicated to creating unique
                            architectural and design solutions.</p>
                        <div class="wow fadeInUp" data-wow-delay=".4s"><a href="{{ route('project.details', ['id' => 4]) }}"
                                class="th-btn black-border th-icon">View Projects</a></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="img-box6">
                        <div class="img1 global-img"><img src="{{ asset('demo/assets/img/project/project_img_7.jpg') }}" alt="">
                        </div>
                        <div class="img2 global-img"><img src="{{ asset('demo/assets/img/project/project_img_8.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="position-relative space overflow-hidden">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title text-anime">Index</span>
                <h2 class="sec-title split-text">Architecture Index</h2>
            </div>
            <div class="row">
                <div class="project-list-area">
                    <div class="project-list">
                        <h3 class="box-title">Residential</h3>
                        <h3 class="box-title">Copenhagen, Denmark</h3>
                        <h3 class="title mb-0">Villa Cabinate</h3>
                        <div class="box-right">
                            <div class="box-img"><img src="{{ asset('demo/assets/img/project/project-img-1.png') }}" alt=""></div><a
                                href="{{ route('project.details', ['id' => 1]) }}" class="th-btn black-border th-icon">View Projects</a>
                        </div>
                    </div>
                    <div class="project-list">
                        <h3 class="box-title">Hospitality</h3>
                        <h3 class="box-title">Copenhagen, Denmark</h3>
                        <h3 class="title mb-0">The Communion</h3>
                        <div class="box-right">
                            <div class="box-img"><img src="{{ asset('demo/assets/img/project/project-img-1.png') }}" alt=""></div><a
                                href="{{ route('project.details', ['id' => 2]) }}" class="th-btn black-border th-icon">View Projects</a>
                        </div>
                    </div>
                    <div class="project-list">
                        <h3 class="box-title">Interior</h3>
                        <h3 class="box-title">Copenhagen, Denmark</h3>
                        <h3 class="title mb-0">Paradise House</h3>
                        <div class="box-right">
                            <div class="box-img"><img src="{{ asset('demo/assets/img/project/project-img-1.png') }}" alt=""></div><a
                                href="{{ route('project.details', ['id' => 1]) }}" class="th-btn black-border th-icon">View Projects</a>
                        </div>
                    </div>
                    <div class="project-list">
                        <h3 class="box-title">Residential</h3>
                        <h3 class="box-title">Copenhagen, Denmark</h3>
                        <h3 class="title mb-0">Nordic Villa</h3>
                        <div class="box-right">
                            <div class="box-img"><img src="{{ asset('demo/assets/img/project/project-img-1.png') }}" alt=""></div><a
                                href="{{ route('project.details', ['id' => 4]) }}" class="th-btn black-border th-icon">View Projects</a>
                        </div>
                    </div>
                    <div class="project-list">
                        <h3 class="box-title">Commercial</h3>
                        <h3 class="box-title">Copenhagen, Denmark</h3>
                        <h3 class="title mb-0">Real Estate</h3>
                        <div class="box-right">
                            <div class="box-img"><img src="{{ asset('demo/assets/img/project/project-img-1.png') }}" alt=""></div><a
                                href="{{ route('project.details', ['id' => 5]) }}" class="th-btn black-border th-icon">View Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="video-area overflow-hidden">
        <div class="container">
            <h3 class="box-title">Architectural</h3>
            <div class="swiper th-slider videoSlide1 has-shadow" id="videoSlide1"
                data-slider-options='{"effect":"fade","loop":true}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="video-box1" data-bg-src="{{ asset('demo/assets/img/bg/video_1_1.jpg') }}">
                            <div class="discount-wrapp"><a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                    class="video-play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video-box1" data-bg-src="{{ asset('demo/assets/img/bg/video_1_2.jpg') }}">
                            <div class="discount-wrapp"><a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                    class="video-play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video-box1" data-bg-src="{{ asset('demo/assets/img/bg/video_1_3.jpg') }}">
                            <div class="discount-wrapp"><a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                    class="video-play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div><button data-slider-prev="#videoSlide1" class="slider-arrow style4 slider-prev"><img
                        src="{{ asset('demo/assets/img/icon/right-arrow4.svg') }}" alt=""></button> <button
                    data-slider-next="#videoSlide1" class="slider-arrow style4 slider-next"><img
                        src="{{ asset('demo/assets/img/icon/left-arrow4.svg') }}" alt=""></button>
            </div>
            <h3 class="box-title style2">Reels</h3>
        </div>
    </div>
    <section class="overflow-hidden space overflow-hidden" id="testi-sec">
        <div class="container">
            <div class="row gy-24 justify-content-center">
                <div class="col-xl-6">
                    <div class="title-area text-center"><span class="sub-title text-anime">TESTIMONIALS</span>
                        <h2 class="sec-title split-text">What Our <span class="text-theme">Client’s </span>Say</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-24 align-items-center">
                <div class="col-xl-5">
                    <div class="testi-image_wrapp">
                        <div class="testi-review">
                            <div class="testi-img1 global-img"><img src="{{ asset('demo/assets/img/testimonial/testi-img1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Excellence Residence</h3>
                                <p class="box-text">Interior Decoration</p>
                            </div>
                        </div>
                        <div class="testi-img2 global-img"><img src="{{ asset('demo/assets/img/testimonial/testi-img2.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="slider-wrap">
                        <div class="swiper th-slider testiSlide1 has-shadow" id="testiSlide1"
                            data-slider-options='{"effect":"slide","loop":true}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-card style1">
                                        <div class="box-wrapp">
                                            <div class="box-quote"><img src="{{ asset('demo/assets/img/icon/quote2.svg') }}" alt="">
                                            </div>
                                            <div class="box-rating"><span class="rating">4.9/5.0</span> <span
                                                    class="review"><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i></span></div>
                                        </div>
                                        <p class="box-text">"It was clear from the start that sustainability wasn’t an
                                            afterthought — it was central to every design decision. The passive cooling
                                            and natural materials make our building both eco-friendly and elegant."</p>
                                        <div class="box-profile">
                                            <div class="box-author"><img src="{{ asset('demo/assets/img/testimonial/testi_1_1.png') }}"
                                                    alt="Avater"></div>
                                            <div class="box-info">
                                                <h3 class="box-title">Carlos Mendez</h3><span class="box-desig">Company
                                                    Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card style1">
                                        <div class="box-wrapp">
                                            <div class="box-quote"><img src="{{ asset('demo/assets/img/icon/quote2.svg') }}" alt="">
                                            </div>
                                            <div class="box-rating"><span class="rating">4.9/5.0</span> <span
                                                    class="review"><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i></span></div>
                                        </div>
                                        <p class="box-text">Working with Faren transformed our dream into reality. The
                                            design of our home perfectly balances privacy, natural light, and open
                                            space. It’s not just a house — it feels like a sanctuary.</p>
                                        <div class="box-profile">
                                            <div class="box-author"><img src="{{ asset('demo/assets/img/testimonial/testi_1_2.png') }}"
                                                    alt="Avater"></div>
                                            <div class="box-info">
                                                <h3 class="box-title">James Thompson</h3><span class="box-desig">Company
                                                    Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card style1">
                                        <div class="box-wrapp">
                                            <div class="box-quote"><img src="{{ asset('demo/assets/img/icon/quote2.svg') }}" alt="">
                                            </div>
                                            <div class="box-rating"><span class="rating">4.9/5.0</span> <span
                                                    class="review"><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i></span></div>
                                        </div>
                                        <p class="box-text">We were amazed by the attention to detail and the
                                            understanding of how a home should ‘feel.’ The layout is functional and
                                            beautiful — we love every inch of our new space.</p>
                                        <div class="box-profile">
                                            <div class="box-author"><img src="{{ asset('demo/assets/img/testimonial/testi_1_3.png') }}"
                                                    alt="Avater"></div>
                                            <div class="box-info">
                                                <h3 class="box-title">Aditi Banerjee</h3><span class="box-desig">Company
                                                    Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box"><button data-slider-prev="#testiSlide1"
                                    class="slider-arrow style4 default slider-prev"><img
                                        src="{{ asset('demo/assets/img/icon/right-arrow4.svg') }}" alt=""></button> <button
                                    data-slider-next="#testiSlide1" class="slider-arrow style4 default slider-next"><img
                                        src="{{ asset('demo/assets/img/icon/left-arrow4.svg') }}" alt=""></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup d-none d-xxl-block" data-bottom="0%" data-left="0%"><img
                src="{{ asset('demo/assets/img/shape/element-4.png') }}" alt=""></div>
    </section>
@endsection
