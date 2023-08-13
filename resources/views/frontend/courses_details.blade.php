@extends('frontend.layout.frontend-master')

@section('title')
    <title>Course || alam Technology </title>
@endsection

@section('body')


    <!--=================================
        BREADCRUMB START
    ==================================-->
    <section class="tf__breadcrumb" style="background: url({{ asset('frontend/images/breadcrumb_bg_1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2>courses details</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">courses details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        BREADCRUMB END
    ==================================-->


    <!--=================================
        COURSES DETAILS START
    ==================================-->
    <section class="tf__courses_details mt_195 xs_mt_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="tf__courses_details_area">
                        <div class="tf__courses_details_img">
                            <img src="{{ asset('frontend/images/courses_det_img.jpg') }}" alt="courses" class="img-fluid w-100">
                        </div>
                        <div class="tf__courses_details_header d-flex flex-wrap align-items-center">
                            <div class="img">
                                <img src="{{ asset('frontend/images/client_img_1.png" alt="instuuctor" class="img-fluid w-100">
                            </div>
                            <ul class="text d-flex flex-wrap align-items-center">
                                <li>
                                    <h4>author</h4>
                                    <p>javed hasan</p>
                                </li>
                                <li>
                                    <h4>category</h4>
                                    <p>business</p>
                                </li>
                                <li>
                                    <h4>review</h4>
                                    <p>173 reviews</p>
                                </li>
                                <li>
                                    <h4>price</h4>
                                    <p>$120.00</p>
                                </li>
                                <li>
                                    <a class="common_btn" href="#">enrole</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tf__courses_det_text">
                            <h2>PHP Programming With Professional And Qualified Author Author</h2>

                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Instructors</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Reviews</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab" tabindex="0">
                                    <div class="tf__course_overview">
                                        <h3>Description</h3>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, minus
                                            soluta! Facere alias, eos dolorem explicabo vitae nulla atque, aspernatur
                                            corrupti asperiores neque fuga id odit adipisci et dolores ut rerum placeat
                                            distinctio dicta. Dolorum distinctio iure quos iste beatae, cumque possimus
                                            nobis labore quae laudantium sequi tenetur.</p>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, minus
                                            soluta! Facere alias, eos dolorem explicabo vitae nulla atque, aspernatur
                                            corrupti asperiores neque fuga id odit adipisci et dolores ut rerum placeat.
                                        </p>
                                        <h3>We Curabitur iaculis Course:</h3>
                                        <ul>
                                            <li>Business school's Institut constructivism.</li>
                                            <li>We give management school best.</li>
                                            <li>We give management school best.</li>
                                            <li>Business school's Institut constructivism.</li>
                                            <li>We give management school best.</li>
                                            <li>We give management school best.</li>
                                        </ul>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, minus
                                            soluta! Facere alias, eos dolorem explicabo vitae nulla atque, aspernatur
                                            corrupti asperiores neque fuga id odit adipisci et dolores ut rerum placeat
                                            distinctio dicta. Dolorum distinctio iure quos iste beatae, cumque possimus
                                            nobis.</p>

                                        <h3>Course features:</h3>
                                        <ul>
                                            <li>Business school's Institut constructivism.</li>
                                            <li>We give management school best.</li>
                                            <li>We give management school best.</li>
                                            <li>Business school's Institut constructivism.</li>
                                            <li>We give management school best.</li>
                                            <li>We give management school best.</li>
                                        </ul>
                                        <p>Amet consectetur adipisicing elit. Aliquam, minus
                                            soluta! Facere alias, eos dolorem explicabo vitae nulla atque, aspernatur
                                            corrupti asperiores neque fuga id odit adipisci et dolores ut rerum placeat
                                            distinctio dicta. Dolorum distinctio iure quos iste beatae, cumque possimus
                                            nobis.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab" tabindex="0">
                                    <div class="tf__course_instructor">
                                        <div class="row">
                                            <div class="col-xl-5 col-md-6">
                                                <div class="tf__course_instructor_img">
                                                    <img src="{{ asset('frontend/images/team_1.jpg') }}" alt="instructor"
                                                        class="img-fluid w-100">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-md-6">
                                                <div class="tf__course_instructor_text">
                                                    <h4>jubayer hassan</h4>
                                                    <p>+958754125215456</p>
                                                    <p>example@gmail.com</p>
                                                    <p>
                                                        <span>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </span>
                                                        (124 Rating)
                                                    </p>
                                                    <ul class="d-flex flex-wrap align-items-center">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab" tabindex="0">
                                    <div class="tf__courses_review">
                                        <div class="tf__blog_comment">
                                            <h3>reviews (03)</h3>
                                            <div class="tf__single_comment">
                                                <div class="tf__single_comment_img">
                                                    <img src="{{ asset('frontend/images/client_img_1.png" alt="client"
                                                        class="img-fluid w-100">
                                                </div>
                                                <div class="tf__single_comment_text">
                                                    <h4>Rubel Merat <span>31 jan 2023 at 03.16 pm</span></h4>
                                                    <span class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    <p>Lorem ipsum is simply free textdolor sit amet, consectetur notted
                                                        adipisicing
                                                        elit sed do iusmod tempor incididu.</p>

                                                </div>
                                            </div>
                                            <div class="tf__single_comment">
                                                <div class="tf__single_comment_img">
                                                    <img src="{{ asset('frontend/images/client_img_2.png" alt="client"
                                                        class="img-fluid w-100">
                                                </div>
                                                <div class="tf__single_comment_text">
                                                    <h4>Korat Berata <span>31 jan 2023 at 03.16 pm</span></h4>
                                                    <span class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    <p>Lorem ipsum is simply free textdolor sit amet, consectetur notted
                                                        adipisicing
                                                        elit sed do iusmod tempor incididu.</p>
                                                </div>
                                            </div>
                                            <div class="tf__single_comment">
                                                <div class="tf__single_comment_img">
                                                    <img src="{{ asset('frontend/images/client_img_3.png" alt="client"
                                                        class="img-fluid w-100">
                                                </div>
                                                <div class="tf__single_comment_text">
                                                    <h4>Norat Berata <span>31 jan 2023 at 03.16 pm</span></h4>
                                                    <span class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    <p>Lorem ipsum is simply free textdolor sit amet, consectetur notted
                                                        adipisicing
                                                        elit sed do iusmod tempor incididu.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tf__comment_reply mt_65">
                                            <h3>leave a review</h3>
                                            <p>
                                                <span>select your rating:</span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>
                                            <form>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <input type="text" placeholder="Name">
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <input type="email" placeholder="Email">
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <textarea rows="5" placeholder="Text..."></textarea>
                                                        <button type="submit">submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="tf__sidebar" id="sticky_sidebar">
                        <div class="tf__sidebar_search">
                            <form>
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="tf__sidebar_blog sidebar_item">
                            <h3>popular courses</h3>
                            <ul>

                                <li>
                                    <div class="img">
                                        <img src="{{ asset('frontend/images/sidebar_blog_1.jpg') }}" alt="blog" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <p><i class="far fa-calendar-alt"></i> 31 jan 2023</p>
                                        <a href="#">Promote blog posts udied product.</a>
                                    </div>
                                </li>

                                <li>
                                    <div class="img">
                                        <img src="{{ asset('frontend/images/sidebar_blog_2.jpg') }}" alt="blog" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <p><i class="far fa-calendar-alt"></i> 31 jan 2023</p>
                                        <a href="#">Dramatically business engage.</a>
                                    </div>
                                </li>

                                <li>
                                    <div class="img">
                                        <img src="{{ asset('frontend/images/sidebar_blog_3.jpg') }}" alt="blog" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <p><i class="far fa-calendar-alt"></i> 31 jan 2023</p>
                                        <a href="#">Dramatically business engage.</a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="tf__sidebar_category sidebar_item">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#"> Business <span>(08)</span></a></li>
                                <li><a href="#"> Maintenance <span>(14)</span></a></li>
                                <li><a href="#"> Professional <span>(20)</span></a></li>
                                <li><a href="#"> Technology<span>(29)</span></a></li>
                                <li><a href="#"> Single-Business<span>(32)</span></a></li>
                                <li><a href="#"> Innovation <span>(22)</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        COURSES DETAILS END
    ==================================-->

@endsection
