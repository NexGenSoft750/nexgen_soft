<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.3.1/dist/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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
<section class="py-5 bg-gray-900 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-12">
        <div class="text-center mb-5">
          <small class="text-uppercase ls-md fw-semibold text-primary">Case study</small>
          <h2 class="my-3 text-white">Explore Success Stories</h2>
          <p class="mb-0 text-body">Explore Success Stories: Real-World Impact through Our Customer Case Studies</p>
        </div>
      </div>
    </div>

    <div class="owl-carousel owl-theme">
      <div class="item">
        <div class="card">
          <img src="https://block.codescandy.com/assets/images/landings/it-company/it-company-case-study-2.jpg" class="card-img-top" alt="Card 1">
          <div class="card-body">
          <div class="w-50">
            <img src="https://block.codescandy.com/assets/images/landings/it-company/casestudy-logo-3.svg" alt="case-study">
          </div>
          <div class="d-flex flex-column gap-4">
              <h4><a href="#!" class="text-white">Revolutionizing Healthcare Delivery</a></h4>
              <a href="#!" class="icon-link icon-link-hover">
                  Read Case Study
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg>
              </a>
          </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card">
          <img src="https://block.codescandy.com/assets/images/landings/it-company/it-company-case-study-3.jpg" class="card-img-top" alt="Card 1">
          <div class="card-body">
          <div class="w-50">
            <img src="https://block.codescandy.com/assets/images/landings/it-company/casestudy-logo-4.svg" alt="case-study">
          </div>
          <div class="d-flex flex-column gap-4">
              <h4><a href="#!" class="text-white">Revolutionizing Healthcare Delivery</a></h4>
              <a href="#!" class="icon-link icon-link-hover">
                  Read Case Study
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg>
              </a>
          </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card">
          <img src="https://block.codescandy.com/assets/images/landings/it-company/it-company-case-study-4.jpg" class="card-img-top" alt="Card 1">
          <div class="card-body">
          <div class="w-50">
            <img src="https://block.codescandy.com/assets/images/landings/it-company/casestudy-logo-5.svg" alt="case-study">
          </div>
          <div class="d-flex flex-column gap-4">
              <h4><a href="#!" class="text-white">Revolutionizing Healthcare Delivery</a></h4>
              <a href="#!" class="icon-link icon-link-hover">
                  Read Case Study
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg>
              </a>
          </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card">
          <img src="https://block.codescandy.com/assets/images/landings/it-company/it-company-case-study-5.jpg" class="card-img-top" alt="Card 1">
          <div class="card-body">
          <div class="w-50">
            <img src="https://block.codescandy.com/assets/images/landings/it-company/casestudy-logo-6.svg" alt="case-study">
          </div>
          <div class="d-flex flex-column gap-4">
              <h4><a href="#!" class="text-white">Revolutionizing Healthcare Delivery</a></h4>
              <a href="#!" class="icon-link icon-link-hover">
                  Read Case Study
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg>
              </a>
          </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card">
          <img src="https://block.codescandy.com/assets/images/landings/it-company/it-company-case-study-6.jpg" class="card-img-top" alt="Card 1">
          <div class="card-body">
          <div class="w-50">
            <img src="https://block.codescandy.com/assets/images/landings/it-company/casestudy-logo-2.svg" alt="case-study">
          </div>
          <div class="d-flex flex-column gap-4">
              <h4><a href="#!" class="text-white">Revolutionizing Healthcare Delivery</a></h4>
              <a href="#!" class="icon-link icon-link-hover">
                  Read Case Study
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                  </svg>
              </a>
          </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>
<footer>
     <section class="py-5 mt-5">
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
<script src="https://cdn.rawgit.com/michalsnik/aos/2.3.1/dist/aos.js"></script>
<script>
  $('.owl-carousel').owlCarousel({
      nav: true,
      navText: [
          '<i class="fa-solid fa-arrow-left"></i>', 
          '<i class="fa-solid fa-arrow-right"></i>' 
      ],
      responsive: {
              0: {
                  items: 1 
              },
              600: {
                  items: 2 
              },
              1000: {
                  items: 3 
              }
          },
  
    loop: true,
    margin: 10,
    nav: true,
    dots: true,
    slideBy: 1,      
    smartSpeed: 1000, 
    autoplay: true,
    autoplayTimeout: 3000, 
    autoplayHoverPause: true
      
  });
</script>
</body>
</html>
