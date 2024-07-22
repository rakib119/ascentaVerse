@extends('fontend.layout.layout')
@section('css')

@endsection
@section('mainContent')
    @include('fontend.section.homePageSection.banner_section')          {{-- Banner Section --}}
    @include('fontend.section.homePageSection.s2About.about_section')   {{-- About Section --}}
    @include('fontend.section.homePageSection.partner_section')         {{-- Partner Section --}}
    @include('fontend.section.homePageSection.s4.service')              {{-- Service Section --}}
    @include('fontend.section.homePageSection.s7Faq.faq')               {{-- Faq & Contact Section --}}
    @include('fontend.section.homePageSection.team.team')               {{-- Team Section --}}


       {{--
        <section class="team-section">
            <div class="team-heading py-5">
                <div class="sub-title mb-3">Team Member</div>
                <div class="title">Our Awesome <span class="highlight">Technology</span> Team Member</div>
            </div>
            <div class="container mx-auto mt-4 tem">
                <div class="row row-cols-1 row-cols-md-4 g-4 d-flex flex-row flex-wrap justify-content-center">

                    <div class="col">
                        <div class="card">
                            <div class="initial-view">
                                <img src="{{asset('assets/images/teams/VRzIFPwJx2Mgv4e.jpg')}}"
                                    class="card-img-top" alt="Veronica Johnson">
                                <div class="card-body">
                                    <h5 class="card-title">Veronica Johnson</h5>
                                    <p class="card-text">Web Developer</p>
                                    <a class="item--details"
                                        href="https://demo.casethemes.net/itfirm/team-details/">+</a>
                                </div>
                            </div>
                            <div class="detailed-view"
                                style="background-image: url({{asset('assets/images/teams/VRzIFPwJx2Mgv4e.jpg')}}); background-size: cover;">
                                <div class="overlay"></div>
                                <div class="item--holder-inner">
                                    <div class="item--desc">Lead the team of passionate developers, designers, and
                                        strategists
                                        with a thought.</div>
                                    <h4 class="item--title"><a
                                            href="https://demo.casethemes.net/itfirm/team-details/">Veronica
                                            Johnson</a></h4>
                                    <div class="item--position">Web Developer</div>
                                    <div class="item--social">
                                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary"
                                            style="background-color: #fff; color: black;">Read More +</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="initial-view">
                                <img src="https://demo.casethemes.net/itfirm/wp-content/uploads/2021/11/h3-team2-av-260x260.jpg"
                                    class="card-img-top" alt="Chanda Lewis">
                                <div class="card-body">
                                    <h5 class="card-title">Chanda Lewis</h5>
                                    <p class="card-text">Web Developer</p>
                                    <a class="item--details"
                                        href="https://demo.casethemes.net/itfirm/team-details/">+</a>
                                </div>
                            </div>
                            <div class="detailed-view"
                                style="background-image: url('https://demo.casethemes.net/itfirm/wp-content/uploads/2021/11/h3-team2-av-260x260.jpg'); background-size: cover; background-position: top, center; background-repeat: no-repeat;">
                                <div class="overlay"></div>
                                <div class="item--holder-inner">
                                    <div class="item--desc">Lead the team of passionate developers, designers, and
                                        strategists
                                        with a thought.</div>
                                    <h4 class="item--title"><a
                                            href="https://demo.casethemes.net/itfirm/team-details/">Chanda
                                            Lewis</a></h4>
                                    <div class="item--position">Web Developer</div>
                                    <div class="item--social">
                                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary"
                                            style="background-color: #fff; color: black;">Read More +</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="initial-view">
                                <img src="https://demo.casethemes.net/itfirm/wp-content/uploads/2021/11/h3-team3-av-260x260.jpg"
                                    class="card-img-top" alt="Sandra R. Komar">
                                <div class="card-body">
                                    <h5 class="card-title">Sandra R. Komar</h5>
                                    <p class="card-text">Web Developer</p>
                                    <a class="item--details"
                                        href="https://demo.casethemes.net/itfirm/team-details/">+</a>
                                </div>
                            </div>
                            <div class="detailed-view"
                                style="background-image: url('https://demo.casethemes.net/itfirm/wp-content/uploads/2021/11/h3-team3.jpg'); background-size: cover;">
                                <div class="overlay"></div>
                                <div class="item--holder-inner">
                                    <div class="item--desc">Lead the team of passionate developers, designers, and
                                        strategists
                                        with a thought.</div>
                                    <h4 class="item--title"><a
                                            href="https://demo.casethemes.net/itfirm/team-details/">Sandra
                                            R. Komar</a></h4>
                                    <div class="item--position">Web Developer</div>
                                    <div class="item--social">
                                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary"
                                            style="background-color: #fff; color: black;">Read More +</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="initial-view">
                                <img src="https://demo.casethemes.net/itfirm/wp-content/uploads/2021/11/h3-team4-av-260x260.jpg"
                                    class="card-img-top" alt="Jeffrey K. May">
                                <div class="card-body">
                                    <h5 class="card-title">Jeffrey K. May</h5>
                                    <p class="card-text">Web Developer</p>
                                    <a class="item--details"
                                        href="https://demo.casethemes.net/itfirm/team-details/">+</a>
                                </div>
                            </div>
                            <div class="detailed-view"
                                style="background-image: url('https://demo.casethemes.net/itfirm/wp-content/uploads/2021/11/h3-team4.jpg'); background-size: cover;">
                                <div class="overlay"></div>
                                <div class="item--holder-inner">
                                    <div class="item--desc">Lead the team of passionate developers, designers, and
                                        strategists
                                        with a thought.</div>
                                    <h4 class="item--title"><a
                                            href="https://demo.casethemes.net/itfirm/team-details/">Jeffrey
                                            K. May</a></h4>
                                    <div class="item--position">Web Developer</div>
                                    <div class="item--social">
                                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary"
                                            style="background-color: #fff; color: black;">Read More +</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        --}}


        <section class="news-two">
            <div class="auto-container">

                <!-- Sec Title -->
                <div class="sec-title_two">
                    <div class="sec-title_two-title">Blog ~</div>
                    <h2 class="sec-title_two-heading">Our Latest <span>Blog</span></h2>
                </div>

                <div class="news-carousel owl-carousel owl-theme">
                    @php
                        $blog = [4,5,6,4,5,6];
                    @endphp

                    @for ($i=0; $i<=5; $i++)
                    @php
                        $id = $blog[$i];
                    @endphp
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="#"><img src="{{ asset("assets/images/resource/news-$id.jpg")}}" alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <h5>
                                        <a href="#">Top Technology Used to Develop Mobile App.</a>
                                    </h5>
                                    <div class="text">
                                        The time for sustainability is now while everyone is looking for companies ...
                                    </div>
                                    <a class="btn-style-tean theme-btn btn-item" href="http://127.0.0.1:8000/about">
                                        <div class="btn-wrap">
                                            <span class="text-one">Read more <i class="fas fa-plus"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

            </div>
        </section>
        <!-- Testimonial Section -->
        <section class="testimonial-section"  >
            <div class="pattern-layer-one" style="background-image: url({{ asset('assets/images/background/pattern-25.png')}}"></div>
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Title Column -->
                    <div class="title-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <!-- Sec Title -->
                            <div class="sec-title_two">
                                <div class="sec-title_two-title">Testimonials ~</div>
                                <h2 class="sec-title_two-heading">Here's what our <br> <span>customers</span> have said.</h2>
                                <div class="sec-title_two-text">Simplified IT is designed to help make sure you and your data is protected and your computer runs it's best. The network Access provides is valuable.</div>
                            </div>
                            <!-- Button Box -->
                            <div class="button-box">
                                <a class="btn-style-three theme-btn btn-item" href="#">
                                    <div class="btn-wrap">
                                        <span class="text-one">View More <i class="fa-solid fa-arrow-right fa-fw"></i></span>
                                        <span class="text-two">View More <i class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Column -->
                    <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column" style="background-image: url({{ asset('assets/images/background/pattern-26.png')}})">
                            <div class="authors-outer">
                                <div class="author-one">
                                    <img src="{{ asset('assets/images/resource/author-2.jpg')}}" alt="" />
                                </div>
                                <div class="author-two">
                                    <img src="{{ asset('assets/images/resource/author-3.jpg')}}" alt="" />
                                </div>
                                <div class="author-three">
                                    <img src="{{ asset('assets/images/resource/author-4.jpg')}}" alt="" />
                                </div>
                                <div class="author-four">
                                    <img src="{{ asset('assets/images/resource/author-5.jpg')}}" alt="" />
                                </div>
                            </div>
                            <div class="single-item-carousel owl-carousel owl-theme">
                                @for ($i=1; $i<=3; $i++)
                                    <!-- Testimonial Block -->
                                    <div class="testimonial-block">
                                        <div class="inner-box">
                                            <div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="text">“I To helped the client achieve their goal of calling the attention of mobile network operators. The expert team was also able to develop an app with commendable UI/UX. The client appreciates their flexibility in terms.”</div>
                                        </div>
                                        <div class="author-box">
                                            <div class="box-inner">
                                                <span class="author-image">
                                                    <img src="{{ asset("assets/images/resource/author-$i.jpg")}}" alt="" />
                                                </span>
                                                <h5>Arnold Burner</h5>
                                                <div class="designation">Senior Developer</div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Testimonial Section -->

@endsection
@section('javaScricpt')
    <script src="{{asset('assets/js/slide-show.js')}}"></script>
@endsection

