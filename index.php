<?php 
session_start();
include('config/db.php'); 

?>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['loginEmail'];
    $password = md5($_POST['loginPassword']);

    $query = "SELECT * FROM users WHERE email = ? AND type = 'C' AND status = '1'";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if ($password === $user['password']) {
            $_SESSION['customer_id'] = $user['id'];
            $_SESSION['customer_name'] = $user['name'];
			header("Location: index.php");
            exit;
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "No user found with this email!";
    }

    echo "<script>
            alert('$error');
            $('#loginPopUp').modal('show');
          </script>";
}

echo "<script>if ( window.history.replaceState ) {  window.history.replaceState( null, null, window.location.href ); }</script>";

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

</head>

<body>
    <style>
        .col-6{
            margin-right: 5px!important;
        }
    </style>
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
                <?php if (isset($_SESSION['customer_id'])){ ?>
                    <span style="color: white;">
                        <img src="assets/images/user.svg" alt="">
                        <a style="color: white;" href="javascript:void(0)">Welcome, <?php echo $_SESSION['customer_name']; ?></a>
                        /
                        <a style="color: white;" href="functions/auth/logout.php">Logout</a>
                    </span>
                <?php }else{ ?>
                    <span style="color: white;">
                        <img src="assets/images/user.svg" alt="">
                        <a style="color: white;" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#loginPopUp">Log In </a>
                        / 
                        <a style="color: white;" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#registerPopUp">Register</a>
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
                            <h6>Welcome to <span>ARMS SHOPS</span></h6>
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
                        <?php
                        $categoriesQuery = "SELECT * from categories where status = 'A'";
					    $categoriesResult = $conn->query($categoriesQuery);
                        $firstTabActive = true; 
                        while($row = $categoriesResult->fetch_assoc()) { ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link <?php echo $firstTabActive ? 'active' : ''; ?>" id="<?php echo $row['name']; ?>-tab" data-bs-toggle="tab"
                                    data-bs-target="#<?php echo $row['name']; ?>" type="button" role="tab" aria-controls="<?php echo $row['name']; ?>"
                                    aria-selected="true"><?php echo $row['name']; ?></button>
                            </li>
                        <?php $firstTabActive = false; } ?>
                    </ul>
                    <!-- Tab panes -->
                     <!-- Tab panes -->
                    <div class="tab-content">
                    <?php
                    $categoriesResult->data_seek(0); 
                    $firstTabContentActive = true; 
                    while ($category = $categoriesResult->fetch_assoc()) { 
                        $categoryName = $category['name'];
                    ?>
                        <div class="tab-pane fade <?php echo $firstTabContentActive ? 'show active' : ''; ?>" id="<?php echo $categoryName; ?>" role="tabpanel" aria-labelledby="<?php echo $categoryName; ?>-tab">
                            <div class="row g-2 g-sm-3 g-lg-4 justify-content-center">
                                <?php
                                $productsQuery = "SELECT * FROM products WHERE category_id = '{$category['id']}' ORDER BY id DESC LIMIT 5";
                                $productsResult = $conn->query($productsQuery);

                                while ($product = $productsResult->fetch_assoc()) { ?>
                                    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                        <div class="gun-card">
                                            <div>
                                                <img src="admin/product_images/<?php echo $product['master_image']; ?>" class="img-fluid" alt="">
                                            </div>
                                            <h6><?php echo $product['name']; ?></h6>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php 
                        $firstTabContentActive = false; 
                    } ?>
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
                    <?php 
                    $newProductQuery = "SELECT * from products ORDER BY id DESC LIMIT 8";
                    $newProductResult = $conn->query($newProductQuery);
                    while($newProductRow = $newProductResult->fetch_assoc()) { ?>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <span class="product-badge">NEW</span>
                                <div class="product-img">
                                    <img src="admin/product_images/<?php echo $newProductRow['master_image']; ?>" alt="">
                                </div>
                                <div class="product-content">
                                    <h6><?php echo $newProductRow['short_description']; ?></h6>
                                    <ul class="d-flex align-items-center gap-2">
                                        <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                        <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                        <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                        <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                        <li><i class="fa-solid fa-star" style="color: #D9D9D9;"></i></li>
                                    </ul>
                                    <div class="d-flex justify-content-between align-items-center gap-3 gap-lg-4">
                                        <h4 class="d-none">$251.00</h4>
                                        <a href="#" class=""><img src="assets/images/shopping-bag.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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
                    <h2 class="sub-title">POPULAR BRANDS</h2>
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
                    
                </div>
            </div>
        </section>
    </main>

<!-- Register Modal -->
<div class="modal fade" id="registerPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="text-align:center">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#">
          <div class="row gy-3 gy-sm-4">
          <div class="col-12">
                <div class="form-floating">
                    <input type="text" class="form-control" name="registerName" id="registerName" placeholder="Enter your name" required>
                    <label for="registerName">Enter your name</label>
                </div>
            </div>
            <div class="col-12" style="display: flex;">
                <div class="col-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="registerPhone" id="registerPhone" placeholder="Enter your phone" onkeypress="return isNumberKey(event)" required>
                        <label for="registerPhone">Enter your phone</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">
                        <input type="email" class="form-control" name="registerEmail" id="registerEmail" placeholder="Enter your email" onkeyup="check_email(this.value)" required>
                        <label for="registerEmail">Enter your e-mail</label>
                    </div>
                </div>
            </div>
            
            <div class="col-12" style="display: flex;">
                <div class="col-6">
                    <div class="form-floating">
                      <input type="password" class="form-control" name="registerPassword" id="registerPassword" placeholder="Enter password" required>
                      <label for="registerPassword">Enter your password</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">
                        <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Re-enter your password" required>
                        <label for="confirmPassword">Re-enter your password</label>
                    </div>
                </div>
            </div>

            <div class="col-12">
              <div class="form-floating">
                <input type="text" class="form-control" name="address_one" id="address_one" placeholder="Enter address line one" required>
                <label for="address_one">Enter your address line one</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="text" class="form-control" name="address_two" id="address_two" placeholder="Enter address line two" required>
                <label for="address_two">Enter your address line two</label>
              </div>
            </div>
            <div class="col-12" style="display: flex;">
                <div class="col-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter your city" required>
                        <label for="city">Enter your city</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="state" id="state" placeholder="Enter your state" required>
                        <label for="state">Enter your state</label>
                    </div>
                </div>
            </div>
            <div class="col-12" style="display: flex;">
                <div class="col-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="country" id="country" placeholder="Enter your country" required>
                        <label for="country">Enter your country</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter your pincode" required onkeypress="return isNumberKey(event)">
                        <label for="pincode">Enter your pincode</label>
                    </div>
                </div>
            </div>
            <div class="col-12">
              <a href="javascript:void(0)" onclick="register()" class="primary-btn w-100 btn btn-primary">Register</a>
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
        <?php if (isset($error)){ ?>
			<div class="alert alert-danger mg-b-0" role="alert">
				<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button">
					<span aria-hidden="true">×</span>
				</button>
				<strong><?php echo $error; ?></strong>
			</div>
		<?php } ?>
        <form method="POST">
          <div class="row gy-3 gy-sm-4">
            <div class="col-12">
              <div class="form-floating">
                <input type="email" class="form-control" name="loginEmail" id="email" placeholder="Enter your email">
                <label for="email">Enter your e-mail</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="password" class="form-control" name="loginPassword" id="loginPassword" placeholder="Enter password">
                <label for="password">Enter your password</label>
              </div>
            </div>
            <div class="col-12">
              <button name="login" type="submit" class="primary-btn w-100 btn btn-primary">Log In</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
    

<script type="text/javascript">
    
    
    
    function register(){
        var name = $('#registerName').val();
        var email = $('#registerEmail').val();
        var phone = $('#registerPhone').val();
        var password = $('#registerPassword').val();
        var confirmPassword = $('#confirmPassword').val();

        var address_one = $('#address_one').val();
        var address_two = $('#address_two').val();

        var city = $('#city').val();
        var state = $('#state').val();
        var country = $('#country').val();
        var pincode = $('#pincode').val();
        
        if(password != confirmPassword){
            alert('Please re-enter the password, both password should be same.');
            $('#confirmPassword').val('');
            return;
        }

        $.ajax({
            type: 'POST',
            url: 'functions/auth/register.php',
            data: {
                name:name,
                email:email,
                phone:phone,
                password:password,
                address_one:address_one,
                address_two:address_two,
                city:city,
                state:state,
                country:country,
                pincode:pincode,
            } ,
            success: function(response){
                if(response == true){
                    $('#registerPopUp').modal('hide');
                    alert("Registration succesfull, wait for your profile verification.")
                }else{
                    alert('Registration failed, please try again or contact admin.');
                }
            }
        });
    }   


    function check_email(email){
        $.ajax({
            type: 'POST',
            url: 'functions/auth/check_email.php',
            data: {
                email:email,
            } ,
            success: function(response){
                if(response){
                    alert('This entered email already registered.');
                    $('#registerEmail').val('');
                    return;
                }
            }
        });
    }


    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

</script>


<?php include ('partials/footer.php'); ?>