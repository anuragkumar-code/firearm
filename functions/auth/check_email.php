<?php 

include('../../config/db.php'); 

$email = $_POST['email'];

$query = "SELECT * from users where email = '$email'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
	$response = true;
}else{
	$response = false;

}

echo $response;
exit;
?>
