<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin UI</title>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

@include('admin._partials._topbar')
@include('admin._partials._menu')

<div class="page">
    @yield('content')
</div>

</body>
</html>
