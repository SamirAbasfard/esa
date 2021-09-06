@extends('TemplateBaseHtml')
@section('Title')
    Add Student
@endsection

@section('content')
    <div style="font-family: 'BYekan'" class="container"><br>
        <h3 class="text-center">اضافه کردن دانش آموز</h3>
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
            <div class="form-group">
                <label for="age">سن</label>
                <input type="text" class="form-control" id="age" placeholder="سن خود را وارد کنید" name="age" required>
                <div class="valid-feedback">اوکی شد</div>
                <div class="invalid-feedback">ضروری</div>
            </div>
            <div class="d-block m-auto text-center">
                <a href="../">
                    <button type="button" class="btn btn-danger w-25 ">برگشت</button>
                </a>
                <button name="send" type="submit" class="btn btn-primary w-50">اضافه</button>
            </div>
        </form>
    </div>

    @if(isset($_POST['send']))
    @php
        $stuadd = new \App\Models\Students;
        $Column =  \App\Models\Students::all()->get(0);
        $Column = $Column->toArray();
        $Column = array_keys($Column);

        $col1 =$Column[0];
        $col2 =$Column[1];
        $col3 =$Column[2];
        $col4 =$Column[3];
        $col5 =$Column[4];
        $col6 =$Column[5];

                $stuadd->$col1 = $_POST['id'];
                $stuadd->$col2 = $_POST['fname'];
                $stuadd->$col3 = $_POST['lname'];
                $stuadd->$col4 = $_POST['age'];
                $stuadd->$col5 = 1010;
                $stuadd->$col6 = 14001401;
        $stuadd->save();
        header('Location:../');

    @endphp
    @endif


@endsection