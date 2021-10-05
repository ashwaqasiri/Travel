@extends('layouts.app')
@section('title', 'My Blogs')
@section('content')

<!-- portfolio-area -->
    <div class="page-title-content text-center bg-default-3">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7">
            <h2 class="page-title-content__heading">My Blogs</h2>
            <p class="page-title-content__text">Aliquam finibus massa et convallis faucibus. Donec porta finibus.<br class="d-none d-xs-block d-sm-none d-md-block">
            Etiam congue lectus ut erat interdum porttitor. </p>
          </div>
        </div>
        @if (session('success'))
              <div class="alert alert-success col-xl-12 col-lg-12 mb-8 mb-lg-0" style="background-color: #9addc999 !important;">
                  {{ session('success') }}
              </div>
            @endif
      </div>
      <div class="shape">
        <img class="w-100" src="./image/png/inner-banner-shape.png" alt="">
      </div>
    </div>
    <div class="portfolio-area portfolio-area--inner-1 bg-default-3 border-bottom border-default-color-3 pt-0">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
          <div class="col-md-12 col-xs-10">
            <div class="grid grid--l6 position-relative">
              <!-- Single Grid -->
              @foreach($user->blogs as $blog)
              <div class="grid-item grid--half__single grid--half__single customer-support development customer-support">
                <a href="/portfolio-details-3.html" class="portfolio__single h-50">
                  <img class="w-100 h-50" src="{{ asset('img-file/'.$blog->img); }}" alt="">
                  <div class="portfolio__hover bg-readical-red dark-mode-texts d-xs-flex align-items-center justify-content-between">
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
              <!-- <div class="grid-item grid--half__single grid--half__single customer-support development customer-support">
                <a href="/portfolio-details-3.html" class="portfolio__single">
                  <img class="w-100" src="./image/jpg/portfolio-full-img-2.jpg" alt="">
                  <div class="portfolio__hover bg-readical-red dark-mode-texts d-xs-flex align-items-center justify-content-between">
                    <div class="hover-content">
                      <h3 class="portfolio__hover__heading">Agency Brand guide & Development</h3>
                      <p class="portfolio__hover__text">UX and UI, Design, Development</p>
                    </div>
                    <div class="hover-right">
                      <div class="portfolio__hover__link text-white">
                        <i class="fas fa-external-link-square-alt"></i>
                      </div>
                    </div>
                  </div>
                </a>
              </div> -->
              <!--/ .Single Grid -->
            </div>
          </div>
        </div>
        <div class="buttons text-center mt-lg-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
          <a class="btn btn-primary shadow--primary-4 btn--lg-2 rounded-55 text-white mt-3" href="#">Load More</a>
        </div>
      </div>
    </div>
    <!-- /portfolio-area -->
@endsection