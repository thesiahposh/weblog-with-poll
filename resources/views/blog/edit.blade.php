@extends('layouts.blog.main')

@section('title')
ویرایش نوشته
@endsection

@section('content')
<form method="post" action="{{route('blog.blog.update', $post->id)}}">
    @csrf
    @method('PUT')
<div class="mb-3">
  <label for="title" class="form-label">عنوان پست</label>
  <input type="text" class="form-control" id="title" name="title" placeholder="عنوان پست" value="{{$post->title}}">
</div>
<div class="mb-3">
  <label for="text" class="form-label">متن پست</label>
  <textarea class="form-control" id="text" name="text" rows="3">{{$post->text}}</textarea>
</div>
<input type="submit" class="btn btn-primary mb-3" />
</form>
@endsection