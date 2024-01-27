<<<<<<< HEAD
=======

>>>>>>> 0d6cd8ae31a2d628cadfdee697ca2a62c769ad5b
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Online</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <a href="index.php" class="logo">
            <img src="Photos/Logo for web.png" alt="Logo">
        </a>
        <nav>
           <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutUs.php">About us</a></li>
            <li><a href="menus.php">Menus</a></li>
            <li><a href="cozyStore.php">Cozy Store</a></li>
            <li><a href="orderOnline.php">Order Online</a></li>
            <li><a href="contactUs.php">Contact us</a></li>
           </ul>
        </nav>
    </header>
    <main id="main1">
      
        <div class="foto">
            <img src="Photos/orderonline.png" alt="orderOnline">
            <p class="orderOnline_p"><b>TAKE YOUR COFFEE</b></p>
        </div>

       
<?php
session_start();
 
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: php/Logged_IN/welcome.php");
    exit;
}

include "PhP/DatabaseConnection.php";
 


$username = $password = $login_err = "";
 


if($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $conn = new DatabaseConnection;
  $pdo = $conn->startConnection();

  $sql = "SELECT id, username, password ,role FROM users WHERE username = :username";

$statement = $pdo->prepare($sql);

  if($statement){
      $statement->bindParam(":username", $param_username, PDO::PARAM_STR);
      $param_username = $username;

      if($statement->execute()){
          if($statement->rowCount() == 1){
              $row = $statement->fetch();
              $id = $row["id"];
              $stored_password = $row["password"];
              $user_role = $row["role"];
              
              if($password == $stored_password){
                  session_start();
                  $_SESSION["loggedin"] = true;
                  $_SESSION["id"] = $id;
                  $_SESSION["username"] = $username;
                  $_SESSION["role"] = $user_role;

                  if ($user_role == 'admin') {
                    header("location: PhP/dashboard.php"); 
                    exit;
                } else {
                    header("location: index.php"); 
                    exit;
                }
            } else {
                $login_err = "Invalid username or password.";
            }
        } else {
            $login_err = "Invalid username or password.";
        }
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }

    unset($statement);
} else {
    die("Error: " . $pdo->error);
}

unset($pdo);
}
?>



        <form action ="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="form">
            <div class="content">
                <label class="login_form" for="username"><b>Username</b></label>
                <input class="login_form_input" type="text" placeholder="Enter Username" name="username" required>
                <p id="usernameError" class="error"></p>
            </div>
                
            <div class="content">
                <label class="login_form" for="password"><b>Password</b></label>
                <input class="login_form_input"type ="password" placeholder="Enter Password" name="password" required>
                <p id="passwordError" class="error"></p>
            </div>
            
            <div class="button-container">
                <button type="submit" name="login" onclick="validateForm()">Log in</button>
                </div>
                <br>
                <a href="registration.php" class="register-link">Not signed up ?
                <br>Sign up here</a> 
            </div>
          </form>

        <script>
       
      let usernameRegex = /^[a-zA-Z0-9._-]{4,15}$/;
      let passwordRegex = /^[a-zA-Z0-9.,\-_]{8,}$/;

    function validateForm(){
        let usernameInput = document.querySelector('input[name="username"]');
        let usernameError = document.getElementById('usernameError');
        
        let passwordInput = document.querySelector('input[name="password"]');
        let passwordError = document.getElementById('passwordError');

        usernameError.innerText = '';
        passwordError.innerText = '';

        if(!usernameRegex.test(usernameInput.value)){
        usernameError.innerText = 'Invalid username format';
        return;
        }

        if(!passwordRegex.test(passwordInput.value)){
        passwordError.innerText = 'Invalid password format';
        return;
        }

        alert('Success');
        }
        </script>
    </main>
    <footer class="cafe-footer">
        <div class="container_f">
          <div class="footer-content">
            <div class="footer-section">
              <h3>Contact Us</h3>
              <p>40000 , Mitrovica</p>
              <br>
              <p><b>Email</b> <br>
                cozycup@gmail.com</p>
                <br>
              <p><b>Phone </b><br>
                 049 - 227 - 076 <br>
                 049 - 477 - 165</p>
            </div>
            
            <div class="footer-section">
                
              <h3>Opening Hours</h3>
              <br>
              <p><b>Monday - Friday </b><br>
                8:00 AM - 10:00 PM</p>
                <br>
              <p><b>Saturday - Sunday</b> <br>
                8:00 AM - 00:00 PM</p>
            </div>

            <div class="footer-section_icons">
                
              <h3>Follow Us</h3>
              <a href="https://www.instagram.com/" target="_blank">
                <img src="Photos/ig.png" alt="Instagram">
            </a>
        
            <a href="https://www.facebook.com/" target="_blank">
                <img src="Photos/fb_.png" alt="Facebook">
            </a>
        
            <a href="https://twitter.com/i/flow/login" target="_blank">
                <img src="Photos/x.png" alt="Twitter">
            </a>
              </p>
            </div>
          </div>
          <div class="footer-bottom">
            <p>&copy; 2023 Cozy Cup. All rights reserved.</p>
          </div>
        </div>
      </footer>
</body>
</html>