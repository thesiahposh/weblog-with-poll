@extends('layouts.blog.main')

@section('title')
افزودن نوشته
@endsection

@section('content')
<form method="post" action="{{route('blog.blog.store')}}">
    @csrf
    @method('POST')
<div class="mb-3">
  <label for="title" class="form-label">عنوان پست</label>
  <input type="text" class="form-control" id="title" name="title" placeholder="عنوان پست">
</div>
<div class="mb-3">
  <label for="text" class="form-label">متن پست</label>
  <textarea class="form-control" id="text" name="text" rows="3"></textarea>
</div>
<input type="submit" class="btn btn-primary mb-3" />
</form>
@endsection