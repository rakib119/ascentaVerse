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
                            <div>
                                <div class="sub-title">What We Do</div>
                                <div class="title">We Run all kinds of Service that your <span
                                        class="highlight">Success</span>
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

        <!-- tem member section start -->
        <section class="team-section">
            <div class="team-heading">
                <div class="sub-title">Team Member</div>
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
        <!-- tem member section end -->
        <!-- one start -->
        <section class="fluid-one">
            <div class="outer-container d-flex align-items-center">
                <!-- Content Column -->
                <div class="fluid-one_content-column">
                    <div class="fluid-one_column-inner">
                        <!-- Image Blocks -->
                        <div class="row border-row">
                            <div class="service-block_two col-lg-4 col-md-6 col-sm-12">
                                <div class="service-block_two-inner">
                                    <div class="service-block_two-image">
                                        <img src="https://ascentaverse.com/assets/images/partners/h3-client1.png"
                                            alt="Partner 1" />
                                    </div>
                                </div>
                            </div>
                            <div class="service-block_two col-lg-4 col-md-6 col-sm-12">
                                <div class="service-block_two-inner">
                                    <div class="service-block_two-image">
                                        <img src="https://ascentaverse.com/assets/images/partners/h3-client2.png"
                                            alt="Partner 2" />
                                    </div>
                                </div>
                            </div>
                            <div class="service-block_two col-lg-4 col-md-6 col-sm-12">
                                <div class="service-block_two-inner">
                                    <div class="service-block_two-image">
                                        <img src="https://ascentaverse.com/assets/images/partners/h3-client3.png"
                                            alt="Partner 3" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border-row">
                            <div class="service-block_two col-lg-4 col-md-6 col-sm-12">
                                <div class="service-block_two-inner">
                                    <div class="service-block_two-image">
                                        <img src="https://ascentaverse.com/assets/images/partners/h3-client4.png"
                                            alt="Partner 4" />
                                    </div>
                                </div>
                            </div>
                            <div class="service-block_two col-lg-4 col-md-6 col-sm-12">
                                <div class="service-block_two-inner">
                                    <div class="service-block_two-image">
                                        <img src="https://ascentaverse.com/assets/images/partners/h3-client5.png"
                                            alt="Partner 5" />
                                    </div>
                                </div>
                            </div>
                            <div class="service-block_two col-lg-4 col-md-6 col-sm-12">
                                <div class="service-block_two-inner">
                                    <div class="service-block_two-image">
                                        <img src="https://ascentaverse.com/assets/images/partners/h3-client6.png"
                                            alt="Partner 6" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Column -->
                <div class="fluid-one_content-column">
                    <div class="fluid-one_column-inner">
                        <div class="sec-title">
                            <div class="sec-title_title">Our Partners</div>
                            <h2 class="sec-title_heading">Long Time Project, with <br> <span class='theme_color'>Our
                                    Best Partner</span> <br></h2>
                            <div class="sec-title_text">We’ve been lucky to collaborate with a long list of customers,
                                located in and out of the country. Thanks to them we have grown as professionals</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- one end -->

        <section class="fluid-one">
            <div class="faq-title">
                <div class="faq-subheading">FAQs</div>
                <h2 class="faq-heading">Frequently Asked Questions</h2>
            </div>
            <div class="outer-container d-flex align-items-center">
                <!-- FAQ Column -->
                <div class="faq-column">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
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

                <!-- Partners Column -->
                <div class="fluid-one_content-column">
                    <div class="fluid-one_column-inner">
                        <div class="sec-title">
                            <div class="sec-title_title">Our Partners</div>
                            <h2 class="sec-title_heading">Long Time Project, with <br> <span class='theme_color'>Our
                                    Best Partner</span> <br></h2>
                            <div class="sec-title_text">We’ve been lucky to collaborate with a long list of customers,
                                located in and out of the country. Thanks to them we have grown as professionals.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
@section('javaScricpt')
    <script src="{{asset('assets/js/slide-show.js')}}"></script>
@endsection

