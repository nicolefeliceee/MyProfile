<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    {{-- bootstrap css --}}
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css">

    {{-- customize css --}}
    <link rel="stylesheet" href="sl3/css/navbar.css">
    <link rel="stylesheet" href="sl3/css/index.css">
</head>
<body>
    <header id="header" >
        <div class="container">

            <h1 ><a href="index">Nicole Felice</a></h1>
            <h2 class="desc" >Inquisitive <b>soon-to-be Computer Science graduate</b> skilled in leadership, organizational, and product-development, with a strong foundation in math, programming logic, and problem solving.</h2>

            <nav id="navbar" class="navbar" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="100">
                <ul>
                    <li><a class="nav-link {{ set_active('index') }}" href="{{ route('index') }}">Home</a></li>
                    <li><a class="nav-link {{ set_active('about') }}" href="{{ route('about') }}">About</a></li>
                    <li><a class="nav-link {{ set_active('resume') }}" href="{{ route('resume') }}">Resume</a></li>
                    <li><a class="nav-link {{ set_active('project') }}" href="{{ route('project') }}">Project</a></li>
                    <li><a class="nav-link {{ set_active('contact') }}" href="{{ route('contact') }}">Contact</a></li>
                    <li><a class="nav-link {{ set_active(['galleries', 'gallery']) }}" href="{{ route('galleries') }}">Gallery</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <script src="node_modules/aos/dist/aos.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
    {{-- script for animate on scroll --}}
    <script>
        AOS.init();
    </script>
</html>
