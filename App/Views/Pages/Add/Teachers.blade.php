@extends('TemplateBaseHtml')
@section('Title')
    Add Teachers
@endsection

@section('content')
    <div style="font-family: 'BYekan'" class="container"><br>
        <h3 class="text-center">اضافه کردن استاد</h3>
        <form action="" class="was-validated w-50 m-auto" method="post" style="direction: rtl;text-align: right">
            <div class="form-group">
                <label for="id">شناسه</label>
                <input type="Number" class="form-control" id="id" placeholder="شناسه خود را وارد کنید" name="id"
                       required>
                <div class="valid-feedback">اوکی شد</div>
                <div class="invalid-feedback">ضروری</div>
            </div>
            <div class="form-group">
                <label for="fname">نام</label>
                <input type="text" class="form-control" id="fname" placeholder="نام خود را وارد کنید" name="fname"
                       required>
                <div class="valid-feedback">اوکی شد</div>
                <div class="invalid-feedback">ضروری</div>
            </div>
            <div class="form-group">
                <label for="lname">نام خانوادگی</label>
                <input type="text" class="form-control" id="lname" placeholder="نام خانوادگی خود را وارد کنید"
                       name="lname" required>
                <div class="valid-feedback">اوکی شد</div>
                <div class="invalid-feedback">ضروری</div>
            </div>
            <div class="d-block m-auto text-center">
                <a href="../Teachers">
                    <button type="button" class="btn btn-danger w-25 ">برگشت</button>
                </a>
                <button name="send" type="submit" class="btn btn-primary w-50">اضافه</button>
            </div>
        </form>
    </div>

    @if(isset($_POST['send']))
    @php

        $teache = new \App\Models\Teachers();
        $Column =  \App\Models\Teachers::all()->get(0);
        $Column = $Column->toArray();
        $Column = array_keys($Column);

        $col1 =$Column[0];
        $col2 =$Column[1];
        $col3 =$Column[2];

                $teache->$col1 = $_POST['id'];
                $teache->$col2 = $_POST['fname'];
                $teache->$col3 = $_POST['lname'];
        $teache->save();
        header('Location:../Teachers');
    @endphp
    @endif


@endsection