@extends('TemplateBaseHtml')
@section('Title')
    Edit Student
@endsection

@section('content')
    <div style="font-family: 'BYekan'" class="container"><br>
        <h3 class="text-center">تغییرات خود را لحاظ کنید</h3>
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
                <input value="{{$_GET['fname']}}" type="text" class="form-control " id="fname"
                       placeholder="نام خود را وارد کنید" name="fname"
                       required>
                <div class="valid-feedback">اوکی شد</div>
                <div class="invalid-feedback">ضروری</div>
            </div>
            <div class="form-group">
                <label for="lname">نام خانوادگی</label>
                <input value="{{$_GET['lname']}}" type="text" class="form-control " id="lname"
                       placeholder="نام خانوادگی خود را وارد کنید"
                       name="lname" required>
                <div class="valid-feedback">اوکی شد</div>
                <div class="invalid-feedback">ضروری</div>
            </div>
            <div class="form-group">
                <label for="Age">سن</label>
                <input value="{{$_GET['Age']}}" type="text" class="form-control " id="Age"
                       placeholder="سن خود را وارد کنید"
                       name="Age" required>
                <div class="valid-feedback">اوکی شد</div>
                <div class="invalid-feedback">ضروری</div>
            </div>
            <div class="d-block text-center">
                <a href="../">
                    <button type="button" class="d-inline btn btn-danger w-25">برگشت</button>
                </a>
                <button name="send" type="submit" class="d-inline btn btn-primary w-50">انجام تغییرات</button>
            </div>
        </form>
    </div>
    @if (isset($_POST['send']))
        @php

            $Column =  \App\Models\Students::all()->get(0);
        $Column = $Column->toArray();
        $Column = array_keys($Column);
        $col1 =$Column[0];
        $col2 =$Column[1];
        $col3 =$Column[2];
        $col4 =$Column[3];
        $col5 =$Column[4];
        $col6 =$Column[5];

             $rowedit =  \App\Models\Students::all()->find($_GET['id']);

                //$rowedit->$col1 = $_POST['id'];
                $rowedit->$col2 = $_POST['fname'];
                $rowedit->$col3 = $_POST['lname'];
                $rowedit->$col4 = $_POST['Age'];
                $rowedit->$col5 = 1010;
                $rowedit->$col6 = 14001401;
        $rowedit->save();
        header('Location:../');

        @endphp
    @endif


@endsection