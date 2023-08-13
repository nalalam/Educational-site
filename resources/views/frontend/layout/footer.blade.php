<!--=================================
        FOOTER START
    ==================================-->
    <footer class="tf__footer mt_100" style="background: url({{ asset('frontend/images/footer_bg.jpg') }});">
        <div class="tf__footer_overlay pt_75">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-sm-10 col-md-7 col-lg-6">
                        <div class="tf__footer_logo_area">
                            <a class="footer_logo" href="{{ route('/') }}">
                                <img src="{{ asset('frontend/images/footer_logo.png') }}" alt="Eduor" class="img-fluid w-100">
                            </a>
                            <p>Nemo enim ipsam voluptate quia
                                voluptas sit aspernatur aut odit
                                aut fugit, sed quia magni this
                                dolores eos qui ratione .</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-10 col-md-5 col-lg-5">
                        <div class="tf__footer_content xs_mt_50">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="{{ route('/') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('team') }}">Our Team</a></li>
                                <li><a href="{{ route('contact') }}">Business Contact</a></li>
                                <li><a href="#">Make An Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-10 col-md-7 col-lg-col-lg-6">
                        <div class="tf__footer_content xs_mt_30">
                            <h3>Our Contacts</h3>
                            <p>Adress: 27 Division St, Berakuti, NY 121102, USA</p>
                            <p>
                                <span> Phone: +8 1440 456 782</span>
                                <span>Fax: +8 846512 456 788</span>
                            </p>
                            <p>
                                <span>Email: example@mail.com </span>
                                <span>Website: yourwebsite.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-10 col-md-5 col-lg-4 col-lg-5">
                        <div class="tf__footer_content xs_mt_45">
                            <h3>News Letter</h3>
                            <p>Our approach to itis unique around know work an we know Get hands on the you like</p>
                            <form>
                                <input type="text" placeholder="Your Email">
                                <button>send</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tf__copyright">
                            <p>Copyright ©Eduor all rights reserved.</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">About</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=================================
        FOOTER END
    ==================================-->


    <!--=============================
        SCROLL BUTTON START
    ==============================-->
    <div class="tf__scroll_btn"> go to top </div>
    <!--=============================
        SCROLL BUTTON END
    ==============================-->


    <!--jquery library js-->
    <script src="{{ asset('frontend/js/jquery-3.6.3.min.jscss') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.jscss') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('frontend/js/Font-Awesome.jscss') }}"></script>
    <!--venobox js-->
    <script src="{{ asset('frontend/js/venobox.min.jscss') }}"></script>
    <!--slick slider js-->
    <script src="{{ asset('frontend/js/slick.min.jscss') }}"></script>
    <!--wow js-->
    <script src="{{ asset('frontend/js/wow.min.jscss') }}"></script>
    <!--counterup js-->
    <script src="{{ asset('frontend/js/jquery.waypoints.min.jscss') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countup.min.jscss') }}"></script>
    <!--animated barfiller js-->
    <script src="{{ asset('frontend/js/animated_barfiller.jscss') }}"></script>
    <!--sticky sidebar js-->
    <script src="{{ asset('frontend/js/sticky_sidebar.jscss') }}"></script>
    <!--nice select js-->
    <script src="{{ asset('frontend/js/jquery.nice-select.min.jscss') }}"></script>

    <!--main/custom js-->
    <script src="{{ asset('frontend/js/main.jscss') }}"></script>

</body>

</html>
