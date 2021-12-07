<div>
    <div class="page-title-content text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <h2 class="page-title-content__heading header-color">Blogs</h2>
                    {{-- <p class="page-title-content__text">Our focus is always on finding the best people to work with. Our</p> --}}
                </div>
        <div class="col-xl-6 col-lg-7 col-md-8">
            <div class="portfolio-menu text-center text-lg-end mb-5 mb-lg-0">
                <button wire:click="getAll" class="button">All</button>
                @foreach ($categories as $category)
                <button wire:click="getBlogs('{{$category->id}}')" class="button">{{$category->name}}</button>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    {{-- <div class="shape">
        <img class="w-100" src="./image/png/inner-banner-shape.png" alt="">
    </div> --}}
    </div>
    <div class="portfolio-area portfolio-area--inner-1 border-bottom border-default-color-3 pt-0">
        <div class="container">
            <div class="row justify-content-center" >
                <div class="col-md-12 col-xs-10">
                    <div class="grid grid--l6 position-relative">
                        <!-- Single Grid -->
                        @foreach ($blogs as $blog)
                            <div class="col-6 grid-item grid--4__single no-gap development customer-support">
                                <a href="{{route('blogs.show',$blog->id)}}" class="portfolio__single no-gap ">
                                    <img class="w-100"
                                        src="{{ asset('thumbnail/'.$blog->img); }}" alt="">
                                    <div
                                        class="portfolio__hover yellow-bg dark-mode-texts d-xs-flex align-items-center justify-content-between">
                                        <div class="hover-content">
                                            <h3 class="portfolio__hover__heading">{{substr($blog->title,0,20)}}</h3>
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
            {{-- <div class="buttons text-center mt-lg-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500"
                data-aos-once="true">
                <a class="btn btn-primary shadow--primary-4 btn--lg-2 rounded-55 text-white mt-3" href="#">Load More</a>
            </div> --}}
        </div>
    </div>
</div>
