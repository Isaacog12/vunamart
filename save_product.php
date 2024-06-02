<?php
session_start();
include 'connection.php'; // Your database connection script



$vendor_id = $_SESSION['vendor_id'];
$product_name = $_POST['productName'];
$category = $_POST['category'];
$price = $_POST['price'];
$description = $_POST['description'];
$image = $_FILES['image']['name'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($image);

// Upload image
if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
    // Save product details to database
    $stmt = $conn->prepare("INSERT INTO products (vendor_id, product_name, category, price, description, image) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issdss", $vendor_id, $product_name, $category, $price, $description, $target_file);

    if ($stmt->execute()) {
        echo "Product saved successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error uploading image.";
}

$conn->close();
?>
