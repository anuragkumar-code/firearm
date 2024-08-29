<?php include('partials/header.php'); ?>

<?php 
$get_id = base64_decode($_GET['product']);


$query = "SELECT * from products where id = '$get_id'";
$result = $conn->query($query);
$fetch = $result->fetch_assoc();
$master_image = $fetch['master_image'];

$imageQuery = "SELECT * FROM products_images WHERE product_id = '$get_id'";
$imageResult = $conn->query($imageQuery);
$existingImages = [];
while ($imageRow = $imageResult->fetch_assoc()) {
    $existingImages[] = $imageRow;
}

?>
<style>
    .child_img{
        width: 70px!important;
    }

    .preview {
        display: inline-block;
        margin: 10px;
    }

    .preview img {
        width: 100px;
        height: 100px;
        margin-right: 10px;
    }

    .preview-container {
        display: flex;
        flex-wrap: wrap;
    }

    .preview-container .preview {
        flex: 1 0 45%; 
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    .preview-container .preview img {
        width: 70%;
        height: auto;
    }

</style>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Master Image</h6>
                </div>

                <div class="mb-3">
                    <img style="width:100px" src="../admin/product_images/<?php echo $master_image ? $master_image : 'error.png'; ?>" alt="Master Image" style="width: 200px; height: auto;">
                </div>

                <form action="functions/product/update-master-image.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="mb-2 col-md-2">
                            <label for="masterImage" class="form-label"><b>Upload<span class="text-danger">*</span></b></label>
                        </div>
                        <div class="col-md-4">
                            <input type="file" class="form-control" name="masterImage" id="masterImage" accept="image/*" required>
                        </div>

                        <div class="col-md-4">&nbsp;</div>
                        
                        <input type="hidden" name="product_id" value="<?php echo $get_id; ?>">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary" name="uploadMasterImage" id="masterImage">Update</button>
                        </div>
                    </div>
                </form>  
                
            </div>
        </div>
        
    </div>
</div>

<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Manage Child Images</h6>
            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Add Image</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">S. No.</th>
                        <th scope="col">Preview</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $imageQuery = "SELECT * FROM products_images WHERE product_id = '$get_id'";
                $imageResult = $conn->query($imageQuery);
                $sno = '';
				if ($imageResult->num_rows > 0) {
					while($row = $imageResult->fetch_assoc()) {
						$sno++;
                ?>
                <tr>
                    <td><?php echo $sno; ?></td>
                    <td>
                        <img class="child_img" src="../admin/product_images/<?php echo $row['image']; ?>" alt="Preview" style="width: 100px; height: auto;">
                    </td>
                    <td><?php echo $row['status']; ?></td>
                    <td>
                    	<a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Images</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="functions/product/update-child-image.php" method="post" enctype="multipart/form-data">
                    <div class="row gy-3 gy-sm-4 mb-4">
                        <div class="col-md-4">
                            <label for="image" class="form-label"><b>Select Images <span class="text-danger">*</span></b></label>
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="childImages[]" id="childImages" multiple="multiple">
                        </div>
                    </div>
                    
                    <div class="row gy-3 gy-sm-4 mb-4">
                        <div class="col-md-12 preview-container" id="preview-container"></div>
                    </div>

                    <input type="hidden" value="<?php echo $get_id; ?>" name="child_product_id">
                    
                    <div class="row gy-3 gy-sm-4">
                    <div class="col-12">
                        <button type="submit" class="primary-btn w-100 btn btn-primary" name="uploadChildImage">Add</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#childImages").on("change", function(){
            var files = $(this)[0].files;
            $("#preview-container").empty();
            if(files.length > 0){
                for(var i = 0; i < files.length; i++){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $("<div class='preview'><img src='" + e.target.result + "'><button class='delete'>Delete</button></div>").appendTo("#preview-container");
                    };
                    reader.readAsDataURL(files[i]);
                }
            }
        });

        $("#preview-container").on("click", ".delete", function(){
            $(this).parent(".preview").remove();
            $("#childImages").val(""); 
        });
    });
</script>

<?php include('partials/footer.php'); ?>
