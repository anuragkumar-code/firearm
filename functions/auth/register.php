<?php 

include('../../config/db.php'); 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$address_one = $_POST['address_one'];

$query = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo json_encode(['success' => false, 'error' => 'This email is already registered.']);
    exit;
}

$stmt->close();

$query = "INSERT INTO `users`(`type`, `name`, `email`, `mobile`, `password`, `address_one`) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($query);

if (!$stmt) {
    echo json_encode(['success' => false, 'error' => 'Query preparation failed: ' . $conn->error]);
    exit;
}

$type = 'C';
$stmt->bind_param("ssssss", $type, $name, $email, $phone, $password, $address_one);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => 'Registration failed, please try again.']);
}

$stmt->close();
$conn->close();
?>
