@extends('TemplateBaseHtml')
@section('Title')
    Delete Teachers
@endsection

@section('content')
    <div style="font-family: 'BYekan'" class="container"><br>
        <h3 class="text-center">آیا از حذف مطمئنید</h3>
        <form action="" class="was-validated w-50 w m-auto" method="post" style="direction: rtl;text-align: right">
            <div class="form-group">
                <label for="id">شناسه</label>
                <input type="Number" value="{{$_GET['id']}}" class="form-control disabled" disabled id="id"
                       placeholder="شناسه خود را وارد کنید" name="id"
                       required>
                <div class="valid-feedback">اوکی شد</div>
                <div class="invalid-feedback">ضروری</div>
            </div>
            <div class="form-group">
                <label for="fname">نام</label>
                <input value="{{$_GET['fname']}}" type="text" class="form-control disabled" disabled id="fname"
                       placeholder="نام خود را وارد کنید" name="fname"
                       required>
                <div class="valid-feedback">اوکی شد</div>
                <div class="invalid-feedback">ضروری</div>
            </div>
            <div class="form-group">
                <label for="lname">نام خانوادگی</label>
                <input value="{{$_GET['lname']}}" type="text" class="form-control disabled" disabled id="lname"
                       placeholder="نام خانوادگی خود را وارد کنید"
                       name="lname" required>
                <div class="valid-feedback">اوکی شد</div>
                <div class="invalid-feedback">ضروری</div>
            </div>
            <div class="d-block text-center">
                <a href="../Teachers">
                    <button type="button" class="d-inline btn btn-danger w-25">برگشت</button>
                </a>
                <button name="send" type="submit" class="d-inline btn btn-primary w-50">انجام</button>
            </div>
        </form>
    </div>
    @if (isset($_POST['send']))
    @php

 \App\Models\Teachers::all()->find($_GET['id'])->delete();
                      header("Location:../Teachers");

    @endphp
    @endif

@endsection