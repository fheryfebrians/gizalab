<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel/dist/assets/owl.theme.default.min.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-top" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand logo" href="#page-top">
                <img src="{{ asset('assets/images/logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-custom dropdown-toggle me-lg-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Kelas
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Kelas 1</a></li>
                          <li><a class="dropdown-item" href="#">Kelas 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-custom me-lg-3" href="#">Karya Alumni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-custom me-lg-3" href="#">Kelas Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-custom me-lg-3" href="#">
                            <i class="fa fa-cart-shopping"></i>
                        </a>
                    </li>
                    <li class="nav-item mobile-hide">
                        <a class="nav-link me-lg-3 btn btn-custom" href="#">
                            <i class="fa fa-user"></i>
                        </a>
                    </li>
                    <li class="nav-item mobile-show">
                        <a class="nav-link nav-custom me-lg-3" href="#">Mentify Bootcamp</a>
                    </li>
                    <li class="nav-item mobile-show">
                        <a class="nav-link nav-custom me-lg-3" href="#">Mentify Lite</a>
                    </li>
                    <li class="nav-item mobile-show">
                        <a class="nav-link nav-custom me-lg-3" href="#">Online Workshop</a>
                    </li>
                    <li class="nav-item mobile-show">
                        <a class="nav-link nav-custom me-lg-3" href="#">Webminar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="navbar-bot navbar navbar-expand-lg ms-auto navbar-light mobile-hide">
        <div class="container px-7">
            <ul class="navbar-nav">
                <li class="nav-item btn">
                    <a href="#" class="nav-link">Mentify Bootcamp</a>
                </li>
                <li class="nav-item btn">
                    <a href="#" class="nav-link">Mentify Lite</a>
                </li>
                <li class="nav-item btn active">
                    <a href="#" class="nav-link">Online Workshop</a>
                </li>
                <li class="nav-item btn">
                    <a href="#" class="nav-link">Webminar</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="page-holder">
        <section class="hero">
            <div class="container px-5">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="hero-campaign section-title">
                            <h1>Online Workshop</h1>
                            <p>Pelajari UX Writing dan kembangkan skillmu agar bisa membuat desain dengan copy yang mudah dimengerti. Pada kelas UX writing ini kamu akan belajar mengenai UX Writing lebih dalam dimulai dari fundamental hingga praktik di dunia kerja</p>
                            <a href="#" class="btn btn-hero">Pilihan Workshop</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="hero-banner">
                            <img src="{{ asset('assets/images/hero-workshop.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="choice-workshop">
            <div class="container px-5">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h1>Berbagai Pilihan Workshop</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="section-content">
                            <p>Kami menyediakan berbagai pilihan workshop, kamu dapat memilih sesuai dengan keinginan kamu untuk mendalami ataupun mempelajari mengenai UX dan product design
                                <b>sesuai keinginan dan kebutuhan kamu</b>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="section-search-content">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control input-section" data-status="uxdesign" id="search_workshop" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2">
                                <div class="input-group-append input-group-section">
                                   <i class="fa fa-search input-icon-section"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="info-workshop">
                            <p>Hai Evan, saat ini kamu memiliki kuota untuk 
                                <b>mengikuti 1 workshop secara gratis</b>
                                dari daftar workshop berikut
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-5">
                <ul class="nav nav-pills mb-3 row" id="tabWorkshop" role="tablist">
                    <li role="presentation" class="col-lg-2 col-md-4 col-sm-6 pill-workshop nav-status" data-status="uxdesign">
                        <button class="workshop-btn active" id="uxdesign" data-bs-toggle="pill" data-bs-target="#pills-uxdesign" type="button" role="tab" aria-controls="pills-uxdesign" aria-selected="true">UX Design</button>
                    </li>
                    <li role="presentation" class="col-lg-2 col-md-4 col-sm-6 pill-workshop nav-status" data-status="uxwriting">
                        <button class="workshop-btn" id="uxwriting" data-bs-toggle="pill" data-bs-target="#pills-uxwriting" type="button" role="tab" aria-controls="pills-uxwriting" aria-selected="false">UX Writing</button>
                    </li>
                    <li role="presentation" class="col-lg-2 col-md-4 col-sm-6 pill-workshop nav-status" data-status="research">
                        <button class="workshop-btn" id="research" data-bs-toggle="pill" data-bs-target="#pills-research" type="button" role="tab" aria-controls="pills-research" aria-selected="false">Research</button>
                    </li>
                    <li role="presentation" class="col-lg-2 col-md-4 col-sm-6 pill-workshop nav-status" data-status="product_design">
                        <button class="workshop-btn" id="product_design" data-bs-toggle="pill" data-bs-target="#pills-product_design" type="button" role="tab" aria-controls="pills-product_design" aria-selected="false">Product Design</button>
                    </li>
                    <li role="presentation" class="col-lg-2 col-md-4 col-sm-6 pill-workshop nav-status" data-status="uidesign">
                        <button class="workshop-btn" id="uidesign" data-bs-toggle="pill" data-bs-target="#pills-uidesign" type="button" role="tab" aria-controls="pills-uidesign" aria-selected="false">UI Design</button>
                    </li>
                    <li role="presentation" class="col-lg-2 col-md-4 col-sm-6 pill-workshop nav-status" data-status="interaction_design">
                        <button class="workshop-btn" id="interaction_design" data-bs-toggle="pill" data-bs-target="#pills-interaction_design" type="button" role="tab" aria-controls="pills-interaction_design" aria-selected="false">Interaction Design</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="tabWorkshopContent">
                    <div class="tab-pane fade show active" id="pills-uxdesign" role="tabpanel" aria-labelledby="pills-uxdesign-tab" tabindex="0">
                        <div class="row" id="status-uxdesign">
                            
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-uxwriting" role="tabpanel" aria-labelledby="pills-uxwriting-tab" tabindex="0">
                        <div class="row" id="status-uxwriting">
 
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-research" role="tabpanel" aria-labelledby="pills-research-tab" tabindex="0">
                        <div class="row" id="status-research">

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-product_design" role="tabpanel" aria-labelledby="pills-product_design-tab" tabindex="0">
                        <div class="row" id="status-product_design">

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-uidesign" role="tabpanel" aria-labelledby="pills-uidesign-tab" tabindex="0">
                        <div class="row" id="status-uidesign">

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-interaction_design" role="tabpanel" aria-labelledby="pills-interaction_design-tab" tabindex="0">
                        <div class="row" id="status-interaction_design">

                        </div>
                    </div>
                  </div>
            </div>
        </section>
        <section class="section3">
            <div class="container px-5 py-5">
                <div class="row">
                    <div class="col-12 justify-content-center mx-auto">
                        <div class="section-title">
                            <h1>4 Keuntungan dari Workshop Mentify</h1>
                        </div>
                        <div class="section-content">
                            <p>Workshop di mentify menawarkan berbagai keuntungan dibanding platform belajar lain, berikut beberapa keuntungan yang akan kamu dapatkan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-5">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card p-3 mb-2 shadow-lg section3-card">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="section3-card-icon"> <i class="fa fa-circle-play"></i> </div>
                                    <h5 class="mb-0 section3-card-title">Recording Class</h5>
                                </div>
                            </div>
                            <div class="section3-card-content">
                                <p>Kamu akan mendapatkan recording class agar kamu dapat mengingat kembali materi dan diskusi yang terjadi di workshop kamu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card p-3 mb-2 shadow-lg section3-card">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="section3-card-icon"> <i class="fa fa-trophy"></i> </div>
                                    <h5 class="mb-0 section3-card-title">e-certificate</h5>
                                </div>
                            </div>
                            <div class="section3-card-content">
                                <p>Workshop yang kamu ikuti akan memberikan e-certifikat yang dapat kamu publikasikan di portofolio maupun sosial media kamu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card p-3 mb-2 shadow-lg section3-card">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="section3-card-icon"> <i class="fa fa-chart-bar"></i> </div>
                                    <h5 class="mb-0 section3-card-title">Materi Workshop</h5>
                                </div>
                            </div>
                            <div class="section3-card-content">
                                <p>Materi Workshop dalam bentuk PPT / PDF akan kami berikan agar kamu dapat kembali mempelajari materi lebih lanjut</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card p-3 mb-2 shadow-lg section3-card">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="section3-card-icon"> <i class="fa fa-medal"></i> </div>
                                    <h5 class="mb-0 section3-card-title">Interactive Live Session with Expert</h5>
                                </div>
                            </div>
                            <div class="section3-card-content">
                                <p>Kamu berkesempatan langsung untuk berinteraksi dengan Expert dalam meningkatkan skill dan knowledge kamu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section4">
            <div class="container px-5">
                <div class="row">
                    <div class="col-12 justify-content-center max-auto">
                        <div class="section-title">
                            <h1>Apa Kata <span>Mereka</span> yang pernah berpartisipasi ?</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-5 py-3">
                <div class="owl-carousel owl-theme">
                    @foreach ($testimonial as $key => $testi)
                        <div class="item @if($key == 0) first prev @elseif ($key == 1) show @elseif($key == 2) next @else last @endif">
                            <div class="card testi-card border-0 py-3 px-4">
                                <div class="row justify-content-center">
                                    <img src="{{ asset($testi->image) }}" class="img-fluid profile-pic mb-4 mt-3">
                                </div>
                                <h6 class="mb-3 mt-2">{{ $testi->name }}</h6>
                                <p class="content mx-2">{{ $testi->text }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        
        <section class="footer">
            <div class="container px-5 py-5">
                <div class="row">
                    <div class="col-12 justify-content-center mx-auto">
                        <div class="banner-footer">
                            <img src="{{ asset('assets/images/footer-image.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-5 py-5 section-footer">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="">
                            <h5 class="footer-copyright">Copyright @2021 Mentify by Giza Lab</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <h5>Sitemap</h5>
                        <ul class="footer-list-menu">
                            <li>
                                <a href="#">Bootcamp</a>
                            </li>
                            <li>
                                <a href="#">Mentify Lite</a>
                            </li>
                            <li>
                                <a href="#">Karya Alumni</a>
                            </li>
                            <li>
                                <a href="#">Kelas Saya</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <h5>About</h5>
                        <ul class="footer-list-menu">
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Our Team</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <h5>Get in Touch</h5>
                        <ul class="footer-list-menu-brand">
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>
    <script src="{{ asset('assets/OwlCarousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.min.js') }}"></script>
</body>
</html>