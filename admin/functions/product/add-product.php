<?php 
include ('../../../config/db.php');

if(isset($_POST['addProduct'])){

    $category_id = $_POST['productCategory'];
    $manufacturer = $_POST['productManufacturer'];
    $model = $_POST['productModel'];
    $caliber = $_POST['productCaliber'];
    $price = $_POST['productPrice'];
    $weight = $_POST['productWeight'];
    $short_description = $_POST['productShortDesc'];
    $long_description = $_POST['productLongDesc'];

    $insertProductQuery = "INSERT INTO `products` (`category_id`, `manufacturer`, `model`, `caliber`, `price`, `weight`, `short_description`, `long_description`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($insertProductQuery)) {
        $stmt->bind_param('ssssssss', $category_id, $manufacturer, $model, $caliber, $price, $weight, $short_description, $long_description);

        if ($stmt->execute()) {
            $last_id = base64_encode($conn->insert_id);
            header('Location: ../../upload-images.php?product='.$last_id);
            exit();
        } else {
            echo "Error inserting product: " . $stmt->error . "<br>";
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error . "<br>";
    }

} else {
    echo "Form not submitted properly or missing data.<br>";
}

$conn->close(); 
?>
