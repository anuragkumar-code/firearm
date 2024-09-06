<?php 
include('partials/header.php'); 

$get_id = base64_decode($_GET['id']);

$imageArr = array();
$relatedArr = array();

$productQuery = "SELECT * from products where id='$get_id'";
$result = $conn->query($productQuery);
$productData = $result->fetch_assoc();

$categoryFetch = $productData['category_id'];
$relatedProducts = "SELECT * from products where category_id = '$categoryFetch' AND status = 'A' AND id != '$get_id' LIMIT 4";
$resultRelatedProducts = $conn->query($relatedProducts);
while($relatedData = $resultRelatedProducts->fetch_assoc()){
    $relatedArr[] = $relatedData;
}

$productImageQuery = "SELECT * from products_images where status = 'A' AND product_id='$get_id'";
$resultImage = $conn->query($productImageQuery);
while($productImageData = $resultImage->fetch_assoc()){
    $imageArr[] = $productImageData['image'];
}
// echo "<pre>"; print_r($imageArr);exit;

?>
    <main id="main-content" class="position-relative">
        <section class="page-title position-relative">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">PRODUCT DETAILS</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="inner-gap pb-0">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-lg-6">
                        <div class="row gy-3">
                            <div class="col-sm-3 order-1 order-sm-0">
                                <div class="swiper gallery-thumbs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="admin/product_images/<?php echo $productData['master_image']; ?>" class="mix-blend-darken" alt="">
                                        </div>
                                        <?php foreach ($imageArr as $key => $value) { ?>
                                            <div class="swiper-slide">
                                                <img src="admin/product_images/<?php echo $value; ?>" class="mix-blend-darken" alt="">
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-9 order-0">
                                <div class="swiper gallery-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="admin/product_images/<?php echo $productData['master_image']; ?>" class="mix-blend-darken" alt="">
                                        </div>
                                        <?php foreach ($imageArr as $key => $value) { ?>
                                            <div class="swiper-slide">
                                                <img src="admin/product_images/<?php echo $value; ?>" class="mix-blend-darken" alt="">
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex flex-column align-items-start gap-3">
                            <h2 class="product-title"><?php echo $productData['name']; ?></h2>
                            <h5 class="order-id"><?php echo $productData['short_description']; ?></h5>
                            <div class="d-flex align-items-center gap-3">
                                <ul class="d-flex align-items-center gap-1">
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                    <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                </ul>
                                <h6 class="product-rating">5.0 (100 Review)</h6>
                            </div>
                            <p class="product-description"><?php  echo $productData['long_description']; ?></p>
                            <h2 class="product-price"><span>$<?php echo $productData['price']; ?></span></h2>
                            <div class="d-flex gap-3">
                                <ul class="quantity-selector">
                                    <li class="entry number-minus"><i class="fas fa-minus"></i></li>
                                    <li class="entry number" id="p_quantity">1</li>
                                    <li class="entry number-plus"><i class="fas fa-plus"></i></li>
                                </ul>
                                <a href="javascript:void(0)" onclick="showRequestPopup()" class="primary-btn">Send Request</a>
                            </div>
                            <div class="w-100 d-flex flex-column flex-sm-row align-items-center gap-2 gap-sm-3">
                                <button class="d-none wishlist-btn btn d-flex align-items-center gap-3"><img
                                        src="assets/images/heart.svg" alt="">Add Wishlist</button>
                                <div class="d-flex flex-wrap align-items-center gap-2 gap-md-3">
                                    <a href="javascript:void(0)"><img src="assets/images/google-pay.png"
                                            class="img-fluid" alt=""></a>
                                    <a href="javascript:void(0)"><img src="assets/images/apple-pay.png"
                                            class="img-fluid" alt=""></a>
                                    <a href="javascript:void(0)"><img src="assets/images/stripe.png" class="img-fluid"
                                            alt=""></a>
                                    <a href="javascript:void(0)"><img src="assets/images/paypal.png" class="img-fluid"
                                            alt=""></a>
                                    <a href="javascript:void(0)"><img src="assets/images/visa.png" class="img-fluid"
                                            alt=""></a>
                                    <a href="javascript:void(0)"><img src="assets/images/master-card.png"
                                            class="img-fluid" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4 pt-5 mb-5">
                        <div class="product-description-wrapper">
                            <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">PRODUCT PARAMETERS</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                                    aria-selected="false">DESCRIPTION</button>
                            </div>

                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab" tabindex="0">
                                    <div class="row mt-3">
                                        <div class="col-md-6 mb-3">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-industry fa-2x me-3"></i>
                                                <div>
                                                    <h5><b>Manufacturer</b></h5>
                                                    <p class="mb-0"><?php echo $productData['manufacturer']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-cogs fa-2x me-3"></i>
                                                <div>
                                                    <h5><b>Model</b></h5>
                                                    <p class="mb-0"><?php echo $productData['model']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-bullseye fa-2x me-3"></i>
                                                <div>
                                                    <h5><b>Caliber</b></h5>
                                                    <p class="mb-0"><?php echo $productData['caliber']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-ruler fa-2x me-3"></i>
                                                <div>
                                                    <h5><b>Product Range</b></h5>
                                                    <p class="mb-0"><?php echo $productData['product_range']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-bullseye fa-2x me-3"></i>
                                                <div>
                                                    <h5><b>Effective Range</b></h5>
                                                    <p class="mb-0"><?php echo $productData['effective_range']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-weight-hanging fa-2x me-3"></i>
                                                <div>
                                                    <h5><b>Weight</b></h5>
                                                    <p class="mb-0"><?php echo $productData['weight']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade product-description-content" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                                    <p>Tortor non reiciendis varius in, sed donec quis id fermentum, nibh quam id in hendrerit fusce eleifend. Aliquam eleifend et dapibus quo, consectetuer fermentum pulvinar, wisi maecenas tincidunt arcu. Soluta odio nec est consectetuer. Morbi in sed, libero eu duis velit arcu sed, ut cursus. Vitae fermentum turpis, erat platea, nunc tincidunt aliquet ornare accumsan, convallis tortor bibendum vel pellentesque ac arcu. Interdum ipsum tortor blandit vel magna phasellus, quis cras in lorem auctor, felis dolor donec quis suspendisse duis nonummy. Non sed feugiat nulla ac viverra in, in diam etiam mauris, conubia mi quis cras a suspendisse justo, rutrum vitae in senectus. Maiores sapien sed, ante id risus placerat quis quam. Non suspendisse ut felis erat, eu laoreet, vitae fames dolor et et vulputate posuere, suscipit elit euismod ac, nonummy in quam.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product mb-4">
            <div class="container">
                <div class="title-group text-center">
                    <h2 class="sub-title">RELATED PRODUCTS</h2>
                </div>
                <div class="product-action-wrapper d-flex flex-column flex-sm-row align-items-center gap-3 gap-xl-5">
                    <ul class="product-nav d-flex align-items-center flex-shrink-0">
                        <li><a href="#" class="product-link active">LATEST</a></li>
                    </ul>
                    <div class="border-top w-100">
                    </div>
                    
                </div>
                <div class="row justify-content-center gy-3">
                    <?php foreach ($relatedArr as $key => $valueCat) { 

                            $currentDate = new DateTime();
                            $createdDate = new DateTime($valueCat['created_at']);
                            $interval = $currentDate->diff($createdDate);
                            $daysDifference = $interval->days;
                            $isNew = $daysDifference <= 10;

                        ?>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <a href="product-details.php?id=<?php echo base64_encode($valueCat['id']); ?>">
                                <div class="product-card">
                                <?php if ($isNew) { ?>
                                    <span class="product-badge">new</span>
                                <?php } ?>
                                    <div class="product-img">
                                        <img src="admin/product_images/<?php echo $valueCat['master_image']; ?>" alt="">
                                    </div>
                                    <div class="product-content">
                                        <h6><?php echo $valueCat['short_description']; ?></h6>
                                        <ul class="d-flex align-items-center gap-2">
                                            <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                            <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                            <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                            <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>
                                            <li><i class="fa-solid fa-star" style="color: #D9D9D9;"></i></li>
                                        </ul>
                                        <div class="d-flex justify-content-between align-items-center gap-3 gap-lg-4">
                                            <h4>$ <?php echo $valueCat['price'] ?></h4>
                                            <a href="javascript:void(0)" class=""><img src="assets/images/shopping-bag.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
    

<div class="modal fade" id="requestPopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send Request</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="alert alert-danger mg-b-0" role="alert" style="display: none;">
			<strong></strong>
		</div>
        <form method="POST">
          <div class="row gy-3 gy-sm-4">
            <div class="col-12">
              <div class="form-floating">
                <textarea class="form-control" name="requestMsg" id="requestMsg" placeholder="Enter your message"></textarea>
                <label for="request">Enter your request message</label>
              </div>
            </div>

            <div class="col-12" style="margin-top: 5px!important;">
                <div class="form-floating">
                    <span>Please enter short request message to the admin.</span>
                </div>
            </div>
            <div class="col-12">
              <a href="javascript:void(0)" onclick="sendRequest()" class="primary-btn w-100 btn btn-primary">Send</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

    <script>

        function sendRequest(){

            var quantity = $('#p_quantity').html();
            var message = $('#requestMsg').val();

            if (!message.trim()) {
                $('.alert').show().find('strong').text('Request message cannot be empty.');
                return; 
            }

            $.ajax({
                type: 'POST',
                url: 'functions/product/send-request.php',
                data: {
                    quantity:quantity,
                    message:message,
                    customer:<?php echo $_SESSION['customer_id']; ?>,
                    product:<?php echo $get_id; ?>,
                } ,
                success: function(response){
                    if (response == true) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Request Sent',
                            text: 'Request sent to the admin. Admin will contact you soon.',
                        }).then(() => {
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error sending request. Please try again later.',
                        }).then(() => {
                            location.reload();
                        });
                    }
                }
            });

        }


        function showRequestPopup(){
            $('#requestPopup').modal('show');
        }

    </script>
<?php include('partials/footer.php'); ?>