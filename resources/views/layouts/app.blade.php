<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> KOLORO | TEST </title>
    @include('layouts.meta')
</head>
<body>

@include('layouts.header')

    @yield('content')

@include('layouts.footer')

</body>
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<script src="{{ mix('/js/app.js') }}"></script>
</html>