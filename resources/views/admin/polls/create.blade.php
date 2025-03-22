@extends('layouts.admin.main')

@section('title')
افزودن نظرسنجی
@endsection

@section('content1')
<form method="POST" action="{{route('admin.polls.store')}}">
    @csrf
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

<div class="row">
    <div class="col-8 mx-auto d-flex justify-content-between">
        <div class="col-auto">
             <label for="" class="col-form-label">پاسخ اول:</label>
      </div>
        <div class="col-11">
             <input type="text" class="form-control form-control-sm" id="" name="a[][answers]" placeholder="">
      </div>
    </div>
</div>

<div class="row">
    <div class="col-8 mx-auto d-flex justify-content-between">
        <div class="col-auto">
             <label for="" class="col-form-label">پاسخ دوم:</label>
      </div>
        <div class="col-11">
             <input type="text" class="form-control form-control-sm" id="" name="a[][answers]" placeholder="">
      </div>
    </div>
</div>

<div id="answers"></div>

<div class="row col-8 mx-auto">
    <div class="col-auto" onclick="addAnswers()">
         اضافه کردن گزینه جدید <span class="fas fa-plus-circle text-primary"></span>
    </div>
</div>

<div class="row d-flex justify-content-center mt-4">
    <div class="col-auto">
      <button type="submit" class="btn btn-success">ارسال</button>
    </div> 
    <div class="col-auto">
    <button type="reset" class="btn btn-danger" onclick="resetform()">پاک کردن</button>
    </div> 
</div>

</form>
@endsection

@section('script')
<script>
function addAnswers()
{
    let count = document.getElementById('answers').childNodes.length+2;
    var div_row = document.createElement('div');
    div_row.classList.add('row');
    var div_col = document.createElement('div');
    div_col.classList.add("col-8","mx-auto","d-flex","justify-content-between")
    div_row.appendChild(div_col);
    var item1 = document.createElement('div');
    var item2 = document.createElement('div');
    item1.innerHTML=`<label for="" class="col-form-label">پاسخ ${++count}:</label>`
    item1.classList.add("col-auto");
    div_col.appendChild(item1);

    item2.innerHTML='<input type="text" class="form-control form-control-sm" id="" name="a[][answers]" placeholder="">';
    item2.classList.add("col-11");
    div_col.appendChild(item2);
    document.getElementById('answers').appendChild(div_row);
}

function resetform()
{
    let count = document.getElementById('answers').childNodes.length;
    if(count)
        {
            for(let i=0; i<count; i++)
            document.getElementById('answers').removeChild(document.getElementById('answers').childNodes[count-i-1])
        }
}
</script>
@endsection