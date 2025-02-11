@extends('layouts.blog.main')

@section('title')
وبلاگ - صفحه اصلی
@endsection

@section('content')
        @foreach($posts as $post)
        <article class="blog-post">
            <h2 class="blog-post-title"><a href="{{route('blog.blog.show', $post)}}">{{$post->title}}</a></h2>
            <p class="blog-post-meta float-end mt-2">ارسال شده در تاریخ <a>{{$post->created_at}}</a> توسط <a href="#">{{$post->user->name}}</a>@auth | <a href="{{route('blog.blog.edit',$post)}}">ویرایش مطلب</a> |&nbsp</p>
             <form method="post" class="clearfix " action="{{route('blog.blog.destroy', $post->id)}}"><button class="btn btn-danger" type="submit">حذف مطلب</button>
             @csrf
             @method('DELETE')
            </form>
            @endauth
            <p style="clear:both;">{{$post->text}}</p>
        </article>
        @endforeach
@endsection


