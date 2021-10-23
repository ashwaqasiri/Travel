<div>
    <div class="portfolio-area portfolio-area--inner-1 bg-default-6 border-bottom border-default-color-3 pt-0">
        <div class="container">
          @if (count($userBlog))
          <div class="row justify-content-center">
            <div class="col-md-12 col-xs-10">
              <div class="grid grid--l6 position-relative">
                <!-- Single Grid -->
                @foreach($userBlog as $blog)
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
              </div>
            </div>
          </div>
          <div class="buttons text-center mt-lg-4">
            <button wire:click.prevent="load" class="btn bg-yellow btn--lg-2 rounded-55 text-white mt-3">Load More..</button>
          </div>
          @else
          <div class="buttons text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
            <p class="page-title-content__text">Share your travel story with us!</p>
            <a class="btn bg-yellow btn--lg-2 rounded-55 text-white mt-3" href="{{route('blogs.create')}}">Start Now</a>
          </div>
          @endif
        </div>
      </div>
</div>
