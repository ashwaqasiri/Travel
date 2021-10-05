@extends('layouts.app')
@section('title', 'Create city')
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
@if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
@endif
<form method="post" action="{{ route('city.store') }}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">region</label>
    <input type="text" name="region" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" name="image" class="form-control" id="exampleInputEmail1">
  </div>
  <button type="submit" class="btn btn-primary">Add City</button>
</form>
</div>
@endsection