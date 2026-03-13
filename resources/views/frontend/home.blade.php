@extends('layouts.main')
@section('content')
    @include('layouts.slider')

    <div class="about-area overflow-hidden space overflow-hidden" id="about-sec">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-5">
                    <div class="title-area mb-30 pe-xl-5 me-xl-5"><span class="sub-title text-anime">ABOUT THE
                            FIRM</span>
                        <h5 class="sec-title style2 split-text me-xl-2">Quality <span class="text-theme">Feasibility
                            </span>Sustainability.</h5>
                        <p class="sec-text2 mb-20 wow fadeInUp" data-wow-delay=".2s">Planning a build or renovation can
                            feel overwhelming. Faren simplifies the process.</p>
                    </div>
                    <div class="checklist mb-50">
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay=".3s">Manage your product orders</li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">Plan your project with curated design boards
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".5s">Connect with professionals and brands in your
                                inbox</li>
                            <li class="wow fadeInUp" data-wow-delay=".7s">Access expert insights and how-to guides</li>
                        </ul>
                    </div>
                    <div class="btn-group mt-40 wow fadeInUp" data-wow-delay=".8s"><a href="project.html"
                            class="th-btn style2">Start your Project <i class="fa-light fa-arrow-right-long ms-2"></i></a>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="img-box5">
                        <div class="img-box5_top">
                            <div class="global-anime img1 img-anim-left" data-wow-duration="1.5s" data-wow-delay="0.1">
                                <div class="it-img-anim"><img src="{{ asset('demo/assets/img/normal/about_7_1.jpg') }}"
                                        alt="About"></div>
                            </div>
                            <div class="global-anime img2 img-anim-right" data-wow-duration="1.5s" data-wow-delay="0.1">
                                <div class="it-img-anim"><img src="{{ asset('demo/assets/img/normal/about_7_2.jpg') }}"
                                        alt="About"></div>
                            </div>
                        </div>
                        <div class="img-box5_bottom style2">
                            <div class="global-anime img3 img-anim-left" data-wow-duration="1.5s" data-wow-delay="0.1">
                                <div class="it-img-anim"><img src="{{ asset('demo/assets/img/normal/about_7_3.jpg') }}"
                                        alt="About"></div>
                            </div>
                            <div class="global-anime img4 img-anim-right" data-wow-duration="1.5s" data-wow-delay="0.1">
                                <div class="it-img-anim"><img src="{{ asset('demo/assets/img/normal/about_7_4.jpg') }}"
                                        alt="About"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="shape-mockup spin d-none d-xxl-block" data-bottom="10%" data-left="45%"><img
                src="{{ asset('demo/assets/img/shape/element-1.svg') }}" alt=""></div> --}}
    </div>
    <section class="position-relative overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-end">
                <div class="col-lg-7">
                    <div class="title-area text-center text-lg-start"><span class="sub-title text-anime">OUR
                            SERVICES</span>
                        <h2 class="sec-title style2 split-text">Our Everyday <span class="text-theme">Services</span>
                        </h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn wow fadeInUp"><a href="service.html" class="th-btn style2 th-icon">Explore
                            All</a></div>
                </div>
            </div>
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
                                    <h3 class="box-title"><a href="service-details.html">Interior Design</a></h3>
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
                                    <h3 class="box-title"><a href="service-details.html">3D Modeling</a></h3>
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
                                    <h3 class="box-title"><a href="service-details.html">Residential Design</a></h3>
                                    <p class="box-text">The design process begins with a thorough analysis</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-img global-img img-anim-top"><img
                                        src="{{ asset('demo/assets/img/service/service_1_4.jpg') }}" alt="">
                                </div>
                                <div class="box-content">
                                    <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/service_1_4.svg') }}"
                                            alt="Icon"></div>
                                    <h3 class="box-title"><a href="service-details.html">Architecture Plan</a></h3>
                                    <p class="box-text">The design process begins with a thorough analysis</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="box-img global-img img-anim-top"><img
                                        src="{{ asset('demo/assets/img/service/service_1_5.jpg') }}" alt="">
                                </div>
                                <div class="box-content">
                                    <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/service_1_5.svg') }}"
                                            alt="Icon"></div>
                                    <h3 class="box-title"><a href="service-details.html">Commercial Space</a></h3>
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
        </div>
    </section>
    <div class="space-bottom overflow-hidden">
        <div class="container">
            <div class="counter-card_wrapp">
                <div class="counter-card wow fadeInUp" data-wow-delay=".2s">
                    <h3 class="box-number"><span class="counter-number">15</span>M+</h3>
                    <p class="box-text">Worldwide Clients</p>
                </div>
                <div class="counter-card wow fadeInUp" data-wow-delay=".4s">
                    <h3 class="box-number"><span class="counter-number">2</span>5+</h3>
                    <p class="box-text">Expert Therapist</p>
                </div>
                <div class="counter-card wow fadeInUp" data-wow-delay=".6s">
                    <h3 class="box-number"><span class="counter-number">4500</span>+</h3>
                    <p class="box-text">Successful Stories</p>
                </div>
                <div class="counter-card wow fadeInUp" data-wow-delay=".7s">
                    <h3 class="box-number"><span class="counter-number">29</span>+</h3>
                    <p class="box-text">Best Awards Won</p>
                </div>
            </div>
        </div>
    </div>
    <div class="overflow-hidden bg-title space" id="project-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center"><span class="sub-title text-anime text-white">recent
                            gallery</span>
                        <h2 class="sec-title style2 split-text text-white">Through a Unique Combination of <span
                                class="text-theme">Engineering</span></h2>
                    </div>
                    <div class="filter-menu style3 indicator-active mb-60 filter-menu-active"><button data-filter="*"
                            class="tab-btn active" type="button">View All</button> <button data-filter=".cat1"
                            class="tab-btn" type="button">Interior</button> <button data-filter=".cat2" class="tab-btn"
                            type="button">Architecture</button> <button data-filter=".cat3" class="tab-btn"
                            type="button">Building</button> <button data-filter=".cat4" class="tab-btn"
                            type="button">Shape</button></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row gy-4 gallery-row filter-active justify-content-center">
                        <div class="col-lg-6 col-xl-4 filter-item cat2 cat5">
                            <div class="gallery-card style4">
                                <div class="box-img th-clip-anim"><img class="th-anim-img gallery_img"
                                        data-animate="true" src="{{ asset('demo/assets/img/gallery/gallery_9_1.jpg') }}"
                                        alt="gallery image"> <a
                                        href="{{ asset('demo/assets/img/gallery/gallery_9_1.jpg') }}"
                                        class="icon-btn th-popup-image"><i class="fa-solid fa-eye"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 filter-item cat3 cat2">
                            <div class="gallery-card style4">
                                <div class="box-img th-clip-anim"><img class="th-anim-img gallery_img"
                                        data-animate="true" src="{{ asset('demo/assets/img/gallery/gallery_9_2.jpg') }}"
                                        alt="gallery image"> <a
                                        href="{{ asset('demo/assets/img/gallery/gallery_9_2.jpg') }}"
                                        class="icon-btn th-popup-image"><i class="fa-solid fa-eye"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 filter-item cat3 cat5">
                            <div class="gallery-card style4">
                                <div class="box-img th-clip-anim"><img class="th-anim-img gallery_img"
                                        data-animate="true" src="{{ asset('demo/assets/img/gallery/gallery_9_3.jpg') }}"
                                        alt="gallery image"> <a
                                        href="{{ asset('demo/assets/img/gallery/gallery_9_3.jpg') }}"
                                        class="icon-btn th-popup-image"><i class="fa-solid fa-eye"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 filter-item cat1 cat5">
                            <div class="gallery-card style4">
                                <div class="box-img th-clip-anim"><img class="th-anim-img gallery_img"
                                        data-animate="true" src="{{ asset('demo/assets/img/gallery/gallery_9_4.jpg') }}"
                                        alt="gallery image"> <a
                                        href="{{ asset('demo/assets/img/gallery/gallery_9_4.jpg') }}"
                                        class="icon-btn th-popup-image"><i class="fa-solid fa-eye"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 filter-item cat4 cat2 cat1">
                            <div class="gallery-card style4">
                                <div class="box-img th-clip-anim"><img class="th-anim-img gallery_img"
                                        data-animate="true" src="{{ asset('demo/assets/img/gallery/gallery_9_5.jpg') }}"
                                        alt="gallery image"> <a
                                        href="{{ asset('demo/assets/img/gallery/gallery_9_5.jpg') }}"
                                        class="icon-btn th-popup-image"><i class="fa-solid fa-eye"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 filter-item cat4 cat3 cat1">
                            <div class="gallery-card style4">
                                <div class="box-img th-clip-anim"><img class="th-anim-img gallery_img"
                                        data-animate="true" src="{{ asset('demo/assets/img/gallery/gallery_9_6.jpg') }}"
                                        alt="gallery image"> <a
                                        href="{{ asset('demo/assets/img/gallery/gallery_9_6.jpg') }}"
                                        class="icon-btn th-popup-image"><i class="fa-solid fa-eye"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 filter-item cat3 cat5">
                            <div class="gallery-card style4">
                                <div class="box-img th-clip-anim"><img class="th-anim-img gallery_img"
                                        data-animate="true" src="{{ asset('demo/assets/img/gallery/gallery_9_7.jpg') }}"
                                        alt="gallery image"> <a
                                        href="{{ asset('demo/assets/img/gallery/gallery_9_7.jpg') }}"
                                        class="icon-btn th-popup-image"><i class="fa-solid fa-eye"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 filter-item cat1 cat5">
                            <div class="gallery-card style4">
                                <div class="box-img th-clip-anim"><img class="th-anim-img gallery_img"
                                        data-animate="true" src="{{ asset('demo/assets/img/gallery/gallery_9_8.jpg') }}"
                                        alt="gallery image"> <a
                                        href="{{ asset('demo/assets/img/gallery/gallery_9_8.jpg') }}"
                                        class="icon-btn th-popup-image"><i class="fa-solid fa-eye"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 filter-item cat4 cat2 cat1">
                            <div class="gallery-card style4">
                                <div class="box-img th-clip-anim"><img class="th-anim-img gallery_img"
                                        data-animate="true" src="{{ asset('demo/assets/img/gallery/gallery_9_9.jpg') }}"
                                        alt="gallery image"> <a
                                        href="{{ asset('demo/assets/img/gallery/gallery_9_9.jpg') }}"
                                        class="icon-btn th-popup-image"><i class="fa-solid fa-eye"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="overflow-hidden space overflow-hidden" id="testi-sec">
        <div class="container">
            <div class="row gy-24 justify-content-center">
                <div class="col-xl-6">
                    <div class="title-area text-center"><span class="sub-title text-anime">TESTIMONIALS</span>
                        <h2 class="sec-title style2 split-text">What Our <span class="text-theme">Client’s </span>Say
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row gy-24 align-items-center">
                <div class="col-xl-5">
                    <div class="testi-image_wrapp">
                        <div class="testi-review">
                            <div class="testi-img1 global-img"><img
                                    src="{{ asset('demo/assets/img/testimonial/testi-img1.jpg') }}" alt="">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title">Excellence Residence</h3>
                                <p class="box-text">Interior Decoration</p>
                            </div>
                        </div>
                        <div class="testi-img2 global-img"><img
                                src="{{ asset('demo/assets/img/testimonial/testi-img2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="slider-wrap">
                        <div class="swiper th-slider testiSlide1 has-shadow" id="testiSlide1"
                            data-slider-options='{"effect":"slide","loop":true}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="box-wrapp">
                                            <div class="box-quote"><img
                                                    src="{{ asset('demo/assets/img/icon/quote2.svg') }}" alt="">
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
                                            <div class="box-author"><img
                                                    src="{{ asset('demo/assets/img/testimonial/testi_1_1.png') }}"
                                                    alt="Avater"></div>
                                            <div class="box-info">
                                                <h3 class="box-title">Carlos Mendez</h3><span class="box-desig">Local
                                                    Arts Council President</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="box-wrapp">
                                            <div class="box-quote"><img
                                                    src="{{ asset('demo/assets/img/icon/quote2.svg') }}" alt="">
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
                                            <div class="box-author"><img
                                                    src="{{ asset('demo/assets/img/testimonial/testi_1_2.png') }}"
                                                    alt="Avater"></div>
                                            <div class="box-info">
                                                <h3 class="box-title">James Thompson</h3><span class="box-desig">Local
                                                    Arts Council President</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <div class="box-wrapp">
                                            <div class="box-quote"><img
                                                    src="{{ asset('demo/assets/img/icon/quote2.svg') }}" alt="">
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
                                            <div class="box-author"><img
                                                    src="{{ asset('demo/assets/img/testimonial/testi_1_3.png') }}"
                                                    alt="Avater"></div>
                                            <div class="box-info">
                                                <h3 class="box-title">Aditi Banerjee</h3><span class="box-desig">Local
                                                    Arts Council President</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box"><button data-slider-prev="#testiSlide1"
                                    class="slider-arrow default slider-prev"><i class="far fa-arrow-left"></i></button>
                                <button data-slider-next="#testiSlide1" class="slider-arrow default slider-next"><i
                                        class="far fa-arrow-right"></i></button>
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
                <div class="main-container wow fadeInLeft" data-wow-delay=".2s">
                    <div class="image-container"></div><img class="panorama-img"
                        src="{{ asset('demo/assets/img/normal/progress-img2.jpg') }}" alt="Panorama Image"
                        style="display: none;">
                </div>
            </div>
        </div>
    </div>
    <section class="team-area2 overflow-hidden space-bottom overflow-hidden">
        <div class="container z-index-common">
            <div class="title-area text-center text-lg-start pe-xl-5"><span class="sub-title text-anime">OUR ARCHITECT
                    LEADERS</span>
                <h2 class="sec-title style5 split-text">Meet With Our Architects</h2>
            </div>
            <div class="row gy-4">
                <div class="col-md-6 col-xl-3 team-grid_wrapp">
                    <div class="th-team team-grid">
                        <div class="box-img"><img src="{{ asset('demo/assets/img/team/team_2_1.png') }}" alt="Team">
                            <div class="icon-btn"><i class="fa-light fa-plus"></i></div>
                        </div>
                        <div class="box-content">
                            <div>
                                <h3 class="box-title"><a href="doctor-details.html">Jake Saper</a></h3><span
                                    class="team-desig">Head of Architect</span>
                            </div>
                            <div class="team-social">
                                <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                            class="fab fa-facebook-f"></i></a> <a target="_blank"
                                        href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a target="_blank"
                                        href="https://instagram.com/"><i class="fab fa-instagram"></i></a> <a
                                        target="_blank" href="https://linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 team-grid_wrapp">
                    <div class="th-team team-grid">
                        <div class="box-img"><img src="{{ asset('demo/assets/img/team/team_2_2.png') }}" alt="Team">
                            <div class="icon-btn"><i class="fa-light fa-plus"></i></div>
                        </div>
                        <div class="box-content">
                            <div>
                                <h3 class="box-title"><a href="doctor-details.html">Michel John</a></h3><span
                                    class="team-desig">Head of Architect</span>
                            </div>
                            <div class="team-social">
                                <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                            class="fab fa-facebook-f"></i></a> <a target="_blank"
                                        href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a target="_blank"
                                        href="https://instagram.com/"><i class="fab fa-instagram"></i></a> <a
                                        target="_blank" href="https://linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 team-grid_wrapp">
                    <div class="th-team team-grid">
                        <div class="box-img"><img src="{{ asset('demo/assets/img/team/team_2_3.png') }}" alt="Team">
                            <div class="icon-btn"><i class="fa-light fa-plus"></i></div>
                        </div>
                        <div class="box-content">
                            <div>
                                <h3 class="box-title"><a href="doctor-details.html">Michel Smith</a></h3><span
                                    class="team-desig">Head of Architect</span>
                            </div>
                            <div class="team-social">
                                <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                            class="fab fa-facebook-f"></i></a> <a target="_blank"
                                        href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a target="_blank"
                                        href="https://instagram.com/"><i class="fab fa-instagram"></i></a> <a
                                        target="_blank" href="https://linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 team-grid_wrapp">
                    <div class="th-team team-grid">
                        <div class="box-img"><img src="{{ asset('demo/assets/img/team/team_2_4.png') }}" alt="Team">
                            <div class="icon-btn"><i class="fa-light fa-plus"></i></div>
                        </div>
                        <div class="box-content">
                            <div>
                                <h3 class="box-title"><a href="doctor-details.html">Johone Smith</a></h3><span
                                    class="team-desig">Head of Architect</span>
                            </div>
                            <div class="team-social">
                                <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                            class="fab fa-facebook-f"></i></a> <a target="_blank"
                                        href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a target="_blank"
                                        href="https://instagram.com/"><i class="fab fa-instagram"></i></a> <a
                                        target="_blank" href="https://linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="overflow-hidden bg-white">
        <div class="container">
            <div class="row">
                <div class="title-area text-center"><span class="sub-title text-anime">BRAND LOGOS</span>
                    <h2 class="sec-title style2 split-text">Our Trusted <span class="text-theme">Partners</span></h2>
                </div>
            </div>
            <div class="brand-wrapp">
                <div class="brand-item"><a href="#"><img src="{{ asset('demo/assets/img/brand/brand_1_1.png') }}"
                            alt="Brand Logo"></a>
                </div>
                <div class="brand-item"><a href="#"><img src="{{ asset('demo/assets/img/brand/brand_1_2.png') }}"
                            alt="Brand Logo"></a>
                </div>
                <div class="brand-item"><a href="#"><img src="{{ asset('demo/assets/img/brand/brand_1_3.png') }}"
                            alt="Brand Logo"></a>
                </div>
            </div>
            <div class="brand-wrapp style2">
                <div class="brand-item"><a href="#"><img src="{{ asset('demo/assets/img/brand/brand_1_4.png') }}"
                            alt="Brand Logo"></a>
                </div>
                <div class="brand-item"><a href="#"><img src="{{ asset('demo/assets/img/brand/brand_1_5.png') }}"
                            alt="Brand Logo"></a>
                </div>
            </div>
            <div class="brand-wrapp">
                <div class="brand-item"><a href="#"><img src="{{ asset('demo/assets/img/brand/brand_1_6.png') }}"
                            alt="Brand Logo"></a>
                </div>
                <div class="brand-item"><a href="#"><img src="{{ asset('demo/assets/img/brand/brand_1_7.png') }}"
                            alt="Brand Logo"></a>
                </div>
                <div class="brand-item"><a href="#"><img src="{{ asset('demo/assets/img/brand/brand_1_8.png') }}"
                            alt="Brand Logo"></a>
                </div>
            </div>
        </div>
    </div>
    <section class="overflow-hidden space overflow-hidden" id="blog-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-xxl-7">
                    <div class="title-area text-center"><span class="sub-title text-anime">BLOG & NEWS</span>
                        <h2 class="sec-title style2 split-text">Browse Our Latest<span class="text-theme">Articles</span>
                            &News</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-4 gx-147">
                <div class="col-lg-6">
                    <div class="blog-card wow fadeInUp">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/blog/blog_1_1.jpg') }}"
                                alt="blog image"></div>
                        <div class="box-content">
                            <div class="blog-meta"><a href="blog.html">By Elis colin 2025</a> <a
                                    href="blog.html">Architecture</a></div>
                            <h3 class="box-title"><a href="blog-details.html">The Intersection of Art and Architecture
                                    to Creating Sculptural Buildings</a></h3>
                        </div>
                        <div class="box-wrapp"><span class="date">Aug 27, 2025</span> <a href="blog-details.html"
                                class="th-btn black-border">Read More <i class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-card wow fadeInUp">
                        <div class="box-img global-img"><img src="{{ asset('demo/assets/img/blog/blog_1_2.jpg') }}"
                                alt="blog image"></div>
                        <div class="box-content">
                            <div class="blog-meta"><a href="blog.html">By Elis colin 2025</a> <a
                                    href="blog.html">Architecture</a></div>
                            <h3 class="box-title"><a href="blog-details.html">The Intersection of Art and Architecture
                                    to Creating Sculptural Buildings</a></h3>
                        </div>
                        <div class="box-wrapp"><span class="date">Aug 27, 2025</span> <a href="blog-details.html"
                                class="th-btn black-border">Read More <i class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
