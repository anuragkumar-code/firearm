<?php 
include('../../config/db.php'); 

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = md5($_POST['password']);



 ?>