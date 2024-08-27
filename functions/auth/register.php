<?php 

include('../../config/db.php'); 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$address_one = $_POST['address_one'];
$address_two = $_POST['address_two'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$pincode = $_POST['pincode'];

$query = "INSERT INTO `users`(`type`, `name`, `email`, `mobile`, `password`, `address_one`, `address_two`, `city`, `state`, `country`, `pincode`) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($query);

if (!$stmt) {
    die("Query preparation failed: " . $conn->error);
}

$type = 'C';

$stmt->bind_param("sssssssssss", $type, $name, $email, $phone, $password, $address_one, $address_two, $city, $state, $country, $pincode);

if ($stmt->execute()) {
    $response = true;
} else {
    $response = false;
}

$stmt->close();
$conn->close();

echo $response;
exit;

?>
