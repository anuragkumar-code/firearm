<?php 
include ('../../../config/db.php');

if (isset($_POST['updateProduct'])) {

    $product_id = $_POST['product_id'];
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

    $updateProductQuery = "UPDATE `products` SET `category_id` = ?, `name` = ?, `manufacturer` = ?, `model` = ?, `caliber` = ?, `price` = ?, `product_range` = ?, `effective_range` = ?, `weight` = ?, `short_description` = ?, `long_description` = ? WHERE `id` = ?";

    if ($stmt = $conn->prepare($updateProductQuery)) {
        $stmt->bind_param('sssssssssssi', $category_id, $name, $manufacturer, $model, $caliber, $price, $product_range, $effective_range, $weight, $short_description, $long_description, $product_id);

        if ($stmt->execute()) {
            echo "Product updated successfully.<br>";
        } else {
            echo "Error updating product: " . $stmt->error . "<br>";
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error . "<br>";
    }

    if (isset($_POST['deleteImages'])) {
        foreach ($_POST['deleteImages'] as $imageId) {
            $deleteImageQuery = "SELECT image FROM products_images WHERE id = ?";
            $stmt = $conn->prepare($deleteImageQuery);
            $stmt->bind_param('i', $imageId);
            $stmt->execute();
            $stmt->bind_result($imageName);
            $stmt->fetch();
            $stmt->close();

            if (file_exists("../../product_images/$imageName")) {
                unlink("../../product_images/$imageName");  
            }

            $deleteQuery = "DELETE FROM products_images WHERE id = ?";
            $stmtDelete = $conn->prepare($deleteQuery);
            $stmtDelete->bind_param('i', $imageId);
            $stmtDelete->execute();
            $stmtDelete->close();
        }
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
