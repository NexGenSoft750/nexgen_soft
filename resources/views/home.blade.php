<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container">
            <a href="#">
                {{-- <img src="{{ asset('assets/nexgen_soft.png') }}" alt="logo not found" class="logo-img"> --}}
                NavBar
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="nav nav-pills mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light active" aria-current="page" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Case Study</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Contact</a>
                    </li>
                </ul>
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-secondary">Login</button>
                    <button type="button" class="btn btn-primary">Create account</button>
                </div>
            </div>
        </div>
    </nav>
    <video autoplay muted loop playsinline>
        <source src="{{ asset('assets/video.mp4') }}" type="video/mp4">
    </video>
    <div class="centered-text">
        <p class="fs-1 fw-bold">Empowering Your Business Through Cutting-Edge IT Solutions</p>
        <p class="fs-5 fw-semibold text-secondary">Innovative IT solutions, meticulously tailored for your success – where technology meets excellence for seamless business transformation.</p>
        <div class="d-flex justify-content-center gap-3 mt-4">
            <button class="btn btn-primary fs-6 fw-medium rounded-pill">Get Free Estimation</button>
            <button class="btn text-light fs-6 fw-meduim d-flex align-items-center gap-2" id="recent-projects-btn"><span>Recent Projects</span><i class="fa fa-long-arrow-right text-light" style="transform: translateY(2px)" aria-hidden="true"></i></button>
        </div>
    </div>
</header>
<div class="container text-center mt-5">
    <div class="h5 text-uppercase fw-normal text-purple">Service We Offer</div>
    <div class="h2 fw-bolder mt-4">Comprehensive Suite of Cutting <br> -Edge IT Services.</div>
    <div class="row mt-5" id="services-row"> <!-- Removed Bootstrap's gx/gy classes -->
        <div class="service-item text-start border-top border-2 border-secondary p-4" style="--bs-border-opacity: .1;">
            <div class="h3 fw-medium">Digital product engineering</div>
            <p class="fs-6 fw-semibold text-secondary">Driving Digital Innovation: Unleashing the Power of Product Engineering for Exceptional User Experiences and Technological Excellence.</p>
            <div class="mt-4"><a href="#" class="text-purple fs-6">Learn More <i class="fa fa-long-arrow-right ms-1" style="transform: translateY(2px)" aria-hidden="true"></i></a></div>
        </div>
        <div class="service-item text-start border-top border-2 border-secondary p-4" style="--bs-border-opacity: .1;">
            <div class="h3 fw-medium">Digital product engineering</div>
            <p class="fs-6 fw-semibold text-secondary">Driving Digital Innovation: Unleashing the Power of Product Engineering for Exceptional User Experiences and Technological Excellence.</p>
            <div class="mt-4"><a href="#" class="text-purple fs-6">Learn More <i class="fa fa-long-arrow-right ms-1" style="transform: translateY(2px)" aria-hidden="true"></i></a></div>
        </div>
        <div class="service-item text-start border-top border-2 border-secondary p-4" style="--bs-border-opacity: .1;">
            <div class="h3 fw-medium">Digital product engineering</div>
            <p class="fs-6 fw-semibold text-secondary">Driving Digital Innovation: Unleashing the Power of Product Engineering for Exceptional User Experiences and Technological Excellence.</p>
            <div class="mt-4"><a href="#" class="text-purple fs-6">Learn More <i class="fa fa-long-arrow-right ms-1" style="transform: translateY(2px)" aria-hidden="true"></i></a></div>
        </div>
        <div class="service-item text-start border-top border-2 border-secondary p-4" style="--bs-border-opacity: .1;">
            <div class="h3 fw-medium">Digital product engineering</div>
            <p class="fs-6 fw-semibold text-secondary">Driving Digital Innovation: Unleashing the Power of Product Engineering for Exceptional User Experiences and Technological Excellence.</p>
            <div class="mt-4"><a href="#" class="text-purple fs-6">Learn More <i class="fa fa-long-arrow-right ms-1" style="transform: translateY(2px)" aria-hidden="true"></i></a></div>
        </div>
        <div class="service-item text-start border-top border-2 border-secondary p-4" style="--bs-border-opacity: .1;">
            <div class="h3 fw-medium">Digital product engineering</div>
            <p class="fs-6 fw-semibold text-secondary">Driving Digital Innovation: Unleashing the Power of Product Engineering for Exceptional User Experiences and Technological Excellence.</p>
            <div class="mt-4"><a href="#" class="text-purple fs-6">Learn More <i class="fa fa-long-arrow-right ms-1" style="transform: translateY(2px)" aria-hidden="true"></i></a></div>
        </div>
        <div class="service-item text-start border-top border-2 border-secondary p-4" style="--bs-border-opacity: .1;">
            <div class="h3 fw-medium">Digital product engineering</div>
            <p class="fs-6 fw-semibold text-secondary">Driving Digital Innovation: Unleashing the Power of Product Engineering for Exceptional User Experiences and Technological Excellence.</p>
            <div class="mt-4"><a href="#" class="text-purple fs-6">Learn More <i class="fa fa-long-arrow-right ms-1" style="transform: translateY(2px)" aria-hidden="true"></i></a></div>
        </div>
    </div>
</div>

<footer>
     <section class="py-5">
        <div class="container">
            <!-- Heading Section -->
            <div class="row">
                <div class="col">
                    <h2 class="text-center pp mb-4 fw-bold">See how over 700+ customers help the world work</h2>
                </div>
            </div>
            <!-- Logos Section -->
            <div class="row">
                <div class="col">
                    <div class="logo-img-container text-center mb-4">
                        <div class="images d-flex justify-content-center flex-wrap gap-5">
                            <img src="{{ asset('assets/clients-logo-1.svg') }}" alt="logo 1" class="img-fluid">
                            <img src="{{ asset('assets/clients-logo-2.svg') }}" alt="logo 2" class="img-fluid">
                            <img src="{{ asset('assets/clients-logo-3.svg') }}" alt="logo 3" class="img-fluid">
                            <img src="{{ asset('assets/clients-logo-4.svg') }}" alt="logo 4" class="img-fluid">
                            <img src="{{ asset('assets/clients-logo-5.svg') }}" alt="logo 5" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- form section -->
            <div class="row pb-2 mt-5">
                <div class="col-md-6 mb-4">
                    <!-- Left Side -->
                    <div class="left-side">
                        <a href="#">
                            <img src="{{ asset('assets/logo.svg') }}" alt="logo" class="img-fluid mb-4" />
                        </a>
                        <p class="p-left-side">Build faster websites with Block multipurpose</p>
                        <p class="p-left-side">bootstrap 5 template. Duis imper diet mollis</p>
                        <p class="p-left-side">leo, quis ultrices erat ultrices simple dummy .</p>

                    </div>
                </div>
                <!-- Right Side -->
                <div class="col-md-6">
                    <div class="right-side p-2">
                        <div class="right-heading">
                            <h1 class="right-h1">Join our newsletter</h1>
                            <p>We’ll send you a nice letter once per week. No spam.</p>
                        </div>

                        <form class="needs-validation d-flex">
                            <div class="email-side flex-grow-1 me-2">
                                <input type="email" class="form-control" id="subscribeEmail" placeholder="Email address"
                                    required>
                            </div>

                            <div class="submit-btn">
                                <button type="submit" class="btn btn-color">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="heading-links">
                        Landings
                    </div>
                    <div class="link-list-footer">
                        <ul class="list-unstyled">
                            <li>Saas</li>
                            <li>Software Company</li>
                            <li>Finance</li>
                            <li>Digital Agency</li>
                            <li>Conference</li>
                            <li>App Template</li>
                        </ul>
                    </div>
                </div>
                <!-- second link  -->
                <div class="col">
                    <div class="heading-links">
                        Accounts
                    </div>
                    <div class="link-list-footer">
                        <ul class="list-unstyled">
                            <li>Register</li>
                            <li>Login</li>
                            <li>Forgot Password</li>
                            <li>Reset Password</li>
                            <li>Profile</li>
                        </ul>
                    </div>
                </div>
                <!-- third link  -->
                <div class="col">
                    <div class="heading-links">
                        Resources
                    </div>
                    <div class="link-list-footer">
                        <ul class="list-unstyled">
                            <li>Docs</li>
                            <li>Support</li>
                            <li>Changelog </li>
                            <li>Help Center</li>
                            <li>Webinars</li>
                            <li>Community</li>
                        </ul>
                    </div>
                </div>
                <!-- fourth link  -->
                <div class="col">
                    <div class="heading-links">
                        Company
                    </div>
                    <div class="link-list-footer">
                        <ul class="list-unstyled">
                            <li>Contact us</li>
                            <li>News</li>
                            <li>Media Kit</li>
                            <li>Conference</li>
                            <li>Press </li>
                        </ul>
                    </div>

                </div>
                <!-- fifth link  -->
                <div class="col">
                    <div class="heading-links">
                        Community
                    </div>
                    <div class="link-list-footer">
                        <ul class="list-unstyled">
                            <li>Help</li>
                            <li>Developers</li>
                            <li>Blogs</li>
                            <li>Changelog</li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="row pt-4">
                <div class="col-md-6">
                    <div class="footer-btom">
                        <span>Copyright © 2024
                            <a href="#" class="text-decoration-none">Block Bootstrap 5 Theme</a> | Designed by
                            <a href="#" class="text-decoration-none">CodesCandy</a>
                        </span>
                    </div>

                </div>
                <div class="col-md-6 text-md-end">
                    <div class="d-flex justify-content-md-end">
                        <a href="#" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="btn btn-outline-dark btn-sm"> <i class="bi bi-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
