﻿
<!doctype html>
<html lang="en">

<head>
    <title>Armaments - Online Gun Shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Welcome to Armaments - your ultimate online destination for top-notch firearms and tactical gear. Explore our vast collection of weaponry, accessories, and expertly crafted gear designed to elevate your shooting experience. With a commitment to quality and customer satisfaction, we're your trusted partner in arming enthusiasts and professionals alike. Browse our inventory today and gear up for your next mission with confidence!">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- CSS Libraries -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">

</head>

<body>
    <div
        class="loader-wrapper position-fixed inset-0 justify-content-center align-items-center z-[9999] h-screen w-full bg-white">
        <div class="loader"></div>
    </div>
    <div class="header-top">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-1 gap-sm-3">
                </div>
                <div>
                    <a class="navbar-brand p-0 d-none d-xl-block" href="index.html">
                        <img src="assets/images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-4">
                    <span style="color: white;">
                        <img src="assets/images/user.svg" alt="">
                        <a style="color: white;" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#loginPopUp">Log In </a>
                         / 
                        <a style="color: white;" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#registerPopUp"> Register</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <header>
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <a class="navbar-brand p-0 m-0 d-xl-none" href="index.php">
                    <img src="assets/images/logo.png" alt="logo">
                </a>
                <div class="collapse navbar-collapse" id="navbar-right">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="product.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.php">about us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us.php">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-sm-3">
                    <div class="d-flex align-items-center gap-2">
                        <div class="icon">
                            <img src="assets/images/truck-side.svg" alt="">
                        </div>
                        <div class="d-none d-xl-block">
                            <h5>FREE DELIVERY WORLDWIDE</h5>
                            <h6>On order Over $100</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="icon">
                            <img src="assets/images/gift.svg" alt="">
                        </div>
                        <div class="d-none d-xl-block">
                            <h5>BUY 1 GET 1 FREE</h5>
                            <h6>On order Over $100</h6>
                        </div>
                    </div>
                    <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar-right" aria-controls="navbar-right" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="toggle-menu-icon"><span></span><span></span><span></span><span></span></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <main id="main-content" class="position-relative">
        <section class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-left">
                            <h6>Welcome to <span>ARMAMENTS</span></h6>
                            <h2>Secure Platform<br class="d-none d-md-block">
                                For Guns</h2>
                            <p>Generate Lorem Ipsum placeholder text. Select the number of
                                characters, words, sentences or paragraphs, and hit generate!</p>
                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                <a href="product.php" class="primary-btn">GET STARTED <i class="fa-solid fa-arrow-right"></i></a>
                                <a href="product.php" class="primary-btn border-btn">Explore Our Product Catalog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="guns-category">
            <div class="container">
                <div class="guns-wrapper">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="Handguns-tab" data-bs-toggle="tab"
                                data-bs-target="#Handguns" type="button" role="tab" aria-controls="Handguns"
                                aria-selected="true">Handguns</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Rifles-tab" data-bs-toggle="tab" data-bs-target="#Rifles"
                                type="button" role="tab" aria-controls="Rifles" aria-selected="false">Rifles</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Shotguns-tab" data-bs-toggle="tab" data-bs-target="#Shotguns"
                                type="button" role="tab" aria-controls="Shotguns"
                                aria-selected="false">Shotguns</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Optics-tab" data-bs-toggle="tab" data-bs-target="#Optics"
                                type="button" role="tab" aria-controls="Optics" aria-selected="false">Optics</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Accessories-tab" data-bs-toggle="tab"
                                data-bs-target="#Accessories" type="button" role="tab" aria-controls="Accessories"
                                aria-selected="true">Accessories</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Maintenance-tab" data-bs-toggle="tab"
                                data-bs-target="#Maintenance" type="button" role="tab" aria-controls="Maintenance"
                                aria-selected="false">Maintenance</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Silencers-tab" data-bs-toggle="tab" data-bs-target="#Silencers"
                                type="button" role="tab" aria-controls="Silencers"
                                aria-selected="false">Silencers</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Knives-tab" data-bs-toggle="tab" data-bs-target="#Knives"
                                type="button" role="tab" aria-controls="Knives" aria-selected="false">Knives</button>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Handguns" role="tabpanel"
                            aria-labelledby="Handguns-tab">
                            <div class="row g-2 g-sm-3 g-lg-4 justify-content-center">
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-1.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Rimfire (3)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-2.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Rifle Style Pistols(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-3.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Revolvers(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-4.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Polymer(2)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-5.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Optic Ready(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-6.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>1911(2)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Rifles" role="tabpanel" aria-labelledby="Rifles-tab">
                            <div class="row g-2 g-sm-3 g-lg-4 justify-content-center">
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-1.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Rimfire (3)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-2.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Rifle Style Pistols(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-3.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Revolvers(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-4.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Polymer(2)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-5.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Optic Ready(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-6.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>1911(2)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Shotguns" role="tabpanel" aria-labelledby="Shotguns-tab">
                            <div class="row g-2 g-sm-3 g-lg-4 justify-content-center">
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-1.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Rimfire (3)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-2.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Rifle Style Pistols(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-3.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Revolvers(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-4.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Polymer(2)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-5.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Optic Ready(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-6.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>1911(2)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Optics" role="tabpanel" aria-labelledby="Optics-tab">
                            <div class="row g-2 g-sm-3 g-lg-4 justify-content-center">
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-1.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Rimfire (3)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-2.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Rifle Style Pistols(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-3.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Revolvers(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-4.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Polymer(2)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-5.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Optic Ready(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-6.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>1911(2)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Accessories" role="tabpanel" aria-labelledby="Accessories-tab">
                            <div class="row g-2 g-sm-3 g-lg-4 justify-content-center">
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-1.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Rimfire (3)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-2.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Rifle Style Pistols(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-3.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Revolvers(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-4.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Polymer(2)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-5.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Optic Ready(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-6.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>1911(2)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Maintenance" role="tabpanel" aria-labelledby="Maintenance-tab">
                            <div class="row g-2 g-sm-3 g-lg-4 justify-content-center">
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-1.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Rimfire (3)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-2.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Rifle Style Pistols(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-3.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Revolvers(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-4.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Polymer(2)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-5.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Optic Ready(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-6.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>1911(2)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Silencers" role="tabpanel" aria-labelledby="Silencers-tab">
                            <div class="row g-2 g-sm-3 g-lg-4 justify-content-center">
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-1.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Rimfire (3)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-2.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Rifle Style Pistols(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-3.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Revolvers(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-4.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Polymer(2)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-5.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Optic Ready(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-6.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>1911(2)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Knives" role="tabpanel" aria-labelledby="Knives-tab">
                            <div class="row g-2 g-sm-3 g-lg-4 justify-content-center">
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-1.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Rimfire (3)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-2.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Rifle Style Pistols(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-3.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Revolvers(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-4.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Polymer(2)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-5.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>Optic Ready(1)</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                    <div class="gun-card">
                                        <div>
                                            <img src="assets/images/gun-6.png" class="img-fluid" alt="">
                                        </div>
                                        <h6>1911(2)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="how-order primary-bg inner-gap">
            <div class="container">
                <div class="row align-items-center gy-3">
                    <div class="col-lg-6">
                        <div class="how-order-left">
                            <img src="assets/images/gun-lg-1.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex flex-column gap-3 gap-md-4">
                            <h2 class="sub-title mb-0">HOW TO ORDER</h2>
                            <h4 class="highlight-text">JUST REGISTER YOURSELF WITH US, AND GET STARTED TO BUY YOUR FAVOURITES</h4>
                            <p>Generate Lorem Ipsum placeholder text. Select the number of characters, words, sentences
                                or paragraphs, and hit generate!</p>
                            <div class="d-flex align-items-center gap-3 gap-lg-4 d-none">
                                <h3>$775.00</h3>
                                <a href="#" class="primary-btn">BUY NOW <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="new-arrival inner-gap">
            <div class="container">
                <div class="row justify-content-center m-0">
                    <div class="col-sm-6 col-lg-4 col-xl-3 bg-white border-right card-1">
                        <div class="new-arrival-card">
                            <div>
                                <img src="assets/images/reward.png" alt="">
                            </div>
                            <div class="arrival-content">
                                <h3>TOP QUALITY</h3>
                                <p class="d-none">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 bg-white border-right card-2">
                        <div class="new-arrival-card">
                            <div>
                                <img src="assets/images/money.png" alt="">
                            </div>
                            <div class="arrival-content">
                                <h3>BEST PRICE</h3>
                                <p class="d-none">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 bg-white border-right card-3">
                        <div class="new-arrival-card">
                            <div>
                                <img src="assets/images/cart.png" alt="">
                            </div>
                            <div class="arrival-content">
                                <h3>100% SECURE SHOPPING</h3>
                                <p class="d-none">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 bg-white">
                        <div class="new-arrival-card">
                            <div>
                                <img src="assets/images/truck.png" alt="">
                            </div>
                            <div class="arrival-content">
                                <h3>FAST SHIPPING</h3>
                                <p class="d-none">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product inner-gap">
            <div class="container">
                <div class="product-action-wrapper d-flex flex-column flex-sm-row align-items-center gap-3 gap-xl-5">
                    <ul class="product-nav d-flex align-items-center flex-shrink-0">
                        <li><a href="#" class="product-link active">LATEST</a></li>
                    </ul>
                    <div class="border-top w-100">
                    </div>
                    <div class="product-arrow d-flex align-items-center flex-shrink-0 gap-1 gap-md-3 d-none">
                        <a href="#"><img src="assets/images/left-arrow.png" alt=""></a>
                        <a href="#"><img src="assets/images/right-arrow.png" alt=""></a>
                    </div>
                </div>
                <div class="row justify-content-center gy-3">
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <span class="product-badge">new</span>
                            <div class="product-img">
                                <img src="assets/images/latest-gun-1.png" alt="">
                            </div>
                            <div class="product-content">
                                <h6>Lwrc Ic-spr Fde Rifle 223 Rem, 5.56 Nato 32 Rds 14.7″</h6>
                                <ul class="d-flex align-items-center gap-2">
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #D9D9D9;"></i></li>
                                </ul>
                                <div class="d-flex justify-content-between align-items-center gap-3 gap-lg-4">
                                    <h4>$251.00</h4>
                                    <a href="#" class=""><img src="assets/images/shopping-bag.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <span class="product-badge">new</span>
                            <div class="product-img">
                                <img src="assets/images/machine-gun.png" alt="">
                            </div>
                            <div class="product-content">
                                <h6>Minigun Gatling gun Weapon Machine Gun</h6>
                                <ul class="d-flex align-items-center gap-2">
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #D9D9D9;"></i></li>
                                </ul>
                                <div class="d-flex justify-content-between align-items-center gap-3 gap-lg-4">
                                    <h4>$251.00</h4>
                                    <a href="#" class=""><img src="assets/images/shopping-bag.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <span class="product-badge">new</span>
                            <div class="product-img">
                                <img src="assets/images/ak47.png" alt="">
                            </div>
                            <div class="product-content">
                                <h6>AK-47 Firearm Assault rifle Weapon, scar, aK47</h6>
                                <ul class="d-flex align-items-center gap-2">
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #D9D9D9;"></i></li>
                                </ul>
                                <div class="d-flex justify-content-between align-items-center gap-3 gap-lg-4">
                                    <h4>$251.00</h4>
                                    <a href="#" class=""><img src="assets/images/shopping-bag.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <span class="product-badge">new</span>
                            <div class="product-img">
                                <img src="assets/images/bullets.png" alt="">
                            </div>
                            <div class="product-content">
                                <h6>Brass bullets, Bullet StG 44 Assault rifle AK-47 Cartridge, Bullets</h6>
                                <ul class="d-flex align-items-center gap-2">
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #D9D9D9;"></i></li>
                                </ul>
                                <div class="d-flex justify-content-between align-items-center gap-3 gap-lg-4">
                                    <h4>$251.00</h4>
                                    <a href="#" class=""><img src="assets/images/shopping-bag.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <span class="product-badge">new</span>
                            <span class="product-badge sale-badge">sale</span>
                            <div class="product-img">
                                <img src="assets/images/latest-gun-1.png" alt="">
                            </div>
                            <div class="product-content">
                                <h6>Black and brown assault rifle, AK-47 AK47 Weapon Automatic firearm, AK-47</h6>
                                <ul class="d-flex align-items-center gap-2">
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #D9D9D9;"></i></li>
                                </ul>
                                <div class="d-flex justify-content-between align-items-center gap-3 gap-lg-4">
                                    <h4>$251.00</h4>
                                    <a href="#" class=""><img src="assets/images/shopping-bag.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <span class="product-badge">new</span>
                            <div class="product-img">
                                <img src="assets/images/automatic-ak47.png" alt="">
                            </div>
                            <div class="product-content">
                                <h6>Black and brown assault rifle, AK-47 AK47 Weapon Automatic firearm, AK-47</h6>
                                <ul class="d-flex align-items-center gap-2">
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #D9D9D9;"></i></li>
                                </ul>
                                <div class="d-flex justify-content-between align-items-center gap-3 gap-lg-4">
                                    <h4>$251.00</h4>
                                    <a href="#" class=""><img src="assets/images/shopping-bag.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <span class="product-badge">new</span>
                            <div class="product-img">
                                <img src="assets/images/sniper-weapon.png" alt="">
                            </div>
                            <div class="product-content">
                                <h6>Dragunov sniper rifle Firearm, Sniper rifle, assault Rifle, Sniper, Weapon</h6>
                                <ul class="d-flex align-items-center gap-2">
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #D9D9D9;"></i></li>
                                </ul>
                                <div class="d-flex justify-content-between align-items-center gap-3 gap-lg-4">
                                    <h4>$251.00</h4>
                                    <a href="#" class=""><img src="assets/images/shopping-bag.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <span class="product-badge">new</span>
                            <div class="product-img">
                                <img src="assets/images/latest-gun-1.png" alt="">
                            </div>
                            <div class="product-content">
                                <h6>Lwrc Ic-spr Fde Rifle 223 Rem, 5.56 Nato 32 Rds 14.7″</h6>
                                <ul class="d-flex align-items-center gap-2">
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #D9D9D9;"></i></li>
                                </ul>
                                <div class="d-flex justify-content-between align-items-center gap-3 gap-lg-4">
                                    <h4>$251.00</h4>
                                    <a href="#" class=""><img src="assets/images/shopping-bag.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="booking inner-gap">
            <div class="container">
                <div class="d-flex flex-column gap-3 gap-sm-4 align-items-center">
                    <h6 class="section-title m-0">SAVE UP TO 60%</h6>
                    <h2 class="sub-title text-white m-0">BOOK RIGHT NOW</h2>
                    <h4 class="highlight-text">NOTHING EVER WAS THIS EASY! PICK A FIREARM AND CHECK OUT WITH YOUR OWN
                        ADDRESS</h4>
                    <p class="text-white">Generate Lorem Ipsum placeholder text. Select the number of characters, words,
                        sentences or
                        paragraphs, and hit generate!</p>
                    <a href="#" class="primary-btn">learn more <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </section>
        <section class="video inner-gap">
            <div class="container">
                <div class="title-group text-center">
                    <h2 class="sub-title">OUR PRODUCT VIDEO</h2>
                    <p>Generate Lorem Ipsum placeholder text. Select the number of characters, <br
                            class="d-none d-md-block"> words, sentences or paragraphs, and hit generate!</p>
                </div>
                <div class="row justify-content-center gy-3">
                    <div class="col-md-6 col-lg-4">
                        <div class="video-card">
                            <div class="position-relative">
                                <img src="assets/images/video-1.png" class="w-100" alt="">
                                <a href="#" class="play-video"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <h5>Mossberg 930 Tactical SPX Pistol 13 Gauge 8 RD 18.5″</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="video-card">
                            <div class="position-relative">
                                <img src="assets/images/video-2.png" class="w-100" alt="">
                                <a href="#" class="play-video"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <h5>Mossberg 930 Tactical SPX Pistol 13 Gauge 8 RD 18.5″</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="video-card">
                            <div class="position-relative">
                                <img src="assets/images/video-3.png" class="w-100" alt="">
                                <a href="#" class="play-video"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <h5>Mossberg 930 Tactical SPX Pistol 13 Gauge 8 RD 18.5″</h5>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 mt-xl-5">
                    <a href="#" class="primary-btn">SUBSCRIBE NOW <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </section>
        <section class="testimonial inner-gap">
            <div class="container">
                <div class="text-center mb-4">
                    <h2 class="sub-title text-white">TESTIMONIALS</h2>
                </div>
                <div>
                    <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <p>I can't express enough how much I adore VOLD Fashion. From their exquisite
                                        clothing designs to their outstanding customer service, VOLD has truly become my
                                        go-to brand for all things fashion</p>
                                    <div class="testimonial-avatar">
                                        <img src="assets/images/testimonial-avatar.png" alt="">
                                    </div>
                                    <h4 class="section-title d-block mb-1">ENZO NICHOLAS</h4>
                                    <h6 class="section-title d-block text-white"> Fashion Designer</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <p>I can't express enough how much I adore VOLD Fashion. From their exquisite
                                        clothing designs to their outstanding customer service, VOLD has truly become my
                                        go-to brand for all things fashion</p>
                                    <div class="testimonial-avatar">
                                        <img src="assets/images/testimonial-avatar.png" alt="">
                                    </div>
                                    <h4 class="section-title d-block mb-1">ENZO NICHOLAS</h4>
                                    <h6 class="section-title d-block text-white"> Fashion Designer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="news inner-gap">
            <div class="container">
                <div class="title-group text-center">
                    <h2 class="sub-title">SHOP BY BRANDS</h2>
                    <p>Generate Lorem Ipsum placeholder text. Select the number of characters,<br
                            class="d-none d-md-block"> words, sentences or paragraphs, and hit generate!</p>
                </div>
                <div class="row gy-3 text-center">
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="brand-card">
                            <img src="assets/images/brand-1.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="brand-card">
                            <img src="assets/images/brand-2.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="brand-card">
                            <img src="assets/images/brand-3.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="brand-card">
                            <img src="assets/images/brand-4.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="brand-card">
                            <img src="assets/images/brand-5.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="brand-card">
                            <img src="assets/images/brand-6.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<!-- Register Modal -->
<div class="modal fade" id="registerPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#">
          <div class="row gy-3 gy-sm-4">
            <div class="col-12">
              <div class="form-floating">
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                <label for="name">Enter your name</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                <label for="email">Enter your e-mail</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone">
                <label for="phone">Phone</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Enter password">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="tel" class="form-control" id="confirmPassword" placeholder="Re-enter your password">
                <label for="confirmPassword">Re-enter your password</label>
              </div>
            </div>
            <div class="col-12">
              <a href="#" class="primary-btn w-100 btn btn-primary">Register</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="loginPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#">
          <div class="row gy-3 gy-sm-4">
            <div class="col-12">
              <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                <label for="email">Enter your e-mail</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Enter password">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="col-12">
              <a href="#" class="primary-btn w-100 btn btn-primary">Log In</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
    
    <?php include ('partials/footer.php'); ?>