@extends('fontend.layout.layout')
@section('mainContent')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{asset("assets/images/background/2.jpg")}})">
        <div class="auto-container">
            <h2>About us</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>About us</li>
            </ul>
        </div>
    </section>
    <!-- About One -->
	<section class="about-one">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Content Column -->
				<div class="about-one_content col-lg-6 col-md-12 col-sm-12">
					<div class="about-one_content-inner">
						<div class="sec-title">
							<div class="sec-title_title">About us</div>
							<h2 class="sec-title_heading">Choose <span>The Best</span> IT <br> Service Company</h2>
							<div class="sec-title_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempo rincididunt ut labore et dolore magna.</div>
						</div>

						<!-- About Info Tabs -->
						<div class="about-info-tabs">
							<!-- About Tabs -->
							<div class="about-tabs tabs-box">

								<!-- Tab Btns -->
								<ul class="tab-btns tab-buttons clearfix">
									<li data-tab="#prod-mission" class="tab-btn active-btn">Our Mission</li>
									<li data-tab="#prod-vision" class="tab-btn">Our Vision</li>
									<li data-tab="#prod-value" class="tab-btn">Our Value</li>
								</ul>

								<!-- Tabs Container -->
								<div class="tabs-content">

									<!-- Tab / Active Tab -->
									<div class="tab active-tab" id="prod-mission">
										<div class="content">
											<div class="text">An IT firm or MSP who keeps your IT running smoothly at all times is like a plumber who fixes your pipes; that’s what they are supposed to do. Many IT firms struggle to keep themselves and their IT from falling apart. We’ve raised the standards in this industry and are a leading cybersecurity.</div>
										</div>
									</div>

									<!-- Tab -->
									<div class="tab" id="prod-vision">
										<div class="content">
											<div class="text">An IT firm or MSP who keeps your IT running smoothly at all times is like a plumber who fixes your pipes; that’s what they are supposed to do. Many IT firms struggle to keep themselves and their IT from falling apart. We’ve raised the standards in this industry and are a leading cybersecurity.</div>
										</div>
									</div>

									<!-- Tab -->
									<div class="tab" id="prod-value">
										<div class="content">
											<div class="text">An IT firm or MSP who keeps your IT running smoothly at all times is like a plumber who fixes your pipes; that’s what they are supposed to do. Many IT firms struggle to keep themselves and their IT from falling apart. We’ve raised the standards in this industry and are a leading cybersecurity.</div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<!-- About One Detail -->
						<a class="about-one_detail lightbox-video" href="https://www.youtube.com/watch?v=kxPCFljwJws">
							Check details about our company
							<span class="play-icon"><span class="fa-solid fa-play fa-fw"></span><i class="ripple"></i></span>
						</a>

					</div>
				</div>
				<!-- Image Column -->
				<div class="about-one_image-column-two col-lg-6 col-md-12 col-sm-12">
					<div class="about-one-image-inner-two">
						<div class="about-cicle_layer-two">
							<img src="{{asset('assets/images/background/pattern-45.png')}}" alt="" />
						</div>
						<div class="about-one_image-two">
							<!-- Counter Column -->
							<div class="about-one_counter-block">
								<div class="dots-layer" style="background-image:url({{asset('assets/images/icons/about-dots.png')}})"></div>
								<div class="about-one_counter-number"><span class="odometer" data-count="12"></span></div>
								<div class="about-one_counter-text">years of <br> experiences</div>
							</div>
							<img src="{{asset('assets/images/resource/about-4.jpg')}}" alt="" />
							<div class="about-one_award">
								<div class="about-one_award-inner">
									<div class="about-one_award-icon">
										<img src="{{asset('assets/images/icons/award.png')}}" alt="" />
									</div>
									<strong>Best Awarded Company</strong>
									We adapt our delivery to the way your work, whether as an external provider.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About One -->

	<!-- Process One -->
	<section class="process-one">
		<div class="auto-container">
			<div class="process-one_inner-conatiner">
				<div class="four-item-carousel owl-carousel owl-theme">
					<!-- Process Column -->
                    @for ($i=1;$i<6; $i++)
                        <div class="process-one_block">
                            <div class="process-one_block-inner">
                                <div class="process-one_image">
                                    <img src="{{asset("assets/images/resource/process-$i.png")}}" alt="" />
                                </div>
                                <div class="process-one_year">201{{$i}}</div>
                                <h5 class="process-one_heading">Started business</h5>
                                <div class="process-one_text">A People Ops leader who is committed to the growth and development of leaders.</div>
                            </div>
                        </div>
                    @endfor
				</div>
			</div>
		</div>
	</section>
	<!-- End Process One -->

	<!-- Team One -->
	<section class="team-one">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_title">Team Member</div>
				<h2 class="sec-title_heading">Passionate Personalities, <br> <span class="theme_color">Versatile</span> Brains</h2>
			</div>
			<div class="row clearfix">
                @for ($i=1; $i<5; $i++)
                    <!-- Team One -->
                    <div class="team_one col-lg-3 col-md-6 col-sm-12">
                        <div class="team_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="team_one-image">
                                <img src="{{asset("assets/images/resource/team-$i.jpg")}}" alt="" />
                                <div class="team_one-content">
                                    <h5 class="team-one_title"><a href="team-detail.html">Ashish Sudra</a></h5>
                                    <div class="team-one_designation">Founder & CEO</div>
                                </div>

                                <div class="team_one-overlay">
                                    <div class="team-one_overlay-content">
                                        <div class="team_one-text">Our goal is to propel your to business forward u world-class IT cybersecurity and technology We provide the expert solutions.</div>
                                        <a class="team_one-more" href="team-detail.html">Read more</a>
                                    </div>
                                </div>

                            </div>
                            <!-- Social Box -->
                            <ul class="team-one_social">
                                <li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
                                <li><a href="https://www.twitter.com/" class="fa-brands fa-twitter fa-fw"></a></li>
                                <li><a href="https://dribbble.com/" class="fa-brands fa fa-dribbble fa-fw"></a></li>
                            </ul>
                        </div>
                    </div>
                @endfor
			</div>
		</div>
	</section>
	<!-- End Team One -->

	<!-- Testimonial Three -->
	<section class="testimonial-three">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Carousel Column -->
				<div class="testimonial-three_carousel-column col-lg-6 col-md-12 col-sm-12">
					<div class="testimonial-three_carousel-inner">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="sec-title_title">Team Member</div>
							<h2 class="sec-title_heading">Passionate Personalities, <br> <span class="theme_color">Versatile</span> Brains</h2>
						</div>
						<div class="testimonial-three_review">Clients Reviews:</div>
						<div class="single-item-carousel owl-carousel owl-theme">
                            @for ($i=1; $i<4; $i++)
                                <!-- Testimonial Block Three -->
                                <div class="testimonial-block_three">
                                    <div class="testimonial-block_three-inner">
                                        <div class="testimonial-block_three-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo rincididunt ut labore et dolore magna aliqua. Quis suspendisse onsectetur adipiscing.”</div>

                                        <div class="author-box">
                                            <div class="box-inner">
                                                <span class="author-image">
                                                    <img src="{{asset("assets/images/resource/author-$i.jpg")}}" alt="" />
                                                </span>
                                                <h5>Arnold Burner</h5>
                                                <div class="designation">Formar Manager, Intime</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endfor
						</div>
					</div>
				</div>
				<!-- Image Column -->
				<div class="testimonial-three_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="testimonial-three_image-inner">
						<div class="testimonial-three_image">
							<img src="{{asset("assets/images/resource/testimonial-2.png")}}" alt="" />
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Testimonial Three -->
@endsection
@section('javaScricpt')
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/667870459d7f358570d28c3a/1i137d4cn';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
@endsection
