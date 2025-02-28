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
                                            <td class="text-center">
                                                @if($poll->published)
                                                    <i class="fas fa-check text-success"></i>
                                                @else
                                                    <i class="fas fa-times-circle text-danger"></i>
                                                @endif
                                            </td>
                                            <td class="text-center">{{jDate($poll->expired_at)->format('Y-m-d')}}</td>
                                            <td class="text-center">
                                                <a href="#"><span class="fas fa-pencil-ruler text-primary"></span></a>
                                                &nbsp;|&nbsp;
                                                <a href="#"><span class="fas fa-trash text-danger"></span></a>
                                                <form method="POST" action="" id="delete-{{$poll->id}}">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
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