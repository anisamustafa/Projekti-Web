<?php
if(isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    
    include_once 'productsRepository.php';

    $productsRepository = new ProductsRepository();
    $productsRepository->deleteProducts($product_id);

    header("location: Product_dashboard.php");
} else {
    echo "Invalid request. Missing product_id parameter.";
}
?>
