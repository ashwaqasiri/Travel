@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tilte">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label> Choose City</label></br>
    @foreach($cities as  $key =>$city)
    <input type="radio" name="blog_id" @isset($blog) value="{{$city->id}}" @endisset class="form-check-input" id="{{$key}}">
    <label class="form-check-label mr-4" for="{{$key}}">{{$city->name}}</label>
    @endforeach
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" name="img" @isset($blog) value="{{$blog->img}}" @endisset class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
  <label for="exampleTextarea" class="col-2 col-form-label">Description <span class="text-danger">*</span></label>
    <textarea class="form-control" name="description" id="exampleTextarea" rows="3">@isset($blog) {{$blog->description}} @endisset</textarea>
  </div>
  <div class="form-group">
    <label> Choose Category</label></br>
    @foreach($categories as  $key => $cat)
    <input type="checkbox" name="categories[]" value="{{$key}}" class="form-check-input" id="cat_{{$key}}"
        @if (@isset($blog) && in_array($key , $blogCategory))
            checked
        @endif
    >
    <label class="form-check-label mr-4" for="cat_{{$key}}">{{$cat->name}}</label>
    @endforeach
  </div>
  <button type="submit" class="btn btn-primary">Create Post</button>