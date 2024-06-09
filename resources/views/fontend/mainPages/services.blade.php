@extends('fontend.layout.layout')
@section('mainContent')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{asset("assets/images/background/4.jpg")}})">
        <div class="auto-container">
            <h2>Services</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </section>
    <!-- Service Two -->
	<section class="service-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_title">Our Services</div>
				<h2 class="sec-title_heading">We provide the necessary <br> services to you</h2>
			</div>
			<div class="row clearfix">
                @for ($i=2; $i<10; $i++)
                    <!-- Service Block Two -->
                    <div class="service-block_two col-lg-3 col-md-6 col-sm-12">
                        <div class="service-block_two-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="service-block_two-image">
                                <img src="{{asset("assets/images/resource/service-$i.jpg")}}" alt="" />
                                <div class="service-block_two-overlay">
                                    <div class="service-block_two-icon"><img src="{{asset("assets/images/icons/service-$i.png")}}" alt="" /></div>
                                    <h5 class="service-block_two-title">Data Backup and Recovery</h5>
                                </div>
                                <div class="service-block_two-overlay-two">
                                    <div class="service-two_overlay-content">
                                        <h5 class="service-block_two-title"><a href="#">Managed IT Services</a></h5>
                                        <div class="service-block_two-text">Our goal is to propel your to business forward u world-class IT cybersecurity and technology We provide the expert solutions.</div>
                                        <a class="service-block_two-more" href="service-detail.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
			</div>
		</div>
	</section>
	<!-- End Service Two -->

	<!-- Fluid Section One -->
    <section class="fluid-one">
    	<div class="outer-container d-flex">

			<!-- Carousel Column -->
            <div class="fluid-one_carousel-column">
				<div class="fluid-one_carousel-inner">
					<div class="single-item-carousel owl-carousel owl-theme">
						<!-- Slide -->
                        @for ($i=1; $i<4; $i++)
                            <div class="slide">
                                <figure class="fluid-one_image"><img src="{{asset("assets/images/resource/fluid-1.jpg")}}" alt=""></figure>
                                <div class="fluid-one_content">
                                    <!-- Sec Title -->
                                    <div class="sec-title light">
                                        <div class="sec-title_title">Case Studies</div>
                                        <h2 class="sec-title_heading">Web And Mobile App Development </h2>
                                        <div class="sec-title_text">We deliver best-in-class web and mobile solutions that will retain the attention of the target audience.</div>
                                    </div>
                                    <a class="fluid-one_arrow fa-solid fa-arrow-right fa-fw theme-btn" href="#"></a>
                                </div>
                            </div>
                        @endfor
					</div>
				</div>
            </div>

            <!-- Content Column -->
            <div class="fluid-one_content-column">
            	<div class="fluid-one_column-inner">
					<!-- Sec Title -->
					<div class="sec-title">
						<div class="sec-title_title">Who We Are?</div>
						<h2 class="sec-title_heading">Our <span class="theme_color">penetration</span> testing <br> team uses an industry</h2>
						<div class="sec-title_text">We provide the full spectrum of IT services and consulting for various industries.</div>
					</div>
					<div class="row clearfix">

						<!-- Fluid Block One -->
						<div class="fluid-block_one col-lg-6 col-md-6 col-sm-12">
							<div class="fluid-block_icon">
								<img src="{{asset('assets/images/icons/fluid-1.png')}}" alt="" />
							</div>
							<h5 class="fluid-block_title">Digital Marketer</h5>
							<div class="fluid-block_text">Our customers get solutions and business opportunities instead of just projects. Our mission is to accelerate.</div>
						</div>

						<!-- Fluid Block One -->
						<div class="fluid-block_one col-lg-6 col-md-6 col-sm-12">
							<div class="fluid-block_icon">
								<img src="{{asset('assets/images/icons/fluid-2.png')}}" alt="" />
							</div>
							<h5 class="fluid-block_title">Global Entrepreneur</h5>
							<div class="fluid-block_text">Our customers get solutions and business opportunities instead of just projects. Our mission is to accelerate.</div>
						</div>

					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- End Fluid Section One -->
@endsection
