@csrf
<div class="row justify-content-center">
  <div class="col-8 form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tilte">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <p class="col-8"> Choose City</p>
  <div class="col-8 form-group mx-1">
    @foreach($cities as  $key =>$city)
    <input type="radio" name="city_id" value="{{$city->id}}" class="form-check-input" id="{{$key}}">
    <label class="form-check-label mr-4" for="{{$key}}">{{$city->name}}</label>
    @endforeach
  </div>
  <div class="col-8 form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" name="img" @isset($blog) value="{{$blog->img}}" @endisset class="form-control" id="exampleInputEmail1">
  </div>
  <div class="col-8 form-group">
  <label for="exampleTextarea" class="col-2 col-form-label">Description <span class="text-danger">*</span></label>
    <textarea class="form-control" name="description" id="exampleTextarea" rows="3">@isset($blog) {{$blog->description}} @endisset</textarea>
  </div>
    <p class="col-8 "> Choose Category</p>
    <div class="col-8 form-group">
      @foreach($categories as  $key => $cat)
      <div class="form-check form-check-inline text-center mx-1">
      <input type="checkbox" name="categories[]" value="{{$cat->id}}" class="form-check-input" id="cat_{{$key}}"
          @if (@isset($blog) && in_array($key , $blogCategory))
              checked
          @endif
      >
      <label class="form-check-label" for="cat_{{$key}}">{{$cat->name}}</label>
      </div>
      @endforeach
    </div>
</div>
<button type="submit" class="btn col-2 purpel-bg-color center-item mb-4">Create Post</button>