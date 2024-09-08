<?php include('partials/header.php'); ?>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Add New Product</h6>
                    <form action="functions/product/add-product.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="mb-2 col-md-4">
                                <label for="productCategory" class="form-label"><b>Category <span class="text-danger">*</span></b></label>
                                <select class="form-select mb-3" name="productCategory" id="productCategory" required>
                                    <option label="Select category"></option>
                                    <?php 
                                    $query = "SELECT * from categories where status = 'A'";
                                    $result = $conn->query($query);
                                    while($row = $result->fetch_assoc()){ ?>
                                        <option value="<?php echo $row['id'] ?>"><?php echo $row['name']; ?></option>
                                    <?php } ?>
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
                                <label for="productWeight" class="form-label"><b>Weight <span class="text-danger">*</span></b></label>
                                <div class="input-group">
                                    <span class="input-group-text">gms</span>
                                    <input required type="text" class="form-control" name="productWeight" id="productWeight">
                                </div>
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
                        <button type="submit" class="btn btn-primary" name="addProduct">+ Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php include('partials/footer.php'); ?>
