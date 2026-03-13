@extends('layouts.main')
@section('content')
<div class="breadcumb-area">
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('demo/assets/img/bg/breadcumb-bg.jpg') }}" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title text-anime">Landscape Design</h1>
                <ul class="breadcumb-menu">
                    <li class="wow fadeInUp" data-wow-delay=".2s"><a href="{{ route('home') }}">Home</a></li>
                    <li class="wow fadeInUp" data-wow-delay=".3s">Service Details</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="breadcumb-shape ShapeAni" data-bg-src="{{ asset('demo/assets/img/shape/scale.png') }}"></div>
</div>
<section class="space overflow-hidden">
    <div class="container">
        <div class="page-img space-bottom">
            <div class=""></div><img src="{{ asset('demo/assets/img/service/service_details_2.jpg') }}" alt="service">
        </div>
        <div class="row gy-4">
            <div class="col-xl-8">
                <div class="page-content"><span class="page-subtitle">Residential Interior</span>
                    <h3 class="">Curate Your Unique Aesthetic</h3>
                    <p class="fs-18 mb-50">We believe that the right styling can transform any space into a
                        personalized haven. Our Interior Styling service focuses on enhancing the beauty and
                        functionality of your home or office through thoughtful design choices. From selecting the
                        perfect color palettes to accessorizing with decor that reflects your personality, we’re
                        here to help you create an environment that resonates with your style and vision.</p>
                    <div class="row gy-4">
                        <div class="col-lg-6 col-xxl-7">
                            <div class="page-img service-img img-anim-left"><img class="w-100 h-100"
                                    src="{{ asset('demo/assets/img/service/service_inner_1.1.jpg') }}" alt="service"></div>
                        </div>
                        <div class="col-lg-6 col-xxl-5">
                            <div class="page-img service-img img-anim-top"><img class="w-100 h-100"
                                    src="{{ asset('demo/assets/img/service/service_inner_2.1.jpg') }}" alt="service"></div>
                        </div>
                    </div>
                    <h4 class="mt-25">Features</h4>
                    <p>With our Interior Styling service, you can expect:</p>
                    <div class="checklist style4 me-xl-5 pe-xl-5">
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay=".1s">Personalized Styling: We take the time to
                                understand your lifestyle, preferences, and design goals to curate a tailored
                                styling solution that complements your space.</li>
                            <li class="wow fadeInUp" data-wow-delay=".3s">Expert Material Selection: Our team stays
                                updated on the latest trends and timeless classics, helping you choose furnishings,
                                textiles, and decor that enhance your aesthetic while providing comfort and
                                functionality.</li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">Cohesive Design: We ensure that every
                                element in your space works harmoniously, creating a cohesive and inviting
                                atmosphere that feels both stylish and practical.</li>
                        </ul>
                    </div>
                    <h4 class="mt-25">Process</h4>
                    <p class="page-text">Our approach was rooted in Claire’s vision of California coastal luxury,
                        focusing on enhancing spaciousness and warmth. Key steps included:</p>
                    <p class="mb-0">Curating the perfect look for your space with a personalized styling process
                        that enhances and refines every detail.</p>
                    <div class="checklist style5 me-xl-5 pe-xl-5">
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay=".1s">1. Discovery Consultation: We start with a
                                discovery consultation to discuss your vision, preferences, and the specific needs
                                of your space. Understanding your style and how you use your environment is
                                essential for a successful outcome.</li>
                            <li class="wow fadeInUp" data-wow-delay=".3s">2. Concept Development: Our design team
                                crafts a detailed styling concept, which may include mood boards, color schemes, and
                                a curated selection of furniture and decor items that align with your vision. This
                                step is key to ensuring that all elements reflect your unique style.</li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">3. Sourcing & Selection: We assist you in
                                sourcing the selected items, whether it’s furniture, accessories, or art. Our
                                extensive network of suppliers ensures that you have access to high-quality
                                materials and the latest design trends.</li>
                            <li class="wow fadeInUp" data-wow-delay=".5s">4. Styling Execution: Once the items are
                                sourced, our skilled team takes charge of the styling process. We meticulously
                                arrange and position each piece to create an aesthetically pleasing and functional
                                environment. Our goal is to ensure every detail is considered and enhances the
                                overall design.</li>
                            <li class="wow fadeInUp" data-wow-delay=".6s">5. Final Touches: We conduct a final
                                walkthrough with you to make sure everything aligns with your vision. During this
                                phase, we fine-tune the arrangement and ensure that your space is ready to be
                                enjoyed.</li>
                        </ul>
                    </div>
                    <h3 class="mt-25">Transform Your Environment</h3>
                    <p class="mb-50">Our Interior Styling service is dedicated to helping you achieve a space that
                        is not only beautiful but also uniquely yours. With our expertise and personalized approach,
                        we elevate your interiors to reflect your style and enhance your everyday living. Let us
                        partner with you to curate a space that inspires and rejuvenates.</p>
                    <hr class="line2 mb-60">
                    <div class="blog-navigation"><a href="{{ route('service') }}" class="nav-btn prev"><img
                                src="{{ asset('demo/assets/img/blog/blog-nav-1.1.jpg') }}" alt="blog img" class="nav-img"> <span
                                class="nav-text"><span class="icon"><img src="{{ asset('demo/assets/img/icon/left-arrow.svg') }}"
                                        alt=""></span>Previous Post</span> </a><a href="{{ route('service') }}"
                            class="blog-btn"><i class="fa-solid fa-grid"></i></a> <a href="{{ route('service') }}"
                            class="nav-btn next"><img src="{{ asset('demo/assets/img/blog/blog-nav-2.1.jpg') }}" alt="blog img"
                                class="nav-img"> <span class="nav-text">Next Post<span class="icon"><img
                                        src="{{ asset('demo/assets/img/icon/right-arrow.svg') }}" alt=""></span></span></a></div>
                </div>
            </div>
            <div class="col-xl-4">
                <aside class="sidebar-area">
                    <div class="widget widget_nav_menu">
                        <h3 class="widget_title">Service Overview</h3>
                        <div class="service-info">
                            <ul>
                                <li>Estimate Time <span>4-5 Weeks</span></li>
                                <li>Rating <span>5/5 <span><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i></span></span></li>
                                <li>Satisfaction Rate <span>100% Happy Client</span></li>
                                <li>Cost <span>$1,25000-5,0000</span></li>
                                <li>Completed Services <span>1250+</span></li>
                            </ul>
                            <div class="service-btn"><a href="contact.html" class="th-btn black-border th-icon">Get
                                    A Quotation</a></div>
                        </div>
                    </div>
                    <div class="widget widget_nav_menu">
                        <h3 class="widget_title">Services List</h3>
                        <div class="menu-all-pages-container">
                            <ul>
                                <li><a href="service.html">Residential Interior</a></li>
                                <li><a href="service.html">Real Estate</a></li>
                                <li><a href="service.html">Consultation</a></li>
                                <li><a href="service.html">Exterior Planning</a></li>
                                <li><a href="service.html">Building Development</a></li>
                                <li><a href="service.html">Furniture Design</a></li>
                                <li><a href="service.html">Art & Decoration</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget widget_quote">
                        <h3 class="widget_title">Have any Question?</h3>
                        <form action="https://html.themehour.net/faren/demo/mail.php" method="POST" class="widget-form">
                            <div class="form-group"><input type="text" class="form-control" name="name" id="name"
                                    placeholder="Full Name*"> <i class="fal fa-user"></i></div>
                            <div class="form-group"><input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email Adress*"> <i class="fal fa-envelope"></i></div>
                            <div class="form-group"><input type="tel" class="form-control" name="phone" id="phone2"
                                    placeholder="Phone Number*"> <i class="fal fa-phone"></i></div>
                            <div class="form-group"><select name="subject" id="subject" class="form-select nice-select">
                                    <option value="" disabled="disabled" selected="selected" hidden>Services*
                                    </option>
                                    <option value="Pre-Design / Conceptual Servicest">Pre-Design / Conceptual
                                        Services</option>
                                    <option value="Schematic Design">Schematic Design</option>
                                    <option value="Design Development">Design Development</option>
                                    <option value="Bidding & Negotiation">Bidding & Negotiation</option>
                                </select></div>
                            <div class="form-group"><textarea name="message" id="message" cols="30" rows="3"
                                    class="form-control" placeholder="Your Message"></textarea> <i
                                    class="fal fa-comment"></i></div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                        <div class="form-btn col-12"><button class="th-btn style2 th-icon">Submit Now</button></div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
{{-- <div class="marquee-area2 overflow-hidden">
    <div class="marquee-content positive-relative overflow-hidden">
        <div class="marquee">
            <div class="marquee-group style2">
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Bright Halls">Bright Halls</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Sustainable Architecture">Sustainable Architecture</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Landscape Architecture">Landscape Architecture</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""> <a target="_blank" href="#"
                        data-hover="Commercial Spa">Commercial Spa</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Bright Halls">Bright Halls</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Sustainable Architecture">Sustainable Architecture</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Landscape Architecture">Landscape Architecture</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""> <a target="_blank" href="#"
                        data-hover="Commercial Spa">Commercial Spa</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Bright Halls">Bright Halls</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Sustainable Architecture">Sustainable Architecture</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Landscape Architecture">Landscape Architecture</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""> <a target="_blank" href="#"
                        data-hover="Commercial Spa">Commercial Spa</a></div>
            </div>
            <div aria-hidden="true" class="marquee-group style2">
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Bright Halls">Bright Halls</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Sustainable Architecture">Sustainable Architecture</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Landscape Architecture">Landscape Architecture</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""> <a target="_blank" href="#"
                        data-hover="Commercial Spa">Commercial Spa</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Bright Halls">Bright Halls</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Sustainable Architecture">Sustainable Architecture</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Landscape Architecture">Landscape Architecture</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""> <a target="_blank" href="#"
                        data-hover="Commercial Spa">Commercial Spa</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Bright Halls">Bright Halls</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Sustainable Architecture">Sustainable Architecture</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""><a target="_blank" href="#"
                        data-hover="Landscape Architecture">Landscape Architecture</a></div>
                <div class="item"><img src="{{ asset('demo/assets/img/icon/star3.svg') }}" alt=""> <a target="_blank" href="#"
                        data-hover="Commercial Spa">Commercial Spa</a></div>
            </div>
        </div>
    </div>
</div> --}}
<div class="overflow-hidden space-top overflow-hidden" id="contact-sec">
    <div class="container">
        <div class="row gy-4 justify-content-between">
            <div class="col-lg-3">
                <div class="contact-image-one global-img"><img src="{{ asset('demo/assets/img/normal/contact-image-1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="title-area text-center"><span class="sub-title style2 text-anime">get in touch</span>
                    <h2 class="sec-title split-text">Transforming visions into reality</h2>
                </div>
                <div class="text-center"><a href="contact.html" class="th-btn style3">Contact Us</a></div>
            </div>
            <div class="col-lg-4">
                <div class="contact-image-two global-img"><img src="{{ asset('demo/assets/img/normal/contact-image-2-1.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row gx-160 mt-50 justify-content-center">
            <div class="col-lg-4">
                <div class="contact-image-three global-img"><img src="{{ asset('demo/assets/img/normal/contact-image-3.1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-image-four global-img"><img src="{{ asset('demo/assets/img/normal/contact-image-4.1.jpg') }}" alt="aaa">
                </div>
            </div>
        </div>
    </div>
</div>
<section class="overflow-hidden space" id="testi-sec">
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
                        <div class="testi-img1 global-img"><img src="{{ asset('demo/assets/img/testimonial/testi-img1.2.jpg') }}" alt="">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title">Excellence Residence</h3>
                            <p class="box-text">Interior Decoration</p>
                        </div>
                    </div>
                    <div class="testi-img2 global-img"><img src="{{ asset('demo/assets/img/testimonial/testi-img2.1.jpg') }}" alt="">
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
                                        <div class="box-quote"><img src="{{ asset('demo/assets/img/icon/quote2.svg') }}" alt=""></div>
                                        <div class="box-rating"><span class="rating">4.9/5.0</span> <span
                                                class="review"><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                                        </div>
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
                                        <div class="box-quote"><img src="{{ asset('demo/assets/img/icon/quote2.svg') }}" alt=""></div>
                                        <div class="box-rating"><span class="rating">4.9/5.0</span> <span
                                                class="review"><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                                        </div>
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
                                        <div class="box-quote"><img src="{{ asset('demo/assets/img/icon/quote2.svg') }}" alt=""></div>
                                        <div class="box-rating"><span class="rating">4.9/5.0</span> <span
                                                class="review"><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                                        </div>
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