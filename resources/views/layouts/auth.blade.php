<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentication</title>

    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-12">
                    <a href="{{ route('web.home') }}">
                        <div class="logo"></div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">

                    @yield('content')

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/auth.js') }}"></script>
</body>
</html>
