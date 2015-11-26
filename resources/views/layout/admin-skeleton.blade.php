<!DOCTYPE html>
<html lang="en">
<head>
  @yield('title')
  @yield('meta')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link href='https://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,100,300,500,700,900,100italic,300italic,400italic,500italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="{{ elixir('css/admin.css') }}">
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
  @yield('head')
  @if ( env('PACE') )
    <script src="{{ asset('js/pace.js') }}"></script>
    <link href="{{ asset('css/pace.css') }}" rel="stylesheet" />
  @endif
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body @yield('body-id')>

<div id="wrapper">
  @include('../partials/admin-navbar')
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          @yield('content')
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{ elixir('js/admin.js') }}"></script>
@yield('footer-scripts')
</body>
</html>