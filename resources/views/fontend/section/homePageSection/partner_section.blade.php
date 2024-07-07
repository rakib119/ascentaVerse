<section class="fluid-one">
    <div class="outer-container d-flex align-items-center">
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
        {{-- @include('fontend.section.homePageSection.s3Left.s3Left') --}}
        @include('fontend.section.homePageSection.s3Right.s3Right')
    </div>
</section>
