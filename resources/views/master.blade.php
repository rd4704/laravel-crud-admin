<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Artisans Playground</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

    @if (isset($_SERVER['HTTPS']))
        <link href="{{ secure_asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    @else
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    @endif
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        @yield('content')
        @yield('contact')
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
