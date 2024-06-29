@extends('fontend.layout.layout')
@section('css')

    <style>
      :root {
        --main-color: #3630ff;
        --accent-color: #9000ff;
        --highlight-color: #08d9ff;
      }
      .team-member {
        position: relative;
        overflow: hidden;
        transition: transform 0.3s;
      }
      .team-member img {
        width: 100%;
        height: auto;
      }
      .team-info {
        text-align: center;
        padding: 20px;
      }
      .team-info h4 {
        margin: 10px 0;
        color: var(--main-color);
      }
      .team-info .position {
        color: var(--accent-color);
      }
      .team-hover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(54, 48, 255, 0.8);
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        opacity: 0;
        transition: opacity 0.3s;
      }
      .team-hover .social-links a {
        margin: 0 5px;
        color: #fff;
      }
      .team-member:hover .team-hover {
        opacity: 1;
      }
    </style>
@endsection
@section('mainContent')
    @include('fontend.section.homePageSection.banner_section') {{-- Banner Section --}}

    <!-- End Banner Section One -->
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
                <div class="about-one_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="about-one-image-inner">
                        <div class="about-one_color-layer"></div>
                        <div class="about-cicle_layer">
                            <img src="{{asset('assets/images/icons/circle-layer.png')}}" alt="" />
                        </div>
                        <div class="about-one_image">
                            <img src="{{asset('assets/images/resource/about-1.jpg')}}" alt="" />
                        </div>
                        <div class="about-one_bold-text">About us</div>
                        <div class="about-one_image-text">We are a certified IT Service company.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About One -->
    <!-- Fluid Section One -->
    <section class="fluid-one">
        <div class="outer-container d-flex">
            <!-- Content Column -->
            <div class="fluid-one_content-column">
                <div class="fluid-one_column-inner row">
                    <!-- Sec Title -->
                    @for ($i=1; $i<=6; $i++)
                        <div class="service-block_two col-lg-4 col-md-6 col-sm-12">
                            <div class="service-block_two-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="service-block_two-image">
                                    <img src="{{asset("assets/images/partners/h3-client$i.png")}}" alt="{{asset("partn")}}" />
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <!-- Content Column -->
            <div class="fluid-one_content-column">
                <div class="fluid-one_column-inner">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="sec-title_title">Our Partners</div>
                        <h2 class="sec-title_heading">Long Time Project, with <br> <span class="theme_color"> Our Best Partner</span></h2>
                        <div class="sec-title_text">We’ve been lucky to collaborate with a long list of customers, located in and out of the country. Thanks to them we have grown as professionals.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fluid Section One -->
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
                                <div class="bg-white rounded shadow-sm py-5 px-4" style="margin-bottom: 5rem;">
                                    <img style="width: 200px; height:200px;" src="{{asset("assets/images/resource/team-$i.jpg")}}" alt="" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" />
                                </div>
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
    <!-- Team One -->
    <section class="team-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">Team Member2</div>
                <h2 class="sec-title_heading">Passionate Personalities, <br> <span class="theme_color">Versatile</span> Brains</h2>
            </div>
            <div class="row clearfix">
                @for ($i=1; $i<5; $i++)
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="team-member">
                        <div class="bg-white rounded shadow-sm py-5 px-4" style="margin-bottom: 5rem;">
                            <img style="width: 200px; height:200px;" src="{{asset("assets/images/resource/team-$i.jpg")}}" alt="" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" />
                        </div>
                      <div class="team-info">
                        <h4>Veronica Johnson</h4>
                        <div class="position">Web Developer</div>
                      </div>
                      <div class="team-hover">
                          <div  >
                            {{-- style="background: url('{{asset("assets/images/resource/team-$i.jpg")}}');background-repeat: no-repeat;  background-size: auto; " --}}

                            <p>Lead the team of passionate developers, designers and the strategists with a thought.</p>
                            <div class="social-links">
                                <a href="#" target="_blank"><i class="fa-brands fa-facebook-f fa-fw"></i></a>
                                <a href="#" target="_blank"><i class="fa-brands fa-twitter fa-fw"></i></a>
                                <a href="#" target="_blank"><i class="fa-brands fa fa-dribbble fa-fw"></i></a>
                            </div>
                            <a class="btn btn-primary mt-2" href="#">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endfor
            </div>
        </div>
    </section>
    <!-- End Team One -->
    <!-- Services Two -->
    <section class="services-two">
        <div class="bubble-dotted">
            <span class="dotted dotted-1"></span>
            <span class="dotted dotted-2"></span>
            <span class="dotted dotted-3"></span>
            <span class="dotted dotted-4"></span>
            <span class="dotted dotted-5"></span>
            <span class="dotted dotted-6"></span>
            <span class="dotted dotted-7"></span>
            <span class="dotted dotted-8"></span>
            <span class="dotted dotted-9"></span>
            <span class="dotted dotted-10"></span>
        </div>
        <div class="auto-container">
            <!-- Sec Title Three -->
            <div class="sec-title_three centered">
                <div class="sec-title_three-big_title">Services</div>
                <div class="sec-title_three-title">Awesome Services</div>
                <h2 class="sec-title_three-heading">Our Awesome <span>services</span> to <br> give you success.</h2>
                <div class="sec-title_three-text">An IT firm or MSP who keeps your IT running smoothly.</div>
            </div>
            <div class="services-carousel owl-carousel owl-theme">
                <!-- Service Block Four -->
                @for ($i=1; $i<5; $i++)
                    <div class="service-block_four">
                        <div class="service-block_four-inner">
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
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <!-- End Services Two -->

    {{-- <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false"
                aria-controls="flush-collapseOne">
            Accordion Item #1
            </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse"
            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended
                to demonstrate the <code>.accordion-flush</code> class. This is the first item's
                accordion body.
            </div>
        </div>
        </div>
        <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                aria-controls="flush-collapseTwo">
            Accordion Item #2
            </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse"
            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended
                to demonstrate the <code>.accordion-flush</code> class. This is the second item's
                accordion body. Let's imagine this being filled with
                some actual content.
            </div>
        </div>
        </div>
        <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree" aria-expanded="false"
                aria-controls="flush-collapseThree">
            Accordion Item #3
            </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse"
            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended
                to demonstrate the <code>.accordion-flush</code> class. This is the third item's
                accordion body. Nothing more exciting happening here
                in terms of content, but just filling up the space to make it look, at least at
                first glance, a bit more representative of how this would look in a real-world
                application.
            </div>
        </div>
        </div>
    </div> --}}
@endsection
@section('javaScricpt')
    <script src="{{asset('assets/js/slide-show.js')}}"></script>
@endsection

