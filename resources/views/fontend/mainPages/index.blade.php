@extends('fontend.layout.layout')
@section('css')

@endsection
@section('mainContent')
    @include('fontend.section.homePageSection.banner_section')          {{-- Banner Section --}}
    @include('fontend.section.homePageSection.s2About.about_section')   {{-- About Section --}}
    @include('fontend.section.homePageSection.partner_section')         {{-- Partner Section --}}

        <!-- Services Section START-->
        <section class="services-card-section">
            <div class="container">
                <!-- Header Section -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-header-section mx-auto">
                            <div class="py-5">
                                <div class="sub-title ">What We Do</div>
                                <div class="title mt-3">
                                    We Run all kinds of Service that your <span class="highlight">Success</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-custom h-100">
                            <img src="https://demo.casethemes.net/itfirm/wp-content/uploads/2021/09/service7-220x220.jpg"
                                class="card-img-top mx-auto" alt="Backup & Recovery">
                            <div class="card-body">
                                <div class="card-icon">
                                    <i class="fas fa-database fa-2x text-primary"></i>
                                </div>
                                <div class="card-center">
                                    <h5 class="card-title">Backup & Recovery</h5>
                                    <p class="card-text">Our goal is to propel your to business forward…</p>
                                    <a class="btn-style-tean theme-btn btn-item" href="http://127.0.0.1:8000/about">
                                        <div class="btn-wrap">
                                            <span class="text-one">Read more <i class="fas fa-plus"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-custom h-100">
                            <img src="https://demo.casethemes.net/itfirm/wp-content/uploads/2021/09/service6-220x220.jpg"
                                class="card-img-top mx-auto" alt="VoIP Solutions">
                            <div class="card-body">
                                <div class="card-icon">
                                    <i class="fas fa-phone fa-2x text-primary"></i>
                                </div>
                                <div class="card-center">
                                    <h5 class="card-title">VoIP Solutions</h5>
                                    <p class="card-text">Our goal is to propel your to business forward…</p>
                                    <a class="btn-style-tean theme-btn btn-item" href="http://127.0.0.1:8000/about">
                                        <div class="btn-wrap">
                                            <span class="text-one">Read more <i class="fas fa-plus"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-custom h-100">
                            <img src="https://demo.casethemes.net/itfirm/wp-content/uploads/2021/09/service8-220x220.jpg"
                                class="card-img-top mx-auto" alt="Consulting Planning">
                            <div class="card-body">
                                <div class="card-icon">
                                    <i class="fas fa-chart-line fa-2x text-primary"></i>
                                </div>
                                <div class="card-center">
                                    <h5 class="card-title">Consulting Planning</h5>
                                    <p class="card-text">Our goal is to propel your to business forward…</p>
                                    <a class="btn-style-tean theme-btn btn-item" href="http://127.0.0.1:8000/about">
                                        <div class="btn-wrap">
                                            <span class="text-one">Read more <i class="fas fa-plus"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-custom h-100">
                            <img src="https://demo.casethemes.net/itfirm/wp-content/uploads/2021/09/service5-220x220.jpg"
                                class="card-img-top mx-auto" alt="IT Consultency">
                            <div class="card-body">
                                <div class="card-icon">
                                    <i class="fas fa-cloud fa-2x text-primary"></i>
                                </div>
                                <div class="card-center">
                                    <h5 class="card-title">IT Consultency</h5>
                                    <p class="card-text">Our goal is to propel your to business forward…</p>
                                    <a class="btn-style-tean theme-btn btn-item" href="http://127.0.0.1:8000/about">
                                        <div class="btn-wrap">
                                            <span class="text-one">Read more <i class="fas fa-plus"></i></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center service-btn">
                    <a href="https://demo.casethemes.net/itfirm/services/" class="btn btn-primary">More Service <i
                            class="fas fa-plus"></i></a>
                </div>
            </div>
        </section>
        <!-- Services Section END-->
        <!-- Faq section end -->
        <section class="fluid-one">
            <div class="faq-title mt-5">
                <div class="faq-subheading pt-3">FAQs</div>
                <h2 class="faq-heading">Frequently Asked Questions</h2>
            </div>

            <div class="outer-container d-flex align-items-center">
                <!-- FAQ Column -->
                <div class="faq-column">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Accordion Item #4
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the fourth item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Accordion Item #5
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the fifth item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-one_form-column col-lg-6 col-md-12 col-sm-12">
					<div class="contact-one_form-inner">
						<!-- Default Form -->
						<div class="default-form">
							<form method="post" action="https://html.themexriver.com/it-firm/contact.html">
								<div class="row clearfix">

									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="username" placeholder="Your Name" required="">
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="username" placeholder="Web Address" required="">
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<input type="text" name="email" placeholder="Email Address" required="">
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<textarea class="" name="message" placeholder="Type Your Message"></textarea>
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<!-- Button Box -->
										<div class="button-box">
											<button class="theme-btn btn-style-seven">
												<span class="btn-wrap">
													<span class="text-one">Send Message Now</span>
													<span class="text-two">Send Message Now</span>
												</span>
											</button>
										</div>
									</div>

								</div>
							</form>
						</div>
						<!-- End Default Form -->
					</div>
				</div>

            </div>
        </section>
        <!-- team member section start -->
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
                                <img src="https://demo.casethemes.net/itfirm/wp-content/uploads/2021/11/h3-team1-av-260x260.jpg"
                                    class="card-img-top" alt="Veronica Johnson">
                                <div class="card-body">
                                    <h5 class="card-title">Veronica Johnson</h5>
                                    <p class="card-text">Web Developer</p>
                                    <a class="item--details"
                                        href="https://demo.casethemes.net/itfirm/team-details/">+</a>
                                </div>
                            </div>
                            <div class="detailed-view"
                                style="background-image: url('https://demo.casethemes.net/itfirm/wp-content/uploads/2021/11/h3-team1.jpg'); background-size: cover;">
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
        <!-- team member section end -->

        <section class="testimonial-two">
            <div class="testimonial-two_pattern" data-parallax='{"y" : 60}' style="background-image:url({{asset('assets/images/background/pattern-44.png')}})"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Carousel Column -->
                    <div class="testimonial-two_carousel-column col-lg-6 col-md-12 col-sm-12">
                        <div class="testimonial-two_carousel-inner">
                            <!-- Sec Title Three -->
                            <div class="sec-title_three">
                                <div class="sec-title_three-title mt-3">Testimonials</div>
                                <h2 class="sec-title_three-heading">We have many good <br> <span>client’s</span> review</h2>
                            </div>
                            <div class="single-item-carousel owl-carousel owl-theme">

                                <!-- Testimonial Block Two -->
                                <div class="testimonial-block_two">
                                    <div class="testimonial-block_two-inner">
                                        <span class="testimonial-block_two-quote"><img src="{{asset('assets/images/icons/quote.png')}} " alt="" /></span>
                                        <div class="testimonial-block_two-author">
                                            <img src="{{asset('assets/images/resource/author-10.jpg')}} " alt="" />
                                        </div>
                                        <div class="testimonial-block_two-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</div>
                                        <div class="testimonial-block_two-author-name">Arnold Burner</div>
                                        <div class="testimonial-block_two-designation">Senior Developer</div>
                                    </div>
                                </div>

                                <!-- Testimonial Block Two -->
                                <div class="testimonial-block_two">
                                    <div class="testimonial-block_two-inner">
                                        <span class="testimonial-block_two-quote"><img src="{{asset('assets/images/icons/quote.png')}} " alt="" /></span>
                                        <div class="testimonial-block_two-author">
                                            <img src="{{asset('assets/images/resource/author-10.jpg')}} " alt="" />
                                        </div>
                                        <div class="testimonial-block_two-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</div>
                                        <div class="testimonial-block_two-author-name">Arnold Burner</div>
                                        <div class="testimonial-block_two-designation">Senior Developer</div>
                                    </div>
                                </div>

                                <!-- Testimonial Block Two -->
                                <div class="testimonial-block_two">
                                    <div class="testimonial-block_two-inner">
                                        <span class="testimonial-block_two-quote"><img src="{{asset('assets/images/icons/quote.png')}} " alt="" /></span>
                                        <div class="testimonial-block_two-author">
                                            <img src="{{asset('assets/images/resource/author-10.jpg')}}" alt="" />
                                        </div>
                                        <div class="testimonial-block_two-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</div>
                                        <div class="testimonial-block_two-author-name">Arnold Burner</div>
                                        <div class="testimonial-block_two-designation">Senior Developer</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Image Column -->
                    <div class="testimonial-two_image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="testimonial-two_image-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="testimonial-two_image">
                                <img src="{{asset('assets/images/resource/testimonial-1.png')}} " alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                                    <div class="post-date">June 10, 2021</div>
                                    <h5><a href="#">Top Technology Used to Develop Mobile App.</a></h5>
                                    <div class="text">The time for sustainability is now while everyone is looking for companies ...</div>
                                    <div class="lower-box">
                                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                                            <div class="author">
                                                <span class="author-image"><img src="{{ asset('assets/images/icons/news-icon.png')}}" alt="" /></span>
                                                Rayan Colins
                                            </div>
                                            <a href="#" class="detail">More Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

            </div>
        </section>
        <!-- Testimonial Section -->
        <section class="testimonial-section" style="background-image: url({{ asset('assets/images/background/5.jpg')}})">
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

