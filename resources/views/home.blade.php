<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
