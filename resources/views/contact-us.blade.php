<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contect Us</title>
    <!-- boostrap links  -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="contect.css">
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
    <main>
        <div class="pattern-square"></div>

        <!--Pageheader start-->
        <section class="py-5 py-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-1 col-md-12 col-12">
                        <h1 class="mb-3">Contact us</h1>
                        <p class="mb-0 lead">Please reach out to us if you have questions about our enterprise
                            offerings, or anything else.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--Pageheader end-->


        <!--Contact us start-->
        <section class="mb-xl-9 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                        <div class="row g-xl-7 gy-5">


                            <div class="col-md-7 col-12">
                                <div class="card shadow-sm border-0">
                                    <div class="card-body bg-white">
                                        <form class="row g-3 needs-validation input-text" novalidate>
                                            <div class="col-lg-6 col-md-12">
                                                <label for="contactFirstNameInput" class="form-label">
                                                    First Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="contactFirstNameInput"
                                                    required aria-required="true">
                                                <div class="invalid-feedback">Please enter your first name.</div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <label for="contactLastNameInput" class="form-label">
                                                    Last Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="contactLastNameInput"
                                                    required aria-required="true">
                                                <div class="invalid-feedback">Please enter your last name.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactEmailInput" class="form-label">
                                                    Email
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="email" class="form-control" id="contactEmailInput" required
                                                    aria-required="true">
                                                <div class="invalid-feedback">Please enter a valid email address.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactCompanyNameInput" class="form-label">Company
                                                    Name</label>
                                                <input type="text" class="form-control" id="contactCompanyNameInput">
                                                <div class="invalid-feedback">Please enter your company name if
                                                    applicable.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactPhoneInput" class="form-label">Phone</label>
                                                <input type="tel" class="form-control" id="contactPhoneInput">
                                                <div class="invalid-feedback">Please enter a valid phone number.</div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contactTextarea" class="form-label">Message</label>
                                                <textarea class="form-control" id="contactTextarea"
                                                    placeholder="Write to us" rows="4" required
                                                    aria-required="true"></textarea>
                                                <div class="invalid-feedback">Please enter a message.</div>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-primary" type="submit">Send</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5 col-12">
                                <div class="mb-5">
                                    <div class="icon-shape bg-primary bg-opacity-10 rounded-circle icon-md mb-5 d-flex align-items-center justify-content-center"
                                        style="width: 40px; height: 40px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-headset text-primary" viewBox="0 0 16 16">
                                            <path
                                                d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4>Technical support</h4>
                                        <p class="mb-0">
                                            Found a persistent bug, or need help setting a new team member up? Can’t
                                            crack a feature?
                                            <a href="#" class="text-primary text-decoration-none">Let us know!</a>

                                        </p>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <div class="icon-shape bg-primary bg-opacity-10 rounded-circle icon-md mb-5 d-flex align-items-center justify-content-center"
                                        style="width: 40px; height: 40px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-chat-dots text-primary"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
                                            </path>
                                            <path
                                                d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4>General chat</h4>
                                        <p class="mb-0">
                                            Billing issues, customizations, plan changes--anything that doesn’t fit in
                                            the other two brackets, goes here.
                                            <a href="#" class="text-primary text-decoration-none">Start Chat</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <div class="icon-shape bg-primary bg-opacity-10 rounded-circle icon-md mb-5 d-flex align-items-center justify-content-center"
                                        style="width: 40px; height: 40px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-newspaper text-primary"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z">
                                            </path>
                                            <path
                                                d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4>Help Center</h4>
                                        <p class="mb-0">
                                            Want to share feedback on an existing feature or suggest a new one? Talk to
                                            us!
                                            <a href="#" class="text-primary text-decoration-none">Visit Help Center</a>
                                        </p>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Contact us end-->


        <!--Location start-->
        <section class="mb-xl-9 my-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-12 col-md-12 col-12">
                        <h2 class="mb-lg-7 fw-bold text-uppercase">Our offices around the world</h2>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 py-5">
                        <h3 class="mb-3">India</h3>
                        <figure class="mb-3 card-lift">
                            <img src="{{asset('assets/location-1.jpg')}}" alt="location" class="img-fluid rounded-3">
                        </figure>
                        <div class="d-flex">
                            <div>
                                <svg xmlns="{{asset('assets/location-2.jpg')}}" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt-fill text-primary" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ms-2">
                                <span>WeWork, 412, Residency Rd, Shanthala Nagar, Ashok Nagar, Bengaluru, Karnataka
                                    560025</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 py-5">
                        <h3 class="mb-3">Australia</h3>
                        <figure class="mb-3 card-lift">
                            <img src="{{asset('assets/location-3.jpg')}}" alt="location" class="img-fluid rounded-3">
                        </figure>
                        <div class="d-flex">
                            <div>
                                <svg xmlns="{{asset('assets/location-4.jpg')}}" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt-fill text-primary" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ms-2">
                                <span>12/125 Collins St, Melbourne, Victoria, 3000 Australia</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 py-5">
                        <h3 class="mb-3">Brazil</h3>
                        <figure class="mb-3 card-lift">
                            <img src="{{asset('assets/location-2.jpg')}}" alt="location" class="img-fluid rounded-3">
                        </figure>
                        <div class="d-flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt-fill text-primary" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ms-2">
                                <span>Oscar Freire, 678 - Jardim Paulista São Paulo - SP 01426-001, Brazil</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 py-5">
                        <h3 class="mb-3">Canada</h3>
                        <figure class="mb-3 card-lift">
                            <img src="{{asset('assets/location-4.jpg')}}" alt="location" class="img-fluid rounded-3">
                        </figure>
                        <div class="d-flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt-fill text-primary" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ms-2">
                                <span>458 Av. Viger O Montréal, QC H2Z 1M9 Canada</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Location end-->
    </main>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>