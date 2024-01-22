
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
        <a href="index.html" class="logo">
            <img src="Photos/Logo for web.png" alt="Logo">
        </a>
        <nav>
           <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutUs.html">About us</a></li>
            <li><a href="menus.html">Menus</a></li>
            <li><a href="cozyStore.html">Cozy Store</a></li>
            <li><a href="orderOnline.html">Order Online</a></li>
            <li><a href="contactUs.html">Contact us</a></li>
           </ul>
        </nav>
    </header>
    <main id="main1">
        <div class="foto">
            <img src="Photos/orderonline.png" alt="orderOnline">
            <p class="orderOnline_p"><b>TAKE YOUR COFFEE</b></p>
        </div>

        <?php
        if(isset($_POST["login"])){
          $email = $_POST["email"];
          $password = $_POST["password"];
          require_once "pdo.php";
          $sql = "SELECT * FROM user WHERE email = '$email'";
          $result = mysqli_query($sql);

        }
        ?>

        <form action = "orderOnline.php" method ="POST">
        <div class="form">
            <div class="content">
                <label class="login_form" for="email"><b>Email:</b></label>
                <input class="login_form_input" type="email" placeholder="Enter Email" name="email" required>
                <p id="emailError" class="error"></p>
            </div>
                
            <div class="content">
                <label class="login_form" for="password"><b>Password:</b></label>
                <input class="login_form_input"type ="password" placeholder="Enter Password" name="password" required>
                <p id="passwordError" class="error"></p>
            </div>
            
            <div class="button-container">
                <button type="button" onclick="validateForm()" name ="login">Log in</button>
                </div>
                <br>
                <a href="registration.php" class="register-link">Not signed up ?
                <br>Sign up here</a> 
            </div>
          </form>

        <script>
        let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        let passwordRegex = /^[A-Z][a-z0-9.,\-_]{8,}$/;

    function validateForm(){
        let emailInput = document.querySelector('input[name="email"]');
        let emailError = document.getElementById('emailError');
        
        let passwordInput = document.querySelector('input[name="password"]');
        let passwordError = document.getElementById('passwordError');

        emailError.innerText = '';
        passwordError.innerText = '';

        if(!emailRegex.test(emailInput.value)){
        usernameError.innerText = 'Invalid email format';
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