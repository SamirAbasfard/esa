@php
    $my_link_url =\App\Config::MY_WEBSITE;


@endphp
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{$my_link_url}}/resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{$my_link_url}}/resources/css/fonts.css" rel="stylesheet">

    <title>@yield('Title')</title>
</head>
<body>
@yield('content')
</body>
<script src="{{$my_link_url}}/resources/js/bootstrap.min.js"></script>
</html>