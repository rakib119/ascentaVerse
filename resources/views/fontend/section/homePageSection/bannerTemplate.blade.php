
<section class="fluid-one">
    <div class="outer-container d-flex">
        <!-- Content Column -->
        <div class="fluid-one_content-column">
            <div class="fluid-one_column-inner">
                @php
                    $title = preg_replace('/\*\*(.*?)\*\*/', "<span class='theme_color'>$1</span>", $data->title);
                @endphp
                <!-- Sec Title -->
                <div class="sec-title">
                    <div class="sec-title_title">{{$data->lebel}}</div>
                    <h2 class="sec-title_heading">{!! $title !!} <span class="theme_color"></span> <br></h2>
                    <div class="sec-title_text">{{$data->short_description}}</div>
                </div>
                <div class="d-flex">
                    <div class="button-box ">
                        <a class="btn-style-five theme-btn btn-item" href="{{$data->link1}}">
                            <div class="btn-wrap">
                                <span class="text-one">{{$data->btn1}}<i class="fa-solid fa-plus"></i></span>
                                <span class="text-two">{{$data->btn2}}<i class="fa-solid fa-plus"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="button-box" style="margin-left: 15px;">
                        <a class="btn-style-two theme-btn btn-item" href="{{$data->link2}}">
                            <div class="btn-wrap">
                                <span class="text-one">{{$data->btn2}}<i class="fa-solid fa-plus"></i></span>
                                <span class="text-two">{{$data->btn2}}<i class="fa-solid fa-plus"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="fluid-one_carousel-column">
            <div class="image-container-wrapper">
                <div class="image-container">
                    <div class="slider-container">
                        <div class="slide" style="background-image: url('{{asset('assets/images/resource/fluid-1.jpg')}}')"></div>

                        <div class="slide" style="background-image: url('{{asset('assets/images/resource/fluid-2.jpg')}}')"></div>

                        <div class="slide" style="background-image: url('{{asset('assets/images/resource/fluid-3.jpg')}}')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
