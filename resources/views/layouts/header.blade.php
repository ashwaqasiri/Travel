   <!-- Header Area -->
   <header class="site-header site-header--menu-left dynamic-sticky-bg px-3 site-header--absolute site-header--sticky">
      <div class="container-fluid">
        <nav class="navbar site-navbar">
          <!-- Brand Logo-->
          <div class="brand-logo">
            <a href="/">
              <!-- light version logo (logo must be black)-->
              <img src="{{asset('image/logo--travel.png')}}" alt="" class="light-version-logo pl-2" style="width:130px;">
              <!-- Dark version logo (logo must be White)-->
              <img src="image/png/logo-white.png" alt="" class="dark-version-logo">
            </a>
          </div>
          <div class="menu-block-wrapper">
            <div class="menu-overlay"></div>
            <nav class="menu-block" id="append-menu-header">
              <div class="mobile-menu-head">
                <div class="go-back">
                  <i class="fa fa-angle-left"></i>
                </div>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">&times;</div>
              </div>
              <ul class="site-menu-main">
                <li class="nav-item nav-item-has-children">
                  <a href="/" class="nav-link-item drop-trigger">Home </i>
                  </a>
                </li>
                <li class="nav-item nav-item-has-children">
                  <a href="{{route('category')}}" class="nav-link-item drop-trigger">Blogs</i>
                  </a>
                </li>
                <li class="nav-item nav-item-has-children">
                  <a href="{{route('about-us')}}" class="nav-link-item drop-trigger">About Us </i>
                  </a>
                </li>
                {{-- <li class="nav-item nav-item-has-children">
                  <a href="#" class="nav-link-item drop-trigger">Contact</i>
                  </a>
                </li> --}}
                <li class="nav-item nav-item-has-children mr-lg-9">
                  @if(\Auth::check())
                  <a class="nav-link-item drop-trigger" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                  </a>
                    <ul class="sub-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li class="sub-menu--item"><a href="{{route('blogs.index')}}">{{ __('My Blogs')}}</a></li>
                        <li class="sub-menu--item"><a href="{{route('blogs.create')}}">{{ __('Create Blog')}}</a></li>
                        <li class="sub-menu--item "><a href="{{route('signout')}}">{{ __('Logout')}}</a></li>
                    </ul>
                    @else
                    <a class="nav-link-item drop-trigger" href="{{route('login')}}">
                    {{ __('Login')}}
                    </a>
                    <a class="nav-link-item drop-trigger" href="{{ route('register') }}">
                      {{ __('Register')}}
                      </a>
                    @endif
                </li>
              </ul>
            </nav>
          </div>
          <!-- mobile menu trigger -->
          <div class="mobile-menu-trigger">
            <span></span>
          </div>
          <!--/.Mobile Menu Hamburger Ends-->
        </nav>
      </div>
    </header>
    <!-- navbar- -->
    <!--/ .Header Area -->