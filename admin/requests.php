<?php include('partials/header.php'); ?>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Requests</h6>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">S. No.</th>
                            <th scope="col">Request Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
					    $query = "SELECT customer_requests.id, customer_requests.request_id AS request_id, customer_requests.quantity AS quantity, users.name AS customer_name, users.mobile AS customer_mobile, products.name AS product_name, customer_requests.message, customer_requests.created_at FROM customer_requests JOIN users ON customer_requests.user_id = users.id JOIN products ON customer_requests.product_id = products.id ORDER by id DESC";

					    $result = $conn->query($query);
					    $sno = '';
					    if ($result->num_rows > 0) {
					    	while($row = $result->fetch_assoc()) {
					    		$sno++;
					    ?>
                    <tr>
                        <td><?php echo $sno; ?></td>
                        <td><a href="javascript:void(0)"><?php echo $row['request_id']; ?></a></td>
                        <td><?php echo $row['customer_name']; ?></td>
                        <td><?php echo $row['customer_mobile']; ?></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        
                        <td>
                        	<a class="btn btn-sm btn-danger" onclick="deleteCustomer(<?php echo $row['id']; ?>)"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php }} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<script>
    //function to toggle the switch
	$('.main-toggle').on('click', function() {
		$(this).toggleClass('on');

		var id = $(this).data('id');

	    var hiddenInput = $('#statusId_' + id);

	    if ($(this).hasClass('on')) {
	        hiddenInput.val('A'); 
	        updateStatus('I',id)
	    } else {
	        hiddenInput.val('I'); 
	        updateStatus('A',id)
	    }
	})

	//fucntion to update the status of coffee
	function updateStatus(status,id){
		$.ajax({
			type: 'POST',
			url: 'functions/customers/update-status.php',
			data: {
				status:status,
				id:id
			},
			success: function(result){
				if(result == '1'){
					console.log("status updated");
				}else{
					alert('Something went wrong! Please contact admin.');
				}
			}
	  	});
	}

    function deleteCustomer(id){
        if (confirm('Are you sure you want to delete this customer?')) {
            $.ajax({
                type: 'POST',
                url: 'functions/customers/delete.php',
                data: {
                    id: id
                },
                success: function(result) {
                    if (result == '1') {
                        alert('Customer deleted successfully.');
                        location.reload();
                    } else {
                        alert('Something went wrong! Please contact admin.');
                    }
                }
            });
        }
    }
</script>


<?php include('partials/footer.php'); ?>
