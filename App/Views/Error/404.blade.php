@extends('TemplateBaseHtml')
@section('Title')
    Error 404
@endsection

@section('content')
    <style>
        .mycpdeError {
            text-align: center;
            font-family: BYekan,Calibri;
            height: 100vh;
            width: 100vw;
            padding: 25% 0;
            position: fixed;
        }
    </style>

    <h1 class="mycpdeError">Error 404 <br>
        <a href="../">
            <button type="button" class="btn btn-outline-info" style="width: 15%">خانه</button>
        </a>
    </h1>
@endsection