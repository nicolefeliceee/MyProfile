<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('metaDescription')">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    {{-- bootstrap css --}}
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/aos/dist/aos.css') }}">

    {{-- customize css --}}
    <link rel="stylesheet" href="{{ asset('sl3/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('sl3/css/footer.css') }}">
    @yield('css')
</head>
<body>
    {{-- content start here --}}
    @yield('content')
    {{-- content end here --}}

    {{-- bootstrap js --}}
    <script src="{{ asset('node_modules/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    @yield('js')
</body>
    {{-- script for animate on scroll --}}
    <script>
        AOS.init();
    </script>
</html>
