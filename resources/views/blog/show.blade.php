@extends('layouts.blog.main')

@section('title')
{{$post->title}}
@endsection

@section('content')
        <article class="blog-post">
            <h2 class="blog-post-title">{{$post->title}}</h2>
            <p class="blog-post-meta">ارسال شده در تاریخ <a>{{$post->created_at}}</a> توسط <a href="#">{{$post->user->name}}</a></p>
            <p>{{$post->text}}</p>
            <hr>
            <div>
            <section style="background-color: #f7f6f6;">
  <div class="container my-۳ text-body">
    <div class="row d-flex justify-content-center">
      <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h4 class="text-body mb-0 mt-2">نظرات ({{count($post->comment)}})</h4>
        </div>
        @foreach($post->comment as $comment)
        <div class="card mb-3">
          <div class="card-body">
            <div class="d-flex flex-start">
            <svg class="rounded-circle shadow-1-strong me-3 bd-placeholder-img" width="40" height="40" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder:avatar img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>avatar</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
              <div class="w-100">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h6 class="text-primary fw-bold mb-0 me-2 mt-2">
                    {{$comment->user->name}}
                  </h6>
                  <p class="mb-0">{{$comment->created_at}}</p>
                </div>
                <div class="d-flex justify-content-between align-items-start" style="flex-flow: column wrap;">
                    <div class="text-break">
                    {{$comment->text}}
                    </div>
                
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    @auth
                  <p class="small mb-0" style="color: #aaa;">
                    <a href="{{url('/blog/comments/'. $comment->id . '/edit')}}" class="link-grey">ویرایش</a> •
                    <a href="#" class="link-grey">حذف</a>
                  </p>
                  @endauth
                  <div class="d-flex flex-row">
                    <i class="fas fa-star text-warning me-2"></i>
                    <i class="far fa-check-circle" style="color: #aaa;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        @auth
        <form method="POST" action="{{url('blog/comments')}}">
            @csrf
            <div class="mb-3">
                <label for="post-comment" class="form-label text-muted">ارسال نظر</label>
                <textarea class="form-control" id="post-comment" name="text" rows="3"></textarea>
                <input type="hidden" name="post_id" value="{{$post->id}}" />
                <input type="submit" class="btn btn-primary mt-3 mb-3" value="ارسال نظر" />
            </div>
        </form>
        @endauth
      </div>
    </div>
  </div>
</section>
            </div>
        </article>
@endsection