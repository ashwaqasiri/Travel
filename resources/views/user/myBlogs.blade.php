@extends('layouts.app')
@section('title', 'My Blogs')
@section('content')

<!-- portfolio-area -->
    <div class="page-title-content text-center bg-default-6">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7">
            <h2 class="page-title-content__heading">My Blogs</h2>
            <p class="page-title-content__text">Aliquam finibus massa et convallis faucibus. Donec porta finibus.</p>
          </div>
        </div>
        @if (session('success'))
              <div class="alert alert-success col-xl-12 col-lg-12 mb-8 mb-lg-0" style="background-color: #9addc999 !important;">
                  {{ session('success') }}
              </div>
            @endif
      </div>
      <div class="shape">
        <img class="w-100" src="{{asset('image/leafs-removebg-.png')}}" alt="">
      </div>
    </div>
    <div class="portfolio-area portfolio-area--inner-1 bg-default-6 border-bottom border-default-color-3 pt-0">
      <div class="container">
        @if (count($userBlog->blogs))
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
          <div class="col-md-12 col-xs-10">
            <div class="grid grid--l6 position-relative">
              <!-- Single Grid -->
              @foreach($userBlog->blogs as $blog)
              <div class="grid-item grid--half__single grid--half__single customer-support development customer-support">
                <a href="{{route('blogs.show',$blog->id)}}" class="portfolio__single h-50">
                  <img class="w-100 h-50" src="{{ asset('thumbnail/'.$blog->img); }}" alt="" style="border-radius: 10px;">
                  <div class="portfolio__hover yellow-bg dark-mode-texts d-xs-flex align-items-center justify-content-between">
                    <div class="hover-content">
                      <h3 class="portfolio__hover__heading">{{$blog->title}}</h3>
                      <p class="portfolio__hover__text">{{substr($blog->description,0,40)}}</p>
                    </div>
                    <div class="hover-right">
                      <div class="portfolio__hover__link text-white">
                        <i class="fas fa-external-link-square-alt"></i>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              @endforeach
              <!--/ .Single Grid -->
              <!-- Single Grid -->
              <!--/ .Single Grid -->
            </div>
          </div>
        </div>
        <div class="buttons text-center mt-lg-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
          <a class="btn bg-yellow btn--lg-2 rounded-55 text-white mt-3" href="#">Load More</a>
        </div>
        @else
        <div class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
          <p class="page-title-content__text">Share your travel story with us!</p>
        </div>
        @endif
      </div>
    </div>
    <!-- /portfolio-area -->
@endsection