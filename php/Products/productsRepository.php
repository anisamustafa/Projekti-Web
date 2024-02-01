<?php
include_once (__DIR__ . '/../DatabaseConnection.php');

class ProductsRepository {
    private $connection;

    public function __construct() {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    public function insertProducts($product) {
        $conn = $this->connection;

        $product_id = $product->getProductId();
        $product_name = $product->getProductName();
        $product_description = $product->getProductDescription();
        $product_price = $product->getProductPrice();
        $product_discount = $product->getProductDiscount();
        $product_image = $product->getProductImage();

        $sql = "INSERT INTO products (product_id, product_name, product_description, product_price, product_discount, product_image) VALUES (?, ?, ?, ?, ?, ?)";

        $statement = $conn->prepare($sql);
        if (!$statement) {
            die("Error" . $conn->error);
        }
        $statement->execute([$product_id, $product_name, $product_description, $product_price, $product_discount, $product_image]);

        // Log the product addition action
        $this->logProductAction('Inserted product with name', $product_name);
    }

    public function getAllProducts() {
        $conn = $this->connection;

        $sql = "SELECT * FROM products";

        $statement = $conn->query($sql);
        $products = $statement->fetchAll();

        return $products;
    }

    public function getProductById($id) {
        $conn = $this->connection;

        $sql = "SELECT * FROM products WHERE product_id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $product = $statement->fetch();

        return $product;
    }

    public function updateProduct($product_id, $product_name, $product_description, $product_price, $product_discount, $product_image) {
        $conn = $this->connection;

        $sql = "UPDATE products SET product_name=?, product_description=?, product_price=?, product_discount=?, product_image=? WHERE product_id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$product_name, $product_description, $product_price, $product_discount, $product_image, $product_id]);

        echo "<script>alert('Update was successful');</script>";
    }

    public function deleteProducts($id) {
        $conn = $this->connection;

        $sql = "DELETE FROM products WHERE product_id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('Delete was successful');</script>";
    }

    public function logProductAction($action, $productName) {
        $conn = $this->connection;

        $adminUsername = "admin"; // Replace with the actual admin username
        $actionDescription = "Admin '{$adminUsername}' {$action} with product '{$productName}'";

        $sql = "INSERT INTO modifikimet (admin_username, action_type, action_description) VALUES (?, 'product_action', ?)";

        $statement = $conn->prepare($sql);
        if (!$statement) {
            die("Error" . $conn->error);
        }

        $statement->execute([$adminUsername, $actionDescription]);
    }
}
?>
