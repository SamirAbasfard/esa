@extends('MyTemplate')
@section('Title')
Student Page
@endsection
@section('nav')
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">{{$_SESSION['login']}}</span>
                            <span class="text-muted text-xs block">menu <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><button  class="dropdown-item">Logout</button></li>
                        </ul>

                    </div>
                    <div class="logo-element">
                        Kazem
                    </div>
                </li>
                <li class="active">
                    <a href="{{$docroot}}/"><i class="fa fa-th-large"></i> <span
                                class="nav-label">Student</span></a>
                </li>
                <li>
                    <a href="{{$docroot}}/Teachers"><i class="fa fa-th-large"></i> <span
                                class="nav-label">Teachers</span> </a>
                </li>
                <li>
                    <a href="{{$docroot}}/Days"><i class="fa fa-th-large"></i> <span
                                class="nav-label">Days</span> </a>
                </li>
                <li>
                    <a href="{{$docroot}}/Years"><i class="fa fa-th-large"></i> <span
                                class="nav-label">Years</span> </a>
                </li>
                <li>
                    <a href="{{$docroot}}/Room"><i class="fa fa-th-large"></i> <span
                                class="nav-label">Room</span> </a>
                </li>
            </ul>

        </div>
    </nav>


@endsection

@section('main')
    <div class="row">
        <div class="col-lg-12">
            <div class="w-50 d-block m-auto">
                <a href="student/add" class="btn text-white btn-success w-100">اضافه کردن</a>
            </div>
            <h1 style="text-align: center">
                Students
            </h1>
            <table class="table table-hover text-right table-sm text-center">
                <thead style="background-color: #2F4050" class="text-light">
                <tr>
                    <th>Changes</th>
                    <th>Age</th>
                    <th>LastName</th>
                    <th>Name</th>
                    <th>id</th>
                </tr>
                </thead>
                <tbody>
                @foreach($AllStudent as $stu)
                    <tr>
                        <td>
                            <a href="student/edit?id={{$stu->$col1}}&fname={{$stu->$col2}}&lname={{$stu->$col3}}&Age={{$stu->$col4}}" class="btn text-light btn-primary">ویرایش</a>
                            <a href="student/delete?id={{$stu->$col1}}&fname={{$stu->$col2}}&lname={{$stu->$col3}}" class="btn text-light btn-danger ">حذف</a>
                        </td>
                        <td>{{$stu->$col4}}</td>
                        <td>{{$stu->$col3}}</td>
                        <td>{{$stu->$col2}}</td>
                        <td>{{$stu->$col1}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
