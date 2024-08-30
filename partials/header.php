<?php include('config/db.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Armaments - Online Gun Shop HTML template</title>
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
    <link rel="stylesheet" href="assets/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">

</head>

<body>
    <div
        class="loader-wrapper position-fixed inset-0 justify-content-center align-items-center z-[9999] h-screen w-full bg-white">
        <div class="loader"></div>
    </div>
    <div class="header-top header-top-light position-relative">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <a class="navbar-brand p-0 d-none d-xl-block" href="index.html">
                        <img src="assets/images/logo-black.png" alt="logo">
                    </a>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-4">
                    <a href="#"><img src="assets/images/user.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <header class="header-light">
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <a class="navbar-brand p-0 m-0 d-xl-none" href="index.html">
                    <img src="assets/images/logo-black.png" alt="logo">
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