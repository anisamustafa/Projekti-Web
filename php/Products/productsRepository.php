<?php

require_once '../DatabaseConnection.php';
require_once 'Products.php';
require_once 'Cart.php';

$database = new DatabaseConnection();
$connection = $database->startConnection();

$product = new Product('Classic 250g Arabica', 8.99, 4.0, '../../Photos/250_beans.png');

$cart = new Cart();

$cart->addProduct($product);

echo "Cart Contents:\n";
foreach ($cart->getProducts() as $product) {
    echo "Product: {$product->getProductName()}, Price: {$product->calculateDiscountedPrice()}\n";
}

try {
    $stmt = $connection->prepare("INSERT INTO products (product_name, product_price, product_discount, product_image) VALUES (?, ?, ?, ?)");
    $stmt->execute([$product->getProductName(), $product->getProductPrice(), $product->getProductDiscount(), $product->getProductImage()]);
    echo "Product saved to database.\n";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>