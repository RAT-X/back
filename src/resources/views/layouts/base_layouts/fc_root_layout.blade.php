<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" constent="{{ csrf_token() }}">
    <title>-- {{ config('app.name', 'Chartman') }} --></title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nuinto" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css.app.css')}}" rel="stylesheet"> -->
</head>
<body>
    <div id="app"></div>
</body>
</html>
