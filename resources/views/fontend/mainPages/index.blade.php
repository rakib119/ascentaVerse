@extends('fontend.layout.layout')
@section('css')
    <style>
        .slider-container {
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
            height: 80vh;
            width: 674.5px;
        }

        .slider-container::after {
            background-color: #000;
            content: '';
            position: absolute;
            opacity: 0.3;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 1;
        }

        .slide {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            height: 100%;
            width: 100%;
            transform: scale(1.15);
            transition: opacity .6s ease;
        }

        .slide.active {
            animation: grow 6s linear forwards;
            opacity: 1;
        }

        @keyframes grow {
            0%, 20% {
                transform: scale(1);
            }

            75%, 100% {
                transform: scale(1.15);
            }
        }

        /* .controls-container {
            position: absolute;
            top: 50%;
            right: 10px;
            display: flex;
            flex-direction: column;
            transform: translateY(-50%);
            z-index: 2;
        }

        .control {
            background-color: #fff;
            cursor: pointer;
            opacity: 0.5;
            margin: 6px;
            height: 40px;
            width: 5px;
            transition: opacity 0.3s, background-color 0.3s, transform 0.3s;
        }

        .control.active, .control:hover {
            background-color: #fff;
            opacity: 1;
            transform: scale(1.2);
        } */
    </style>
@endsection
@section('mainContent')
    <!-- Banner Section One -->
    <section class="fluid-one">
        <div class="outer-container d-flex">
            <!-- Content Column -->
            <div class="fluid-one_content-column">
                <div class="fluid-one_column-inner">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="sec-title_title">Who We Are?</div>
                        <h2 class="sec-title_heading">Our <span class="theme_color">penetration</span> testing <br> team uses an industry</h2>
                        <div class="sec-title_text">We provide the full spectrum of IT services and consulting for various industries.</div>
                    </div>
                </div>
            </div>
            <!-- Carousel Column -->
            {{-- <div class="fluid-one_carousel-column">
                <div class="fluid-one_carousel-inner">
                    <div class="single-item-carousel owl-carousel owl-theme">
                        <!-- Slide -->
                        <div class="slide">
                            <figure class="fluid-one_image"><img src="{{asset('assets/images/resource/fluid-1.jpg')}}" alt=""></figure>
                        </div>
                        <!-- Slide -->
                        <div class="slide">
                            <figure class="fluid-one_image"><img src="{{asset('assets/images/resource/fluid-2.jpg')}}" alt=""></figure>
                        </div>
                        <!-- Slide -->
                        <div class="slide">
                            <figure class="fluid-one_image"><img src="{{asset('assets/images/resource/fluid-3.jpg')}}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </> --}}
            <!-- Images from Unsplash -->

            <div class="fluid-one_carousel-column">
                <div class="slider-container">
                    <div class="slide" style="background-image: url('{{asset('assets/images/resource/fluid-1.jpg')}}')"></div>

                    <div class="slide" style="background-image: url('{{asset('assets/images/resource/fluid-2.jpg')}}')"></div>

                    <div class="slide" style="background-image: url('{{asset('assets/images/resource/fluid-3.jpg')}}')"></div>

                   {{--  <div class="controls-container">
                        <div class="control"></div>
                        <div class="control"></div>
                        <div class="control"></div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
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
    <!-- Team One -->
    <section class="team-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">Team Member222</div>
                <h2 class="sec-title_heading">Passionate Personalities, <br> <span class="theme_color">Versatile</span> Brains</h2>
            </div>
            <div class="row clearfix">
                @for ($i=1; $i<5; $i++)
                    <!-- Team One -->
                    <div class="grid-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 " style="position: absolute; left: 0%; top: 0px;">
                        <div class="grid-item-inner " data-wow-duration="1.2s" style="position: relative;z-index: 1; margin-top: 0;margin-bottom: 50px;">
                          <div class="item--featured">
                            <a href="https://demo.casethemes.net/itfirm/service/backup-recovery/">
                              <img loading="lazy" decoding="async" class="no-lazyload " src="https://demo.casethemes.net/itfirm/wp-content/uploads/2021/09/service7-220x220.jpg" width="220" height="220" alt="service7" title="service7">
                            </a>
                            <div class="item--icon">
                              <i class="flaticon-data-network"></i>
                            </div>
                          </div>
                          <div class="item--holder">
                            <h3 class="item--title">
                              <a href="https://demo.casethemes.net/itfirm/service/backup-recovery/"> Backup &amp; Recovery </a>
                            </h3>
                            <div class="item--content"> Our goal is to propel your to business forward…</div>
                            <div class="item-readmore">
                              <a class="btn btn-dark1" href="https://demo.casethemes.net/itfirm/service/backup-recovery/">Read more <i class="ct-icon-plus"></i>
                              </a>
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


        <div class="elementor-container elementor-column-gap-extended ">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9480e54 ct-column-none col-offset-none col-color-offset-none" data-id="9480e54" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
              <section class="elementor-section elementor-inner-section elementor-element elementor-element-fddd41d elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="fddd41d" data-element_type="section">
                <div class="elementor-container elementor-column-gap-extended ">
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1286bbb ct-column-none col-offset-none col-color-offset-none" data-id="1286bbb" data-element_type="column">
                    <div class="elementor-widget-wrap"></div>
                  </div>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2d3d389 ct-column-none col-offset-none col-color-offset-none" data-id="2d3d389" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-f4e151d elementor-widget elementor-widget-ct_heading" data-id="f4e151d" data-element_type="widget" data-widget_type="ct_heading.default">
                        <div class="elementor-widget-container">
                          <div id="ct_heading-f4e151d" class="ct-heading h-align-center item-st-default highlight-style1">
                            <div class="ct-heading--inner">
                              <div class="item--text-below"></div>
                              <div class="item--sub-title style-line-leftright " data-wow-delay="ms">
                                <span> What We Do </span>
                              </div>
                              <h3 class="item--title st-default " data-wow-delay="ms">
                                <span class="ct-text-inner">We Run all kinds of Service that your <cite class="ct-text-highlight"> Success </cite>
                                </span>
                              </h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-833a82f ct-column-none col-offset-none col-color-offset-none" data-id="833a82f" data-element_type="column">
                    <div class="elementor-widget-wrap"></div>
                  </div>
                </div>
              </section>
              <div class="elementor-element elementor-element-2c42201 elementor-widget elementor-widget-ct_service_grid" data-id="2c42201" data-element_type="widget" data-widget_type="ct_service_grid.default">
                <div class="elementor-widget-container">
                  <div id="ct_service_grid-2c42201" class="ct-grid ct-service-grid2" data-layout="masonry" data-start-page="1" data-max-pages="2" data-total="8" data-perpage="4" data-next-link="https://demo.casethemes.net/itfirm/home-2/page/2/">
                    <div class="ct-grid-inner ct-grid-masonry row animate-time" data-gutter="15" style="height: 474px;">
                      <div class="grid-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 " style="position: absolute; left: 0%; top: 0px;">
                        <div class="grid-item-inner " data-wow-duration="1.2s">
                          <div class="item--featured">
                            <a href="https://demo.casethemes.net/itfirm/service/backup-recovery/">
                              <img loading="lazy" decoding="async" class="no-lazyload " src="https://demo.casethemes.net/itfirm/wp-content/uploads/2021/09/service7-220x220.jpg" width="220" height="220" alt="service7" title="service7">
                            </a>
                            <div class="item--icon">
                              <i class="flaticon-data-network"></i>
                            </div>
                          </div>
                          <div class="item--holder">
                            <h3 class="item--title">
                              <a href="https://demo.casethemes.net/itfirm/service/backup-recovery/"> Backup &amp; Recovery </a>
                            </h3>
                            <div class="item--content"> Our goal is to propel your to business forward…</div>
                            <div class="item-readmore">
                              <a class="btn btn-dark1" href="https://demo.casethemes.net/itfirm/service/backup-recovery/">Read more <i class="ct-icon-plus"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="grid-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 " style="position: absolute; left: 25%; top: 0px;">
                        <div class="grid-item-inner " data-wow-duration="1.2s">
                          <div class="item--featured">
                            <a href="https://demo.casethemes.net/itfirm/service/voip-solutions/">
                              <img loading="lazy" decoding="async" class="no-lazyload " src="https://demo.casethemes.net/itfirm/wp-content/uploads/2021/09/service6-220x220.jpg" width="220" height="220" alt="service6" title="service6">
                            </a>
                            <div class="item--icon">
                              <i class="flaticon-voip"></i>
                            </div>
                          </div>
                          <div class="item--holder">
                            <h3 class="item--title">
                              <a href="https://demo.casethemes.net/itfirm/service/voip-solutions/"> VoIP Solutions </a>
                            </h3>
                            <div class="item--content"> Our goal is to propel your to business forward…</div>
                            <div class="item-readmore">
                              <a class="btn btn-dark1" href="https://demo.casethemes.net/itfirm/service/voip-solutions/">Read more <i class="ct-icon-plus"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="grid-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 " style="position: absolute; left: 50%; top: 0px;">
                        <div class="grid-item-inner " data-wow-duration="1.2s">
                          <div class="item--featured">
                            <a href="https://demo.casethemes.net/itfirm/service/it-consulting-planning/">
                              <img loading="lazy" decoding="async" class="no-lazyload " src="https://demo.casethemes.net/itfirm/wp-content/uploads/2021/09/service8-220x220.jpg" width="220" height="220" alt="service8" title="service8">
                            </a>
                            <div class="item--icon">
                              <i class="flaticon-database"></i>
                            </div>
                          </div>
                          <div class="item--holder">
                            <h3 class="item--title">
                              <a href="https://demo.casethemes.net/itfirm/service/it-consulting-planning/"> Consulting Planning </a>
                            </h3>
                            <div class="item--content"> Our goal is to propel your to business forward…</div>
                            <div class="item-readmore">
                              <a class="btn btn-dark1" href="https://demo.casethemes.net/itfirm/service/it-consulting-planning/">Read more <i class="ct-icon-plus"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="grid-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 " style="position: absolute; left: 75%; top: 0px;">
                        <div class="grid-item-inner " data-wow-duration="1.2s">
                          <div class="item--featured">
                            <a href="https://demo.casethemes.net/itfirm/service/it-consultency/">
                              <img loading="lazy" decoding="async" class="no-lazyload " src="https://demo.casethemes.net/itfirm/wp-content/uploads/2021/09/service5-220x220.jpg" width="220" height="220" alt="service5" title="service5">
                            </a>
                            <div class="item--icon">
                              <i class="flaticon-cloud"></i>
                            </div>
                          </div>
                          <div class="item--holder">
                            <h3 class="item--title">
                              <a href="https://demo.casethemes.net/itfirm/service/it-consultency/"> IT Consultency </a>
                            </h3>
                            <div class="item--content"> Our goal is to propel your to business forward…</div>
                            <div class="item-readmore">
                              <a class="btn btn-dark1" href="https://demo.casethemes.net/itfirm/service/it-consultency/">Read more <i class="ct-icon-plus"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="grid-sizer col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="elementor-element elementor-element-5fbe15e elementor-align-center elementor-widget elementor-widget-ct_button" data-id="5fbe15e" data-element_type="widget" data-widget_type="ct_button.default">
                <div class="elementor-widget-container">
                  <div id="ct_button-5fbe15e" class="ct-button-wrapper ct-button-layout1">
                    <span class="ct-icon-active"></span>
                    <a href="https://demo.casethemes.net/itfirm/services/" class="btn btn-primary wow fadeInUp icon-ps-right" data-wow-delay="40ms" style="visibility: visible; animation-delay: 40ms; animation-name: fadeInUp;">
                      <span class="ct-button-icon ct-icon-normal ct-align-icon-right">
                        <i aria-hidden="true" class="fas fa-plus"></i>
                      </span>
                      <span class="ct-button-text"> More Service </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
@section('javaScricp')
    <script>
        const slides = document.querySelectorAll('.slide');
        // const controls = document.querySelectorAll('.control');
        let activeSlide = 0;
        let prevActive = 0;

        changeSlides();
        let int = setInterval(changeSlides, 4000);

        function changeSlides() {
            slides[prevActive].classList.remove('active');
            // controls[prevActive].classList.remove('active');

            slides[activeSlide].classList.add('active');
            // controls[activeSlide].classList.add('active');

            prevActive = activeSlide++;

            if(activeSlide >= slides.length) {
                activeSlide = 0;
            }

            // console.log(prevActive, activeSlide);
        }

        /* controls.forEach(control => {
            control.addEventListener('click', () => {
                let idx = [...controls].findIndex(c => c === control);
                activeSlide = idx;

                changeSlides();

                clearInterval(int);
                int = setInterval(changeSlides, 4000);
            });
        }); */
    </script>
@endsection
