@extends('MyTemplate')

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
                <li>
                    <a href="{{$docroot}}/Teachers"><i class="fa fa-th-large"></i> <span class="nav-label">Teachers</span>
                    </a>
                </li>
                <li class="active">
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
            <h1 style="text-align: center">
                Days
            </h1>
            <table class="table text-center table-hover text-right table-sm">
                <thead style="background-color: #2F4050" class="text-light">
                <tr>
                    <th>Name</th>
                    <th>id</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Allday as $day)
                    <tr>
                        <td>{{$day->NameRoz}}</td>
                        <td>{{$day->idRoz}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection