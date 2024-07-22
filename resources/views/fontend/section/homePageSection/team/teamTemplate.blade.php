<section class="team-section">
    <div class="team-heading py-5">
        <div class="sub-title ">{{$data->lebel}}</div>
        @php
            $title = preg_replace('/\*\*(.*?)\*\*/', "<span class='highlight'>$1</span>", $data->title);
        @endphp
        <div class="title mt-3">
            {!! $title !!}
        </div>
    </div>
    <div class="container mx-auto mt-4 tem">
        <div class="team-carousel owl-carousel owl-theme justify-content-center">
            @foreach ($teams as $v)
                @php
                    if ($v->is_displayed_in_home !=1) {continue;}
                @endphp
                <div class="member px-3">
                    <div class="card">
                        <div class="initial-view">
                            <img src="{{asset('assets/images/teams/'.$v->photo)}}"
                                class="card-img-top" alt="{{ $v->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $v->name }}</h5>
                                <p class="card-text">{{ $v->designation }}</p>
                                <a class="item--details"
                                    href="{{ route('team_details',$v->slug)}}">+</a>
                            </div>
                        </div>
                        <div class="detailed-view"
                            style="background-image: url({{asset('assets/images/teams/'.$v->photo)}}); background-size: cover;">
                            <div class="overlay"></div>
                            <div class="item--holder-inner">
                                <div class="item--desc"> {{ Str::substr($v->short_description,0, 40) }}...</div>
                                <h4 class="item--title"><a
                                        href="{{ route('team_details',$v->slug)}}">V{{ $v->name }}</a></h4>
                                <div class="item--position">{{ $v->designation }}</div>
                                <div class="item--social">
                                    <a href="{{$v->link1}}" target="_blank">{!! $iconArray[$v->icon1] !!}</a>
                                    <a href="{{$v->link2}}" target="_blank">{!! $iconArray[$v->icon2] !!}</a>
                                    <a href="{{$v->link3}}" target="_blank">{!! $iconArray[$v->icon3] !!}</a>
                                </div>
                                <div>
                                    <button class="btn btn-primary"
                                        style="background-color: #fff; color: black;">{{$v->button_name}} +</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="text-center service-btn">
        <a href="{{route('about')}}#teams" class="btn btn-primary">{{$data->btn1}} <i
                class="fas fa-plus"></i></a>
    </div>
</section>
