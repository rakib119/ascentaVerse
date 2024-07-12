<section class="fluid-one">
    <div class="outer-container d-flex align-items-center">
        <!-- Content Column -->
        <div class="fluid-one_content-column">
            <div class="fluid-one_column-inner">
                <!-- Sec Title -->
                <div class="row border-row">
                    @for ($i=1; $i<=3; $i++)
                        <div class="service-block_two col-lg-4 col-md-6 col-sm-12">
                            <div class="service-block_two-inner">
                                <div class="service-block_two-image">
                                    <img src="{{asset("assets/images/partners/h3-client$i.png")}}"
                                        alt="Partner {{$i}}" />
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="row border-row">
                    @for ($j=4; $j<=6; $j++)
                        <div class="service-block_two col-lg-4 col-md-6 col-sm-12">
                            <div class="service-block_two-inner">
                                <div class="service-block_two-image">
                                    <img src="{{asset("assets/images/partners/h3-client$j.png")}}"
                                        alt="Partner {{$j}}" />
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <!-- Content Column -->
        {{-- @include('fontend.section.homePageSection.s3Left.s3Left') --}}
        @include('fontend.section.homePageSection.s3Right.s3Right')
    </div>
</section>
