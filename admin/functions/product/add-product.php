<?php 
include ('../../../config/db.php');

if(isset($_POST['addProduct'])){

    $category_id = $_POST['productCategory'];
    $name = $_POST['productName'];
    $manufacturer = $_POST['productManufacturer'];
    $model = $_POST['productModel'];
    $caliber = $_POST['productCaliber'];
    $price = $_POST['productPrice'];
    $product_range = $_POST['productRange'];
    $effective_range = $_POST['productEffectiveRange'];
    $weight = $_POST['productWeight'];
    $short_description = $_POST['productShortDesc'];
    $long_description = $_POST['productLongDesc'];

    $insertProductQuery = "INSERT INTO `products` (`category_id`, `name`, `manufacturer`, `model`, `caliber`, `price`, `product_range`, `effective_range`, `weight`, `short_description`, `long_description`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($insertProductQuery)) {
        $stmt->bind_param('sssssssssss', $category_id, $name, $manufacturer, $model, $caliber, $price, $product_range, $effective_range, $weight, $short_description, $long_description);

        if ($stmt->execute()) {
            header('Location: ../../products.php');
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
