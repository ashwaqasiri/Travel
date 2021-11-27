@extends('layouts.app')
@section('title', 'Home')
@section('content')
  <!-- Hero Area -->
  <div class="welcome-area welcome-area--l7 bg-default position-relative dark-mode-texts" style="background-image: url(./image/bg-header__2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-xl-9">
            <div class="welcome-area___content text-center">
              <h1 class="welcome-area--l7__heading" data-aos="fade-up" data-aos-duration="500" data-aos-delay="50" data-aos-once="true">Ready to Explore ?</h1>
              <p class="welcome-area--l7__descriptions" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"></p>
              <p class="welcome-area--l7__descriptions"><a class="btn btn-header rounded-50 text-white aos-init aos-animate" href="#Getstarted" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150" data-aos-once="true">Get Started</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ .Hero Area -->
    <!-- City Area -->
    <section class="ftco-section">
			<div id="Getstarted" class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="heading-section header-color mb-5" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Explore Destinations & Activities</h2>
					</div>
        
					<div class="col-md-12" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
						<div class="featured-carousel owl-carousel">
              @foreach($cities as $city)
                <div class="item">
                  <div class="work">
                      <!-- https://laracasts.com/discuss/channels/laravel/dynamic-css-background-image -->
                    <div class="img d-flex align-items-end justify-content-center" style="background-image: url('{{ asset('thumbnail/' . $city->image) }}')">
                      <div class="text w-100">
                        <span class="cat">{{$city->region}} Region</span>
                        <h3><a href="{{route('city.show',$city->id)}}">{{$city->name}}</a></h3>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
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
              <h2 class="section-title__heading header-color" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Stay in the Know</h2>
            </div>
            <!--/ .Section Title -->
          </div>
        </div>
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
          <!--/ .Single Blogs -->
        @if (count($recentBlogs))
          @foreach($recentBlogs as $blog)
            <div class="col-lg-4 col-md-6 col-xs-10">
              <div class="blogs-post blogs-post--small">
                <img class="w-100" src="{{ asset('thumbnail/'.$blog->img); }}" alt="" style="height: 260px;">
                <div class="hover-content">
                  <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                    @foreach($blog->categories as $category)
                    <a href="{{route('blogs.show',$blog->id)}}" class="hover-content__badge badge bg-yellow text-shark">{{$category->name}}</a>
                    @endforeach
                    <a href="{{route('blogs.show',$blog->id)}}" class="hover-content__date">{{$blog->created_at->diffForHumans() }}</a>
                  </div>
                  <a href="{{route('blogs.show',$blog->id)}}" class="hover-content__title">{{$blog->title}}</a>
                  <ul class="hover-content__post-meta list-unstyled">
                    <li>
                      <a>{{$blog->user->name}}</a>
                      <a> {{$blog->comments->count()}} Comments</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          @endforeach
        @else
        <div class="text-center">No blogs added yet..</div>
        @endif
        </div>
      </div>
    </div>
    <!--/ .Blogs Area -->
@endsection
