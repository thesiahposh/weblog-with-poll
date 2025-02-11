@extends('layouts.blog.main')

@section('title')
{{$post->title}}
@endsection

@section('content')
        <article class="blog-post">
            <h2 class="blog-post-title">{{$post->title}}</h2>
            <p class="blog-post-meta">ارسال شده در تاریخ <a>{{$post->created_at}}</a> توسط <a href="#">{{$post->user->name}}</a></p>
            <p>{{$post->text}}</p>
        </article>
@endsection