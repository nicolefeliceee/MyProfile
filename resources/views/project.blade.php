<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    {{-- bootstrap css --}}
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css">

    {{-- customize css --}}
    <link rel="stylesheet" href="sl3/css/navbar.css">
    <link rel="stylesheet" href="sl3/css/project.css">
</head>
<body>
    {{-- navbar start here --}}
    <div class="fullNavbar position-fixed">
        <h1><a href="index">Nicole Felice</a></h1>
        <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link" href="index">Home</a></li>
              <li><a class="nav-link" href="about">About</a></li>
              <li><a class="nav-link" href="resume">Resume</a></li>
              <li><a class="nav-link active" href="project">Project</a></li>
              <li><a class="nav-link" href="contact">Contact</a></li>
            </ul>
        </nav>
    </div>
    {{-- navbar end here --}}

    {{-- project --}}
    <div class="allContainer project">
        <div class="section-title">
            <h2>Project</h2>
            <p>My Works</p>
        </div>
        <div class="projectCard">
            <div class="card" data-bs-toggle="modal" data-bs-target="#project1Modal" style="width: 21rem;" data-aos="fade-right" data-aos-duration="1000">
                <img src="sl3/img/jualanYuk.png" class="card-img-top" alt="JualanYuk!">
                <div class="card-body">
                    <h5 class="card-title">JualanYuk!</h5>
                    <p class="card-text">Software Engineering / 2023</p>
                </div>
            </div>
            <div class="card" data-bs-toggle="modal" data-bs-target="#project2Modal" style="width: 21rem;" data-aos="fade-up" data-aos-duration="1000">
                <img src="sl3/img/brainStroke.jpg" class="card-img-top" alt="Brain Stroke Prediction">
                <div class="card-body">
                    <h5 class="card-title">Brain Stroke Prediction</h5>
                    <p class="card-text">Machine Learning / 2023</p>
                </div>
            </div>
            <div class="card" data-bs-toggle="modal" data-bs-target="#project3Modal" style="width: 21rem;" data-aos="fade-left" data-aos-duration="1000">
                <img src="sl3/img/muree.png" class="card-img-top" alt="Muree">
                <div class="card-body">
                    <h5 class="card-title">MuRee</h5>
                    <p class="card-text">Artificial Intelligence / 2022</p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="project1Modal" tabindex="-1" aria-labelledby="project1ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title " id="project1ModalLabel">JualanYuk!</h1>
                    </div>
                    <div class="modal-body">
                        {{-- carousel --}}
                        <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="sl3/img/jualanYuk.png" class="d-block w-100" alt="JualanYuk! logo">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="sl3/img/jualanYuk2.png" class="d-block w-100" alt="JualanYuk! website">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="sl3/img/jualanYuk3.png" class="d-block w-100" alt="JualanYuk! team">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        {{-- carousel --}}
                        <div class="rightModal ms-4">
                            <h4>Project information</h4>
                            <p class="mb-3"><strong>Category: </strong>Software Engineering</p>
                            <p class="mb-3"><strong>Year: </strong>2023</p>
                            <p class="mb-3"><strong>Github: </strong><a href="https://github.com/nicolefeliceee/JualanYuk">github/jualanyuk</a></p>
                            <p class="mb-4"><strong>Project URL: </strong><a href="https://jualanyukkk.000webhostapp.com/Code/login/login.php">jualanyuk.com</a></p>
                            <p>JualanYuk is a goods supplier software whose business model focuses on B2B (Business to Business) which provides quality wholesale products at affordable prices that helps Ministry of Micro, Small & Medium Enterprises (MSME) traders in building and managing their business.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="project2Modal" tabindex="-1" aria-labelledby="project2ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title " id="project2ModalLabel">Brain Stroke Prediction</h1>
                    </div>
                    <div class="modal-body">
                        {{-- carousel --}}
                        <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="sl3/img/brainStroke.jpg" class="d-block w-100" alt="Brain Stroke Logo">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="sl3/img/brainStroke2.png" class="d-block w-100" alt="Brain Stroke Code">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="sl3/img/brainStroke3.png" class="d-block w-100" alt="Brain Stroke Prediction Team">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        {{-- carousel --}}
                        <div class="rightModal ms-4">
                            <h4>Project information</h4>
                            <p class="mb-3"><strong>Category: </strong>Machine Learning</p>
                            <p class="mb-3"><strong>Year: </strong>2023</p>
                            <p class="mb-4"><strong>Github: </strong><a href="https://github.com/nicolefeliceee/Brain-Stroke-Prediction">github/brain-stroke</a></p>
                            <p>The brain stroke prediction system is a system that can predict whether a person has a brain stroke or not from several parameters. This system is designed with machine learning using random forest algorithm with parameter tuning.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="project3Modal" tabindex="-1" aria-labelledby="project3ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title " id="project3ModalLabel">MuRee</h1>
                    </div>
                    <div class="modal-body">
                        {{-- carousel --}}
                        <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="sl3/img/muree.png" class="d-block w-100" alt="MuRee logo">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="sl3/img/muree2.png" class="d-block w-100" alt="MuRee website">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="sl3/img/muree3.png" class="d-block w-100" alt="MuRee team">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        {{-- carousel --}}
                        <div class="rightModal ms-4">
                            <h4>Project information</h4>
                            <p class="mb-3"><strong>Category: </strong>Artificial Intelligence</p>
                            <p class="mb-3"><strong>Year: </strong>2022</p>
                            <p class="mb-4"><strong>Github: </strong><a href="https://github.com/nicolefeliceee/Muree">github/muree</a></p>
                            <p>MuRee is a music recommendation application designed using artificial intelligence. This application is able to recommend the next song that will be heard by the user based on the genre and year of release of the previous songs (user habits) using content based filtering.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- project --}}

    {{-- footer --}}
    @include('footer')
    {{-- footer --}}

    <script src="node_modules/aos/dist/aos.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
    {{-- script for animate on scroll --}}
    <script>
        AOS.init();
    </script>
</html>
