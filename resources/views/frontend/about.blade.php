@extends('layouts.main')
@section('content')
    <div class="breadcumb-area">
        <div class="breadcumb-wrapper" data-bg-src="{{ asset('demo/assets/img/bg/breadcumb-bg.jpg') }}">
            <div class="container">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title text-anime">About Our Firm</h1>
                    <ul class="breadcumb-menu">
                        <li class="wow fadeInUp" data-wow-delay=".2s"><a href="{{ route('home') }}">Home</a></li>
                        <li class="wow fadeInUp" data-wow-delay=".3s">About us</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="breadcumb-shape ShapeAni" data-bg-src="{{ asset('demo/assets/img/shape/scale.png') }}"></div>
    </div>

    {{-- ***************** --}}


    <div class="th-hero-wrapper position-relative" id="hero">
        <div class="hero-2">
            <div class="swiper th-slider" id="hero-thumb"
                data-slider-options='{"effect":"fade","loop":true,"paginationType":"fraction"}'>
                <div class="container">
                    <div class="row">
                        <div class="slider-pagination"></div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero-inner">
                            <div class="container">
                                <div class="row align-items-end">
                                    <div class="col-xl-7">
                                        <div class="hero-style2">
                                            <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.2s">
                                                Innovative <span class="text-theme">Architect</span> Designs,Shaping the
                                                Future of Spaces</h1>
                                            <div class="btn-group justify-content-center justify-content-xl-start"
                                                data-ani="slideinleft" data-ani-delay="0.3s"><a href="contact.html"
                                                    class="th-btn style3">Know More Us</a> <a href="project.html"
                                                    class="th-btn black-border">Explore Projects</a></div>
                                            <div class="trustipilot" data-ani="slideinleft" data-ani-delay="0.4s">
                                                <div class="box-rating"><span class="review"><img
                                                            src="{{ asset('demo/assets/img/icon/star.svg')}}" alt=""></span><span
                                                        class="review-title">trustipilot</span>
                                                    <div class="stars"><img src="{{ asset('demo/assets/img/icon/star2.svg')}}" alt="">
                                                        <img src="{{ asset('demo/assets/img/icon/star2.svg')}}" alt=""> <img
                                                            src="{{ asset('demo/assets/img/icon/star2.svg')}}" alt=""> <img
                                                            src="{{ asset('demo/assets/img/icon/star2.svg')}}" alt=""> <img
                                                            src="{{ asset('demo/assets/img/icon/star2.svg')}}" alt=""></div><span
                                                        class="text">Reviews 530+</span>
                                                </div><span class="ratting">5.0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="th-hero-img" data-ani="slideinrighthero" data-ani-delay="0.7s"><img
                                                src="{{ asset('demo/assets/img/hero/hero_2_1.png')}}" alt=""> <a
                                                href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                                class="video-play-btn popup-video"><i class="fa-solid fa-play"></i></a>
                                            <div class="contact-us" data-ani="slideinright" data-ani-delay="0.5s"><a
                                                    href="contact.html" class="icon"><img
                                                        src="{{ asset('demo/assets/img/icon/arrow-right3.svg')}}" alt=""></a>
                                                <h4 class="box-title">Let’s Build Something Great Together</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-inner">
                            <div class="container">
                                <div class="row align-items-end">
                                    <div class="col-xl-7">
                                        <div class="hero-style2">
                                            <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.2s">
                                                Visionary Architect Crafting <span class="text-theme">Architect</span>
                                                Tomorrow’s Spaces</h1>
                                            <div class="btn-group justify-content-center justify-content-xl-start"
                                                data-ani="slideinleft" data-ani-delay="0.3s"><a href="contact.html"
                                                    class="th-btn style3">Know More Us</a> <a href="project.html"
                                                    class="th-btn black-border">Explore Projects</a></div>
                                            <div class="trustipilot" data-ani="slideinleft" data-ani-delay="0.4s">
                                                <div class="box-rating"><span class="review"><img
                                                            src="{{ asset('demo/assets/img/icon/star.svg')}}" alt=""></span><span
                                                        class="review-title">trustipilot</span>
                                                    <div class="stars"><img src="{{ asset('demo/assets/img/icon/star2.svg')}}"
                                                            alt=""> <img src="{{ asset('demo/assets/img/icon/star2.svg')}}"
                                                            alt=""> <img src="{{ asset('demo/assets/img/icon/star2.svg')}}"
                                                            alt=""> <img src="{{ asset('demo/assets/img/icon/star2.svg')}}"
                                                            alt=""> <img src="{{ asset('demo/assets/img/icon/star2.svg')}}"
                                                            alt=""></div><span class="text">Reviews 530+</span>
                                                </div><span class="ratting">5.0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="th-hero-img" data-ani="slideinrighthero" data-ani-delay="0.7s"><img
                                                src="{{ asset('demo/assets/img/hero/hero_2_2.png')}}" alt=""> <a
                                                href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                                class="video-play-btn popup-video"><i class="fa-solid fa-play"></i></a>
                                            <div class="contact-us" data-ani="slideinright" data-ani-delay="0.5s"><a
                                                    href="contact.html" class="icon"><img
                                                        src="{{ asset('demo/assets/img/icon/arrow-right3.svg')}}" alt=""></a>
                                                <h4 class="box-title">Let’s Build Something Great Together</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-inner">
                            <div class="container">
                                <div class="row align-items-end">
                                    <div class="col-xl-7">
                                        <div class="hero-style2">
                                            <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.2s">Where
                                                <span class="text-theme">Creativity </span>Meets Future-Ready
                                                Architecture
                                            </h1>
                                            <div class="btn-group justify-content-center justify-content-xl-start"
                                                data-ani="slideinleft" data-ani-delay="0.3s"><a href="contact.html"
                                                    class="th-btn style3">Know More Us</a> <a href="project.html"
                                                    class="th-btn black-border">Explore Projects</a></div>
                                            <div class="trustipilot" data-ani="slideinleft" data-ani-delay="0.4s">
                                                <div class="box-rating"><span class="review"><img
                                                            src="{{ asset('demo/assets/img/icon/star.svg')}}" alt=""></span><span
                                                        class="review-title">trustipilot</span>
                                                    <div class="stars"><img src="{{ asset('demo/assets/img/icon/star2.svg')}}"
                                                            alt=""> <img src="{{ asset('demo/assets/img/icon/star2.svg')}}"
                                                            alt=""> <img src="{{ asset('demo/assets/img/icon/star2.svg')}}"
                                                            alt=""> <img src="{{ asset('demo/assets/img/icon/star2.svg')}}"
                                                            alt=""> <img src="{{ asset('demo/assets/img/icon/star2.svg')}}"
                                                            alt=""></div><span class="text">Reviews 530+</span>
                                                </div><span class="ratting">5.0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="th-hero-img" data-ani="slideinrighthero" data-ani-delay="0.7s"><img
                                                src="{{ asset('demo/assets/img/hero/hero_2_3.png')}}" alt=""> <a
                                                href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                                class="video-play-btn popup-video"><i class="fa-solid fa-play"></i></a>
                                            <div class="contact-us" data-ani="slideinright" data-ani-delay="0.5s"><a
                                                    href="contact.html" class="icon"><img
                                                        src="{{ asset('demo/assets/img/icon/arrow-right3.svg')}}" alt=""></a>
                                                <h4 class="box-title">Let’s Build Something Great Together</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-controller">
                    <div class="hero-thumb" data-slider-tab="#hero-thumb">
                        <div class="tab-btn active"></div>
                        <div class="tab-btn"></div>
                        <div class="tab-btn"></div>
                    </div>
                </div>
            </div>
            <div class="grid-overlay style2">
                <div class="grid-line"></div>
                <div class="grid-line"></div>
                <div class="grid-line"></div>
                <div class="grid-line"></div>
                <div class="grid-line"></div>
            </div>
            <div class="scroll-down"><a href="#about-sec" class="hero-scroll-wrap">Scroll Down</a></div>
        </div>
        <div class="breadcumb-shape ShapeAni" data-bg-src="{{ asset('demo/assets/img/shape/scale.png')}}"></div>
    </div>
    <div class="space-top overflow-hidden">
        <div class="container">
            <div class="counter-card_wrapp style2">
                <div class="counter-card style2 wow fadeInUp" data-wow-delay=".2s"><span
                        class="sub-title style2">projects</span>
                    <h3 class="box-number"><span class="counter-number">259</span>+</h3>
                    <p class="box-text">Delivering diverse architectural solutions, showcasing our creativity.</p>
                </div>
                <div class="counter-card style2 wow fadeInUp" data-wow-delay=".4s"><span
                        class="sub-title style2">customers</span>
                    <h3 class="box-number"><span class="counter-number">12</span>M+</h3>
                    <p class="box-text">Discover the importance of estate planning and and trusts safeguard.</p>
                </div>
                <div class="counter-card style2 wow fadeInUp" data-wow-delay=".6s"><span class="sub-title style2">happy
                        clients</span>
                    <h3 class="box-number"><span class="counter-number">100</span>%</h3>
                    <p class="box-text">Client satisfaction is our top priority, reflected in glowing reviews.</p>
                </div>
                <div class="counter-card style2 wow fadeInUp" data-wow-delay=".7s"><span class="sub-title style2">Awards
                        won</span>
                    <h3 class="box-number"><span class="counter-number">128</span>+</h3>
                    <p class="box-text">Going above and beyond to exceed expectations in every project.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="about-area space overflow-hidden" id="about-sec">
        <div class="container">
            <div class="row gy-5">
                <div class="col-xxl-7 mb-30 mb-xl-0">
                    <div class="img-box2">
                        <div class="img-box2_wrapp">
                            <div class="img1 img-anim-top"><img src="{{ asset('demo/assets/img/normal/about_2_1.jpg')}}" alt="About">
                            </div>
                            <div class="img2 img-anim-right"><img src="{{ asset('demo/assets/img/normal/about_2_2.jpg')}}" alt="About">
                            </div>
                        </div>
                        <div class="th-experience wow fadeInUp" data-wow-delay=".4s">
                            <div class="th-experience_content">
                                <h2 class="experience-year"><span class="counter-number">25</span>+</h2>
                                <p class="experience-text">YEARS EXPERIENCE</p>
                            </div>
                            <div class="client-thumb-group">
                                <div class="thumb"><img src="{{ asset('demo/assets/img/shape/client-1-1.png')}}" alt="avater"></div>
                                <div class="thumb"><img src="{{ asset('demo/assets/img/shape/client-1-2.png')}}" alt="avater"></div>
                                <div class="thumb"><img src="{{ asset('demo/assets/img/shape/client-1-3.png')}}" alt="avater"></div>
                                <h4 class="box-title">12M+ Customers</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5">
                    <div class="ps-xxl-5 ms-xxl-2">
                        <div class="title-area mb-30 pe-xxl-5"><span class="sub-title style2 text-anime">About the
                                firm</span>
                            <h2 class="sec-title split-text">An Interior Design Firm with a Great <span
                                    class="text-theme">Mission </span>Behind</h2>
                        </div>
                        <p class="fs-18 mb-35 wow fadeInUp" data-wow-delay=".3s">In every project at Faren, the essence
                            of tradition is evident. By integrating the disciplined aesthetics and thoughtful
                            methodologies of our ancestors, we ensure that each structure is not only environmentally
                            attuned but also rich in cultural significance. Our designs reflect a deep respect for the
                            past, while embracing the innovations of the future.</p>
                        <div class="feature-box-wrap">
                            <div class="feature-box wow fadeInUp" data-wow-delay=".4s">
                                <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/feature_1_1.svg')}}" alt="Icon"></div>
                                <h3 class="box-title">3D Space Designing</h3>
                            </div>
                            <div class="feature-box wow fadeInUp" data-wow-delay=".5s">
                                <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/feature_1_2.svg')}}" alt="Icon"></div>
                                <h3 class="box-title">3D Model Building</h3>
                            </div>
                            <div class="feature-box wow fadeInUp" data-wow-delay=".7s">
                                <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/feature_1_3.svg')}}" alt="Icon"></div>
                                <h3 class="box-title">Architectural Drawing</h3>
                            </div>
                            <div class="feature-box wow fadeInUp" data-wow-delay=".9s">
                                <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/feature_1_4.svg')}}" alt="Icon"></div>
                                <h3 class="box-title">Building The Space</h3>
                            </div>
                        </div>
                        <div class="btn-group mt-45 wow fadeInUp" data-wow-delay=".4s"><a href="about.html"
                                class="th-btn style2">Learn More</a>
                            <div class="box-profile">
                                <div class="box-author"><img src="{{ asset('demo/assets/img/normal/author-1.png')}}" alt="Avater"></div>
                                <div class="box-info"><img src="{{ asset('demo/assets/img/normal/signature.png')}}" alt=""> <span
                                        class="box-desig">FOUNDER OF THE COMPANY</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup d-none d-xxl-block" data-top="0%" data-left="0%"><img
                src="{{ asset('demo/assets/img/shape/element-1.png')}}" alt=""></div>
    </div>


    <section class="overflow-hidden position-relative space-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6">
                    <div class="title-area text-center"><span class="sub-title style2 text-anime">OUR APPROACH</span>
                        <h2 class="sec-title split-text">We Love To Find <span class="text-theme">Solutions</span> To
                            Complex Challenges</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="process-item-area">
                    <div class="process-item hover-item item-active">
                        <div class="process-img global-img wow fadeInLeft" data-wow-delay=".2s"><img
                                src="{{ asset('demo/assets/img/process/process-img-1.jpg')}}" alt=""></div>
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
                                src="{{ asset('demo/assets/img/process/process-img-2.jpg')}}" alt=""></div>
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
                                src="{{ asset('demo/assets/img/process/process-img-3.jpg')}}" alt=""></div>
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

    {{-- **************** --}}
    <div class="overflow-hidden overflow-hidden space-top">
        <div class="container">
            <div class="about-area2">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-xl-7">
                        <div class="about-area3">
                            <div class="title-area mb-30 text-center text-sm-start"><span
                                    class="sub-title style3 text-anime">More About Our Company</span>
                                <h2 class="sec-title style4 split-text">Building Innovating Solutions</h2>
                            </div>
                            <div class="about-box-wrap">
                                <div class="about-box wow fadeInUp" data-wow-delay=".4s">
                                    <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/about_1_1.svg') }}"
                                            alt="Icon"></div>
                                    <div class="media-body">
                                        <h3 class="box-title">Integrated Design & Development</h3>
                                        <p>Seamless collaboration between architecture and real estate teams for
                                            efficient project delivery.</p>
                                    </div>
                                </div>
                                <div class="about-box wow fadeInUp" data-wow-delay=".5s">
                                    <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/about_1_2.svg') }}"
                                            alt="Icon"></div>
                                    <div class="media-body">
                                        <h3 class="box-title">Client-Centered Process</h3>
                                        <p>Seamless collaboration between architecture and real estate teams for
                                            efficient project delivery.</p>
                                    </div>
                                </div>
                                <div class="about-box wow fadeInUp" data-wow-delay=".7s">
                                    <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/about_1_3.svg') }}"
                                            alt="Icon"></div>
                                    <div class="media-body">
                                        <h3 class="box-title">Advanced Visualization Tools</h3>
                                        <p>Seamless collaboration between architecture and real estate teams for
                                            efficient project delivery.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="img-box5">
                            <div class="img1 global-img img-anim-left"><img class="w-100"
                                    src="{{ asset('demo/assets/img/normal/about_6_1.jpg') }}" alt="About"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="counter-area2 space-bottom overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="title-area text-center text-md-start"><span class="sub-title style3 text-anime">Experience
                            with 120k Visitors</span>
                        <h2 class="sec-title style4 split-text">Our Featured Facilities</h2>
                        <p class="wow fadeInUp" data-wow-delay=".3s">Our practice is Designing Complete
                            EnvironmentsTM—exceptional buildings, communities and places—in special situations, where a
                            unique historic or natural environment requires an especially thoughtful and innovative
                            solution.</p>
                    </div>
                </div>
                <div class="counter-card_wrapp style3">
                    <div class="counter-card style5 wow fadeInUp" data-wow-delay=".2s">
                        <h3 class="box-number"><span class="counter-number">98</span>%</h3>
                        <p class="box-text">happy customer</p>
                    </div>
                    <div class="counter-card style5 wow fadeInUp" data-wow-delay=".4s">
                        <h3 class="box-number"><span class="counter-number">4.9</span></h3>
                        <p class="box-text">average reviews</p>
                    </div>
                    <div class="counter-card style5 wow fadeInUp" data-wow-delay=".5s">
                        <h3 class="box-number"><span class="counter-number">1.6</span>k+</h3>
                        <p class="box-text">Complete Project</p>
                    </div>
                    <div class="counter-card style5 wow fadeInUp" data-wow-delay=".6s">
                        <h3 class="box-number"><span class="counter-number">126</span></h3>
                        <p class="box-text">Award Win</p>
                    </div>
                </div>
            </div>
            <div class="shape-mockup d-none d-md-block" data-bottom="0%" data-right="0%"><img
                    src="{{ asset('demo/assets/img/normal/counter-img.jpg') }}" alt=""></div>
        </div>
    </div>
    <section class="team-sec space overflow-hidden">
        <div class="container z-index-common">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="title-area text-center"><span class="sub-title style3 text-anime">Our Teams</span>
                        <h2 class="sec-title style4 split-text">Our Team Member</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="teamSlider3"
                    data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200": {"slidesPerView": 3},"1400":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="th-team team-item">
                                <div class="box-img"><img src="{{ asset('demo/assets/img/team/team_3_1.png') }}"
                                        alt="Team"></div>
                                <div class="box-content">
                                    <div>
                                        <h3 class="box-title"><a href="team-details.html">Jack Mack Daniel</a></h3><span
                                            class="team-desig">Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-item">
                                <div class="box-img"><img src="{{ asset('demo/assets/img/team/team_3_2.png') }}"
                                        alt="Team"></div>
                                <div class="box-content">
                                    <div>
                                        <h3 class="box-title"><a href="team-details.html">Emma Sinclair</a></h3><span
                                            class="team-desig">Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-item">
                                <div class="box-img"><img src="{{ asset('demo/assets/img/team/team_3_3.png') }}"
                                        alt="Team"></div>
                                <div class="box-content">
                                    <div>
                                        <h3 class="box-title"><a href="team-details.html">Michael Reed</a></h3><span
                                            class="team-desig">Director</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-item">
                                <div class="box-img"><img src="{{ asset('demo/assets/img/team/team_3_4.png') }}"
                                        alt="Team"></div>
                                <div class="box-content">
                                    <div>
                                        <h3 class="box-title"><a href="team-details.html">Chloe Bennett</a></h3><span
                                            class="team-desig">Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-item">
                                <div class="box-img"><img src="{{ asset('demo/assets/img/team/team_3_1.png') }}"
                                        alt="Team"></div>
                                <div class="box-content">
                                    <div>
                                        <h3 class="box-title"><a href="team-details.html">Jack Mack Daniel</a></h3><span
                                            class="team-desig">Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-item">
                                <div class="box-img"><img src="{{ asset('demo/assets/img/team/team_3_2.png') }}"
                                        alt="Team"></div>
                                <div class="box-content">
                                    <div>
                                        <h3 class="box-title"><a href="team-details.html">Emma Sinclair</a></h3><span
                                            class="team-desig">Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-item">
                                <div class="box-img"><img src="{{ asset('demo/assets/img/team/team_3_3.png') }}"
                                        alt="Team"></div>
                                <div class="box-content">
                                    <div>
                                        <h3 class="box-title"><a href="team-details.html">Michael Reed</a></h3><span
                                            class="team-desig">Director</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-item">
                                <div class="box-img"><img src="{{ asset('demo/assets/img/team/team_3_4.png') }}"
                                        alt="Team"></div>
                                <div class="box-content">
                                    <div>
                                        <h3 class="box-title"><a href="team-details.html">Chloe Bennett</a></h3><span
                                            class="team-desig">Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="overflow-hidden space overflow-hidden" data-bg-src="{{ asset('demo/assets/img/bg/gallery_bg_1.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="title-area text-center"><span class="sub-title style2 text-anime">recent gallery</span>
                        <h2 class="sec-title split-text">Through a Unique Combination of <span
                                class="text-theme">Engineering</span></h2>
                    </div>
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
                        <div class="box-img global-img"><img class="wow clippy-img"
                                src="{{ asset('demo/assets/img/gallery/gallery_2_1.jpg') }}" alt="gallery image"> <a
                                href="{{ asset('demo/assets/img/gallery/gallery_2_1.jpg') }}"
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
                <div class="col-lg-6 col-xl-4 col-xxl-auto filter-item cat3 cat2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><img class="wow clippy-img"
                                src="{{ asset('demo/assets/img/gallery/gallery_2_2.jpg') }}" alt="gallery image"> <a
                                href="{{ asset('demo/assets/img/gallery/gallery_2_2.jpg') }}"
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
                        <div class="box-img global-img"><img class="wow clippy-img"
                                src="{{ asset('demo/assets/img/gallery/gallery_2_3.jpg') }}" alt="gallery image"> <a
                                href="{{ asset('demo/assets/img/gallery/gallery_2_3.jpg') }}"
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
                        <div class="box-img global-img"><img class="wow clippy-img"
                                src="{{ asset('demo/assets/img/gallery/gallery_2_4.jpg') }}" alt="gallery image"> <a
                                href="{{ asset('demo/assets/img/gallery/gallery_2_4.jpg') }}"
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
                        <div class="box-img global-img"><img class="wow clippy-img"
                                src="{{ asset('demo/assets/img/gallery/gallery_2_5.jpg') }}" alt="gallery image"> <a
                                href="{{ asset('demo/assets/img/gallery/gallery_2_5.jpg') }}"
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
                        <div class="box-img global-img"><img class="wow clippy-img"
                                src="{{ asset('demo/assets/img/gallery/gallery_2_6.jpg') }}" alt="gallery image"> <a
                                href="{{ asset('demo/assets/img/gallery/gallery_2_6.jpg') }}"
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
    <section class="choose-area overflow-hidden space-top overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="title-area text-center"><span class="sub-title style4 text-white">Why Choose Us</span>
                        <h3 class="sec-title split-text text-white">Why Should You Choose Us</h3>
                    </div>
                </div>
            </div>
            <hr class="">
            <div class="slider-wrap mt-60">
                <div class="swiper th-slider has-shadow" id="chooseSlide"
                    data-slider-options='{"loop":false,"paginationType": "progressbar","spaceBetween": 70,"mousewheel": {"enabled": true,"sensitivity": 4,"releaseOnEdges":true},"breakpoints": {"0":{"slidesPerView": 1},"576": {"slidesPerView": 1},"768": {"slidesPerView": 2},"992": {"slidesPerView": 2},"1200": {"slidesPerView": 3},"1400": {"slidesPerView": 4}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="choose-box">
                                <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/choose_2_1.svg') }}"
                                        alt="img"></div>
                                <div class="box-content">
                                    <h3 class="box-title text-white">Design Excellence</h3>
                                    <p class="box-text">We blend creativity with technical mastery to deliver iconic,
                                        functional, and timeless architecture...</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="choose-box">
                                <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/choose_2_2.svg') }}"
                                        alt="img"></div>
                                <div class="box-content">
                                    <h3 class="box-title text-white">Client-Centered Approach</h3>
                                    <p class="box-text">We blend creativity with technical mastery to deliver iconic,
                                        functional, and timeless architecture...</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="choose-box">
                                <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/choose_2_3.svg') }}"
                                        alt="img"></div>
                                <div class="box-content">
                                    <h3 class="box-title text-white">Customer-Focused Design</h3>
                                    <p class="box-text">We blend creativity with technical mastery to deliver iconic,
                                        functional, and timeless architecture...</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="choose-box">
                                <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/choose_2_4.svg') }}"
                                        alt="img"></div>
                                <div class="box-content">
                                    <h3 class="box-title text-white">Sustainable Innovation</h3>
                                    <p class="box-text">We blend creativity with technical mastery to deliver iconic,
                                        functional, and timeless architecture...</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="choose-box">
                                <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/choose_2_1.svg') }}"
                                        alt="img"></div>
                                <div class="box-content">
                                    <h3 class="box-title text-white">Design Excellence</h3>
                                    <p class="box-text">We blend creativity with technical mastery to deliver iconic,
                                        functional, and timeless architecture...</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="choose-box">
                                <div class="box-icon"><img src="{{ asset('demo/assets/img/icon/choose_2_2.svg') }}"
                                        alt="img"></div>
                                <div class="box-content">
                                    <h3 class="box-title text-white">Client-Centered Approach</h3>
                                    <p class="box-text">We blend creativity with technical mastery to deliver iconic,
                                        functional, and timeless architecture...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="marquee-content style2 positive-relative overflow-hidden">
                <div class="marquee">
                    <div class="marquee-group style3">
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/timeline.png') }}" alt="">
                        </div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/timeline.png') }}" alt="">
                        </div>
                    </div>
                    <div aria-hidden="true" class="marquee-group style3">
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/timeline.png') }}" alt="">
                        </div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/timeline.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="overflow-hidden space overflow-hidden" id="faq-sec">
        <div class="container">
            <div class="row gx-0 align-items-center flex-row-reverse">
                <div class="col-xl-6 mt-35 mt-xl-0">
                    <div class="pe-xl-5 me-xl-5">
                        <div class="title-area mb-40"><span class="sub-title text-anime">FAQ’S</span>
                            <h2 class="sec-title style4 split-text">Functional Architect Design Studios.</h2>
                        </div>
                        <div class="accordion-area accordion" id="faqAccordion3">
                            <div class="accordion-card wow fadeInUp" data-wow-delay=".1s">
                                <div class="accordion-header" id="collapse-item-1"><button
                                        class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">1.
                                        What does an architect do??</button></div>
                                <div id="collapse-1" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion3">
                                    <div class="accordion-body">
                                        <p class="faq-text">Most medical centers offer charity programs, counseling, and
                                            financial assistance for those in need. Non-Muslims are welcome to visit
                                            mosques. They should dress modestly and remove their shoes upon entering.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card active wow fadeInUp" data-wow-delay=".3s">
                                <div class="accordion-header" id="collapse-item-2"><button class="accordion-button"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2"
                                        aria-expanded="true" aria-controls="collapse-2">2. What is the difference
                                        between an architect and an engineer??</button></div>
                                <div id="collapse-2" class="accordion-collapse collapse show"
                                    aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion3">
                                    <div class="accordion-body">
                                        <p class="faq-text">Most medical centers offer charity programs, counseling, and
                                            financial assistance for those in need. Non-Muslims are welcome to visit
                                            mosques. They should dress modestly and remove their shoes upon entering.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card wow fadeInUp" data-wow-delay=".5s">
                                <div class="accordion-header" id="collapse-item-3"><button
                                        class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">3.
                                        Do I need an architect for my project?</button></div>
                                <div id="collapse-3" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion3">
                                    <div class="accordion-body">
                                        <p class="faq-text">Most medical centers offer charity programs, counseling, and
                                            financial assistance for those in need. Non-Muslims are welcome to visit
                                            mosques. They should dress modestly and remove their shoes upon entering.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card wow fadeInUp" data-wow-delay=".7s">
                                <div class="accordion-header" id="collapse-item-4"><button
                                        class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">4.
                                        How much does it cost to hire an architect?</button></div>
                                <div id="collapse-4" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion3">
                                    <div class="accordion-body">
                                        <p class="faq-text">Most medical centers offer charity programs, counseling, and
                                            financial assistance for those in need. Non-Muslims are welcome to visit
                                            mosques. They should dress modestly and remove their shoes upon entering.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card wow fadeInUp" data-wow-delay=".8s">
                                <div class="accordion-header" id="collapse-item-5"><button
                                        class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">5.
                                        What is sustainable or green architecture??</button></div>
                                <div id="collapse-5" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion3">
                                    <div class="accordion-body">
                                        <p class="faq-text">Most medical centers offer charity programs, counseling, and
                                            financial assistance for those in need. Non-Muslims are welcome to visit
                                            mosques. They should dress modestly and remove their shoes upon entering.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="faq-image img-anim-left"><img src="{{ asset('demo/assets/img/normal/faq-img2.png') }}"
                            alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <section class="testi-area2 overflow-hidden space overflow-hidden" id="testi-sec">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <div class="title-area text-center text-md-start">
                        <h2 class="sec-title style3">Customer Feedback</h2>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="sec-btn mt-n3 mt-md-0 d-none d-md-block">
                        <div class="icon-box"><button data-slider-prev="#testiSlider4"
                                class="slider-arrow style3 default slider-prev"><img
                                    src="{{ asset('demo/assets/img/icon/right-arrow4.svg') }}" alt=""></button>
                            <button data-slider-next="#testiSlider4" class="slider-arrow style3 default slider-next"><img
                                    src="{{ asset('demo/assets/img/icon/left-arrow4.svg') }}" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-wrap">
                <div class="swiper th-slider has-shadow" id="testiSlider4"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"1"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="box-author"><img class="img"
                                        src="{{ asset('demo/assets/img/testimonial/testi_4_1.png') }}" alt="Avater">
                                    <div class="box-quote"><img src="{{ asset('demo/assets/img/icon/quote4.svg') }}"
                                            alt=""></div>
                                </div>
                                <div class="box-content">
                                    <p class="box-text">Working with Faren Design was a seamless experience from start
                                        to finish. Their architects not only understood our vision but enhanced it with
                                        creative ideas and smart, sustainable solutions. The result was a space that’s
                                        both beautiful and highly functional. We couldn't be happier with the outcome
                                        and the professionalism shown throughout the process.</p>
                                    <div class="box-profile">
                                        <div class="box-info">
                                            <h3 class="box-title">Alex James</h3><span class="box-desig">Company
                                                Owner</span>
                                        </div>
                                        <div class="box-rating"><span class="rating">4.9/5.0</span> <span
                                                class="review"><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="box-author"><img class="img"
                                        src="{{ asset('demo/assets/img/testimonial/testi_4_2.png') }}" alt="Avater">
                                    <div class="box-quote"><img src="{{ asset('demo/assets/img/icon/quote4.svg') }}"
                                            alt=""></div>
                                </div>
                                <div class="box-content">
                                    <p class="box-text">Working with Faren Design was a seamless experience from start
                                        to finish. Their architects not only understood our vision but enhanced it with
                                        creative ideas and smart, sustainable solutions. The result was a space that’s
                                        both beautiful and highly functional. We couldn't be happier with the outcome
                                        and the professionalism shown throughout the process.</p>
                                    <div class="box-profile">
                                        <div class="box-info">
                                            <h3 class="box-title">MIchel Smith</h3><span class="box-desig">Company
                                                Owner</span>
                                        </div>
                                        <div class="box-rating"><span class="rating">4.9/5.0</span> <span
                                                class="review"><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="box-author"><img class="img"
                                        src="{{ asset('demo/assets/img/testimonial/testi_4_1.png') }}" alt="Avater">
                                    <div class="box-quote"><img src="{{ asset('demo/assets/img/icon/quote4.svg') }}"
                                            alt=""></div>
                                </div>
                                <div class="box-content">
                                    <p class="box-text">Working with Faren Design was a seamless experience from start
                                        to finish. Their architects not only understood our vision but enhanced it with
                                        creative ideas and smart, sustainable solutions. The result was a space that’s
                                        both beautiful and highly functional. We couldn't be happier with the outcome
                                        and the professionalism shown throughout the process.</p>
                                    <div class="box-profile">
                                        <div class="box-info">
                                            <h3 class="box-title">Alex James</h3><span class="box-desig">Company
                                                Owner</span>
                                        </div>
                                        <div class="box-rating"><span class="rating">4.9/5.0</span> <span
                                                class="review"><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="overflow-hidden space-bottom bg-smoke2 overflow-hidden">
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
                                        src="{{ asset('demo/assets/img/brand/brand_1_1.svg') }}" alt="Brand Logo"> <img
                                        class="gray" src="{{ asset('demo/assets/img/brand/brand_1_1.svg') }}"
                                        alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_2.svg') }}" alt="Brand Logo"> <img
                                        class="gray" src="{{ asset('demo/assets/img/brand/brand_1_2.svg') }}"
                                        alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_3.svg') }}" alt="Brand Logo"> <img
                                        class="gray" src="{{ asset('demo/assets/img/brand/brand_1_3.svg') }}"
                                        alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_4.svg') }}" alt="Brand Logo"> <img
                                        class="gray" src="{{ asset('demo/assets/img/brand/brand_1_4.svg') }}"
                                        alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_5.svg') }}" alt="Brand Logo"> <img
                                        class="gray" src="{{ asset('demo/assets/img/brand/brand_1_5.svg') }}"
                                        alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_1.svg') }}" alt="Brand Logo"> <img
                                        class="gray" src="{{ asset('demo/assets/img/brand/brand_1_1.svg') }}"
                                        alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_2.svg') }}" alt="Brand Logo"> <img
                                        class="gray" src="{{ asset('demo/assets/img/brand/brand_1_2.svg') }}"
                                        alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_3.svg') }}" alt="Brand Logo"> <img
                                        class="gray" src="{{ asset('demo/assets/img/brand/brand_1_3.svg') }}"
                                        alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_4.svg') }}" alt="Brand Logo"> <img
                                        class="gray" src="{{ asset('demo/assets/img/brand/brand_1_4.svg') }}"
                                        alt="Brand Logo"></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-card"><a href="#"><img class="original"
                                        src="{{ asset('demo/assets/img/brand/brand_1_5.svg') }}" alt="Brand Logo"> <img
                                        class="gray" src="{{ asset('demo/assets/img/brand/brand_1_5.svg') }}"
                                        alt="Brand Logo"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <section class="gallery-area overflow-hidden space"
        data-bg-src="{{ asset('demo/assets/img/bg/gallery_bg_2.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center"><span class="sub-title text-anime text-white">RECENT
                            GALLERY</span>
                        <h2 class="sec-title style2 split-text text-white">Through a Unique Combination of <span
                                class="text-theme">Engineering</span></h2>
                    </div>
                </div>
            </div>
            <div class="slider-wrap text-center">
                <div class="swiper th-slider gallery-slider4" id="gallerySlider4"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1.3"},"991":{"slidesPerView":"1.5"},"1200":{"slidesPerView":"2"},"1600":{"slidesPerView":"3.3"}},"effect":"coverflow","coverflowEffect":{"rotate":"17","stretch":"190","depth":"190","modifier":"1"},"centeredSlides":"true", "initialSlide":"5"}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-item2">
                                <div class="box-img"><img src="{{ asset('demo/assets/img/gallery/gallery_7_1.jpg') }}"
                                        alt="gallery image">
                                    <a href="{{ asset('demo/assets/img/gallery/gallery_7_1.jpg') }}"
                                        class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item2">
                                <div class="box-img"><img src="{{ asset('demo/assets/img/gallery/gallery_7_2.jpg') }}"
                                        alt="gallery image">
                                    <a href="{{ asset('demo/assets/img/gallery/gallery_7_2.jpg') }}"
                                        class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item2">
                                <div class="box-img"><img src="{{ asset('demo/assets/img/gallery/gallery_7_3.jpg') }}"
                                        alt="gallery image">
                                    <a href="{{ asset('demo/assets/img/gallery/gallery_7_3.jpg') }}"
                                        class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item2">
                                <div class="box-img"><img src="{{ asset('demo/assets/img/gallery/gallery_7_4.jpg') }}"
                                        alt="gallery image">
                                    <a href="{{ asset('demo/assets/img/gallery/gallery_7_4.jpg') }}"
                                        class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-item2">
                                <div class="box-img"><img src="{{ asset('demo/assets/img/gallery/gallery_7_5.jpg') }}"
                                        alt="gallery image">
                                    <a href="{{ asset('demo/assets/img/gallery/gallery_7_5.jpg') }}"
                                        class="icon-btn th-popup-image"><i class="far fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="icon-box"><button data-slider-prev="#gallerySlider4"
                            class="slider-arrow style2 default slider-prev"><img
                                src="{{ asset('demo/assets/img/icon/right-arrow3.svg') }}" alt=""></button>
                        <div class="text-center"><a href="gallery.html" class="th-btn style2"><img
                                    src="{{ asset('demo/assets/img/icon/grid.png') }}" alt="">Explore All</a>
                        </div><button data-slider-next="#gallerySlider4"
                            class="slider-arrow style2 default slider-next"><img
                                src="{{ asset('demo/assets/img/icon/left-arrow2.svg') }}" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
