@extends('layouts.blog.main')

@section('title')
ویرایش نظر
@endsection

@section('content')
<form method="post" action="{{route('blog.comments.update', $comment->id)}}">
    @csrf
    @method('PUT')
<div class="mb-3">
  <textarea class="form-control" id="text" name="text" rows="3">{{$comment->text}}</textarea>
</div>
<div class="text-break mt-2 mb-2 text-muted text-end fs-6 fst-italic">
    نوشته شده توسط {{$comment->user->name}} در تاریخ {{$comment->created_at}}
</div>
<input type="submit" class="btn btn-primary mb-3" value="ویرایش نظر" />
</form>
@endsection