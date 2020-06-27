<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Musician Store</title>
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/front-end.css') }}" rel="stylesheet">
</head>
<body>
<div id='app'></div>
<header id="header" class="d-lg-flex flex-lg-column justify-content-lg-center @yield("class__home")">
    @include("layouts.partials_front.header")
    @yield("header")
</header>
<div class="container-fluid container-home">
    @yield("content")
</div>
@include("layouts.partials_front.footer")
<script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>

@yield('scripts')

</body>
</html>
