<section class="news-page">
    <div class="auto-container">
        <div class="row clearfix">
            @foreach ($blogs as $v)
                @php
                    $dtls_link = route('blog-details',$v->slug);
                @endphp
                <div class="news-block_one col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="news-block_one-inner">
                        <div class="news-block_one-image">
                            <a href="{{ $dtls_link }}"><img src="{{ asset('assets/images/blogs/'.$v->thumbnail)}}" alt="{{$v->title}}" /></a>
                        </div>
                        <div class="news-block_one-content">

                            <h5 class="news-one_heading"><a href="{{ $dtls_link }}">{{$v->title}}</a></h5>
                            <div class="news-one_text">{{ Str::substr($v->short_description, 0, 50).'...'  }}</div>
                            <!-- Button Box -->
                            <div class="news-one_button-box text-center">
                                <a class="theme-btn news-one_load-btn" href="{{ $dtls_link }}">
                                    {{$v->button_name}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination Outer -->
        {{-- <div class="pagination-outer text-center">
            <ul class="pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#"><span class="fa-solid fa-chevron-right fa-fw"></span></a></li>
            </ul>
        </div> --}}

    </div>
</section>
