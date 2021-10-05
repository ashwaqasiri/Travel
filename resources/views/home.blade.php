@extends('layouts.app')
@section('title', 'Home')
@section('content')
  <!-- Hero Area -->
  <div class="welcome-area welcome-area--l7 bg-default position-relative dark-mode-texts" style="background-image: url(./image/home-6/hero-l7-bg.png);">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-xl-9">
            <div class="welcome-area___content text-center">
              <h1 class="welcome-area--l7__heading" data-aos="fade-up" data-aos-duration="500" data-aos-delay="50" data-aos-once="true">Create your Digital Presence, Increase your business growth</h1>
              <p class="welcome-area--l7__descriptions" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true">Get a website to be found on the first page of Google to avoid<br class="d-none d-xs-block"> missing out on potential visitors
                        and sales. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ .Hero Area -->
    <!-- City Area -->
    <section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="heading-section mb-5" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Carousel #03</h2>
					</div>
        
					<div class="col-md-12" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
						<div class="featured-carousel owl-carousel">
              @foreach($cities as $city)
                <div class="item">
                  <div class="work">
                      <!-- https://laracasts.com/discuss/channels/laravel/dynamic-css-background-image -->
                    <div class="img d-flex align-items-end justify-content-center" style="background-image: url('{{ asset('/thumbnail/' . $city->image) }}')">
                      <div class="text w-100">
                        <span class="cat">{{$city->region}}</span>
                        <h3><a href="{{route('city.show',$city->id)}}">{{$city->name}}</a></h3>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
							<!-- <div class="item">
								<div class="work">
									<div class="img d-flex align-items-end justify-content-center" style="background-image: url(image/work-2.jpg);">
										<div class="text w-100">
											<span class="cat">Web Design</span>
											<h3><a href="#">Working Spaces for Startups Freelancer</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="work">
									<div class="img d-flex align-items-end justify-content-center" style="background-image: url(image/work-3.jpg);">
										<div class="text w-100">
											<span class="cat">Web Design</span>
											<h3><a href="#">Working Spaces for Startups Freelancer</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="work">
									<div class="img d-flex align-items-end justify-content-center" style="background-image: url(image/work-4.jpg);">
										<div class="text w-100">
											<span class="cat">Web Design</span>
											<h3><a href="#">Working Spaces for Startups Freelancer</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="work">
									<div class="img d-flex align-items-end justify-content-center" style="background-image: url(image/work-5.jpg);">
										<div class="text w-100">
											<span class="cat">Web Design</span>
											<h3><a href="#">Working Spaces for Startups Freelancer</a></h3>
										</div>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</section>
<!--/ City Area -->
    <!-- Blogs Area -->
    <div class="blog-area blog-area--l9 bg-default">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8">
            <!-- Section Title -->
            <div class="section-title section-title--l9 text-center">
              <h6 class="section-title__sub-heading text-electric-violet-2" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Blog</h6>
              <h2 class="section-title__heading" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Latest Posts</h2>
            </div>
            <!--/ .Section Title -->
          </div>
        </div>
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
          <!--/ .Single Blogs -->
          <div class="col-lg-4 col-md-6 col-xs-10">
            <div class="blogs-post blogs-post--small">
              <img class="w-100" src="./image/home-8/blogs-img-1.png" alt="">
              <div class="hover-content">
                <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                  <a href="/blog-details.html" class="hover-content__badge badge bg-yellow text-shark">Gadgets</a>
                  <a href="/blog-details.html" class="hover-content__date">01 June, 2020</a>
                </div>
                <a href="/blog-details.html" class="hover-content__title">We can blend colors multiple<br class='d-none d-xs-block'> ways, the most common</a>
                <ul class="hover-content__post-meta list-unstyled">
                  <li>
                    <a href="/blog-details.html">By George Lee</a>
                    <a href="/blog-details.html"> 0 Comments</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--/ .Single Blogs -->
          <!--/ .Single Blogs -->
          <div class="col-lg-4 col-md-6 col-xs-10">
            <div class="blogs-post blogs-post--small">
              <img class="w-100" src="./image/home-8/blogs-img-2.png" alt="">
              <div class="hover-content">
                <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                  <a href="/blog-details.html" class="hover-content__badge badge bg-yellow text-shark">Gadgets</a>
                  <a href="/blog-details.html" class="hover-content__date">01 June, 2020</a>
                </div>
                <a href="/blog-details.html" class="hover-content__title">We can blend colors multiple<br class='d-none d-xs-block'> ways, the most common</a>
                <ul class="hover-content__post-meta list-unstyled">
                  <li>
                    <a href="/blog-details.html">By George Lee</a>
                    <a href="/blog-details.html"> 0 Comments</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--/ .Single Blogs -->
          <!--/ .Single Blogs -->
          <div class="col-lg-4 col-md-6 col-xs-10">
            <div class="blogs-post blogs-post--small">
              <img class="w-100" src="./image/home-8/blogs-img-3.png" alt="">
              <div class="hover-content">
                <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                  <a href="/blog-details.html" class="hover-content__badge badge bg-yellow text-shark">Gadgets</a>
                  <a href="/blog-details.html" class="hover-content__date">01 June, 2020</a>
                </div>
                <a href="/blog-details.html" class="hover-content__title">We can blend colors multiple <br class='d-none d-xs-block'> ways, the most common</a>
                <ul class="hover-content__post-meta list-unstyled">
                  <li>
                    <a href="/blog-details.html">By George Lee</a>
                    <a href="/blog-details.html"> 0 Comments</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--/ .Single Blogs -->
        </div>
      </div>
    </div>
    <!--/ .Blogs Area -->
@endsection
