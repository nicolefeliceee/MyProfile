<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    {{-- bootstrap css --}}
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css">

    {{-- customize css --}}
    <link rel="stylesheet" href="sl3/css/navbar.css">
    <link rel="stylesheet" href="sl3/css/about.css">
</head>
<body>
    {{-- navbar start here --}}
    <div class="fullNavbar position-fixed">
        <h1><a href="index">Nicole Felice</a></h1>
        <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link" href="index">Home</a></li>
              <li><a class="nav-link active" href="about">About</a></li>
              <li><a class="nav-link" href="resume">Resume</a></li>
              <li><a class="nav-link" href="project">Project</a></li>
              <li><a class="nav-link" href="contact">Contact</a></li>
            </ul>
        </nav>
    </div>
    {{-- navbar end here --}}

    {{-- content start here --}}
    <div class="allContainer about">
        {{-- biodata --}}
        <div class="biodata">
            <div class="section-title">
                <h2>About</h2>
                <p>Biodata</p>
            </div>
            <div class="kiri">
                <div class="col col-md-4"></div>
                <div class="right" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col col-md-8 mb-4">
                        <h3 class="mb-2">Inquisitive soon-to-be Computer Science Graduate</h3>
                        <p class="fst-italic">I am a young, energetic, and geeky individual whose desire to learn is endless</p>
                    </div>
                    <div class="row row2 mt-3" >
                        <div class="col-lg-6">
                            <ul>
                              <li class="mb-4"><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>Nicole Felice</span></li>
                              <li class="mb-4"><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>29 January 2004</span></li>
                              <li class="mb-4"><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 81994352967</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                              <li class="mb-4"><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>19</span></li>
                              <li class="mb-4"><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Undergraduate</span></li>
                              <li class="mb-4"><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>nicolefeliceee@gmail.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- biodata --}}

        {{-- hardskill --}}
        <div class="hardSkill">
            <div class="section-title">
                <h2>Hard Skills</h2>
            </div>
            <div class="row">
                <div class="col mb-4">
                    <span class="skill">Artificial Intelligence<div class="val">100%</div></span>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                </div>
                <div class="col mb-4">
                    <span class="skill">Machine Learning<div class="val">100%</div></span>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col mb-4">
                    <span class="skill">Data Visualization<div class="val">100%</div></span>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                </div>
                <div class="col mb-4">
                    <span class="skill">Database Management<div class="val">100%</div></span>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col mb-4">
                    <span class="skill">Software Development<div class="val">100%</div></span>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                </div>
                <div class="col mb-4">
                    <span class="skill">Data Structure<div class="val">100%</div></span>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                </div>
            </div>

        </div>
        {{-- hardskill --}}


    </div>
    {{-- content end here --}}

    {{-- bootstrap js --}}
    <script src="node_modules/aos/dist/aos.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
    {{-- script for animate on scroll --}}
    <script>
        AOS.init();
    </script>
</html>
