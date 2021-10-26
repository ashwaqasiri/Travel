@extends('layouts.app')
@section('title', 'Create Blog')
@section('content')
<div class="container" style="margin-top: 10%; margin-bottom: 10%;">
@if ($errors->any())
              <div class="alert alert-danger col-xl-7 col-lg-7 mb-7 mb-lg-0">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
<form method="post" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
  @include('blog._form')
</form>
</div>
@endsection