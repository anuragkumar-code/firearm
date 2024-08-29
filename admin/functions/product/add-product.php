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

    // Prepare the statement and check for errors
    if ($stmt = $conn->prepare($insertProductQuery)) {
        $stmt->bind_param('sssssssssss', $category_id, $name, $manufacturer, $model, $caliber, $price, $product_range, $effective_range, $weight, $short_description, $long_description);

        // Execute the statement and check for errors
        if ($stmt->execute()) {
            $product_id = $stmt->insert_id;  // Get the last inserted product ID
            echo "Product added successfully with ID: $product_id<br>";
        } else {
            echo "Error inserting product: " . $stmt->error . "<br>";
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error . "<br>";
    }

    if (isset($_FILES['productImages'])) {
        $fileCount = count($_FILES['productImages']['name']);

        for ($i = 0; $i < $fileCount; $i++) {
            $fileName = $_FILES['productImages']['name'][$i];
            $fileTmpName = $_FILES['productImages']['tmp_name'][$i];
            $fileError = $_FILES['productImages']['error'][$i];

            if ($fileError === 0) {
                $uploadDirectory = '../../product_images/';
                
                $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

                $newFileName = time() . '_' . rand(100, 999) . '.' . $fileExtension;
                $fileDestination = $uploadDirectory . $newFileName;

                if (move_uploaded_file($fileTmpName, $fileDestination)) {
                    $insertImageQuery = "INSERT INTO `products_images` (`product_id`, `image`) VALUES (?, ?)";
                    
                    if ($stmtImage = $conn->prepare($insertImageQuery)) {
                        $stmtImage->bind_param('is', $product_id, $newFileName);
                        
                        if ($stmtImage->execute()) {
                            echo "Image uploaded and record inserted for: $newFileName<br>";
                        } else {
                            echo "Error inserting image record for $newFileName: " . $stmtImage->error . "<br>";
                        }
                        $stmtImage->close();
                    } else {
                        echo "Error preparing image statement: " . $conn->error . "<br>";
                    }
                } else {
                    echo "Error uploading file: $fileName<br>";
                }
            } else {
                echo "Error with file: $fileName (Error code: $fileError)<br>";
            }
        }
    } else {
        echo "No files to upload.<br>";
    }

} else {
    echo "Form not submitted properly or missing data.<br>";
}

$conn->close(); 
?>
