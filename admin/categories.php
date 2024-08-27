<?php include('partials/header.php'); ?>

<?php 
$add_alert = '';

if(isset($_POST['addCategory'])){
	$category = $_POST['category'];
	$status = $_POST['status'];

	$sql = "INSERT INTO `categories`(`name`, `status`) VALUES (?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $status);

    if ($stmt->execute()) {
        $add_alert = "1";
    } else {
        $add_alert= "2";
    }

}


$edit_alert = '';
if(isset($_POST['editCategory'])){
	$category = $_POST['category'];
	$status = $_POST['status'];

	$id = $_POST['category_id'];

	$sql = "UPDATE `categories` SET `name`= ?,`status`= ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $name, $status, $id);

    if ($stmt->execute()) {
        $edit_alert = "1";
    } else {
        $edit_alert= "2";
    }
}

?>

    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Categories</h6>
                <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Category</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">S. No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>$123</td>
                            <td>Active</td>
                            <td>
                            	<a class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                            	<a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#">
          <div class="row gy-3 gy-sm-4">
            <div class="col-12">
              <div class="form-floating">
                <input type="text" class="form-control" id="nameOfCategory" placeholder="Name*">
                <label for="nameOfCategory">Name of Category</label>
              </div>
            </div>

            <div class="col-12">
              <div class="form-floating">
              	<select class="form-control" id="categoryStatus">
              		<option value="A" selected>Active</option>
              		<option value="I">Inactive</option>
              	</select>
                <label for="categoryStatus">Select Status</label>
              </div>
            </div>
            <div class="col-12">
              <a href="#" class="primary-btn w-100 btn btn-primary">Add</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



<?php include('partials/footer.php'); ?>
