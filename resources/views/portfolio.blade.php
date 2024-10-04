<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio #1</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
      <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
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
    <!-- Portfolio #1 -->
    <div class="container mt-4" style="max-width: 900px">
    </div>

    <!-- Main Section -->
    <main>
      <!-- Featured work section -->
      <div class="container text-center mt-5" style="max-width: 950px">
        <!-- Cards Container with Border -->
        <div class="px-5 p-3 mt-3 rounded-2 border rounded">
          <h6 class="text-uppercase text-muted">Project we done</h6>
          <h2 class="fw-bold">Featured work</h2>
          <p class="text-muted mb-5">
            We're a web design agency creating next-level websites by
            <br />
            strategically blending user experience and brand storytelling.
          </p>
          <!-- Cards Row -->
          <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
              <div class="card h-100 border-0">
                <img
                  src="{{asset('assets/portfolio-img-1.jpg')}}"
                  class="card-img-top"
                  alt="Project 1"
                />
                <div class="card-body text-start">
                  <h5 class="card-title fw-bold">Chat GPT for Figma</h5>
                  <p class="card-text text-muted">Development</p>
                </div>
              </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
              <div class="card h-100 border-0">
                <img
                  src="{{asset('assets/portfolio-img-5.jpg')}}"
                  class="card-img-top"
                  alt="Project 2"
                />
                <div class="card-body text-start">
                  <h5 class="card-title fw-bold">Virtual reality</h5>
                  <p class="card-text text-muted">UI/UX Design</p>
                </div>
              </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
              <div class="card h-100 border-0">
                <img
                  src="{{asset('assets/portfolio-img-4.jpg')}}"
                  class="card-img-top"
                  alt="Project 3"
                />
                <div class="card-body text-start">
                  <h5 class="card-title fw-bold">AI avatar application</h5>
                  <p class="card-text text-muted">Web Development</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Case Study Button -->
          <div class="mt-4">
            <button
              class="btn btn-primary"
              style="background-color: #7a4eff; border-color: #7a4eff"
            >
              Read case study
            </button>
          </div>
        </div>
      </div>
    </main>

    <!-- Portfolio #2 -->
    <div class="container mt-4" style="max-width: 900px">
    </div>
    <div class="container text-center mt-5" style="max-width: 950px">
      <div class="p-4 mt-3 rounded-2 border rounded">
        <div class="container mt-5">
          <h5 class="text-center text-muted">PORTFOLIO</h5>
          <h1 class="text-center portfolio-title">
            Handful of items from
            <span class="text-primary">my <br />portfolio.</span>
          </h1>
          <p class="text-center text-muted">
            Here are a handful of items from my portfolio over the last 13
            years.
          </p>

          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  JAMstack & Headless web development agency
                  <br />
                  <span class="badge bg-secondary">Figma</span>
                  <span class="badge bg-secondary">Bootstrap</span>
                  <img
                    src="{{asset('assets/1.jpg')}}"
                    class="img-fluid mt-3"
                    alt="Project Image"
                  />
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                Banking and Finance landing page design
                <br />
                <div class="card-body">
                  <span class="badge bg-secondary">UI Design</span>
                  <span class="badge bg-secondary">Next.js</span>
                  <img
                    src="{{asset('assets/2.jpg')}}"
                    class="img-fluid mt-3"
                    alt="Project Image"
                  />
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                Accounting software web app development
                <br />
                <div class="card-body">
                  <span class="badge bg-secondary">Web Development</span>
                  <span class="badge bg-secondary">React JS</span>
                  <img
                    src="{{asset('assets/3.jpg')}}"
                    class="img-fluid mt-3"
                    alt="Project Image"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
  </body>
</html>
