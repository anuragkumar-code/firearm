<?php 
$adminQuery = "SELECT * from users where id='1'";
$result = $conn->query($adminQuery);
$adminData = $result->fetch_assoc();

function ensureUrlScheme($url) {
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "https://" . $url;
    }
    return $url;
}

?>

<footer>
    <div class="container">
        <div class="footer-top">
            <div class="row gy-4 justify-content-between">
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 footer-about">
                    <a href="index.html" class="footer-brand mb-4 d-block">
                        <img src="assets/images/logo.png" class="img-fluid" alt="">
                    </a>
                    <p class="mb-3 mb-xl-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua</p>
                    <ul class="social-media d-flex align-items-center gap-2">
                        <?php if($adminData['discord'] != ""){ ?><li><a target="_blank" href="<?php echo ensureUrlScheme($adminData['discord']); ?>" class="discord"><i class="fa-brands fa-discord"></i></a></li><?php } ?>
                        <?php if($adminData['reddit'] != ""){ ?><li><a target="_blank" href="<?php echo ensureUrlScheme($adminData['reddit']); ?>" class="reddit"><i class="fa-brands fa-reddit-alien"></i></a></li><?php } ?>
                        <?php if($adminData['twitter'] != ""){ ?><li><a target="_blank" href="<?php echo ensureUrlScheme($adminData['twitter']); ?>" class="twitter"><i class="fa-brands fa-x-twitter"></i></a></li><?php } ?>
                        <?php if($adminData['instagram'] != ""){ ?><li><a target="_blank" href="<?php echo ensureUrlScheme($adminData['instagram']); ?>" class="instagram"><i class="fa-brands fa-instagram"></i></a></li><?php } ?>
                        <?php if($adminData['facebook'] != ""){ ?><li><a target="_blank" href="<?php echo ensureUrlScheme($adminData['facebook']); ?>" class="facebook"><i class="fa-brands fa-facebook-f"></i></a></li><?php } ?>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 footer-link-wrapper d-none">
                    <h3>WE ARE VOLD</h3>
                    <ul class="footer-link">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 footer-link-wrapper d-none">
                    <h3>INFORMATION</h3>
                    <ul class="footer-link">
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="terms-service.html">Terms Of Service</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 footer-link-wrapper">
                    <h3>CONTACT INFO</h3>
                    <p class="mb-3 mb-md-4"><span>Address:</span> <?php echo $adminData['address_one']; ?> <?php echo $adminData['address_two']; ?> <?php echo $adminData['city']; ?>, <?php echo $adminData['state']; ?>, <?php echo $adminData['country']; ?>, <?php echo $adminData['pincode']; ?></p>
                    <p class="mb-3 mb-md-4"><span>Phone:</span> +91 98765 98765</p>
                    <p><span>E-mail:</span> <?php echo $adminData['info_email']; ?></p>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-none">
            <p class="text-white"></p>
            <div class="d-flex align-items-center gap-2 gap-md-3">
                <a href="javascript:void(0)"><img src="assets/images/google-pay.png" class="img-fluid" alt=""></a>
                <a href="javascript:void(0)"><img src="assets/images/apple-pay.png" class="img-fluid" alt=""></a>
                <a href="javascript:void(0)"><img src="assets/images/stripe.png" class="img-fluid" alt=""></a>
                <a href="javascript:void(0)"><img src="assets/images/paypal.png" class="img-fluid" alt=""></a>
                <a href="javascript:void(0)"><img src="assets/images/visa.png" class="img-fluid" alt=""></a>
                <a href="javascript:void(0)"><img src="assets/images/master-card.png" class="img-fluid" alt=""></a>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript Libraries -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/custom.js"></script>
<script>
    // swiper
    const swiperBanner = new Swiper('.testimonial-swiper', { 
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
</body>

</html>