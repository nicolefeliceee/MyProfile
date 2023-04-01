<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>footer</title>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    {{-- bootstrap css --}}
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css">

    {{-- customize css --}}
    <link rel="stylesheet" href="sl3/css/navbar.css">
    <link rel="stylesheet" href="sl3/css/footer.css">
</head>
<body>
    {{-- footer start here --}}
    <footer class="w-100 pb-4">
        <nav id="navbar" class="navbar mb-4 mt-0">
            <ul>
              <li><a class="nav-link" href="index">Home</a></li>
              <li><a class="nav-link" href="about">About</a></li>
              <li><a class="nav-link" href="resume">Resume</a></li>
              <li><a class="nav-link" href="project">Project</a></li>
              <li><a class="nav-link" href="contact">Contact</a></li>
            </ul>
        </nav>
        <hr>
        <div class="bottom-footer d-flex">
            <div class="left-footer">
                <p>© 2023 Nicole | All Right Reserved</p>
            </div>
            <div class="right-footer d-flex justify-content-between ms-auto">
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=new"><i class="bi bi-envelope"></i></a>
                <a href="https://www.linkedin.com/in/nicole-felice-81aa171b6/"><i class="bi bi-linkedin"></i></a>
                <a href="https://github.com/nicolefeliceee"><i class="bi bi-github"></i></a>
                <a href="https://www.instagram.com/nicolefelicee/"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </footer>
    {{-- footer end here --}}


    <script src="node_modules/aos/dist/aos.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="sl3/js/project.js"></script>
</body>
    {{-- script for animate on scroll --}}
    <script>
        AOS.init();
    </script>
</html>
