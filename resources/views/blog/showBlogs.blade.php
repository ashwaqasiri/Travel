@extends('layouts.app')
@section('title', 'Show Blogs')
@section('content')

<div class="blogs-area blogs-area--right-sidebar bg-default-6">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7">
            <div class="section-title section-title--innerpage text-center">
              <h5 class="section-title__sub-heading text-electric-violet-2">{{$cityBlogs->region}} Region</h5>
              <h2 class="section-title__heading purpel-text">{{$cityBlogs->name}}</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-7 order-lg-2">
            <div class="row justify-content-center">
              <div class="col-xl-12 col-lg-10 h-50">
                @foreach($blogs as $blog)
                <div class="blogs-post blogs-post--big">
                  <img class="w-100" src="{{ asset('thumbnail/'.$blog->img); }}" alt="">
                  <div class="hover-content">
                    <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                      <!-- later(add tags) -->
                      @foreach($blog->categories as $category)
                      <a class="hover-content__badge badge bg-yellow">{{$category->name}}</a>
                      @endforeach
                      <a class="hover-content__badge badge bg-white">{{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</a>
                    </div>
                    <a href="{{route('blogs.show',$blog->id)}}" class="hover-content__title">{{$blog->title}}</a>
                    <ul class="hover-content__post-meta list-unstyled">
                      <li>
                        <a href="/blog-details.html">
                          <i class="fa fa-user"></i>{{$blog->user->name}}</a>
                        <a href="/blog-details.html">
                        <!-- later(add comments) -->
                          <i class="fa fa-comments"></i>{{$blog->comments->count()}}</a>
                      </li>
                    </ul>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <div class="row justify-content-center mt-7">
              <div class="col-xl-4">
                    
                <div class="d-flex justify-content-center">
                </div>
                <div class="pagination">
                  {{-- <ul class="list-unstyled text-center mx-auto">
                    <li>
                      <a href="#">
                        <i class="fa fa-chevron-left"></i>
                      </a>
                      <a href="#">1</a>
                      <a href="#">2</a>
                      <a href="#">3</a>
                      <a href="#">...</a>
                      <a href="#">5</a>
                      <a href="#">6</a>
                      <a href="#">
                        <i class="fa fa-chevron-right"></i>
                      </a>
                    </li>
                  </ul> --}}
                  <span>{{$blogs->links()}}</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5 col-md-7 col-xs-10 mt-5 mt-lg-0 order-lg-1">
            <div class="sidebar-area">
              <a href="{{route('blogs.create')}}" class="btn col-12 purpel-bg-color mb-4" style="font-weight: 400;">Share your travel story with us!</a>
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
                    <a href="{{route('blogs.show',$recentBlog->id)}}">
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

@endsection