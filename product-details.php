﻿<?php 
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
<style>
.gallery-thumbs {
    max-height: 500px; 
    overflow-y: hidden; 
    overflow-x: hidden; 
    padding-right: 10px; 
    transition: overflow-y 0.3s ease; 
}

.gallery-thumbs:hover {
    overflow-y: auto; 
}

.gallery-thumbs::-webkit-scrollbar {
    width: 5px; 
    background: transparent; 
}

.gallery-thumbs::-webkit-scrollbar-thumb {
    background-color: #888; 
    border-radius: 10px;
}

.gallery-thumbs:hover::-webkit-scrollbar-thumb {
    background-color: #555; 
}

.gallery-thumbs {
    scrollbar-width: none; 
}

.gallery-thumbs:hover {
    scrollbar-width: thin; 
}


</style>
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
        <section class="inner-gap pb-0 mb-5">
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
                            <p><?php echo $productData['long_description']; ?></p>

                            <div class="row mt-3">
                                <div class="col-md-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-cogs fa-2x me-3"></i>
                                        <div>
                                            <h5><b>Model</b></h5>
                                            <p class="mb-0"><?php echo $productData['model']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-bullseye fa-2x me-3"></i>
                                        <div>
                                            <h5><b>Caliber</b></h5>
                                            <p class="mb-0"><?php echo $productData['caliber']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-weight-hanging fa-2x me-3"></i>
                                        <div>
                                            <h5><b>Weight</b></h5>
                                            <p class="mb-0"><?php echo $productData['weight']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="product-price"><span>$<?php echo $productData['price']; ?></span></h2>
                            <div class="d-flex gap-3">
                                <ul class="quantity-selector">
                                    <li class="entry number-minus"><i class="fas fa-minus"></i></li>
                                    <li class="entry number" id="p_quantity">1</li>
                                    <li class="entry number-plus"><i class="fas fa-plus"></i></li>
                                </ul>
                                <a href="javascript:void(0)" onclick="showRequestPopup()" class="primary-btn">Send Request</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product mt-5 mb-4">
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
                                    <div class="product-content d-flex justify-content-between align-items-center mb-4">
                                        <h6><?php echo $valueCat['name']; ?></h6>
                                        <h4>$ <?php echo $valueCat['price'] ?></h4>
                                    </div>
                                    <div class="view-product-button mt-1">View Product</div>
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