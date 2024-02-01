<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'productsRepository.php';
include_once '../DatabaseConnection.php';
include_once 'products.php';

$productsRepository = new ProductsRepository();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
    $name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
    $description = isset($_POST['product_description']) ? $_POST['product_description'] : '';
    $price = isset($_POST['product_price']) ? $_POST['product_price'] : '';
    $discount = isset($_POST['product_discount']) ? $_POST['product_discount'] : '';

    // Validate form data
    if (empty($name) || empty($description) || empty($price) || empty($discount)) {
        echo "Please fill in all fields.";
    } else {
        // Check if an image file was uploaded
        if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
            $imageFileName = $_FILES['product_image']['name'];
            $imagePath = __DIR__ . '/Photos/' . $imageFileName;
           // move_uploaded_file($_FILES['product_image']['tmp_name'], $imagePath);
        } else {
            // Default image if no file uploaded
            $imagePath = 'default_image.jpg'; // Replace with your default image path
        }

        // Create a new product object
        $newProduct = new Products(null, $name, $description, $price, $discount, $imagePath);

        // Insert the new product into the database
        $productsRepository->insertProducts($newProduct);
        $productsRepository->logProductAction('Add product', $name);

        // Redirect to the cozyStore.php page after insertion
        header('Location: cozyStore.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
</head>
<body>

<h2>Add New Product</h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <label for="product_name">Product Name:</label>
    <input type="text" name="product_name" required><br>

    <label for="product_description">Product Description:</label>
    <textarea name="product_description" required></textarea><br>

    <label for="product_price">Product Price:</label>
    <input type="number" step="0.01" name="product_price" required><br>

    <label for="product_discount">Product Discount:</label>
    <input type="number" step="0.01" name="product_discount" required><br>

    <label for="product_image">Product Image:</label>
    <input type="file" name="product_image" accept="image/*"><br>

    <button type="submit">Add Product</button>
</form>

</body>
</html>
