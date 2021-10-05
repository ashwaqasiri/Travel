@extends('layouts.app')
@section('title', 'Show Blogs')
@section('content')

<div class="blogs-area blogs-area--right-sidebar bg-default-6">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7">
            <div class="section-title section-title--innerpage text-center">
              <h5 class="section-title__sub-heading text-electric-violet-2">Latest posts</h5>
              <h2 class="section-title__heading">Blog left Sidebar</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-7 order-lg-2">
            <div class="row justify-content-center">
              <div class="col-xl-12 col-lg-10">
                @foreach($cityBlogs as $blog)
                <div class="blogs-post blogs-post--big">
                  <img class="w-100" src="{{ asset('thumbnail/'.$blog->img); }}" alt="">
                  <div class="hover-content">
                    <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                      <!-- later(add tags) -->
                      <a href="/blog-details.html" class="hover-content__badge badge bg-primary">Gadgets</a>
                      <a href="/blog-details.html" class="hover-content__date">{{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</a>
                    </div>
                    <a href="{{route('blogs.show',$blog->id)}}" class="hover-content__title">{{$blog->title}}</a>
                    <ul class="hover-content__post-meta list-unstyled">
                      <li>
                        <a href="/blog-details.html">
                          <i class="fa fa-user"></i>{{$blog->user->name}}</a>
                        <a href="/blog-details.html">
                        <!-- later(add comments) -->
                          <i class="fa fa-comments"></i>305</a>
                      </li>
                    </ul>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <!-- <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-9 col-md-7 col-xs-10">
                <div class="blogs-post blogs-post--small">
                  <img class="w-100" src="./image/png/blog-post-2.png" alt="">
                  <div class="hover-content">
                    <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                      <a href="/blog-details.html" class="hover-content__badge badge bg-primary">Gadgets</a>
                      <a href="/blog-details.html" class="hover-content__date">01 June, 2020</a>
                    </div>
                    <a href="/blog-details.html" class="hover-content__title">We can blend colors multiple ways, the most common</a>
                    <ul class="hover-content__post-meta list-unstyled">
                      <li>
                        <a href="/blog-details.html">
                          <i class="fa fa-user"></i>George Lee</a>
                        <a href="/blog-details.html">
                          <i class="fa fa-heart"></i>21K</a>
                        <a href="/blog-details.html">
                          <i class="fa fa-comments"></i>305</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-9 col-md-7 col-xs-10">
                <div class="blogs-post blogs-post--small">
                  <img class="w-100" src="./image/png/blog-post-3.png" alt="">
                  <div class="hover-content">
                    <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                      <a href="/blog-details.html" class="hover-content__badge badge bg-primary">Gadgets</a>
                      <a href="/blog-details.html" class="hover-content__date">01 June, 2020</a>
                    </div>
                    <a href="/blog-details.html" class="hover-content__title">We can blend colors multiple ways, the most common</a>
                    <ul class="hover-content__post-meta list-unstyled">
                      <li>
                        <a href="/blog-details.html">
                          <i class="fa fa-user"></i>George Lee</a>
                        <a href="/blog-details.html">
                          <i class="fa fa-heart"></i>21K</a>
                        <a href="/blog-details.html">
                          <i class="fa fa-comments"></i>305</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-9 col-md-7 col-xs-10">
                <div class="blogs-post blogs-post--small">
                  <img class="w-100" src="./image/png/blog-post-4.png" alt="">
                  <div class="hover-content">
                    <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                      <a href="/blog-details.html" class="hover-content__badge badge bg-primary">Gadgets</a>
                      <a href="/blog-details.html" class="hover-content__date">01 June, 2020</a>
                    </div>
                    <a href="/blog-details.html" class="hover-content__title">We can blend colors multiple ways, the most common</a>
                    <ul class="hover-content__post-meta list-unstyled">
                      <li>
                        <a href="/blog-details.html">
                          <i class="fa fa-user"></i>George Lee</a>
                        <a href="/blog-details.html">
                          <i class="fa fa-heart"></i>21K</a>
                        <a href="/blog-details.html">
                          <i class="fa fa-comments"></i>305</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-9 col-md-7 col-xs-10">
                <div class="blogs-post blogs-post--small">
                  <img class="w-100" src="./image/png/blog-post-5.png" alt="">
                  <div class="hover-content">
                    <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                      <a href="/blog-details.html" class="hover-content__badge badge bg-primary">Gadgets</a>
                      <a href="/blog-details.html" class="hover-content__date">01 June, 2020</a>
                    </div>
                    <a href="/blog-details.html" class="hover-content__title">We can blend colors multiple ways, the most common</a>
                    <ul class="hover-content__post-meta list-unstyled">
                      <li>
                        <a href="/blog-details.html">
                          <i class="fa fa-user"></i>George Lee</a>
                        <a href="/blog-details.html">
                          <i class="fa fa-heart"></i>21K</a>
                        <a href="/blog-details.html">
                          <i class="fa fa-comments"></i>305</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-9 col-md-7 col-xs-10">
                <div class="blogs-post blogs-post--small">
                  <img class="w-100" src="./image/png/blog-post-6.png" alt="">
                  <div class="hover-content">
                    <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                      <a href="/blog-details.html" class="hover-content__badge badge bg-primary">Gadgets</a>
                      <a href="/blog-details.html" class="hover-content__date">01 June, 2020</a>
                    </div>
                    <a href="/blog-details.html" class="hover-content__title">We can blend colors multiple ways, the most common</a>
                    <ul class="hover-content__post-meta list-unstyled">
                      <li>
                        <a href="/blog-details.html">
                          <i class="fa fa-user"></i>George Lee</a>
                        <a href="/blog-details.html">
                          <i class="fa fa-heart"></i>21K</a>
                        <a href="/blog-details.html">
                          <i class="fa fa-comments"></i>305</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-9 col-md-7 col-xs-10">
                <div class="blogs-post blogs-post--small">
                  <img class="w-100" src="./image/png/blog-post-7.png" alt="">
                  <div class="hover-content">
                    <div class="hover-content__top d-flex align-items-center dark-mode-texts">
                      <a href="/blog-details.html" class="hover-content__badge badge bg-primary">Gadgets</a>
                      <a href="/blog-details.html" class="hover-content__date">01 June, 2020</a>
                    </div>
                    <a href="/blog-details.html" class="hover-content__title">We can blend colors multiple ways, the most common</a>
                    <ul class="hover-content__post-meta list-unstyled">
                      <li>
                        <a href="/blog-details.html">
                          <i class="fa fa-user"></i>George Lee</a>
                        <a href="/blog-details.html">
                          <i class="fa fa-heart"></i>21K</a>
                        <a href="/blog-details.html">
                          <i class="fa fa-comments"></i>305</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="row justify-content-center mt-7">
              <div class="col-xl-4">
                    
                <div class="d-flex justify-content-center">
                </div>
                <div class="pagination">
                  <ul class="list-unstyled text-center mx-auto">
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
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5 col-md-7 col-xs-10 mt-5 mt-lg-0 order-lg-1">
            <div class="sidebar-area">
              <!-- Single Widgets -->
              <div class="widget">
                <h3 class="widget__title">Search</h3>
                <div class="widget__search">
                @livewire('search-controller')
                  <!-- <form action="./">
                    <i class="fa fa-search text-royal-blue"></i>
                    <input type="text" placeholder="Type to search">
                  </form> -->
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
                <h3 class="widget__title">Recent Tweets</h3>
                <ul class="widget__tweets list-unstyled">
                  <li>
                    <a class="widget__tweets__single" href="#">
                      <span>@Smith,</span> the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
                    </a>
                  </li>
                  <li>
                    <a class="widget__tweets__single" href="#">
                      <span>@Maurice,</span> the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
                    </a>
                  </li>
                  <li>
                    <a class="widget__tweets__single" href="#">
                      <span>@Stella,</span> the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
                    </a>
                  </li>
                  <li>
                    <a class="widget__tweets__single" href="#">
                      <span>@Howard,</span> the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
                    </a>
                  </li>
                </ul>
              </div>
              <!--/ .Single Widgets -->
              <!-- Single Widgets -->
              <div class="widget">
                <h3 class="widget__title">Categories</h3>
                <div class="widget__category">
                  <ul class="list-unstyled">
                    <li>
                      <a class="d-flex align-items-center justify-content-between flex-wrap" href="#">
                        <h4 class="mb-0">Technology:</h4>
                        <span>20 posts</span>
                      </a>
                    </li>
                    <li>
                      <a class="d-flex align-items-center justify-content-between flex-wrap" href="#">
                        <h4 class="mb-0">Freelancing:</h4>
                        <span>07 posts</span>
                      </a>
                    </li>
                    <li>
                      <a class="d-flex align-items-center justify-content-between flex-wrap" href="#">
                        <h4 class="mb-0">Writing:</h4>
                        <span>16 posts</span>
                      </a>
                    </li>
                    <li>
                      <a class="d-flex align-items-center justify-content-between flex-wrap" href="#">
                        <h4 class="mb-0">Marketing:</h4>
                        <span>11 posts</span>
                      </a>
                    </li>
                    <li>
                      <a class="d-flex align-items-center justify-content-between flex-wrap" href="#">
                        <h4 class="mb-0">Business:</h4>
                        <span>35 posts</span>
                      </a>
                    </li>
                    <li>
                      <a class="d-flex align-items-center justify-content-between flex-wrap" href="#">
                        <h4 class="mb-0">Education:</h4>
                        <span>14 posts</span>
                      </a>
                    </li>
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