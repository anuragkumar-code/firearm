<?php 

include('../../config/db.php'); 

session_start(); 

$result = [
    'error_login' => false,
    'error' => '',
];

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    $result['error_login'] = true;
    $result['error'] = 'Email and password are required!';
    echo json_encode($result);
    exit;
}

$email = $_POST['email'];
$password = md5($_POST['password']);

$query = "SELECT * FROM users WHERE email = ? AND type = 'C'";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$res = $stmt->get_result();

if ($res->num_rows == 1) {
    $user = $res->fetch_assoc();
    if ($user['status'] == 'A') {
        if ($password === $user['password']) {

            $_SESSION['customer_id'] = $user['id'];
            $_SESSION['customer_name'] = $user['name'];

            $result['error_login'] = false;
        } else {
            $result['error_login'] = true;
            $result['error'] = "Invalid password !";
        }
    } else {
        $result['error_login'] = true;
        $result['error'] = "Your account is not verified yet !";
    }
} else {
    $result['error_login'] = true;
    $result['error'] = "No user found with this email !";
}

echo json_encode($result);
?>
