@extends('layouts.admin.main')

@section('title')
مدیریت نظرسنجی ها
@endsection

@section('includes')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('content1')
<div class="row">
            <div class="col-8">
                    <div class="card">
                        <div class="card-header background-color-white">
                            لیست نظرسنجی ها
                        </div>
                        <div class="card-body col-12">
                        <table class="table table-white table-striped table-hover align-middle text-center">
                                    <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>عنوان</th>
                                            <th>وضعیت</th>
                                            <th>تاریخ انقضا</th>
                                            <th>لینک</th>
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
                                            <td class="text-center">@if($poll->shortLink)<a href="{{env('APP_URL').'poll/'.$poll->shortLink->code}}">لینک</a>@endif</td>
                                            <td class="text-center">
                                                <a href="{{route('admin.polls.edit', $poll->id)}}"><span class="fas fa-pencil-ruler text-primary"></span></a>
                                                &nbsp;|&nbsp;
                                                <a href="#" onclick="event.preventDefault(); deletePoll('{{$poll->id}}');"><span class="fas fa-trash text-danger"></span></a>
                                                &nbsp;|&nbsp;
                                                <a href="{{route('admin.polls.publish', $poll->id)}}"><span class="fas fa-eye text-success"></span></a>
                                                &nbsp;|&nbsp;
                                                <a href="{{route('poll.result',['poll'=>$poll->id])}}">نتایج</a>
                                                <form method="POST" action="{{route('admin.polls.destroy', $poll->id)}}" id="delete-{{$poll->id}}">
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

                <div class="col">
                    <div class="card">
                        <div class="card-header background-color-white">
                            مدیریت نظرسنجی ها
                        </div>
                        <div class="card-body col-12">
                                تعداد کل نظرسنجی های شما: {{$polls->count()}}
                        </div>
                        <div class="card-body col-12">
                                <a href="{{route('admin.polls.create')}}"><span class="fas fa-plus-circle text-success"> افزودن نظرسنجی</span></a>
                        </div>
                    </div>
                </div>

            </div>
@endsection

@section('script')
<script>
    function deletePoll(id)
    {
        Swal.fire({
        title: "آیا مطمئن هستید؟",
        text: "آیا از حذف این نظرسنجی مطمئن هستید؟",
        icon: "warning",
        cancelButtonText: "خیر",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "بله!"
        }).then((result) => {
            if (result.isConfirmed) {
            document.getElementById('delete-'+id).submit();
        }
    });
    }
</script>
@endsection

