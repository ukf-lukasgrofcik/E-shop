<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentication</title>

    <link rel="stylesheet" href="{{ asset('libs/bootstrap-5.2.2-dist/css/bootstrap.css') }}">
    <style type="text/css">
        .page {
            margin-left: 200px;
            margin-top: 60px;
            display: inline-block;
            width: calc(100% - 200px);
            min-height: calc(100vh - 60px);
            padding: 20px;
        }
    </style>
</head>
<body>

@include('admin._partials._topbar')
@include('admin._partials._menu')

<div class="page">
    @yield('content')
</div>

</body>
</html>
