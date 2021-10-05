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
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tilte">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label> Choose City</label></br>
    @foreach($cities as  $key =>$city)
    <input type="radio" name="city_id" value="{{$city->id}}" class="form-check-input" id="{{$key}}">
    <label class="form-check-label mr-4" for="{{$key}}">{{$city->name}}</label>
    @endforeach
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" name="img" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
  <label for="exampleTextarea" class="col-2 col-form-label">Description <span class="text-danger">*</span></label>
    <textarea class="form-control" name="description" id="exampleTextarea" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label> Choose Category</label></br>
    @foreach($categories as  $key => $cat)
    <input type="checkbox" name="categories[]" value="{{$cat->id}}" class="form-check-input" id="cat_{{$key}}">
    <label class="form-check-label mr-4" for="cat_{{$key}}">{{$cat->name}}</label>
    @endforeach
  </div>
  <button type="submit" class="btn btn-primary">Create Post</button>
</form>
</div>
@endsection