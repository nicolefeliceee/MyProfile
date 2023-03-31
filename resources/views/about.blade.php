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
        <div class="hardSkill mt-3" data-aos="fade-right" data-aos-duration="1000">
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

        {{-- softskill --}}
        <div class="softSkill">
            <div class="section-title mt-5">
                <h2>Soft Skills</h2>
            </div>
            <div class="softCart">
                <div class="row col-gap justify-content-between mt-4">
                    <div class="col-md-3 card p-3">
                        <div class="svg ms-2">
                            <svg width="45" height="45" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 5H8L12 1L16 5H13V9.43C12.25 9.89 11.58 10.46 11 11.12V5ZM22 11L18 7V10C16.2631 9.92857 14.5656 10.5303 13.2614 11.6798C11.9573 12.8293 11.1472 14.4378 11 16.17C10.2502 16.4362 9.6365 16.9889 9.29346 17.7068C8.95043 18.4247 8.90603 19.2494 9.17 20C9.43622 20.7498 9.98887 21.3635 10.7068 21.7065C11.4247 22.0496 12.2494 22.094 13 21.83C13.7492 21.5629 14.3622 21.0101 14.7051 20.2925C15.0479 19.5748 15.0929 18.7507 14.83 18C14.53 17.14 13.85 16.47 13 16.17C13.47 12.17 17.47 11.97 17.95 11.97V14.97L22 11ZM10.63 11.59C9.30313 10.566 7.67606 10.0072 6 10V7L2 11L6 15V12C7.34 12.03 8.63 12.5 9.64 13.4C9.89 12.76 10.22 12.15 10.63 11.59Z" fill="#85B6FF"/>
                            </svg>
                        </div>
                        <div class="ms-4">
                            <h3>Decision Making</h3>
                        </div>
                    </div>
                    <div class="col-md-3 card p-3">
                        <div class="svg ms-2">
                            <svg width="45" height="45" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 5H8L12 1L16 5H13V9.43C12.25 9.89 11.58 10.46 11 11.12V5ZM22 11L18 7V10C16.2631 9.92857 14.5656 10.5303 13.2614 11.6798C11.9573 12.8293 11.1472 14.4378 11 16.17C10.2502 16.4362 9.6365 16.9889 9.29346 17.7068C8.95043 18.4247 8.90603 19.2494 9.17 20C9.43622 20.7498 9.98887 21.3635 10.7068 21.7065C11.4247 22.0496 12.2494 22.094 13 21.83C13.7492 21.5629 14.3622 21.0101 14.7051 20.2925C15.0479 19.5748 15.0929 18.7507 14.83 18C14.53 17.14 13.85 16.47 13 16.17C13.47 12.17 17.47 11.97 17.95 11.97V14.97L22 11ZM10.63 11.59C9.30313 10.566 7.67606 10.0072 6 10V7L2 11L6 15V12C7.34 12.03 8.63 12.5 9.64 13.4C9.89 12.76 10.22 12.15 10.63 11.59Z" fill="#85B6FF"/>
                            </svg>
                        </div>
                        <div class="ms-4">
                            <h3>Decision Making</h3>
                        </div>
                    </div>
                    <div class="col-md-3 card p-3">
                        <div class="svg ms-2">
                            <svg width="45" height="45" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 5H8L12 1L16 5H13V9.43C12.25 9.89 11.58 10.46 11 11.12V5ZM22 11L18 7V10C16.2631 9.92857 14.5656 10.5303 13.2614 11.6798C11.9573 12.8293 11.1472 14.4378 11 16.17C10.2502 16.4362 9.6365 16.9889 9.29346 17.7068C8.95043 18.4247 8.90603 19.2494 9.17 20C9.43622 20.7498 9.98887 21.3635 10.7068 21.7065C11.4247 22.0496 12.2494 22.094 13 21.83C13.7492 21.5629 14.3622 21.0101 14.7051 20.2925C15.0479 19.5748 15.0929 18.7507 14.83 18C14.53 17.14 13.85 16.47 13 16.17C13.47 12.17 17.47 11.97 17.95 11.97V14.97L22 11ZM10.63 11.59C9.30313 10.566 7.67606 10.0072 6 10V7L2 11L6 15V12C7.34 12.03 8.63 12.5 9.64 13.4C9.89 12.76 10.22 12.15 10.63 11.59Z" fill="#85B6FF"/>
                            </svg>
                        </div>
                        <div class="ms-4">
                            <h3>Decision Making</h3>
                        </div>
                    </div>
                </div>
                <div class="row col-gap justify-content-between mt-4">
                    <div class="col-md-3 card p-3">
                        <div class="svg ms-2">
                            <svg width="45" height="45" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 5H8L12 1L16 5H13V9.43C12.25 9.89 11.58 10.46 11 11.12V5ZM22 11L18 7V10C16.2631 9.92857 14.5656 10.5303 13.2614 11.6798C11.9573 12.8293 11.1472 14.4378 11 16.17C10.2502 16.4362 9.6365 16.9889 9.29346 17.7068C8.95043 18.4247 8.90603 19.2494 9.17 20C9.43622 20.7498 9.98887 21.3635 10.7068 21.7065C11.4247 22.0496 12.2494 22.094 13 21.83C13.7492 21.5629 14.3622 21.0101 14.7051 20.2925C15.0479 19.5748 15.0929 18.7507 14.83 18C14.53 17.14 13.85 16.47 13 16.17C13.47 12.17 17.47 11.97 17.95 11.97V14.97L22 11ZM10.63 11.59C9.30313 10.566 7.67606 10.0072 6 10V7L2 11L6 15V12C7.34 12.03 8.63 12.5 9.64 13.4C9.89 12.76 10.22 12.15 10.63 11.59Z" fill="#85B6FF"/>
                            </svg>
                        </div>
                        <div class="ms-4">
                            <h3>Decision Making</h3>
                        </div>
                    </div>
                    <div class="col-md-3 card p-3">
                        <div class="svg ms-2">
                            <svg width="45" height="45" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 5H8L12 1L16 5H13V9.43C12.25 9.89 11.58 10.46 11 11.12V5ZM22 11L18 7V10C16.2631 9.92857 14.5656 10.5303 13.2614 11.6798C11.9573 12.8293 11.1472 14.4378 11 16.17C10.2502 16.4362 9.6365 16.9889 9.29346 17.7068C8.95043 18.4247 8.90603 19.2494 9.17 20C9.43622 20.7498 9.98887 21.3635 10.7068 21.7065C11.4247 22.0496 12.2494 22.094 13 21.83C13.7492 21.5629 14.3622 21.0101 14.7051 20.2925C15.0479 19.5748 15.0929 18.7507 14.83 18C14.53 17.14 13.85 16.47 13 16.17C13.47 12.17 17.47 11.97 17.95 11.97V14.97L22 11ZM10.63 11.59C9.30313 10.566 7.67606 10.0072 6 10V7L2 11L6 15V12C7.34 12.03 8.63 12.5 9.64 13.4C9.89 12.76 10.22 12.15 10.63 11.59Z" fill="#85B6FF"/>
                            </svg>
                        </div>
                        <div class="ms-4">
                            <h3>Decision Making</h3>
                        </div>
                    </div>
                    <div class="col-md-3 card p-3">
                        <div class="svg ms-2">
                            <svg width="45" height="45" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 5H8L12 1L16 5H13V9.43C12.25 9.89 11.58 10.46 11 11.12V5ZM22 11L18 7V10C16.2631 9.92857 14.5656 10.5303 13.2614 11.6798C11.9573 12.8293 11.1472 14.4378 11 16.17C10.2502 16.4362 9.6365 16.9889 9.29346 17.7068C8.95043 18.4247 8.90603 19.2494 9.17 20C9.43622 20.7498 9.98887 21.3635 10.7068 21.7065C11.4247 22.0496 12.2494 22.094 13 21.83C13.7492 21.5629 14.3622 21.0101 14.7051 20.2925C15.0479 19.5748 15.0929 18.7507 14.83 18C14.53 17.14 13.85 16.47 13 16.17C13.47 12.17 17.47 11.97 17.95 11.97V14.97L22 11ZM10.63 11.59C9.30313 10.566 7.67606 10.0072 6 10V7L2 11L6 15V12C7.34 12.03 8.63 12.5 9.64 13.4C9.89 12.76 10.22 12.15 10.63 11.59Z" fill="#85B6FF"/>
                            </svg>
                        </div>
                        <div class="ms-4">
                            <h3>Decision Making</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- softskill --}}


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
