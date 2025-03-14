@extends('layouts.admin.main')

@section('title')
افزودن نظرسنجی
@endsection

@section('content1')
<form method="POST" action="">
<div class="row">
    <div class="col-8 mx-auto d-flex mt-4">
            <div class="col-2">
                <label for="title" class="col-form-label ms-4">عنوان نظرسنجی :</label>
            </div>
            <div class="col">
                <input type="text" class="form-control form-control-sm" id="title" name="title" placeholder="عنوان نظرسنجی">
            </div>           
    </div>
    <div class="col-8 mx-auto d-flex mt-2">
            <div class="col-2">
                <label for="type" class="col-form-label ms-4">نوع نظرسنجی :</label>
            </div>
            <div class="col ms-5">
            <select class="form-select form-select-sm mb-3" name="type" id="type">
                 <option selected disabled>یک گزینه را انتخاب کنید...</option>
                 <option value="1">یک جوابی</option>
                 <option value="2">چند جوابی</option>
           </select>
            </div>
            <div class="col-auto">
                <label for="expired_at" class="col-form-label ms-4">تاریخ انقضا :</label>
            </div>
            <div class="col me-5">
            <input type="date" class="form-select form-select-sm mb-3" id="expired_at" name="expired_at">
             </select>
            </div>  
    </div>
</div>



<div class="row">
    <div class="col-8 mx-auto">
            <div class="d-block">
                <label class="col-form-label ms-4">پاسخ ها :</label>
            </div>
    </div>
</div>

<div class="row col-8 mx-auto">
    <div class="col-auto">
         <label for="" class="col-form-label">پاسخ اول:</label>
    </div>
    <div class="col">
         <input type="text" class="form-control form-control-sm" id="" name="a[][answers]" placeholder="">
     </div>
</div>

<div class="row col-8 mx-auto">
    <div class="col-auto">
         <label for="" class="col-form-label">پاسخ دوم:</label>
    </div>
    <div class="col">
         <input type="text" class="form-control form-control-sm" id="" name="a[][answers]" placeholder="">
     </div>
</div>

<div class="row col-8 mx-auto">
    <div class="col-auto" onclick="addAnswers()">
         اضافه کردن گزینه جدید <span class="fas fa-plus-circle text-primary"></span>
    </div>
</div>

</form>
@endsection

@section('script')
<script>
function addAnswers()
{
    
}
</script>
@endsection