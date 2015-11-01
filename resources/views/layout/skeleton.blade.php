<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href='https://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    @yield('title')
    @yield('meta')
    @yield('head')
    @if ( env('PACE') )
    <script src="{{ asset('js/pace.js') }}"></script>
    <link href="{{ asset('css/pace.css') }}" rel="stylesheet" />
    @endif
</head>
<body @yield('body-id')>
    <div id="wrapper">
        @include('../partials/header')
        @yield('content')
        @include('../partials/footer')
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        @yield('footer-scripts')
    </div>
</body>
</html>