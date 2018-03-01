<!DOCTYPE html>
<html>
<head>
    <title> KOLORO | TEST </title>
    @include('layouts.meta')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
</head>
<body>

@include('layouts.navigation')
@include('layouts.header')

    @yield('content')

@include('layouts.footer')

</body>

<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<script src="{{ mix('/js/app.js') }}"></script>
</html>