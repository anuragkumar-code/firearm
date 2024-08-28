<?php include('partials/header.php'); ?>

<?php 
if(isset($_POST['addCoffee'])){

    $category_id = $_POST['productCategory'];
    $name = $_POST['productName'];
    $manufacturer = $_POST['productManufacturer'];
    $model = $_POST['productModel'];
    $caliber = $_POST['productCaliber'];
    $price = $_POST['productPrice'];
    $product_range = $_POST['productRange'];
    $effective_range = $_POST['productEffectiveRange'];
    $weight = $_POST['productWeight'];
    $short_description = $_POST['productShortDesc'];
    $long_description = $_POST['productLongDesc'];

    $insertProductQuery = "INSERT INTO `products` (`category_id`, `name`, `manufacturer`, `model`, `caliber`, `price`, `product_range`, `effective_range`, `weight`, `short_description`, `long_description`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($insertProductQuery);

    $stmt->bind_param('issssdssiss', $category_id, $name, $manufacturer, $model, $caliber, $price, $product_range, $effective_range, $weight, $short_description, $long_description);

    if (isset($_FILES['productImages'])) {
        $fileCount = count($_FILES['productImages']['name']);

        for ($i = 0; $i < $fileCount; $i++) {
            $fileName = $_FILES['productImages']['name'][$i];
            $fileTmpName = $_FILES['productImages']['tmp_name'][$i];
            $fileError = $_FILES['productImages']['error'][$i];
            $fileType = $_FILES['productImages']['type'][$i];

            if ($fileError === 0) {
                $uploadDirectory = 'product_images/';
                $fileDestination = $uploadDirectory . basename($fileName);

                if (move_uploaded_file($fileTmpName, $fileDestination)) {
                    $insertImageQuery = "INSERT INTO `products_images` (`product_id`, `image`) VALUES (?, ?)";
                    $stmtImage = $conn->prepare($insertImageQuery);
                    $stmtImage->bind_param('is', $product_id, $fileName);
                    $stmtImage->execute();
                } else {
                    echo "Error uploading file: $fileName<br>";
                }
            } else {
                echo "Error with file: $fileName (Error code: $fileError)<br>";
            }
        }
    }

    // header("Location: products.php");
    echo "all done";

} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();  

?>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Add New Product</h6>
                    <form method="post" enctype="multipart/form-data">
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
                                <input required type="text" class="form-control" name="productName" id="productName">
                            </div>
                            <div class="mb-2 col-md-4">
                                <label for="productManufacturer" class="form-label"><b>Manufacturer <span class="text-danger">*</span></b></label>
                                <input required type="text" class="form-control" name="productManufacturer" id="productManufacturer">
                            </div>
                            <div class="mb-2 col-md-4">
                                <label for="productModel" class="form-label"><b>Model <span class="text-danger">*</span></b></label>
                                <input required type="text" class="form-control" name="productModel" id="productModel">
                            </div>
                            <div class="mb-2 col-md-4">
                                <label for="productCaliber" class="form-label"><b>Caliber <span class="text-danger">*</span></b></label>
                                <input required type="text" class="form-control" name="productCaliber" id="productCaliber">
                            </div>
                            <div class="mb-2 col-md-4">
                                <label for="productPrice" class="form-label"><b>Price <span class="text-danger">*</span></b></label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input required type="text" class="form-control" name="productPrice" id="productPrice">
                                </div>
                            </div>
                            <div class="mb-2 col-md-4">
                                <label for="productRange" class="form-label"><b>Range <span class="text-danger">*</span></b></label>
                                <input required type="text" class="form-control" name="productRange" id="productRange">
                            </div>
                            <div class="mb-2 col-md-4">
                                <label for="productEffectiveRange" class="form-label"><b>Effective Range <span class="text-danger">*</span></b></label>
                                <input required type="text" class="form-control" name="productEffectiveRange" id="productEffectiveRange">
                            </div>
                            <div class="mb-2 col-md-4">
                                <label for="productWeight" class="form-label"><b>Weight <span class="text-danger">*</span></b></label>
                                <div class="input-group">
                                    <span class="input-group-text">gms</span>
                                    <input required type="text" class="form-control" name="productWeight" id="productWeight">
                                </div>
                            </div>

                            <div class="mb-2 col-md-4">
                                <label for="productImages" class="form-label"><b>Upload Images <span class="text-danger">*</span></b></label>
                                <input type="file" class="form-control" name="productImages[]" id="productImages" multiple accept="image/*">
                            </div>

                            <div class="mb-2 col-md-4">
                                <label for="productShortDesc" class="form-label"><b>Short Description <span class="text-danger">*</span></b></label>
                                <input required type="text" class="form-control" name="productShortDesc" id="productShortDesc">
                            </div>

                            <div class="mb-2 col-md-8">
                                <label for="productLongDesc" class="form-label"><b>Long Description <span class="text-danger">*</span></b></label>
                                <textarea class="form-control" name="productLongDesc" id="productLongDesc"></textarea>
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-primary">+ Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<script>

</script>


<?php include('partials/footer.php'); ?>
