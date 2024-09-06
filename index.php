<?php 
session_start();
include('config/db.php'); 
?>

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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <style>
        .col-6{
            margin-right: 5px!important;
        }
    </style>
    <div class="loader-wrapper position-fixed inset-0 justify-content-center align-items-center z-[9999] h-screen w-full bg-white">
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
                    <?php if (isset($_SESSION['customer_id'])){ ?>
                        <span style="color: white;">
                            <img src="assets/images/user.svg" alt="">
                            <a style="color: white;" href="javascript:void(0)">Welcome, <?php echo $_SESSION['customer_name']; ?></a>
                            
                            <a style="color: white;border-radius:40px" class="btn btn-info" href="functions/auth/logout.php">Logout</a>
                        </span>
                    <?php }else{ ?>
                        <span style="color: white;">
                            <img src="assets/images/user.svg" alt="">
                            <a style="color: white;" href="javascript:void(0)" onclick="showLoginForm()">Log In </a>
                            / 
                            <a style="color: white;" href="javascript:void(0)" onclick="showRegisterForm()">Register</a>
                        </span>
                    <?php } ?>
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
                            <a href="javascript:void(0);" class="nav-link" onclick="handleShopClick('shop');">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.php">about us</a>
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
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="icon">
                            <img src="assets/images/gift.svg" alt="">
                        </div>
                        <div class="d-none d-xl-block">
                            <h5>GET BEST DEALS</h5>
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
                            <h6>Welcome to <span>Danny's Firearms</span></h6>
                            <h2>Your Trusted Source for<br class="d-none d-md-block">
                                Quality Firearms</h2>
                            <p>Discover premium firearms and accessories with a focus on safety, reliability, and responsible ownership.</p>
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
        <section class="news inner-gap">
            <div class="container">
                <div class="title-group text-center">
                    <h2 class="sub-title">Our Commitment to Safety</h2>
                    <p>We prioritize safety above all else. That’s why we offer extensive resources on proper firearm handling, storage solutions, and training courses. Whether you're a first-time buyer or an experienced shooter, we're here to support your journey with the highest standards of education and care.</p>
                </div>
            </div>
        </section>        
    </main>


<?php include ('partials/auth_footer.php'); ?>
<?php include ('partials/footer.php'); ?>