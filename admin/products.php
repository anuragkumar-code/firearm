<?php include('partials/header.php'); ?>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Products</h6>
                <a href="add-product.php" class="btn btn-primary">+ Product</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">S. No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Manufacturer</th>
                            <th scope="col">Caliber</th>
                            <th scope="col">Price</th>
                            <th scope="col">Model</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
					    $query = "SELECT * from products order by id desc";
					    $result = $conn->query($query);
					    $sno = '';
					    if ($result->num_rows > 0) {
					    	while($row = $result->fetch_assoc()) {
					    		$sno++;
					    ?>
                    <tr>
                        <td><?php echo $sno; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['manufacturer']; ?></td>
                        <td><?php echo $row['caliber']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['model']; ?></td>
                        <td><span class=""><?php if($row['status'] == 'A') { echo 'Active'; }else if($row['status'] == 'I'){ echo "Inactive";} ?></span></td>
                        <td>
                        	<a class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                        	<a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php }} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<script>

</script>


<?php include('partials/footer.php'); ?>
