<div class="fluid-one_carousel-column">
    <div class="image-container-wrapper">
        <div class="image-container">
            <div class="slider-container">
                @foreach ($banners as $v)
                    <div class="slide" style="background-image: url('{{asset('assets/images/banners/'.$v->image_name)}}'"></div>
                @endforeach
            </div>
        </div>
    </div>
</div>
