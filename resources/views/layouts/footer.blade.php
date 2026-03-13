<footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('demo/assets/img/bg/footer_bg_1.jpg')}}">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-5">
                        <div class="widget newsletter-widget footer-widget">
                            <h3 class="newsletter-title">Join Our Updates List</h3>
                            <p class="newsletter-text">Adsum delego titulus voro aureus. Utor utique creptio. Sperno
                                volva alo tabesco coaegresco crur assumenda trado tener.</p>
                            <form class="newsletter-form"><input class="form-control" type="email"
                                    placeholder="Email Address" required=""> <button type="submit"
                                    class="th-btn style3">Subscribe</button></form>
                            <div class="col-12 form-group"><input type="checkbox" id="html"> <label for="html">I agree
                                    with the privacy policy</label></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-line footer-widget">
                            <h3 class="widget_title">About Us</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="service.html">All Services</a></li>
                                    <li><a href="team.html">Our Team Leaders</a></li>
                                    <li><a href="contact.html">Rquest a Visit</a></li>
                                    <li><a href="pricing.html">Our Pricing Plan</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Our Projects</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('project')}}">All Projects</a></li>
                                    <li><a href="contact.html">Residential Space</a></li>
                                    <li><a href="contact.html">Multipurpose</a></li>
                                    <li><a href="contact.html">Commercial Space</a></li>
                                    <li><a href="contact.html">Minimalism</a></li>
                                    <li><a href="contact.html">Urbanism</a></li>
                                    <li><a href="contact.html">Villa Cabin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-bottom">
                    <div class="row justify-content-between">
                        <div class="col-lg-5">
                            <div class="social-links">
                                <div class="icon-group"><a href="https://www.facebook.com/"><i
                                            class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                            class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a> <a href="https://www.pinterest.com/"><i
                                            class="fab fa-pinterest-p"></i></a> <a href="https://www.instagram.com/"><i
                                            class="fab fa-instagram"></i></a></div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-7 text-center text-lg-end">
                            <div class="app-download"><a href="#"><img src="{{ asset('demo/assets/img/shape/app-download.png')}}"
                                        alt=""></a></div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row gy-2 align-items-center">
                        <div class="col-lg-5">
                            <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> {{ date('Y')}} <a
                                    href="#">Infinity Solutions </a>. All Rights Reserved.</p>
                        </div>
                        <div class="col-lg-7 text-center text-lg-end">
                            <div class="footer-links">
                                <ul>
                                    <li><a href="about.html">Terms of service</a></li>
                                    <li><a href="about.html">Privacy policy</a></li>
                                    <li><a href="about.html">Cookies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="marquee-area mb-60 mt-60 overflow-hidden">
            <div class="marquee-content positive-relative overflow-hidden">
                <div class="marquee">
                    <div class="marquee-group">
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img.png')}}" alt=""><span>fareninfo</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img2.png')}}" alt=""><span>.com</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img3.png')}}" alt=""><span>hi@</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img.png')}}" alt=""><span>faren.com</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img2.png')}}" alt=""><span>hi@</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img3.png')}}" alt=""><span>fareninfo</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img.png')}}" alt=""><span>.com</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img2.png')}}" alt=""><span>hi@</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img3.png')}}" alt=""><span>faren.com</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img.png')}}" alt=""><span>hi@</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img2.png')}}" alt=""><span>fareninfo</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img3.png')}}" alt=""><span>.com</span></div>
                    </div>
                    <div aria-hidden="true" class="marquee-group">
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img.png')}}" alt=""><span>fareninfo</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img2.png')}}" alt=""><span>.com</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img3.png')}}" alt=""><span>hi@</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img.png')}}" alt=""><span>faren.com</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img2.png')}}" alt=""><span>hi@</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img3.png')}}" alt=""><span>fareninfo</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img.png')}}" alt=""><span>.com</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img2.png')}}" alt=""><span>hi@</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img3.png')}}" alt=""><span>faren.com</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img.png')}}" alt=""><span>hi@</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img2.png')}}" alt=""><span>fareninfo</span></div>
                        <div class="item"><img src="{{ asset('demo/assets/img/shape/shape-img3.png')}}" alt=""><span>.com</span></div>
                    </div>
                </div>
            </div>
        </div> --}}
    </footer>