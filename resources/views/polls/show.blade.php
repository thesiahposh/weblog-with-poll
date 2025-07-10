@extends('layouts.admin.main')

@section('content1')
<div class="row">
    <form method="post" action="{{route('answer')}}">
        @csrf
        <input type="hidden" name="poll_id" value="{{$poll->id}}">
            <div class="col-8">
                    <div class="card">
                        <div class="card-header background-color-white">
                            {{$poll->title}}
                        </div>
                        <div class="card-body col-12">
                            @foreach($poll->questions as $question)
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input type="{{$poll->type->type}}" name="q[]" value="{{$question->id}}" id="q-{{$question->id}}">
                                      <label class="form-check-label" for="q-{{$question->id}}">
                                        {{$question->q_body}}
                                      </label>                                   
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                <div class="row">
                   <div class="col-5 mx-auto mt-3">
                     <button class="btn btn-success" type="submit">ارسال پاسخ</button>
                  </div>
                  </div>
             </div>
     </form>
</div>

@endsection