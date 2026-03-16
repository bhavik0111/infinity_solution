@extends('layouts.main')
@section('content')

     <div class="breadcumb-area">
        <div class="breadcumb-wrapper" data-bg-src="{{ asset('demo/assets/img/bg/breadcumb-bg.jpg') }}">
            <div class="container">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title text-anime">Pricing Plan</h1>
                    <ul class="breadcumb-menu">
                        <li class="wow fadeInUp" data-wow-delay=".2s"><a href="{{ route('home') }}">Home</a></li>
                        <li class="wow fadeInUp" data-wow-delay=".3s">Pricing Plan</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="breadcumb-shape ShapeAni" data-bg-src="assets/img/shape/scale.png"></div>
    </div>

      <section class="overflow-hidden space-bottom">
        <div class="container th-container4">
            <div class="row justify-content-lg-between justify-content-center align-items-end">
                <div class="col-lg-7">
                    <div class="title-area text-center text-lg-start"><span class="sub-title style2 text-anime">pricing
                            plan</span>
                        <h2 class="sec-title split-text">Affordable <span class="text-theme">Pricing </span>Plan</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn wow fadeInUp"><a href="pricing.html" class="th-btn black-border">Explore All
                            Price</a></div>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="price-image wow fadeInUp global-img" data-wow-delay=".2s"><img
                            src="{{ asset('demo/assets/img/normal/price-img.jpg') }}" alt=""></div>
                </div>
                <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="price-card style2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="box-content">
                            <h3 class="box-title">Interior Concept & Design</h3>
                            <h4 class="box-price">$8,000 – $15,000</h4>
                        </div>
                        <div class="available-list">
                            <ul>
                                <li>Everything in Basic Plan</li>
                                <li>Full architectural drawings</li>
                                <li>3D modeling & visualizations</li>
                                <li>Interior layout design</li>
                                <li>Up to 3 revisions</li>
                                <li>24/7 Phone & email support</li>
                                <li>Collaboration tools for teams</li>
                                <li>Customizable templates available</li>
                            </ul><a href="contact.html" class="th-btn black-border">Choose Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="price-card style2 active wow fadeInUp" data-wow-delay=".5s">
                        <div class="box-content">
                            <h3 class="box-title">Architecture Design & Development</h3>
                            <h4 class="box-price">$18,000 – $29,000</h4>
                        </div>
                        <div class="available-list">
                            <ul>
                                <li>Dismantling plan</li>
                                <li>Measurement of the room</li>
                                <li>Structure of a project</li>
                                <li>Scheme of interior finishing</li>
                                <li>3D-Visualization of premises</li>
                                <li>Best interior design</li>
                                <li>Collaboration tools for teams</li>
                                <li>Customizable templates available</li>
                            </ul><a href="contact.html" class="th-btn black-border">Choose Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="price-card style2 wow fadeInUp" data-wow-delay=".7s">
                        <div class="box-content">
                            <h3 class="box-title">Construction & Development</h3>
                            <h4 class="box-price">$32,000 – $43,000</h4>
                        </div>
                        <div class="available-list">
                            <ul>
                                <li>Dismantling plan</li>
                                <li>Measurement of the room</li>
                                <li>Structure of a project</li>
                                <li>Scheme of interior finishing</li>
                                <li>3D-Visualization of premises</li>
                                <li>Best interior design</li>
                                <li>Collaboration tools for teams</li>
                                <li>Customizable templates available</li>
                            </ul><a href="contact.html" class="th-btn black-border">Choose Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="overflow-hidden space-bottom overflow-hidden" id="faq-sec">
        <div class="container">
            <div class="row gx-0 gy-4">
                <div class="col-xl-6 mt-35 mt-xl-0">
                    <div class="faq-area style2">
                        <div class="title-area mb-40"><span class="sub-title style2 text-anime">FAQ’S</span>
                            <h2 class="sec-title split-text">Have Any <span class="text-theme">Question?</span></h2>
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
                    <div class="faq-image global-img img-anim-right"><img src="{{ asset('demo/assets/img/normal/faq-img.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

