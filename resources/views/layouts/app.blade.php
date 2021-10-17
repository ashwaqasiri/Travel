<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Travel - @yield('title')
    </title>
    <link rel="shortcut icon" href="{{ asset('image/2.png')}}" type="image/x-icon">
    <!-- Bootstrap , fonts & icons  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('fonts/icon-font/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('fonts/typography-font/typo.css')}}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-5/css/all.css')}}">
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" href="{{ asset('plugins/aos/aos.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/fancybox/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/nice-select/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.min.css')}}">
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="{{ asset('plugins/theme-mode-switcher/switcher-panel.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
	<link rel="stylesheet" href="{{ asset('css/style.css')}}">

    <!-- ajax -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
    @livewireStyles

</head>

<body data-theme-mode-panel-active data-theme="light">
    <div class="site-wrapper overflow-hidden ">
        <div id="loading">
            <img src="{{ asset('image/travel_preloader.gif')}}" alt="">
        </div>

            @include('layouts.header')

            @yield('content')
            
            @include('layouts.footer')
    </div>
    <!-- Plugin's Scripts -->
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('plugins/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{ asset('plugins/fancybox/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('plugins/nice-select/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('plugins/aos/aos.min.js')}}"></script>
    <script src="{{ asset('plugins/counter-up/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('plugins/counter-up/waypoints.min.js')}}"></script>
    <script src="{{ asset('plugins/slick/slick.min.js')}}"></script>
    <script src="{{ asset('plugins/skill-bar/skill.bars.jquery.js')}}"></script>
    <script src="{{ asset('plugins/isotope/isotope.pkgd.min.js')}}"></script>
    <!--<script src="./plugins/theme-mode-switcher/gr-theme-mode-switcher.js"></script>-->
    <!-- Activation Script -->
    <script src="{{ asset('js/menu.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>
    <script src="{{ asset('js/popper.js')}}"></script>
    <!-- <script src="{{ asset('js/bootstrap.min.js')}}"></script> -->
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    @livewireScripts
</body>

</html>
