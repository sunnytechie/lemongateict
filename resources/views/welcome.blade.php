<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">    
    <head>
        <meta charset="utf-8">
        <title>Lemom Gate Info. Tech. Comm.</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{ config('app.name') }}" />
        <meta property="og:description" content="Lemon Gate Info. Tech. Comm. Official" />
        <meta property="og:image" content="{{ asset('assets/img/preview.png') }}" />
        <meta property="og:image:width" content="200" />
        <meta property="og:image:height" content="200" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:alt" content="{{ config('app.name') }}" />
    
        <!-- Favicon -->
        <link href="assets/img/lemon.png" rel="icon">
    
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 
    
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
        <!-- Libraries Stylesheet -->
        <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
        <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Template Stylesheet -->
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    
    <body>
        <div class="container-xxl bg-white p-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->
    
    
            <!-- Navbar & Hero Start -->
            <div class="container-xxl position-relative p-0" id="home">
                <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                    <a href="/" class="navbar-brand p-0">
                        <h1 class="m-0">LemonGate</h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto py-0">
                            <a href="#home" class="nav-item nav-link active">Home</a>
                            <a href="#about" class="nav-item nav-link">About</a>
                            <a href="#service" class="nav-item nav-link">Service</a>
                            <a href="#project" class="nav-item nav-link">Project</a>
                            {{-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0">
                                    <a href="team.html" class="dropdown-item">Our Team</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="404.html" class="dropdown-item">404 Page</a>
                                </div>
                            </div> --}}
                            <a href="#contact" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="mailto:email@example.com" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get a Quote</a>
                    </div>
                </nav>
    
                <div class="container-xxl bg-primary hero-header">
                    <div class="container px-lg-5">
                        <div class="row g-5 align-items-end">
                            <div class="col-lg-6 text-center text-lg-start">
                                <h1 class="text-white mb-4 animated slideInDown">A Digital Agency Of Inteligents & Creative People</h1>
                                <p class="text-white pb-3 animated slideInDown">LEGIT, Creating Business Growth and Innovation
                                    Because Tech and Digitalization are changing the way we interact with each other. 
                                    LEGIT knows that Organizations that can adapt, will be successful. So, we are here 
                                    for you.
                                    </p>
                                <a href="#project" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Read More</a>
                                <a href="#contact" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                            </div>
                            <div class="col-lg-6 text-center text-lg-start">
                                <img class="img-fluid animated zoomIn" src="assets/img/hero.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navbar & Hero End -->
    
    
            <!-- Feature Start -->
            <div class="container-xxl py-5">
                <div class="container py-5 px-lg-5">
                    <div class="row g-4">
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="feature-item bg-light rounded text-center p-4">
                                <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                                <h5 class="mb-3">Digital Marketing</h5>
                                <p class="m-0">Your brand is the message your business is trying to communicate with your 
                                    people. <br>It is imperative that you devise a perfect means to spread your business 
                                    message.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-item bg-light rounded text-center p-4">
                                <i class="fa fa-3x fa-search text-primary mb-4"></i>
                                <h5 class="mb-3">SEO & Backlinks</h5>
                                <p class="m-0">You don’t wish to run an invisible business; we will make your services appear On 
                                    Page 1 On Search Engines. Rank Higher On Searches. Get Discovered Online Easily.
                                    </p>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="feature-item bg-light rounded text-center p-4">
                                <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                                <h5 class="mb-3">Design & Development</h5>
                                <p class="m-0">We ensure that all our Web and Mobile applications solution projects are not only 
                                    engineered using the most cutting-edge technologies, but also, they're created 
                                    through a human-centered design process.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End -->
    
    
            <!-- About Start -->
            <div class="container-xxl py-5" id="about">
                <div class="container py-5 px-lg-5">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <p class="section-title text-secondary">About Us<span></span></p>
                            <h1 class="mb-5">#1 Digital solution with 10 years of experience</h1>
                            <p class="mb-4">At LEGIT we wish to simplify the difficulties surrounding all areas of ICT by 
                                building and deploying deep expertise to propel the businesses that shape the 
                                world.
                                </p>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Digital Marketing</p>
                                    <p class="mb-2">85%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">SEO & Backlinks</p>
                                    <p class="mb-2">90%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Design & Development</p>
                                    <p class="mb-2">95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <a href="" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>
                        </div>
                        <div class="col-lg-6">
                            <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="assets/img/about.png">
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
    
    
            <!-- Facts Start -->
            <div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5 px-lg-5">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                            <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                            <h1 class="text-white mb-2" data-toggle="counter-up">10</h1>
                            <p class="text-white mb-0">Years Experience</p>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                            <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                            <h1 class="text-white mb-2" data-toggle="counter-up">5</h1>
                            <p class="text-white mb-0">Team Members</p>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                            <h1 class="text-white mb-2" data-toggle="counter-up">20</h1>
                            <p class="text-white mb-0">Satisfied Clients</p>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-check fa-3x text-secondary mb-3"></i>
                            <h1 class="text-white mb-2" data-toggle="counter-up">6</h1>
                            <p class="text-white mb-0">Compleate Projects</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Facts End -->
    
    
            <!-- Service Start -->
            <div class="container-xxl py-5" id="service">
                <div class="container py-5 px-lg-5">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary justify-content-center"><span></span>Our Services<span></span></p>
                        <h1 class="text-center mb-5">What Solutions We Provide</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item d-flex flex-column text-center rounded">
                                <div class="service-icon flex-shrink-0">
                                    <i class="fa fa-search fa-2x"></i>
                                </div>
                                <h5 class="mb-3">SEO Optimization</h5>
                                <p class="m-0">You don’t wish to run an invisible business; we will make your services appear On 
                                    Page 1 On Search Engines. Rank Higher on Searches. Get Discovered Online Easily. 
                                    </p>
                                <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item d-flex flex-column text-center rounded">
                                <div class="service-icon flex-shrink-0">
                                    <i class="fa fa-laptop-code fa-2x"></i>
                                </div>
                                <h5 class="mb-3">Web Design</h5>
                                <p class="m-0">We ensure that all our web development and application solution projects are not 
                                    only engineered using the most cutting-edge technologies, but also, they're 
                                    created through a human-centered design process.</p>
                                <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item d-flex flex-column text-center rounded">
                                <div class="service-icon flex-shrink-0">
                                    <i class="fab fa-facebook-f fa-2x"></i>
                                </div>
                                <h5 class="mb-3">Social Media Marketing</h5>
                                <p class="m-0">Your brand is the message your business is trying to communicate with your 
                                    people. It is imperative that you devise a perfect means to spread your business 
                                    message.</p>
                                <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item d-flex flex-column text-center rounded">
                                <div class="service-icon flex-shrink-0">
                                    <i class="fa fa-credit-card fa-2x"></i>
                                </div>
                                <h5 class="mb-3">POS Solutions</h5>
                                <p class="m-0">LEGIT Point of Sale Solution is a product management software built for you, no 
                                    matter what industry your product serves.</p>
                                <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item d-flex flex-column text-center rounded">
                                <div class="service-icon flex-shrink-0">
                                    <i class="fab fa-android fa-2x"></i>
                                </div>
                                <h5 class="mb-3">App Programming</h5>
                                <p class="m-0">At LEGIT we customize mobile application development and help clients to 
                                    conceptualize, plan and roll out their mobility journey.</p>
                                <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item d-flex flex-column text-center rounded">
                                <div class="service-icon flex-shrink-0">
                                    <i class="fa fa-phone-square fa-2x"></i>
                                </div>
                                <h5 class="mb-3">24/7 Support</h5>
                                <p class="m-0">Our friendly customer support agents are always online/phone to support you 
                                    whenever you need them.</p>
                                <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->
    
    
            <!-- Newsletter Start -->
            <div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-3 px-lg-5">
                    <div class="row justify-content-start">
                        <div class="col-lg-7">
                            <p class="section-title text-white justify-content-start"><span></span>Newsletter<span></span></p>
                            <h1 class="text-left text-white mb-4">Stay Always In Touch</h1>
                            <p class="text-white mb-4">Kindly join our mailing list to get more information on our product and services.</p>
                            <div class="position-relative w-100 mt-3">
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;">
                                <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter End -->
    
    
            <!-- Projects Start -->
            <div class="container-xxl py-5" id="project">
                <div class="container py-5 px-lg-5">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary justify-content-center"><span></span>Our Projects<span></span></p>
                        <h1 class="text-center mb-5">Recently Completed Projects</h1>
                    </div>
                    <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="col-12 text-center">
                            <ul class="list-inline mb-5" id="portfolio-flters">
                                <li class="mx-2 active" data-filter="*">All</li>
                                <li class="mx-2" data-filter=".first">Mobile Application</li>
                                <li class="mx-2" data-filter=".second">Web Applications</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row g-4 portfolio-container">

                        {{-- <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light p-4">
                                    <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                    <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light p-4">
                                    <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                    <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                            <a href="https://play.google.com/store/apps/details?id=org.anglican_ng.android.conaio" class="rounded overflow-hidden">
                                <div class="bg-light p-4">
                                    <p class="text-primary fw-medium mb-2">Mobile App</p>
                                    <h5 class="lh-base mb-0 text-dark">Conaio App (Church of Nigeria Anglican Communion All In One Worship App)</h5>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                            <a href="https://play.google.com/store/apps/details?id=com.driver.movebot.ng.app&hl=e" class="rounded overflow-hidden">
                                <div class="bg-light p-4">
                                    <p class="text-primary fw-medium mb-2">Mobile App</p>
                                    <h5 class="lh-base mb-0 text-dark">MoveBot Android</h5>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                            <a href="https://play.google.com/store/apps/details?id=com.bt.mbiller" class="rounded overflow-hidden">
                                <div class="bg-light p-4">
                                    <p class="text-primary fw-medium mb-2">Mobile App</p>
                                    <h5 class="lh-base mb-0 text-dark">Mbiller</h5>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                            <a href="https://play.google.com/store/apps/details?id=ng.trashit.app" class="rounded overflow-hidden">
                                <div class="bg-light p-4">
                                    <p class="text-primary fw-medium mb-2">Mobile App</p>
                                    <h5 class="lh-base mb-0 text-dark">Trash IT</h5>
                                </div>
                            </a>
                        </div>


                        {{-- Second  --}}

                        <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                            <a href="https://www.peaceland.edu.ng" class="rounded overflow-hidden">
                                <div class="bg-light p-4">
                                    <p class="text-primary fw-medium mb-2">Web Portal</p>
                                    <h5 class="lh-base mb-0 text-dark">University - Peaceland University of Education Enugu</h5>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                            <a href="https://www.pleasantgathering.ng" class="rounded overflow-hidden">
                                <div class="bg-light p-4">
                                    <p class="text-primary fw-medium mb-2">Web Portal</p>
                                    <h5 class="lh-base mb-0 text-dark">NGO - Pleasant Gathering</h5>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                            <a href="https://www.dnalcnigeria.org" class="rounded overflow-hidden">
                                <div class="bg-light p-4">
                                    <p class="text-primary fw-medium mb-2">Web Portal</p>
                                    <h5 class="lh-base mb-0 text-dark">DNA Bio College - DNALC Nigeria</h5>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Projects End -->
    
    
            <!-- Testimonial Start -->
            {{-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5 px-lg-5">
                    <p class="section-title text-secondary justify-content-center"><span></span>Testimonial<span></span></p>
                    <h1 class="text-center mb-5">What Say Our Clients!</h1>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item bg-light rounded my-4">
                            <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 65px; height: 65px;">
                                <div class="ps-4">
                                    <h5 class="mb-1">Client Name</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-light rounded my-4">
                            <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 65px; height: 65px;">
                                <div class="ps-4">
                                    <h5 class="mb-1">Client Name</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-light rounded my-4">
                            <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 65px; height: 65px;">
                                <div class="ps-4">
                                    <h5 class="mb-1">Client Name</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Testimonial End -->
    
    
            <!-- Team Start -->
            <div class="container-xxl py-5">
                <div class="container py-5 px-lg-5">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span></p>
                        <h1 class="text-center mb-5">Our Team Members</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item bg-light rounded">
                                <div class="text-center border-bottom p-4">
                                    <img class="img-fluid rounded-circle mb-4" src="assets/img/2.png" alt="">
                                    <h5>Ekwueme Innocent .J</h5>
                                    <span>Team Lead</span>
                                </div>
                                <div class="d-flex justify-content-center p-4">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item bg-light rounded">
                                <div class="text-center border-bottom p-4">
                                    <img class="img-fluid rounded-circle mb-4" src="assets/img/3.png" alt="">
                                    <h5>Sunday A Chinedu</h5>
                                    <span>Fullstack Developer</span>
                                </div>
                                <div class="d-flex justify-content-center p-4">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item bg-light rounded">
                                <div class="text-center border-bottom p-4">
                                    <img class="img-fluid rounded-circle mb-4" src="assets/img/1.png" alt="">
                                    <h5>Ayodele Salimonu</h5>
                                    <span>Mobile App Developer</span>
                                </div>
                                <div class="d-flex justify-content-center p-4">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->
            
    
            <!-- Footer Start -->
            <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s" id="contact">
                <div class="container py-5 px-lg-5">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-4">
                            <p class="section-title text-white h5 mb-4">Address<span></span></p>
                            <p><i class="fa fa-map-marker-alt me-3"></i>Enugu State, Nigeria</p>
                            <p><i class="fa fa-phone-alt me-3"></i>+234 708 989 3558</p>
                            <p><i class="fa fa-envelope me-3"></i>info@lemongateict.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                            <a class="btn btn-link" href="#about">About Us</a>
                            <a class="btn btn-link" href="#contact">Contact Us</a>
                            {{-- <a class="btn btn-link" href="">Privacy Policy</a>
                            <a class="btn btn-link" href="">Terms & Condition</a>
                            <a class="btn btn-link" href="">Career</a> --}}
                        </div>

                        {{-- <div class="col-md-6 col-lg-3">
                            <p class="section-title text-white h5 mb-4">Gallery<span></span></p>
                            <div class="row g-2">
                                <div class="col-4">
                                    <img class="img-fluid" src="img/portfolio-1.jpg" alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="img/portfolio-2.jpg" alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="img/portfolio-3.jpg" alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="img/portfolio-4.jpg" alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="img/portfolio-5.jpg" alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="img/portfolio-6.jpg" alt="Image">
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-md-6 col-lg-4">
                            <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                            <p>Welcome to lemongate, we offer the best ICT services. Kindly join our newsletter</p>
                            <div class="position-relative w-100 mt-3">
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                                <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container px-lg-5">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="#">LemonGate</a>, All Right Reserved. 
                                
                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                               <br><br>
                                
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>  Distributed By a <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                              {{--   <div class="footer-menu">
                                    <a href="">Home</a>
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
    
    
            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>
    
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/lib/wow/wow.min.js"></script>
        <script src="assets/lib/easing/easing.min.js"></script>
        <script src="assets/lib/waypoints/waypoints.min.js"></script>
        <script src="assets/lib/counterup/counterup.min.js"></script>
        <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="assets/lib/isotope/isotope.pkgd.min.js"></script>
        <script src="assets/lib/lightbox/js/lightbox.min.js"></script>
    
        <!-- Template Javascript -->
        <script src="assets/js/main.js"></script>
    </body>
    
    </html>