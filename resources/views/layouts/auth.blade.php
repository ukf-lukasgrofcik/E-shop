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
        body {
            background-color: #f8f8f8;
        }
        .wrapper {
            width: 400px;
            height: 400px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border-radius: 10px;
            padding: 20px;
        }
        .logo {
            width: 50px;
            height: 50px;
            margin: 10px auto;
            position: relative;
            background: conic-gradient(#ff0000 0deg, #00ff00 120deg, #0000ff 240deg, #ff0000 360deg);
            animation: logo 2s infinite linear;
        }
        .logo::after {
            content: '';
            position: absolute;
            width: 8px;
            height: 8px;
            top: 16px;
            left: 16px;
            border: 9px solid transparent;
            background-color: #fff;
            animation: logo-after 2s infinite linear;
        }
        @keyframes logo {
            0% { clip-path: path('M0 0 L0 50 L50 50 L50 0 Z'); }
            50% { clip-path: path('M25 15 L25 35 L25 50 L25 0 Z'); }
            100% { clip-path: path('M50 0 L50 50 L0 50 L0 0 Z'); }
        }
        @keyframes logo-after {
            0% { clip-path: path('M18 0 L18 18 L0 18 L0 0 Z'); }
            50% { clip-path: path('M9 5.4 L9 12.6 L9 18 L9 0 Z'); }
            100% { clip-path: path('M0 0 L0 18 L18 18 L18 0 Z'); }
        }
        .font-12 {
            font-size: 12px;
        }
        @media (max-width: 576px) {
            .wrapper {
                width: 100%;
            }
        }
    </style>
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

</body>
</html>
