@extends('layouts.main')
@section('content')
    <div class="breadcumb-area">
        <div class="breadcumb-wrapper" data-bg-src="{{ asset('demo/assets/img/bg/breadcumb-bg.jpg') }}">
            <div class="container">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title text-anime">Architecture Nordic Space</h1>
                    <ul class="breadcumb-menu">
                        <li class="wow fadeInUp" data-wow-delay=".2s"><a href="home-interior.html">Home</a></li>
                        <li class="wow fadeInUp" data-wow-delay=".3s">Portfolio Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="breadcumb-shape ShapeAni" data-bg-src="{{ asset('demo/assets/img/shape/scale.png') }}"></div>
    </div>
    <section class="space-top space-extra-bottom overflow-hidden">
        <div class="container">
            <div class="page-single">
                <div class="page-img mb-50"><img src="{{ asset('demo/assets/img/project/project_details.jpg') }}" alt="Project Image">
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-xxl-7">
                    <div class="page-content"><span class="page-subtitle">Commercial</span>
                        <h3 class="">Project Overview</h3>
                        <p class="fs-18 mb-50">A stunning residential project offering mesmerizing sunrise and sunset
                            views over rolling hills. Company is a sanctuary for those seeking tranquility without
                            compromising urban connectivity. The design philosophy prioritizes sustainability, elegance,
                            and a deep connection with the environment, making it an ideal retreat for families,
                            professionals, and nature lovers alike.</p>
                        <div class="row gy-4">
                            <div class="col-lg-6 col-xxl-7">
                                <div class="page-img project-img img-anim-left"><img class="w-100 h-100"
                                        src="{{ asset('demo/assets/img/project/project_inner_1.jpg') }}" alt="project"></div>
                            </div>
                            <div class="col-lg-6 col-xxl-5">
                                <div class="page-img project-img img-anim-top"><img class="w-100 h-100"
                                        src="{{ asset('demo/assets/img/project/project_inner_2.jpg') }}" alt="project"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5">
                    <aside class="sidebar-area">
                        <div class="sidebar-image mb-60 global-img"><img src="{{ asset('demo/assets/img/project/project-image.jpg') }}"
                                alt=""></div>
                        <div class="widget widget_info">
                            <div class="title-area mb-40"><span class="sub-title style2 text-anime">project
                                    details</span>
                                <h3 class="sec-title split-text">Architecture Nordic Space</h3>
                            </div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Project Type:</th>
                                        <td>Commercial</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Client:</th>
                                        <td>Alex John</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Year:</th>
                                        <td>2025</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Size:</th>
                                        <td>480,000 sq.ft.</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Location:</th>
                                        <td>Vancouver</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Status:</th>
                                        <td>In Progress</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </aside>
                </div>
            </div>
            <h3 class="">Problem Statement</h3>
            <p class="fs-18 mt-20">The primary challenge was transforming a compact, outdated retail space into a
                stylish boutique that evoked a coastal charm while maximizing display areas. Limited natural lighting
                and narrow aisles called for a strategic approach to layout, lighting, and color palette. A stunning
                residential project offering mesmerizing sunrise and sunset views over rolling hills. Company is a
                sanctuary for those seeking tranquility without compromising urban connectivity. The design philosophy
                prioritizes sustainability, elegance, and a deep connection with the environment, making it an ideal
                retreat for families, professionals, and nature lovers alike.</p>
        </div>
    </section>
    <section class="overflow-hidden position-relative overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="process-item-area">
                    <div class="process-item hover-item item-active">
                        <div class="process-img global-img wow fadeInLeft" data-wow-delay=".2s"><img
                                src="{{ asset('demo/assets/img/process/process-img-1.jpg') }}" alt=""></div>
                        <div class="process-number"><svg class="progress-ring" width="44" height="44">
                                <circle class="progress-ring__circle" r="20" cx="22" cy="22" />
                            </svg> <span>1</span></div>
                        <div class="box-content wow fadeInRight" data-wow-delay=".3s">
                            <h3 class="box-title">Reseach & Concept Building</h3>
                            <p class="box-text">In our architecture company, the design process begins with a thorough
                                analysis of the client's requirements, site conditions, and local regulations to lay the
                                foundation.</p><a href="contact.html" class="th-btn black-border">View More</a>
                        </div>
                    </div>
                    <div class="process-item hover-item">
                        <div class="process-img global-img wow fadeInLeft" data-wow-delay=".4s"><img
                                src="{{ asset('demo/assets/img/process/process-img-2.jpg') }}" alt=""></div>
                        <div class="process-number"><svg class="progress-ring" width="44" height="44">
                                <circle class="progress-ring__circle" r="20" cx="22" cy="22" />
                            </svg> <span>2</span></div>
                        <div class="box-content wow fadeInRight" data-wow-delay=".5s">
                            <h3 class="box-title">Technical Drawings and Development</h3>
                            <p class="box-text">In our architecture company, the design process begins with a thorough
                                analysis of the client's requirements, site conditions, and local regulations to lay the
                                foundation.</p><a href="contact.html" class="th-btn black-border">View More</a>
                        </div>
                    </div>
                    <div class="process-item hover-item">
                        <div class="process-img global-img wow fadeInLeft" data-wow-delay=".6s"><img
                                src="{{ asset('demo/assets/img/process/process-img-3.jpg') }}" alt=""></div>
                        <div class="process-number"><svg class="progress-ring" width="44" height="44">
                                <circle class="progress-ring__circle" r="20" cx="22" cy="22" />
                            </svg> <span>3</span></div>
                        <div class="box-content wow fadeInRight" data-wow-delay=".7s">
                            <h3 class="box-title">Advance Architecture 3D Moddeling</h3>
                            <p class="box-text">In our architecture company, the design process begins with a thorough
                                analysis of the client's requirements, site conditions, and local regulations to lay the
                                foundation.</p><a href="contact.html" class="th-btn black-border">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="overflow-hidden space overflow-hidden" id="project-sec" data-bg-src="{{ asset('demo/assets/img/bg/gallery_bg_2.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="title-area text-center"><span class="sub-title style2 text-anime">project
                            gallery</span>
                        <h2 class="sec-title split-text">Through a Unique Combination of <span
                                class="text-theme">Engineering</span></h2>
                    </div>
                    <div class="filter-menu indicator-active mb-60 filter-menu-active"><button data-filter="*"
                            class="tab-btn active" type="button">View All</button> <button data-filter=".cat1"
                            class="tab-btn" type="button">Architecture</button> <button data-filter=".cat2"
                            class="tab-btn" type="button">Building</button> <button data-filter=".cat3"
                            class="tab-btn" type="button">Shape</button></div>
                </div>
            </div>
            <div class="row gy-4 gallery-row filter-active">
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat2 cat1">
                    <div class="gallery-card style2">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/gallery/gallery_4_1.jpg') }}"
                                alt="gallery image"> <a href="{{ asset('demo/assets/img/gallery/gallery_4_1.jpg') }}"
                                class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                            <div class="shape">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <h2 class="box-title">Mid-Century Modern</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat3 cat2">
                    <div class="gallery-card style2">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/gallery/gallery_4_2.jpg') }}"
                                alt="gallery image"> <a href="{{ asset('demo/assets/img/gallery/gallery_4_2.jpg') }}"
                                class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                            <div class="shape">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <h2 class="box-title">Mid-Century Modern</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat3 cat2">
                    <div class="gallery-card style2">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/gallery/gallery_4_3.jpg') }}"
                                alt="gallery image"> <a href="{{ asset('demo/assets/img/gallery/gallery_4_3.jpg') }}"
                                class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                            <div class="shape">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <h2 class="box-title">Mid-Century Modern</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat1 cat3">
                    <div class="gallery-card style2">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/gallery/gallery_4_4.jpg') }}"
                                alt="gallery image"> <a href="{{ asset('demo/assets/img/gallery/gallery_4_4.jpg') }}"
                                class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                            <div class="shape">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <h2 class="box-title">Mid-Century Modern</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat2 cat1">
                    <div class="gallery-card style2">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/gallery/gallery_4_5.jpg') }}"
                                alt="gallery image"> <a href="{{ asset('demo/assets/img/gallery/gallery_4_5.jpg') }}"
                                class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                            <div class="shape">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <h2 class="box-title">Mid-Century Modern</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat3 cat1">
                    <div class="gallery-card style2">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/gallery/gallery_4_6.jpg') }}"
                                alt="gallery image"> <a href="{{ asset('demo/assets/img/gallery/gallery_4_6.jpg') }}"
                                class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                            <div class="shape">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <h2 class="box-title">Mid-Century Modern</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat3 cat2">
                    <div class="gallery-card style2">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/gallery/gallery_4_7.jpg') }}"
                                alt="gallery image"> <a href="{{ asset('demo/assets/img/gallery/gallery_4_7.jpg') }}"
                                class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                            <div class="shape">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <h2 class="box-title">Mid-Century Modern</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat1 cat3">
                    <div class="gallery-card style2">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/gallery/gallery_4_8.jpg') }}"
                                alt="gallery image"> <a href="{{ asset('demo/assets/img/gallery/gallery_4_8.jpg') }}"
                                class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                            <div class="shape">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <div class="gallery-content">
                            <h2 class="box-title">Mid-Century Modern</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                    alt=""></div>
                            <div class="box-content">
                                <h3 class="box-title">Excellence Residence</h3>
                                <p class="box-text">Interior Decoration</p>
                            </div>
                        </div>
                        <div class="testi-img2 global-img"><img src="{{ asset('demo/assets/img/testimonial/testi-img2.jpg') }}"
                                alt=""></div>
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
                                            <div class="box-quote"><img src="{{ asset('demo/assets/img /icon/quote2.svg') }}"
                                                    alt=""></div>
                                            <div class="box-rating"><span class="rating">4.9/5.0</span> <span
                                                    class="review"><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i><i
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
                                                <h3 class="box-title">Carlos Mendez</h3><span
                                                    class="box-desig">Company Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card style1">
                                        <div class="box-wrapp">
                                            <div class="box-quote"><img src="{{ asset('demo/assets/img /icon/quote2.svg') }}"
                                                    alt=""></div>
                                            <div class="box-rating"><span class="rating">4.9/5.0</span> <span
                                                    class="review"><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i><i
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
                                                <h3 class="box-title">James Thompson</h3><span
                                                    class="box-desig">Company Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card style1">
                                        <div class="box-wrapp">
                                            <div class="box-quote"><img src="{{ asset('demo/assets/img /icon/quote2.svg') }}"
                                                    alt=""></div>
                                            <div class="box-rating"><span class="rating">4.9/5.0</span> <span
                                                    class="review"><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i><i
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
                                                <h3 class="box-title">Aditi Banerjee</h3><span
                                                    class="box-desig">Company Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box"><button data-slider-prev="#testiSlide1"
                                    class="slider-arrow style4 default slider-prev"><img
                                        src="{{ asset('demo/assets/img/icon/right-arrow4.svg') }}" alt=""></button> <button
                                    data-slider-next="#testiSlide1"
                                    class="slider-arrow style4 default slider-next"><img
                                        src="{{ asset('demo/assets/img/icon/left-arrow4.svg') }}" alt=""></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup d-none d-xxl-block" data-bottom="0%" data-left="0%"><img
                src="{{ asset('demo/assets/img/shape/element-4.png') }}" alt=""></div>
    </section>
    <div class="overflow-hidden space-bottom overflow-hidden">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title style3 text-anime">experience with 1,20000+
                    Visitors</span>
                <h2 class="sec-title split-text">Our Trusted <span class="text-theme">Brands</span></h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider" id="brandSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"476":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"5"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_1.svg') }}" alt="Brand Logo"> <img class="gray"
                                        src="{{ asset('demo/assets/img/brand/brand_1_1.svg') }}" alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_2.svg') }}" alt="Brand Logo"> <img class="gray"
                                        src="{{ asset('demo/assets/img/brand/brand_1_2.svg') }}" alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_3.svg') }}" alt="Brand Logo"> <img class="gray"
                                        src="{{ asset('demo/assets/img/brand/brand_1_3.svg') }}" alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_4.svg') }}" alt="Brand Logo"> <img class="gray"
                                        src="{{ asset('demo/assets/img/brand/brand_1_4.svg') }}" alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_5.svg') }}" alt="Brand Logo"> <img class="gray"
                                        src="{{ asset('demo/assets/img/brand/brand_1_5.svg') }}" alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_1.svg') }}" alt="Brand Logo"> <img class="gray"
                                        src="{{ asset('demo/assets/img/brand/brand_1_1.svg') }}" alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_2.svg') }}" alt="Brand Logo"> <img class="gray"
                                        src="{{ asset('demo/assets/img/brand/brand_1_2.svg') }}" alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_3.svg') }}" alt="Brand Logo"> <img class="gray"
                                        src="{{ asset('demo/assets/img/brand/brand_1_3.svg') }}" alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_4.svg') }}" alt="Brand Logo"> <img class="gray"
                                        src="{{ asset('demo/assets/img/brand/brand_1_4.svg') }}" alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_5.svg') }}" alt="Brand Logo"> <img class="gray"
                                        src="{{ asset('demo/assets/img/brand/brand_1_5.svg') }}" alt="Brand Logo"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection