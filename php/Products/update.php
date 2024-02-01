<?php
if(isset($_GET['product_id'])) {
    $productId = $_GET['product_id'];
    include_once 'productsRepository.php';

    $productsRepository = new ProductsRepository();
    $product = $productsRepository->getProductById($productId);
} else {
    echo "Invalid request. Missing product_id parameter.";
    exit;   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit User</h3>
    <form action="" method="post">
        <input type="text" name="product_id"  value="<?=$product['product_id']?>" readonly> <br> <br>
        <input type="text" name="product_name"  value="<?=$product['product_name']?>"> <br> <br>
        <input type="text" name="product_description"  value="<?=$product['product_description']?>"> <br> <br>
        <input type="text" name="product_price"  value="<?=$product['product_price']?>"> <br> <br>
        <input type="text" name="product_discount"  value="<?=$product['product_discount']?>"> <br> <br>
        <input type="text" name="product_image"  value="<?=$product['product_image']?>"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $product_id = $product['product_id'];
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $product_price = $_POST['product_price'];
    $product_discount = $_POST['product_discount'];
    $product_image = $_POST['product_images'];

    $productsRepository->updateProduct($product_id,$product_name,$product_description,$product_price,$product_discount,$product_image);
    header("location:Product_dashboard.php");
}


?>