@extends('layouts.admin.main')

@section('title')
مدیریت نظرسنجی ها
@endsection

@section('content1')
<div class="row">
            <div class="col-8">
                    <div class="card">
                        <div class="card-header background-color-white">
                            مدیریت نظرسنجی ها
                        </div>
                        <div class="card-body col-12">
                        <table class="table table-white table-striped table-hover align-middle text-center">
                                    <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>عنوان</th>
                                            <th>وضعیت</th>
                                            <th>تاریخ انقضا</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider align-middle text-end">
                                        @foreach($polls as $poll)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$poll->title}}</td>
                                            <td>{{$poll->published}}</td>
                                            <td>{{jDate($poll->expired_at)}}</td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                تعداد کل نظرسنجی های شما: {{$polls->count()}}
                        </div>
                    </div>
                </div>
            </div>
@endsection