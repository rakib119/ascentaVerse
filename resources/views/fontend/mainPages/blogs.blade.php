@extends('fontend.layout.layout')
@section('mainContent')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{asset("assets/images/background/3.jpg")}})">
        <div class="auto-container">
			<h2>Our Blog</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{route('home')}}">Home</a></li>
				<li>Our Blog</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<section class="news-page">
		<div class="auto-container">
			<div class="row clearfix">
				@for ($i=1; $i<7; $i++)
                    <div class="news-block_one col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="news-block_one-inner">
                            <div class="news-block_one-image">
                                <a href="blog-detail.html"><img src="{{asset("assets/images/resource/news-$i.jpg")}}" alt="" /></a>
                            </div>
                            <div class="news-block_one-content">
                                <ul class="news-block_one-info">
                                    <li><span class="news-block_one-icon fa fa-regular fa-calendar fa-fw"></span>September 12, 2019</li>
                                    <li><span class="news-block_one-icon fa fa-solid fa-user fa-fw"></span>Admin</li>
                                </ul>
                                <h5 class="news-one_heading"><a href="blog-detail.html">Regional Manager & limited time management.</a></h5>
                                <div class="news-one_text">Regional Manager & limited time management.</div>
                                <!-- Button Box -->
                                <div class="news-one_button-box text-center">
                                    <a class="theme-btn news-one_load-btn" href="blog-detail.html">
                                        Load more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
			</div>

			<!-- Pagination Outer -->
			<div class="pagination-outer text-center">
				<ul class="pagination">
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#"><span class="fa-solid fa-chevron-right fa-fw"></span></a></li>
				</ul>
			</div>

		</div>
	</section>

	<!-- Clients Three -->
	<section class="clients-three">
		<div class="auto-container">
			<div class="clients-three_inner-container">
				<!-- Sponsors Carousel -->
				<ul class="sponsors-carousel-two owl-carousel owl-theme">
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="images/clients/15.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="images/clients/16.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="images/clients/17.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="images/clients/18.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="images/clients/15.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="images/clients/16.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="images/clients/17.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="images/clients/18.png" alt=""></a></figure></li>
				</ul>
			</div>
		</div>
	</section>
@endsection
