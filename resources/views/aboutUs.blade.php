@extends('layouts.app')
@section('title', 'About Us')
@section('content')
  <!-- Page Title Area -->
  <div class="page-title-content text-center bg-default-6">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7">
          <h2 class="page-title-content__heading header-color">About Us</h2>
          <p class="page-title-content__text">Travel is the story of our travels. The moments that moved us, the characters we encountered and the stage upon which it is all set.<br class="d-none d-md-block"> Lots of travellers write down a daily journal or at least intend to, so the idea here is that you can write down your journal online. </p>
          <p class="page-title-content__text">It’s a big wide world out there, come see it with us.</p>
        </div>
      </div>
    </div>
    <div class="shape">
      <img class="w-100" src="{{asset('image/leafs-removebg-.png')}}" alt="">
    </div>
  </div>
  <!--/ .Page Title Area -->
  @endsection