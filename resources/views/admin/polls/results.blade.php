@extends('layouts.admin.main')

@section('title')
نتایج نظرسنجی
@endsection

@section('includes')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('content1')
<div class="row">
            <div class="col-8">
                    <div class="card">
                        <div class="card-header background-color-white">
                            {{$poll->title}}
                        </div>
                        <div class="card-body col-12">
                            <p>تعداد کل پاسخ ها: {{$count}}</p>
                            <ul class="list-group pe-2">
                            @foreach($result as $key=>$value)
                            <li class="list-group-item">{{\App\Models\Question::find($key)->q_body}} : {{$value}} ({{round(($value*100)/$count)}} %)
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: {{round(($value*100)/$count)}}%"></div>
                            </div>
                            </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
@endsection

