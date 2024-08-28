<?php include('partials/header.php'); ?>

<?php 
$add_alert = '';

if(isset($_POST['addCategory'])){
	$category = $_POST['nameOfCategory'];
	$status = $_POST['categoryStatus'];

	$sql = "INSERT INTO `categories`(`name`, `status`) VALUES (?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $category, $status);

    if ($stmt->execute()) {
      $add_alert = "1";
    } else {
      $add_alert= "2";
    }

    echo "<script>if ( window.history.replaceState ) {  window.history.replaceState( null, null, window.location.href ); }</script>";

}


$edit_alert = '';
if(isset($_POST['editCategory'])){
	$category = $_POST['editNameOfCategory'];
	$status = $_POST['editCategoryStatus'];

	$id = $_POST['categoryId'];

	$sql = "UPDATE `categories` SET `name`= ?,`status`= ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $category, $status, $id);

    if ($stmt->execute()) {
        $edit_alert = "1";
    } else {
        $edit_alert= "2";
    }

    echo "<script>if ( window.history.replaceState ) {  window.history.replaceState( null, null, window.location.href ); }</script>";

}

$delete_alert = '';

if (isset($_POST['deleteCategoryId'])) {
    $id = $_POST['deleteCategoryId'];

    $sql = "DELETE FROM `categories` WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $delete_alert = "1";
    } else {
        $delete_alert = "2";
    }

    echo "<script>if ( window.history.replaceState ) {  window.history.replaceState( null, null, window.location.href ); }</script>";
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
                    <?php 
								      $query = "SELECT * from categories order by id desc";
								      $result = $conn->query($query);
								      $sno = '';
								      if ($result->num_rows > 0) {
								      	while($row = $result->fetch_assoc()) {
								      		$sno++;
								      ?>
                        <tr>
                            <td><?php echo $sno; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><span class=""><?php if($row['status'] == 'A') { echo 'Active'; }else if($row['status'] == 'I'){ echo "Inactive";} ?></span></td>
                            <td>
                            	<a class="btn btn-sm btn-info" onclick="editCategory('<?php echo $row['id']; ?>','<?php echo $row['name']; ?>','<?php echo $row['status']; ?>')"><i class="fa fa-edit"></i></a>
                            	<a class="btn btn-sm btn-danger" onclick="deleteCategory('<?php echo $row['id'] ?>')"><i class="fa fa-trash"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="row gy-3 gy-sm-4">
            <div class="col-12">
              <div class="form-floating">
                <input type="text" class="form-control" name="nameOfCategory" id="nameOfCategory" placeholder="Name*">
                <label for="nameOfCategory">Name of Category</label>
              </div>
            </div>

            <div class="col-12">
              <div class="form-floating">
              	<select class="form-control" name="categoryStatus" id="categoryStatus">
              		<option value="A" selected>Active</option>
              		<option value="I">Inactive</option>
              	</select>
                <label for="categoryStatus">Select Status</label>
              </div>
            </div>
            <div class="col-12">
              <button class="primary-btn w-100 btn btn-primary" name="addCategory">Add</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editCategory" tabindex="-1" aria-labelledby="editCategoryLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editCategoryLabel">Edit Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="row gy-3 gy-sm-4">
            <div class="col-12">
              <div class="form-floating">
                <input type="text" class="form-control" name="editNameOfCategory" id="editNameOfCategory" placeholder="Name*">
                <label for="editNameOfCategory">Name of Category</label>
              </div>
            </div>

            <div class="col-12">
              <div class="form-floating">
              	<select class="form-control" name="editCategoryStatus" id="editCategoryStatus">
              		<option value="A" selected>Active</option>
              		<option value="I">Inactive</option>
              	</select>
                <label for="editCategoryStatus">Select Status</label>
              </div>
            </div>
            <input type="hidden" id="categoryId" name="categoryId">
            <div class="col-12">
              <button class="primary-btn w-100 btn btn-primary" name="editCategory">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<script>

  function editCategory(id,name,status){
    $('#editNameOfCategory').val(name);
    $('#editCategoryStatus').val(status);
    $('#categoryId').val(id);
    $('#editCategory').modal('show');
  }

  function deleteCategory(id){
    if (confirm("Are you sure you want to delete this category?")) {
      $('<form method="POST">')
        .append($('<input>').attr('type', 'hidden').attr('name', 'deleteCategoryId').val(id))
        .appendTo('body')
        .submit();
    }

  }
</script>


<?php include('partials/footer.php'); ?>
