@extends('MyTemplate')
@section('Title')
    Teachers Page
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
                            <li><a class="dropdown-item" href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="{{$docroot}}/"><i class="fa fa-th-large"></i> <span
                                class="nav-label">Student</span></a>
                </li>
                <li class="active">
                    <a href="{{$docroot}}/Teachers"><i class="fa fa-th-large"></i> <span class="nav-label">Teachers</span>
                    </a>
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
                <a href="teachers/add" class="btn text-white btn-success w-100">اضافه کردن</a>
            </div>
            <h1 style="text-align: center">
                Teachers
            </h1>
            <table class="table text-center table-hover text-right table-sm">
                <thead style="background-color: #2F4050" class="text-light">
                <tr>
                    <th>Changes</th>
                    <th>LastName</th>
                    <th>Name</th>
                    <th>id</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Alltech as $tech)
                    <tr>
                        <td>
                            <a href="teachers/edit?id={{$tech->$col1}}&fname={{$tech->$col2}}&lname={{$tech->$col3}}" class="btn text-light btn-primary">ویرایش</a>
                            <a href="teachers/delete?id={{$tech->$col1}}&fname={{$tech->$col2}}&lname={{$tech->$col3}}" class="btn text-light btn-danger disabled">حذف</a>
                        </td>
                        <td>{{$tech->$col3}}</td>
                        <td>{{$tech->$col2}}</td>
                        <td>{{$tech->$col1}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection