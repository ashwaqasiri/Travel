   <!-- Header Area -->
   <header class="site-header site-header--menu-left dynamic-sticky-bg px-3 site-header--absolute site-header--sticky">
      <div class="container-fluid">
        <nav class="navbar site-navbar">
          <!-- Brand Logo-->
          <div class="brand-logo">
            <a href="/home-marketing.html">
              <!-- light version logo (logo must be black)-->
              <img src="image/png/logo-dark.png" alt="" class="light-version-logo">
              <!-- Dark version logo (logo must be White)-->
              <img src="image/png/logo-white.png" alt="" class="dark-version-logo">
            </a>
          </div>
          <div class="menu-block-wrapper  ms-lg-7">
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
                  <a href="#" class="nav-link-item drop-trigger">Home </i>
                  </a>
                </li>
                <li class="nav-item nav-item-has-children">
                  <a href="#" class="nav-link-item drop-trigger">Pages </i>
                  </a>
                </li>
                <li class="nav-item nav-item-has-children">
                  <a href="#" class="nav-link-item drop-trigger">Contact</i>
                  </a>
                </li>
                <li class="nav-item nav-item-has-children mr-lg-9">
                  @if(\Auth::check())
                  <a class="nav-link-item drop-trigger" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                  </a>
                    <ul class="sub-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li class="sub-menu--item"><a href="">{{ __('Profile')}}</a></li>
                        <li class="sub-menu--item "><a href="">{{ __('Logout')}}</a></li>
                    </ul>
                    @else
                    <a class="nav-link-item drop-trigger" href="{{route('login')}}">
                    {{ __('Login')}}
                    </a>
                    @endif
                </li>
              </ul>
            </nav>
          </div>
          <!-- @if(\Auth::check())
            <div class="header-btns  ms-auto ms-lg-0 d-none d-sm-flex align-items-center">
                <ul class="site-menu-main">
                    <li class="nav-item nav-item-has-children ">
                        <a class="nav-link-item drop-trigger" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="sub-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="sub-menu--item"><a href="">{{ __('Profile')}}</a></li>
                            <li class="sub-menu--item "><a href="">{{ __('Logout')}}</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            @else
            <div class="header-btns  ms-auto ms-lg-0 d-none d-sm-flex align-items-center ">
                <a class="btn btn-header-btns btn-link-water btn--medium-2 h-45 text-shark rounded-5 ms-1 ml-2" href="{{route('login')}}">
                    {{ __('Login')}}
                </a>
            </div>
            @endif -->
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