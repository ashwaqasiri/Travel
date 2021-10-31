@extends('layouts.app')
@section('title', 'Edit Blog')
@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-7">
        <div class="section-title section-title--innerpage text-center">
          <h5 class="section-title__sub-heading text-electric-violet-2">Edit Blog</h5>
          <p class="page-title-content__text">Aliquam finibus massa et convallis faucibus. Donec porta finibus.</p>
        </div>
      </div>
              @if ($errors->any())
                <div class="alert alert-danger col-xl-7 col-lg-7 mb-7 mb-lg-0 justify-content-center">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif
    </div>
<form method="post" action="{{ route('blogs.edit', $blog) }}" enctype="multipart/form-data">
    @method('PUT')
    @include('blog._form')
</form>
</div>
@endsection