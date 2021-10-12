@extends('layouts.app')
@section('title', 'Blog Details')
@section('content')
    <!-- Blog Details Area -->
    <div class="blog-details bg-default-6">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="blog-title">
              <h1 class="blog-title__heading">{{$blog->title}}</h1>
              <div class="blog__metainfo">
                <a href="#" class="blog__metainfo__author-name">{{$blog->user->name}}</a>
                <a href="#" class="blog__metainfo__date">{{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</a>
              </div>
            </div>
            <div class="blog-content">
              <div class="blog-content__img">
                <img class="w-100" src="{{ asset('thumbnail/'.$blog->img); }}" alt="">
              </div>
              <p class="blog-content__text">{{$blog->description}}</p>
              <div class="post-tags-section d-flex align-items-center flex-wrap">
                <h4 class="post-tags-section__title mb-0">Tags:</h4>
                <ul class="post-tags list-unstyled mt-3 mt-lg-5">
               
                  @foreach($categories as $cat)
                  <li><a href="#" class="{{in_array($cat->id, $blogCategory) ? 'bg-secondary' : ''}}">{{$cat->name}}</a></li>
                  @endforeach
                </ul>
              </div>
              <div class="post-social-share d-flex align-items-center flex-wrap">
                <h4 class="post-social-share__title mb-0">Share:</h4>
                <ul class="social-share list-unstyled mb-0">
                  {!!$shareButtons!!}
                  <!-- <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li> -->
                </ul>
              </div>
              <div class="next-prev-btn d-flex align-items-center justify-content-between">
                <div class="prev-btn">
                  <a class="btn-link btn-link--prev" href="#"><i class="fa fa-arrow-left"></i>prev</a>
                </div>
                <div class="prev-btn">
                  <a class="btn-link btn-link--next" href="#">next<i class="fa fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 offset-xl-1 col-lg-5 mt-5 mt-lg-0">
            <div class="sidebar-area">
              <!-- Single Widgets -->
              <div class="widget">
                <h3 class="widget__title">Search</h3>
                <div class="widget__search">
                @livewire('search-controller')
                </div>
              </div>
              <!--/ .Single Widgets -->
              <!-- Single Widgets -->
              <div class="widget">
                <h3 class="widget__title">Recent Posts</h3>
                <ul class="widget__recent-post list-unstyled mb-0 pb-0">
                @foreach($recentBlogs as $blog)
                  <li class="widget__recent-post__single">
                    <a href="#">
                      <h4 class="widget__recent-post__title">{{$blog->title}}</h4>
                      <p class="widget__recent-post__date">{{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</p>
                    </a>
                  </li>
                  @endforeach
                </ul>
              </div>
              <!--/ .Single Widgets -->
              <!-- Single Widgets -->
              <div class="widget">
                <h3 class="widget__title">Categories</h3>
                <div class="widget__category">
                  <ul class="list-unstyled">
                    @foreach($categories as $category)
                    <li>
                      <a class="d-flex align-items-center justify-content-between flex-wrap" href="#">
                        <h4 class="mb-0">{{$category->name}}:</h4>
                        <span>{{$category->blogs->count()}} posts</span>
                      </a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <!--/ .Single Widgets -->
              <!-- Single Widgets -->
              <div class="sidebar__ads">
              <a href="#"><img class="w-100" src="./image/png/ads-img.png" alt=""></a>
              </div>
            </div>
            <!--/ .Single Widgets -->
          </div>
        </div>
      </div>
    </div>
    <!--/ .Blog Details Area -->
    <!-- Comment Section -->
    @livewire('comment-controller',['id' => $blog->id])
@endsection