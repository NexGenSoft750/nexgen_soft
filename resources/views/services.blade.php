<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
</head>
<body>
<header class="container-fluid pt-5 hero-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                 <div class="text-uppercase hero-section-title" style="color:rgb(139 61 255);">Services</div>
                 <div class="h1 fw-bold mt-4 hero-section-heading">We provide client-centric services</div>
                 <p class="fs-5 hero-section-para">Maximize your website's capabilities and reach its full potential with our <br> services.</p>
            </div>
        </div>
    </div>
</header>
<section class="container-fluid service-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-lg-6 col-xxl-4">
                <div class="service-img position-relative">
                     <img src="{{asset('assets/service_1.jpg')}}" alt="service img" class="img-fluid rounded">
                     <div class="services-icons border-2 border-light rounded d-flex align-items-center justify-content-center position-absolute" style="background-color:rgb(139 61 255);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-vector-pen text-white-stable" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"></path>
                            <path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z"></path>
                        </svg>
                     </div>
                </div>
                <div class="service-body p-4 pt-5">
                     <div class="h3 fw-bold service-title">Website Design</div>
                     <p class="fs-6 mt-3 service-description" style="color:#64748b;">
                        We design visually stunning and user- friendly websites that elevate your online presence. We provide client-centric ui/ux services that are user-friendly and aesthetic at the same time. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                     </p>
                     <div class="service-badges d-flex flex-wrap gap-3">
                        <span class="badge rounded-pill px-3 py-2 text-dark" style="background-color: #e8d8ff;">Design Systems</span>
                        <span class="badge rounded-pill px-3 py-2 text-dark" style="background-color: #e8d8ff;">Wireframes and Testing</span>
                        <span class="badge rounded-pill px-3 py-2 text-dark" style="background-color: #e8d8ff;">User Flow</span>
                     </div>
                     <a href="#" class="d-inline-flex align-items-center mt-4 service-detail-link">
                        <span class="me-1">View Case Study</span> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xxl-4">
                <div class="service-img position-relative">
                     <img src="{{asset('assets/service_2.jpg')}}" alt="service img" class="img-fluid rounded">
                      <div class="services-icons border-2 border-light rounded d-flex align-items-center justify-content-center position-absolute" style="background-color:rgb(139 61 255);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-vector-pen text-white-stable" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"></path>
                            <path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z"></path>
                        </svg>
                     </div>
                </div>
                <div class="service-body p-4 pt-5">
                     <div class="h3 fw-bold service-title">Web Development</div>
                     <p class="fs-6 mt-3 service-description" style="color:#64748b;">
                        We build reliable, scalable solutions that deliver your vision and exceed your expectations. Web development is the work involved in developing a website lorem ipsum simple dummy content.
                     </p>
                     <div class="service-badges d-flex flex-wrap gap-3">
                        <span class="badge rounded-pill px-3 py-2 text-dark" style="background-color: #e8d8ff;">Design Systems</span>
                        <span class="badge rounded-pill px-3 py-2 text-dark" style="background-color: #e8d8ff;">Wireframes and Testing</span>
                        <span class="badge rounded-pill px-3 py-2 text-dark" style="background-color: #e8d8ff;">User Flow</span>
                     </div>
                     <a href="#" class="d-inline-flex align-items-center mt-4 service-detail-link">
                        <span class="me-1">View Case Study</span> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xxl-4">
                <div class="service-img position-relative">
                     <img src="{{asset('assets/service_3.jpg')}}" alt="service img" class="img-fluid rounded">
                      <div class="services-icons border-2 border-light rounded d-flex align-items-center justify-content-center position-absolute" style="background-color:rgb(139 61 255);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-vector-pen text-white-stable" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"></path>
                            <path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z"></path>
                        </svg>
                     </div>
                </div>
                <div class="service-body p-4 pt-5">
                     <div class="h3 fw-bold service-title">eCommerce Development</div>
                     <p class="fs-6 mt-3 service-description" style="color:#64748b;">
                       We are at the forefront of modern e-commerce development. Which mainly means adding your logo to the Shopify store template we’ve used for the past six years. The Shopify stack for headless commerce.
                     </p>
                     <div class="service-badges d-flex flex-wrap gap-3">
                        <span class="badge rounded-pill px-3 py-2 text-dark" style="background-color: #e8d8ff;">Design Systems</span>
                        <span class="badge rounded-pill px-3 py-2 text-dark" style="background-color: #e8d8ff;">Wireframes and Testing</span>
                        <span class="badge rounded-pill px-3 py-2 text-dark" style="background-color: #e8d8ff;">User Flow</span>
                     </div>
                     <a href="#" class="d-inline-flex align-items-center mt-4 service-detail-link">
                        <span class="me-1">View Case Study</span> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xxl-4">
                <div class="service-img position-relative">
                     <img src="{{asset('assets/service_4.jpg')}}" alt="service img" class="img-fluid rounded">
                      <div class="services-icons border-2 border-light rounded d-flex align-items-center justify-content-center position-absolute" style="background-color:rgb(139 61 255);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-vector-pen text-white-stable" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"></path>
                            <path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z"></path>
                        </svg>
                     </div>
                </div>
                <div class="service-body p-4 pt-5">
                     <div class="h3 fw-bold service-title">Mobile Development</div>
                     <p class="fs-6 mt-3 service-description" style="color:#64748b;">
                        Mobile app development is the act or process by which a mobile app is developed for one or more mobile devices, which can include personal digital assistants, enterprise digital assistants, or mobile phones.
                     </p>
                     <div class="service-badges d-flex flex-wrap gap-3">
                        <span class="badge rounded-pill px-3 py-2 text-dark" style="background-color: #e8d8ff;">Design Systems</span>
                        <span class="badge rounded-pill px-3 py-2 text-dark" style="background-color: #e8d8ff;">Wireframes and Testing</span>
                        <span class="badge rounded-pill px-3 py-2 text-dark" style="background-color: #e8d8ff;">User Flow</span>
                     </div>
                     <a href="#" class="d-inline-flex align-items-center mt-4 service-detail-link">
                        <span class="me-1">View Case Study</span> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid project-idea mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="h2 text-light text-center m-0 fw-bold">Have a Cool Project idea?</div>
                <p style="color:#64748b;" class="text-center m-0 mt-2">Plan to building a new website or web app for startup.</p>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center mt-4 mt-md-0">
                <button type="button" class="btn btn-primary">Start by saying hi....</button>
            </div>
        </div>
    </div>
</section>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
</html>
