<?php

require_once 'DatabaseConnection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate input to prevent SQL injection
    $username = htmlspecialchars(strip_tags($username));
    $password = htmlspecialchars(strip_tags($password));

    // Query to check if the user exists
    $query = "SELECT * FROM users WHERE username = :username";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // Verify password
        if (password_verify($password, $row['password'])) {
            echo "Login successful!";
            // You can redirect the user to another page after successful login
            // header("Location: welcome.php");
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}
?>
?>