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
                    <a href="index.php" class="footer-brand mb-4 d-block">
                        <span class="logoSpan" style="color: white;">Bullfrog Gun Clearance</span>

                    </a>
                    <p class="mb-3 mb-xl-4"><?php echo $contentArr[1]['value']; ?></p>
                    <ul class="social-media d-flex align-items-center gap-2">
                        <?php if($adminData['discord'] != ""){ ?><li><a target="_blank" href="<?php echo ensureUrlScheme($adminData['discord']); ?>" class="discord"><i class="fa-brands fa-discord"></i></a></li><?php } ?>
                        <?php if($adminData['reddit'] != ""){ ?><li><a target="_blank" href="<?php echo ensureUrlScheme($adminData['reddit']); ?>" class="reddit"><i class="fa-brands fa-reddit-alien"></i></a></li><?php } ?>
                        <?php if($adminData['twitter'] != ""){ ?><li><a target="_blank" href="<?php echo ensureUrlScheme($adminData['twitter']); ?>" class="twitter"><i class="fa-brands fa-x-twitter"></i></a></li><?php } ?>
                        <?php if($adminData['instagram'] != ""){ ?><li><a target="_blank" href="<?php echo ensureUrlScheme($adminData['instagram']); ?>" class="instagram"><i class="fa-brands fa-instagram"></i></a></li><?php } ?>
                        <?php if($adminData['facebook'] != ""){ ?><li><a target="_blank" href="<?php echo ensureUrlScheme($adminData['facebook']); ?>" class="facebook"><i class="fa-brands fa-facebook-f"></i></a></li><?php } ?>
                    </ul>
                </div>
                
                <div class="col-sm-6 col-lg-4 col-xl-3 footer-link-wrapper">
                    <h3>CONTACT INFO</h3>
                    <p class="mb-3 mb-md-4"><span>Address:</span> <?php echo $adminData['address_one']; ?> <?php echo $adminData['address_two']; ?> <?php echo $adminData['city']; ?>, <?php echo $adminData['state']; ?>, <?php echo $adminData['country']; ?>, <?php echo $adminData['pincode']; ?></p>
                    <p class="mb-3 mb-md-4"><span>SMS:</span> <?php echo $mobile; ?> <b>(TEXT ONLY)</b></p>
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