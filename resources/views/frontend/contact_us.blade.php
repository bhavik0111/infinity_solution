@extends('layouts.main')
@section('content')

<body id="show-grid">
    <div class="breadcumb-area">
        <div class="breadcumb-wrapper" data-bg-src="{{ asset('demo/assets/img/bg/breadcumb-bg.jpg')}}">
            <div class="container">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title text-anime">Contact Us</h1>
                    <ul class="breadcumb-menu">
                        <li class="wow fadeInUp" data-wow-delay=".2s"><a href="home-interior.html">Home</a></li>
                        <li class="wow fadeInUp" data-wow-delay=".3s">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="breadcumb-shape ShapeAni" data-bg-src="{{ asset('demo/assets/img/shape/scale.png')}}">
        </div>
    </div>
    <div class="space">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6">
                    <div class="contact-media">
                        <div class="icon-btn"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="media-body">
                            <h5 class="box-title">Our Current Location</h5>
                            <p class="box-text">4517 Washington Ave. Manchester, Kentucky 39495. USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact-media">
                        <div class="icon-btn"><i class="fa-solid fa-phone"></i></div>
                        <div class="media-body">
                            <h5 class="box-title">Phone Number</h5>
                            <p class="box-text"><a href="tel:+00123666000666">+00 (123) 666 000 666</a> <a
                                    href="tel:+00123888000222">+00 (123) 888 000 222</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact-media">
                        <div class="icon-btn"><i class="fa-solid fa-envelope"></i></div>
                        <div class="media-body">
                            <h5 class="box-title">Email Address</h5>
                            <p class="box-text"><a href="mailto:info@examplemail.com">info@examplemail.com</a> <a
                                    href="mailto:help@faren.com">help@faren.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-area overflow-hidden space" id="contact-sec">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-6">
                    <form action="https://html.themehour.net/faren/demo/mail.php" method="POST"
                        class="contact-form ajax-contact">
                        <div class="title-area"><span class="sub-title style2 text-anime">get in touch</span>
                            <h2 class="sec-title split-text">Transforming <span class="text-theme">Visions </span>Into
                                Reality</h2>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6"><input type="text" class="form-control" name="name"
                                    id="name" placeholder="Full Name"> <i class="fa-solid fa-user"></i></div>
                            <div class="form-group col-md-6"><input type="email" class="form-control" name="email"
                                    id="email" placeholder="Email Address"> <i class="fa-solid fa-envelope"></i></div>
                            <div class="form-group col-md-6"><input type="tel" class="form-control" name="number"
                                    id="number" placeholder="Phone Number"> <i class="fa-solid fa-phone"></i></div>
                            <div class="form-group col-md-6"><select name="subject" id="subject"
                                    class="form-select nice-select">
                                    <option value="" disabled="disabled" selected="selected" hidden>Inquire Services
                                    </option>
                                    <option value="Interior Consultingt">Interior Consulting</option>
                                    <option value="Decor & Art Design">Decor & Art Design</option>
                                    <option value="Exterior Design">Exterior Design</option>
                                    <option value="Furniture Design">Furniture Design</option>
                                </select></div>
                            <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3"
                                    class="form-control" placeholder="Your Message"></textarea> <i
                                    class="fa-solid fa-comment"></i></div>
                            <div class="col-12 form-group"><input type="checkbox" id="html"> <label for="html">I agree
                                    with the privacy policy</label></div>
                            <div class="form-btn mt-20 col-12"><button class="th-btn">Send Message</button></div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
                <div class="col-xl-6">
                    <div class="contact-image">
                        <div class="img1 img-anim-left"><img src="{{ asset('demo/assets/img/normal/contact-img-1.jpg')}}" alt=""></div>
                        <div class="img2 img-anim-right"><img src="{{ asset('demo/assets/img/normal/contact-img-2.jpg')}}" alt=""></div>
                        <div class="img3 img-anim-left"><img src="{{ asset('demo/assets/img/normal/contact-img-3.jpg')}}" alt=""></div>
                        <div class="img4 img-anim-right"><img src="{{ asset('demo/assets/img/normal/contact-img-4.jpg')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup spin d-none d-xxl-block" data-top="12%" data-right="13%"><img
                src="{{ asset('demo/assets/img/shape/element-6.png')}}" alt=""></div>
    </div>
    <div class="">
        <div class="contact-map"><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                allowfullscreen="" loading="lazy"></iframe>
            <div class="contact-icon"><img src="{{ asset('demo/assets/img/icon/location-dot.svg')}}" alt=""></div>
        </div>
    </div>
</body>
@endsection