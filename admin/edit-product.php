<?php include('partials/header.php'); ?>

<?php 
$get_id = base64_decode($_GET['product']);

$query = "SELECT * from products where id = '$get_id'";
$result = $conn->query($query);
$fetch = $result->fetch_assoc();

$imageQuery = "SELECT * FROM products_images WHERE product_id = '$get_id'";
$imageResult = $conn->query($imageQuery);
$existingImages = [];
while ($imageRow = $imageResult->fetch_assoc()) {
    $existingImages[] = $imageRow;
}

?>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Add New Product</h6>
                <form action="functions/product/edit-product.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="mb-2 col-md-4">
                            <label for="productCategory" class="form-label"><b>Category <span class="text-danger">*</span></b></label>
                            <select class="form-select mb-3" name="productCategory" id="productCategory" required>
                                <option label="Select category"></option>
                                <option value="1">D</option>
                            </select>
                        </div>
                        <div class="mb-2 col-md-4">
                            <label for="productName" class="form-label"><b>Name <span class="text-danger">*</span></b></label>
                            <input required type="text" class="form-control" name="productName" id="productName" value="<?php echo $fetch['name']; ?>">
                        </div>
                        <div class="mb-2 col-md-4">
                            <label for="productManufacturer" class="form-label"><b>Manufacturer <span class="text-danger">*</span></b></label>
                            <input required type="text" class="form-control" name="productManufacturer" id="productManufacturer" value="<?php echo $fetch['manufacturer']; ?>">
                        </div>
                        <div class="mb-2 col-md-4">
                            <label for="productModel" class="form-label"><b>Model <span class="text-danger">*</span></b></label>
                            <input required type="text" class="form-control" name="productModel" id="productModel" value="<?php echo $fetch['model']; ?>">
                        </div>
                        <div class="mb-2 col-md-4">
                            <label for="productCaliber" class="form-label"><b>Caliber <span class="text-danger">*</span></b></label>
                            <input required type="text" class="form-control" name="productCaliber" id="productCaliber" value="<?php echo $fetch['caliber']; ?>">
                        </div>
                        <div class="mb-2 col-md-4">
                            <label for="productPrice" class="form-label"><b>Price <span class="text-danger">*</span></b></label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input required type="text" class="form-control" name="productPrice" id="productPrice" value="<?php echo $fetch['price']; ?>">
                            </div>
                        </div>
                        <div class="mb-2 col-md-4">
                            <label for="productRange" class="form-label"><b>Range <span class="text-danger">*</span></b></label>
                            <input required type="text" class="form-control" name="productRange" id="productRange" value="<?php echo $fetch['product_range']; ?>">
                        </div>
                        <div class="mb-2 col-md-4">
                            <label for="productEffectiveRange" class="form-label"><b>Effective Range <span class="text-danger">*</span></b></label>
                            <input required type="text" class="form-control" name="productEffectiveRange" id="productEffectiveRange" value="<?php echo $fetch['effective_range']; ?>">
                        </div>
                        <div class="mb-2 col-md-4">
                            <label for="productWeight" class="form-label"><b>Weight <span class="text-danger">*</span></b></label>
                            <div class="input-group">
                                <span class="input-group-text">gms</span>
                                <input required type="text" class="form-control" name="productWeight" id="productWeight" value="<?php echo $fetch['weight']; ?>">
                            </div>
                        </div>
                        <div class="mb-2 col-md-4">
                            <label for="productShortDesc" class="form-label"><b>Short Description <span class="text-danger">*</span></b></label>
                            <input required type="text" class="form-control" name="productShortDesc" id="productShortDesc" value="<?php echo $fetch['short_description']; ?>">
                        </div>
                        <div class="mb-2 col-md-8">
                            <label for="productLongDesc" class="form-label"><b>Long Description <span class="text-danger">*</span></b></label>
                            <textarea class="form-control" name="productLongDesc" id="productLongDesc"><?php echo $fetch['long_description']; ?></textarea>
                        </div>
                        <input type="hidden" value="<?php echo $fetch['id']; ?>" name="product_id">
                    </div>
                    <button type="submit" class="btn btn-primary" name="updateProduct">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include('partials/footer.php'); ?>
