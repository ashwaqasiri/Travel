@extends('layouts.app')
@section('title', 'My Blogs')
@section('content')

<!-- portfolio-area -->
    <div class="page-title-content text-center bg-default-6">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7">
            <h2 class="page-title-content__heading header-color">My Blogs</h2>
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
    @livewire('load-more')
    <!-- /portfolio-area -->
@endsection