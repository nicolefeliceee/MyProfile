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
        <div class="hardSkill mt-3" id="hardSkill">
            <div class="section-title">
                <h2>Hard Skills</h2>
            </div>
            <div class="row">
                <div class="col mb-4">
                    <span class="skill">Artificial Intelligence<div class="val">100%</div></span>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor="#hardSkill" data-aos-offset="200" style="width: 80%"></div>
                    </div>
                </div>
                <div class="col mb-4">
                    <span class="skill">Machine Learning<div class="val">100%</div></span>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor="#hardSkill" data-aos-offset="200" style="width: 50%"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col mb-4">
                    <span class="skill">Data Visualization<div class="val">100%</div></span>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor="#hardSkill" data-aos-offset="200" style="width: 100%"></div>
                    </div>
                </div>
                <div class="col mb-4">
                    <span class="skill">Database Management<div class="val">100%</div></span>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor="#hardSkill" data-aos-offset="200" style="width: 30%"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col mb-4">
                    <span class="skill">Software Development<div class="val">100%</div></span>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor="#hardSkill" data-aos-offset="200" style="width: 80%"></div>
                    </div>
                </div>
                <div class="col mb-4">
                    <span class="skill">Data Structure<div class="val">100%</div></span>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor="#hardSkill" data-aos-offset="200" style="width: 70%"></div>
                    </div>
                </div>
            </div>

        </div>
        {{-- hardskill --}}

        {{-- softskill --}}
        <div class="softSkill" data-aos="fade-up" data-aos-duration="1000">
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

        {{-- tools --}}
        <div class="tools">
            <div class="section-title">
                <h2 data-aos="fade-right" data-aos-duration="800">Tools</h2>
            </div>
            <div class="toolsCart">
                <div class="row col-gap justify-content-between mt-4" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-offset="300">
                    <div class="col-md-3 card p-3">
                        <div class="icon-box">
                            <div class="icon">
                                <div class="svg">
                                    <svg width="45" height="45" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_72_2)">
                                        <path d="M9.95454 0.00567627C4.86968 0.00567627 5.18717 2.21077 5.18717 2.21077L5.19282 4.49532H10.0452V5.18121H3.26552C3.26552 5.18121 0.0117188 4.81219 0.0117188 9.94277C0.0117188 15.0735 2.85172 14.8916 2.85172 14.8916H4.54662V12.5107C4.54662 12.5107 4.45525 9.6707 7.34129 9.6707H12.154C12.154 9.6707 14.8579 9.71438 14.8579 7.05744V2.66434C14.8579 2.66434 15.2686 0.00567627 9.95454 0.00567627ZM7.27894 1.54199C7.3936 1.54189 7.50716 1.5644 7.61312 1.60823C7.71907 1.65206 7.81535 1.71636 7.89643 1.79744C7.97751 1.87852 8.0418 1.97479 8.08564 2.08075C8.12947 2.18671 8.15198 2.30027 8.15188 2.41493C8.15198 2.5296 8.12947 2.64316 8.08564 2.74911C8.0418 2.85507 7.97751 2.95134 7.89643 3.03242C7.81535 3.1135 7.71907 3.1778 7.61312 3.22163C7.50716 3.26547 7.3936 3.28798 7.27894 3.28787C7.16427 3.28798 7.05071 3.26547 6.94475 3.22163C6.8388 3.1778 6.74252 3.1135 6.66144 3.03242C6.58036 2.95134 6.51607 2.85507 6.47223 2.74911C6.4284 2.64316 6.40589 2.5296 6.40599 2.41493C6.40589 2.30027 6.4284 2.18671 6.47223 2.08075C6.51607 1.97479 6.58036 1.87852 6.66144 1.79744C6.74252 1.71636 6.8388 1.65206 6.94475 1.60823C7.05071 1.5644 7.16427 1.54189 7.27894 1.54199Z" fill="url(#paint0_linear_72_2)"/>
                                        <path d="M10.0993 19.9315C15.1841 19.9315 14.8667 17.7264 14.8667 17.7264L14.861 15.4419H10.0085V14.756H16.7882C16.7882 14.756 20.042 15.125 20.042 9.9943C20.042 4.86364 17.202 5.0456 17.202 5.0456H15.5071V7.42638C15.5071 7.42638 15.5985 10.2664 12.7125 10.2664H7.89975C7.89975 10.2664 5.19583 10.2227 5.19583 12.8797V17.2729C5.19583 17.2729 4.78524 19.9315 10.0992 19.9315H10.0993ZM12.7749 18.3953C12.6602 18.3954 12.5467 18.3729 12.4407 18.3291C12.3348 18.2853 12.2385 18.221 12.1574 18.1399C12.0763 18.0588 12.012 17.9625 11.9682 17.8566C11.9244 17.7506 11.9018 17.637 11.902 17.5224C11.9018 17.4077 11.9243 17.2941 11.9682 17.1882C12.012 17.0822 12.0763 16.9859 12.1574 16.9048C12.2385 16.8237 12.3347 16.7594 12.4407 16.7156C12.5467 16.6718 12.6602 16.6493 12.7749 16.6494C12.8896 16.6493 13.0031 16.6718 13.1091 16.7156C13.215 16.7594 13.3113 16.8237 13.3924 16.9048C13.4735 16.9859 13.5378 17.0822 13.5816 17.1881C13.6254 17.2941 13.6479 17.4076 13.6478 17.5223C13.6479 17.637 13.6254 17.7505 13.5816 17.8565C13.5378 17.9624 13.4735 18.0587 13.3924 18.1398C13.3113 18.2209 13.215 18.2852 13.1091 18.329C13.0031 18.3728 12.8896 18.3954 12.7749 18.3953Z" fill="url(#paint1_linear_72_2)"/>
                                        </g>
                                        <defs>
                                        <linearGradient id="paint0_linear_72_2" x1="192.499" y1="179.226" x2="1185.12" y2="1161.95" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-color="#366994"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_72_2" x1="289.307" y1="311.398" x2="1355.27" y2="1319.09" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-color="#FFC331"/>
                                        </linearGradient>
                                        <clipPath id="clip0_72_2">
                                        <rect width="20.08" height="20" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <h4>HTML</h4>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 card p-3">
                        <div class="icon-box">
                            <div class="icon">
                                <div class="svg">
                                    <svg width="45" height="45" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_72_2)">
                                        <path d="M9.95454 0.00567627C4.86968 0.00567627 5.18717 2.21077 5.18717 2.21077L5.19282 4.49532H10.0452V5.18121H3.26552C3.26552 5.18121 0.0117188 4.81219 0.0117188 9.94277C0.0117188 15.0735 2.85172 14.8916 2.85172 14.8916H4.54662V12.5107C4.54662 12.5107 4.45525 9.6707 7.34129 9.6707H12.154C12.154 9.6707 14.8579 9.71438 14.8579 7.05744V2.66434C14.8579 2.66434 15.2686 0.00567627 9.95454 0.00567627ZM7.27894 1.54199C7.3936 1.54189 7.50716 1.5644 7.61312 1.60823C7.71907 1.65206 7.81535 1.71636 7.89643 1.79744C7.97751 1.87852 8.0418 1.97479 8.08564 2.08075C8.12947 2.18671 8.15198 2.30027 8.15188 2.41493C8.15198 2.5296 8.12947 2.64316 8.08564 2.74911C8.0418 2.85507 7.97751 2.95134 7.89643 3.03242C7.81535 3.1135 7.71907 3.1778 7.61312 3.22163C7.50716 3.26547 7.3936 3.28798 7.27894 3.28787C7.16427 3.28798 7.05071 3.26547 6.94475 3.22163C6.8388 3.1778 6.74252 3.1135 6.66144 3.03242C6.58036 2.95134 6.51607 2.85507 6.47223 2.74911C6.4284 2.64316 6.40589 2.5296 6.40599 2.41493C6.40589 2.30027 6.4284 2.18671 6.47223 2.08075C6.51607 1.97479 6.58036 1.87852 6.66144 1.79744C6.74252 1.71636 6.8388 1.65206 6.94475 1.60823C7.05071 1.5644 7.16427 1.54189 7.27894 1.54199Z" fill="url(#paint0_linear_72_2)"/>
                                        <path d="M10.0993 19.9315C15.1841 19.9315 14.8667 17.7264 14.8667 17.7264L14.861 15.4419H10.0085V14.756H16.7882C16.7882 14.756 20.042 15.125 20.042 9.9943C20.042 4.86364 17.202 5.0456 17.202 5.0456H15.5071V7.42638C15.5071 7.42638 15.5985 10.2664 12.7125 10.2664H7.89975C7.89975 10.2664 5.19583 10.2227 5.19583 12.8797V17.2729C5.19583 17.2729 4.78524 19.9315 10.0992 19.9315H10.0993ZM12.7749 18.3953C12.6602 18.3954 12.5467 18.3729 12.4407 18.3291C12.3348 18.2853 12.2385 18.221 12.1574 18.1399C12.0763 18.0588 12.012 17.9625 11.9682 17.8566C11.9244 17.7506 11.9018 17.637 11.902 17.5224C11.9018 17.4077 11.9243 17.2941 11.9682 17.1882C12.012 17.0822 12.0763 16.9859 12.1574 16.9048C12.2385 16.8237 12.3347 16.7594 12.4407 16.7156C12.5467 16.6718 12.6602 16.6493 12.7749 16.6494C12.8896 16.6493 13.0031 16.6718 13.1091 16.7156C13.215 16.7594 13.3113 16.8237 13.3924 16.9048C13.4735 16.9859 13.5378 17.0822 13.5816 17.1881C13.6254 17.2941 13.6479 17.4076 13.6478 17.5223C13.6479 17.637 13.6254 17.7505 13.5816 17.8565C13.5378 17.9624 13.4735 18.0587 13.3924 18.1398C13.3113 18.2209 13.215 18.2852 13.1091 18.329C13.0031 18.3728 12.8896 18.3954 12.7749 18.3953Z" fill="url(#paint1_linear_72_2)"/>
                                        </g>
                                        <defs>
                                        <linearGradient id="paint0_linear_72_2" x1="192.499" y1="179.226" x2="1185.12" y2="1161.95" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-color="#366994"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_72_2" x1="289.307" y1="311.398" x2="1355.27" y2="1319.09" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-color="#FFC331"/>
                                        </linearGradient>
                                        <clipPath id="clip0_72_2">
                                        <rect width="20.08" height="20" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <h4>HTML</h4>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 card p-3">
                        <div class="icon-box">
                            <div class="icon">
                                <div class="svg">
                                    <svg width="45" height="45" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_72_2)">
                                        <path d="M9.95454 0.00567627C4.86968 0.00567627 5.18717 2.21077 5.18717 2.21077L5.19282 4.49532H10.0452V5.18121H3.26552C3.26552 5.18121 0.0117188 4.81219 0.0117188 9.94277C0.0117188 15.0735 2.85172 14.8916 2.85172 14.8916H4.54662V12.5107C4.54662 12.5107 4.45525 9.6707 7.34129 9.6707H12.154C12.154 9.6707 14.8579 9.71438 14.8579 7.05744V2.66434C14.8579 2.66434 15.2686 0.00567627 9.95454 0.00567627ZM7.27894 1.54199C7.3936 1.54189 7.50716 1.5644 7.61312 1.60823C7.71907 1.65206 7.81535 1.71636 7.89643 1.79744C7.97751 1.87852 8.0418 1.97479 8.08564 2.08075C8.12947 2.18671 8.15198 2.30027 8.15188 2.41493C8.15198 2.5296 8.12947 2.64316 8.08564 2.74911C8.0418 2.85507 7.97751 2.95134 7.89643 3.03242C7.81535 3.1135 7.71907 3.1778 7.61312 3.22163C7.50716 3.26547 7.3936 3.28798 7.27894 3.28787C7.16427 3.28798 7.05071 3.26547 6.94475 3.22163C6.8388 3.1778 6.74252 3.1135 6.66144 3.03242C6.58036 2.95134 6.51607 2.85507 6.47223 2.74911C6.4284 2.64316 6.40589 2.5296 6.40599 2.41493C6.40589 2.30027 6.4284 2.18671 6.47223 2.08075C6.51607 1.97479 6.58036 1.87852 6.66144 1.79744C6.74252 1.71636 6.8388 1.65206 6.94475 1.60823C7.05071 1.5644 7.16427 1.54189 7.27894 1.54199Z" fill="url(#paint0_linear_72_2)"/>
                                        <path d="M10.0993 19.9315C15.1841 19.9315 14.8667 17.7264 14.8667 17.7264L14.861 15.4419H10.0085V14.756H16.7882C16.7882 14.756 20.042 15.125 20.042 9.9943C20.042 4.86364 17.202 5.0456 17.202 5.0456H15.5071V7.42638C15.5071 7.42638 15.5985 10.2664 12.7125 10.2664H7.89975C7.89975 10.2664 5.19583 10.2227 5.19583 12.8797V17.2729C5.19583 17.2729 4.78524 19.9315 10.0992 19.9315H10.0993ZM12.7749 18.3953C12.6602 18.3954 12.5467 18.3729 12.4407 18.3291C12.3348 18.2853 12.2385 18.221 12.1574 18.1399C12.0763 18.0588 12.012 17.9625 11.9682 17.8566C11.9244 17.7506 11.9018 17.637 11.902 17.5224C11.9018 17.4077 11.9243 17.2941 11.9682 17.1882C12.012 17.0822 12.0763 16.9859 12.1574 16.9048C12.2385 16.8237 12.3347 16.7594 12.4407 16.7156C12.5467 16.6718 12.6602 16.6493 12.7749 16.6494C12.8896 16.6493 13.0031 16.6718 13.1091 16.7156C13.215 16.7594 13.3113 16.8237 13.3924 16.9048C13.4735 16.9859 13.5378 17.0822 13.5816 17.1881C13.6254 17.2941 13.6479 17.4076 13.6478 17.5223C13.6479 17.637 13.6254 17.7505 13.5816 17.8565C13.5378 17.9624 13.4735 18.0587 13.3924 18.1398C13.3113 18.2209 13.215 18.2852 13.1091 18.329C13.0031 18.3728 12.8896 18.3954 12.7749 18.3953Z" fill="url(#paint1_linear_72_2)"/>
                                        </g>
                                        <defs>
                                        <linearGradient id="paint0_linear_72_2" x1="192.499" y1="179.226" x2="1185.12" y2="1161.95" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-color="#366994"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_72_2" x1="289.307" y1="311.398" x2="1355.27" y2="1319.09" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-color="#FFC331"/>
                                        </linearGradient>
                                        <clipPath id="clip0_72_2">
                                        <rect width="20.08" height="20" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <h4>HTML</h4>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 card p-3">
                        <div class="icon-box">
                            <div class="icon">
                                <div class="svg">
                                    <svg width="45" height="45" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_72_2)">
                                        <path d="M9.95454 0.00567627C4.86968 0.00567627 5.18717 2.21077 5.18717 2.21077L5.19282 4.49532H10.0452V5.18121H3.26552C3.26552 5.18121 0.0117188 4.81219 0.0117188 9.94277C0.0117188 15.0735 2.85172 14.8916 2.85172 14.8916H4.54662V12.5107C4.54662 12.5107 4.45525 9.6707 7.34129 9.6707H12.154C12.154 9.6707 14.8579 9.71438 14.8579 7.05744V2.66434C14.8579 2.66434 15.2686 0.00567627 9.95454 0.00567627ZM7.27894 1.54199C7.3936 1.54189 7.50716 1.5644 7.61312 1.60823C7.71907 1.65206 7.81535 1.71636 7.89643 1.79744C7.97751 1.87852 8.0418 1.97479 8.08564 2.08075C8.12947 2.18671 8.15198 2.30027 8.15188 2.41493C8.15198 2.5296 8.12947 2.64316 8.08564 2.74911C8.0418 2.85507 7.97751 2.95134 7.89643 3.03242C7.81535 3.1135 7.71907 3.1778 7.61312 3.22163C7.50716 3.26547 7.3936 3.28798 7.27894 3.28787C7.16427 3.28798 7.05071 3.26547 6.94475 3.22163C6.8388 3.1778 6.74252 3.1135 6.66144 3.03242C6.58036 2.95134 6.51607 2.85507 6.47223 2.74911C6.4284 2.64316 6.40589 2.5296 6.40599 2.41493C6.40589 2.30027 6.4284 2.18671 6.47223 2.08075C6.51607 1.97479 6.58036 1.87852 6.66144 1.79744C6.74252 1.71636 6.8388 1.65206 6.94475 1.60823C7.05071 1.5644 7.16427 1.54189 7.27894 1.54199Z" fill="url(#paint0_linear_72_2)"/>
                                        <path d="M10.0993 19.9315C15.1841 19.9315 14.8667 17.7264 14.8667 17.7264L14.861 15.4419H10.0085V14.756H16.7882C16.7882 14.756 20.042 15.125 20.042 9.9943C20.042 4.86364 17.202 5.0456 17.202 5.0456H15.5071V7.42638C15.5071 7.42638 15.5985 10.2664 12.7125 10.2664H7.89975C7.89975 10.2664 5.19583 10.2227 5.19583 12.8797V17.2729C5.19583 17.2729 4.78524 19.9315 10.0992 19.9315H10.0993ZM12.7749 18.3953C12.6602 18.3954 12.5467 18.3729 12.4407 18.3291C12.3348 18.2853 12.2385 18.221 12.1574 18.1399C12.0763 18.0588 12.012 17.9625 11.9682 17.8566C11.9244 17.7506 11.9018 17.637 11.902 17.5224C11.9018 17.4077 11.9243 17.2941 11.9682 17.1882C12.012 17.0822 12.0763 16.9859 12.1574 16.9048C12.2385 16.8237 12.3347 16.7594 12.4407 16.7156C12.5467 16.6718 12.6602 16.6493 12.7749 16.6494C12.8896 16.6493 13.0031 16.6718 13.1091 16.7156C13.215 16.7594 13.3113 16.8237 13.3924 16.9048C13.4735 16.9859 13.5378 17.0822 13.5816 17.1881C13.6254 17.2941 13.6479 17.4076 13.6478 17.5223C13.6479 17.637 13.6254 17.7505 13.5816 17.8565C13.5378 17.9624 13.4735 18.0587 13.3924 18.1398C13.3113 18.2209 13.215 18.2852 13.1091 18.329C13.0031 18.3728 12.8896 18.3954 12.7749 18.3953Z" fill="url(#paint1_linear_72_2)"/>
                                        </g>
                                        <defs>
                                        <linearGradient id="paint0_linear_72_2" x1="192.499" y1="179.226" x2="1185.12" y2="1161.95" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-color="#366994"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_72_2" x1="289.307" y1="311.398" x2="1355.27" y2="1319.09" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-color="#FFC331"/>
                                        </linearGradient>
                                        <clipPath id="clip0_72_2">
                                        <rect width="20.08" height="20" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <h4>HTML</h4>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row col-gap justify-content-between mt-4" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-offset="200">
                    <div class="col-md-3 card p-3">
                        <div class="icon-box">
                            <div class="icon">
                                <div class="svg">
                                    <svg width="45" height="45" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_72_2)">
                                        <path d="M9.95454 0.00567627C4.86968 0.00567627 5.18717 2.21077 5.18717 2.21077L5.19282 4.49532H10.0452V5.18121H3.26552C3.26552 5.18121 0.0117188 4.81219 0.0117188 9.94277C0.0117188 15.0735 2.85172 14.8916 2.85172 14.8916H4.54662V12.5107C4.54662 12.5107 4.45525 9.6707 7.34129 9.6707H12.154C12.154 9.6707 14.8579 9.71438 14.8579 7.05744V2.66434C14.8579 2.66434 15.2686 0.00567627 9.95454 0.00567627ZM7.27894 1.54199C7.3936 1.54189 7.50716 1.5644 7.61312 1.60823C7.71907 1.65206 7.81535 1.71636 7.89643 1.79744C7.97751 1.87852 8.0418 1.97479 8.08564 2.08075C8.12947 2.18671 8.15198 2.30027 8.15188 2.41493C8.15198 2.5296 8.12947 2.64316 8.08564 2.74911C8.0418 2.85507 7.97751 2.95134 7.89643 3.03242C7.81535 3.1135 7.71907 3.1778 7.61312 3.22163C7.50716 3.26547 7.3936 3.28798 7.27894 3.28787C7.16427 3.28798 7.05071 3.26547 6.94475 3.22163C6.8388 3.1778 6.74252 3.1135 6.66144 3.03242C6.58036 2.95134 6.51607 2.85507 6.47223 2.74911C6.4284 2.64316 6.40589 2.5296 6.40599 2.41493C6.40589 2.30027 6.4284 2.18671 6.47223 2.08075C6.51607 1.97479 6.58036 1.87852 6.66144 1.79744C6.74252 1.71636 6.8388 1.65206 6.94475 1.60823C7.05071 1.5644 7.16427 1.54189 7.27894 1.54199Z" fill="url(#paint0_linear_72_2)"/>
                                        <path d="M10.0993 19.9315C15.1841 19.9315 14.8667 17.7264 14.8667 17.7264L14.861 15.4419H10.0085V14.756H16.7882C16.7882 14.756 20.042 15.125 20.042 9.9943C20.042 4.86364 17.202 5.0456 17.202 5.0456H15.5071V7.42638C15.5071 7.42638 15.5985 10.2664 12.7125 10.2664H7.89975C7.89975 10.2664 5.19583 10.2227 5.19583 12.8797V17.2729C5.19583 17.2729 4.78524 19.9315 10.0992 19.9315H10.0993ZM12.7749 18.3953C12.6602 18.3954 12.5467 18.3729 12.4407 18.3291C12.3348 18.2853 12.2385 18.221 12.1574 18.1399C12.0763 18.0588 12.012 17.9625 11.9682 17.8566C11.9244 17.7506 11.9018 17.637 11.902 17.5224C11.9018 17.4077 11.9243 17.2941 11.9682 17.1882C12.012 17.0822 12.0763 16.9859 12.1574 16.9048C12.2385 16.8237 12.3347 16.7594 12.4407 16.7156C12.5467 16.6718 12.6602 16.6493 12.7749 16.6494C12.8896 16.6493 13.0031 16.6718 13.1091 16.7156C13.215 16.7594 13.3113 16.8237 13.3924 16.9048C13.4735 16.9859 13.5378 17.0822 13.5816 17.1881C13.6254 17.2941 13.6479 17.4076 13.6478 17.5223C13.6479 17.637 13.6254 17.7505 13.5816 17.8565C13.5378 17.9624 13.4735 18.0587 13.3924 18.1398C13.3113 18.2209 13.215 18.2852 13.1091 18.329C13.0031 18.3728 12.8896 18.3954 12.7749 18.3953Z" fill="url(#paint1_linear_72_2)"/>
                                        </g>
                                        <defs>
                                        <linearGradient id="paint0_linear_72_2" x1="192.499" y1="179.226" x2="1185.12" y2="1161.95" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-color="#366994"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_72_2" x1="289.307" y1="311.398" x2="1355.27" y2="1319.09" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-color="#FFC331"/>
                                        </linearGradient>
                                        <clipPath id="clip0_72_2">
                                        <rect width="20.08" height="20" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <h4>HTML</h4>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 card p-3">
                        <div class="icon-box">
                            <div class="icon">
                                <div class="svg">
                                    <svg width="45" height="45" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_72_2)">
                                        <path d="M9.95454 0.00567627C4.86968 0.00567627 5.18717 2.21077 5.18717 2.21077L5.19282 4.49532H10.0452V5.18121H3.26552C3.26552 5.18121 0.0117188 4.81219 0.0117188 9.94277C0.0117188 15.0735 2.85172 14.8916 2.85172 14.8916H4.54662V12.5107C4.54662 12.5107 4.45525 9.6707 7.34129 9.6707H12.154C12.154 9.6707 14.8579 9.71438 14.8579 7.05744V2.66434C14.8579 2.66434 15.2686 0.00567627 9.95454 0.00567627ZM7.27894 1.54199C7.3936 1.54189 7.50716 1.5644 7.61312 1.60823C7.71907 1.65206 7.81535 1.71636 7.89643 1.79744C7.97751 1.87852 8.0418 1.97479 8.08564 2.08075C8.12947 2.18671 8.15198 2.30027 8.15188 2.41493C8.15198 2.5296 8.12947 2.64316 8.08564 2.74911C8.0418 2.85507 7.97751 2.95134 7.89643 3.03242C7.81535 3.1135 7.71907 3.1778 7.61312 3.22163C7.50716 3.26547 7.3936 3.28798 7.27894 3.28787C7.16427 3.28798 7.05071 3.26547 6.94475 3.22163C6.8388 3.1778 6.74252 3.1135 6.66144 3.03242C6.58036 2.95134 6.51607 2.85507 6.47223 2.74911C6.4284 2.64316 6.40589 2.5296 6.40599 2.41493C6.40589 2.30027 6.4284 2.18671 6.47223 2.08075C6.51607 1.97479 6.58036 1.87852 6.66144 1.79744C6.74252 1.71636 6.8388 1.65206 6.94475 1.60823C7.05071 1.5644 7.16427 1.54189 7.27894 1.54199Z" fill="url(#paint0_linear_72_2)"/>
                                        <path d="M10.0993 19.9315C15.1841 19.9315 14.8667 17.7264 14.8667 17.7264L14.861 15.4419H10.0085V14.756H16.7882C16.7882 14.756 20.042 15.125 20.042 9.9943C20.042 4.86364 17.202 5.0456 17.202 5.0456H15.5071V7.42638C15.5071 7.42638 15.5985 10.2664 12.7125 10.2664H7.89975C7.89975 10.2664 5.19583 10.2227 5.19583 12.8797V17.2729C5.19583 17.2729 4.78524 19.9315 10.0992 19.9315H10.0993ZM12.7749 18.3953C12.6602 18.3954 12.5467 18.3729 12.4407 18.3291C12.3348 18.2853 12.2385 18.221 12.1574 18.1399C12.0763 18.0588 12.012 17.9625 11.9682 17.8566C11.9244 17.7506 11.9018 17.637 11.902 17.5224C11.9018 17.4077 11.9243 17.2941 11.9682 17.1882C12.012 17.0822 12.0763 16.9859 12.1574 16.9048C12.2385 16.8237 12.3347 16.7594 12.4407 16.7156C12.5467 16.6718 12.6602 16.6493 12.7749 16.6494C12.8896 16.6493 13.0031 16.6718 13.1091 16.7156C13.215 16.7594 13.3113 16.8237 13.3924 16.9048C13.4735 16.9859 13.5378 17.0822 13.5816 17.1881C13.6254 17.2941 13.6479 17.4076 13.6478 17.5223C13.6479 17.637 13.6254 17.7505 13.5816 17.8565C13.5378 17.9624 13.4735 18.0587 13.3924 18.1398C13.3113 18.2209 13.215 18.2852 13.1091 18.329C13.0031 18.3728 12.8896 18.3954 12.7749 18.3953Z" fill="url(#paint1_linear_72_2)"/>
                                        </g>
                                        <defs>
                                        <linearGradient id="paint0_linear_72_2" x1="192.499" y1="179.226" x2="1185.12" y2="1161.95" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-color="#366994"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_72_2" x1="289.307" y1="311.398" x2="1355.27" y2="1319.09" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-color="#FFC331"/>
                                        </linearGradient>
                                        <clipPath id="clip0_72_2">
                                        <rect width="20.08" height="20" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <h4>HTML</h4>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 card p-3">
                        <div class="icon-box">
                            <div class="icon">
                                <div class="svg">
                                    <svg width="45" height="45" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_72_2)">
                                        <path d="M9.95454 0.00567627C4.86968 0.00567627 5.18717 2.21077 5.18717 2.21077L5.19282 4.49532H10.0452V5.18121H3.26552C3.26552 5.18121 0.0117188 4.81219 0.0117188 9.94277C0.0117188 15.0735 2.85172 14.8916 2.85172 14.8916H4.54662V12.5107C4.54662 12.5107 4.45525 9.6707 7.34129 9.6707H12.154C12.154 9.6707 14.8579 9.71438 14.8579 7.05744V2.66434C14.8579 2.66434 15.2686 0.00567627 9.95454 0.00567627ZM7.27894 1.54199C7.3936 1.54189 7.50716 1.5644 7.61312 1.60823C7.71907 1.65206 7.81535 1.71636 7.89643 1.79744C7.97751 1.87852 8.0418 1.97479 8.08564 2.08075C8.12947 2.18671 8.15198 2.30027 8.15188 2.41493C8.15198 2.5296 8.12947 2.64316 8.08564 2.74911C8.0418 2.85507 7.97751 2.95134 7.89643 3.03242C7.81535 3.1135 7.71907 3.1778 7.61312 3.22163C7.50716 3.26547 7.3936 3.28798 7.27894 3.28787C7.16427 3.28798 7.05071 3.26547 6.94475 3.22163C6.8388 3.1778 6.74252 3.1135 6.66144 3.03242C6.58036 2.95134 6.51607 2.85507 6.47223 2.74911C6.4284 2.64316 6.40589 2.5296 6.40599 2.41493C6.40589 2.30027 6.4284 2.18671 6.47223 2.08075C6.51607 1.97479 6.58036 1.87852 6.66144 1.79744C6.74252 1.71636 6.8388 1.65206 6.94475 1.60823C7.05071 1.5644 7.16427 1.54189 7.27894 1.54199Z" fill="url(#paint0_linear_72_2)"/>
                                        <path d="M10.0993 19.9315C15.1841 19.9315 14.8667 17.7264 14.8667 17.7264L14.861 15.4419H10.0085V14.756H16.7882C16.7882 14.756 20.042 15.125 20.042 9.9943C20.042 4.86364 17.202 5.0456 17.202 5.0456H15.5071V7.42638C15.5071 7.42638 15.5985 10.2664 12.7125 10.2664H7.89975C7.89975 10.2664 5.19583 10.2227 5.19583 12.8797V17.2729C5.19583 17.2729 4.78524 19.9315 10.0992 19.9315H10.0993ZM12.7749 18.3953C12.6602 18.3954 12.5467 18.3729 12.4407 18.3291C12.3348 18.2853 12.2385 18.221 12.1574 18.1399C12.0763 18.0588 12.012 17.9625 11.9682 17.8566C11.9244 17.7506 11.9018 17.637 11.902 17.5224C11.9018 17.4077 11.9243 17.2941 11.9682 17.1882C12.012 17.0822 12.0763 16.9859 12.1574 16.9048C12.2385 16.8237 12.3347 16.7594 12.4407 16.7156C12.5467 16.6718 12.6602 16.6493 12.7749 16.6494C12.8896 16.6493 13.0031 16.6718 13.1091 16.7156C13.215 16.7594 13.3113 16.8237 13.3924 16.9048C13.4735 16.9859 13.5378 17.0822 13.5816 17.1881C13.6254 17.2941 13.6479 17.4076 13.6478 17.5223C13.6479 17.637 13.6254 17.7505 13.5816 17.8565C13.5378 17.9624 13.4735 18.0587 13.3924 18.1398C13.3113 18.2209 13.215 18.2852 13.1091 18.329C13.0031 18.3728 12.8896 18.3954 12.7749 18.3953Z" fill="url(#paint1_linear_72_2)"/>
                                        </g>
                                        <defs>
                                        <linearGradient id="paint0_linear_72_2" x1="192.499" y1="179.226" x2="1185.12" y2="1161.95" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-color="#366994"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_72_2" x1="289.307" y1="311.398" x2="1355.27" y2="1319.09" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-color="#FFC331"/>
                                        </linearGradient>
                                        <clipPath id="clip0_72_2">
                                        <rect width="20.08" height="20" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <h4>HTML</h4>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 card p-3">
                        <div class="icon-box">
                            <div class="icon">
                                <div class="svg">
                                    <svg width="45" height="45" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_72_2)">
                                        <path d="M9.95454 0.00567627C4.86968 0.00567627 5.18717 2.21077 5.18717 2.21077L5.19282 4.49532H10.0452V5.18121H3.26552C3.26552 5.18121 0.0117188 4.81219 0.0117188 9.94277C0.0117188 15.0735 2.85172 14.8916 2.85172 14.8916H4.54662V12.5107C4.54662 12.5107 4.45525 9.6707 7.34129 9.6707H12.154C12.154 9.6707 14.8579 9.71438 14.8579 7.05744V2.66434C14.8579 2.66434 15.2686 0.00567627 9.95454 0.00567627ZM7.27894 1.54199C7.3936 1.54189 7.50716 1.5644 7.61312 1.60823C7.71907 1.65206 7.81535 1.71636 7.89643 1.79744C7.97751 1.87852 8.0418 1.97479 8.08564 2.08075C8.12947 2.18671 8.15198 2.30027 8.15188 2.41493C8.15198 2.5296 8.12947 2.64316 8.08564 2.74911C8.0418 2.85507 7.97751 2.95134 7.89643 3.03242C7.81535 3.1135 7.71907 3.1778 7.61312 3.22163C7.50716 3.26547 7.3936 3.28798 7.27894 3.28787C7.16427 3.28798 7.05071 3.26547 6.94475 3.22163C6.8388 3.1778 6.74252 3.1135 6.66144 3.03242C6.58036 2.95134 6.51607 2.85507 6.47223 2.74911C6.4284 2.64316 6.40589 2.5296 6.40599 2.41493C6.40589 2.30027 6.4284 2.18671 6.47223 2.08075C6.51607 1.97479 6.58036 1.87852 6.66144 1.79744C6.74252 1.71636 6.8388 1.65206 6.94475 1.60823C7.05071 1.5644 7.16427 1.54189 7.27894 1.54199Z" fill="url(#paint0_linear_72_2)"/>
                                        <path d="M10.0993 19.9315C15.1841 19.9315 14.8667 17.7264 14.8667 17.7264L14.861 15.4419H10.0085V14.756H16.7882C16.7882 14.756 20.042 15.125 20.042 9.9943C20.042 4.86364 17.202 5.0456 17.202 5.0456H15.5071V7.42638C15.5071 7.42638 15.5985 10.2664 12.7125 10.2664H7.89975C7.89975 10.2664 5.19583 10.2227 5.19583 12.8797V17.2729C5.19583 17.2729 4.78524 19.9315 10.0992 19.9315H10.0993ZM12.7749 18.3953C12.6602 18.3954 12.5467 18.3729 12.4407 18.3291C12.3348 18.2853 12.2385 18.221 12.1574 18.1399C12.0763 18.0588 12.012 17.9625 11.9682 17.8566C11.9244 17.7506 11.9018 17.637 11.902 17.5224C11.9018 17.4077 11.9243 17.2941 11.9682 17.1882C12.012 17.0822 12.0763 16.9859 12.1574 16.9048C12.2385 16.8237 12.3347 16.7594 12.4407 16.7156C12.5467 16.6718 12.6602 16.6493 12.7749 16.6494C12.8896 16.6493 13.0031 16.6718 13.1091 16.7156C13.215 16.7594 13.3113 16.8237 13.3924 16.9048C13.4735 16.9859 13.5378 17.0822 13.5816 17.1881C13.6254 17.2941 13.6479 17.4076 13.6478 17.5223C13.6479 17.637 13.6254 17.7505 13.5816 17.8565C13.5378 17.9624 13.4735 18.0587 13.3924 18.1398C13.3113 18.2209 13.215 18.2852 13.1091 18.329C13.0031 18.3728 12.8896 18.3954 12.7749 18.3953Z" fill="url(#paint1_linear_72_2)"/>
                                        </g>
                                        <defs>
                                        <linearGradient id="paint0_linear_72_2" x1="192.499" y1="179.226" x2="1185.12" y2="1161.95" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-color="#366994"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_72_2" x1="289.307" y1="311.398" x2="1355.27" y2="1319.09" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"/>
                                        <stop offset="1" stop-color="#FFC331"/>
                                        </linearGradient>
                                        <clipPath id="clip0_72_2">
                                        <rect width="20.08" height="20" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <h4>HTML</h4>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- tools --}}


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
