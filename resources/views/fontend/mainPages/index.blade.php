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
    @include('fontend.section.homePageSection.blog.blog')               {{-- Team Section --}}

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
                           {{--  <div class="button-box">
                                <a class="btn-style-three theme-btn btn-item" href="#">
                                    <div class="btn-wrap">
                                        <span class="text-one">View More <i class="fa-solid fa-arrow-right fa-fw"></i></span>
                                        <span class="text-two">View More <i class="fa-solid fa-arrow-right fa-fw"></i></span>
                                    </div>
                                </a>
                            </div> --}}
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

