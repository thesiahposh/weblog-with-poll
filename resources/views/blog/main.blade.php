@extends('layouts.blog.main')

@section('title')
وبلاگ - صفحه اصلی
@endsection

@section('content')
        @foreach($posts as $post)
        <article class="blog-post">
            <h2 class="blog-post-title">{{$post->title}}</h2>
            <p class="blog-post-meta">ارسال شده در تاریخ <a>{{$post->created_at}}</a> توسط <a href="#">{{$post->user_id}}</a></p>
            <p>{{$post->text}}</p>
        </article>
        @endforeach
@endsection