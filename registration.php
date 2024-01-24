<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
<main id="main7">
    <div class="foto">
        <img src="Photos/orderonline.png" alt="orderOnline">
        <p class="orderOnline_p"><b>TAKE YOUR COFFEE</b></p>
    </div>

        <div class="register_form">
            <p class="register_p">
                Sign up :
                <br>
            </p>
            
        
            <?php 
            include_once 'php/registerController.php';
    
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $_repeatPassword = $_POST['repeatPassword'];

            $user = new User($id, $name, $surname, $email,$_repeatPassword,$password, $repeatPassword);

            $userRepository = new UserRepository();
            $userRepository->insertUser($user);
            header("location:index.php");
        }
         ?>
        
            
            <form action ="" method="post">
            <div class="register_content">
                <label class="register_label" for="name"><b>Name :</b><br><br></label>
                <input class="register_input" type="text" placeholder="Enter Name" name="name" required>
                <p id="nameError" class="error"></p>
            </div>

            <div class="register_content">
                <label for="Surname"><b>Surname :</b><br><br></label>
                <input class="register_input" type="text" placeholder="Enter Surname" name="surname" required>
                <p id="surnameError" class="error"></p>
            </div>

            <div class="register_content">
                <label for="Email"><b>Email : </b><br><br></label>
                <input class="register_input"  type="email" placeholder="Enter Email" name="email" required>
                <p id="emailError" class="error"></p>
            </div>

            <div class="register_content">
                <label for="Username"><b>Username : </b><br><br></label>
                <input class="register_input"  type="text" placeholder="Enter Username" name="username" required>
                <p id="emailError" class="error"></p>
            </div>

            <div class="register_content">
                <label for="Password"><b>Password :</b><br><br></label>
                <input  class="register_input" type="password" placeholder="Enter Password" name="password" required>
                <p id="passwordError" class="error"></p>
            </div>

            <div class="register_content">
                <label for="Password"><b>Repeat Password :</b><br><br></label>
                <input  class="register_input" type="password" placeholder="Repeat Password" name="repeatPassword" required>
                <p id="repeatPasswordError" class="error"></p>
            </div>

            <div class="button-container">
            <button type="submit" name="submit" onclick="registerForm()">Sign up</button>
            </div>
    </div>
        </form>

        <script>
        let nameRegex = /^[a-zA-Z]{4,15}$/;
        let surnameRegex = /^[a-zA-Z]{4,15}$/;
        let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        let passwordRegex = /^[A-Za-z0-9.,\-_]{8,}$/;
        let repeatPasswordRegex = /^[A-Za-z0-9.,\-_]{8,}$/;


function registerForm() {
    let nameInput = document.querySelector('input[name="name"]');
    let nameError = document.getElementById('nameError');

    let surnameInput = document.querySelector('input[name="surname"]');
    let surnameError = document.getElementById('surnameError');

    let emailInput = document.querySelector('input[name="email"]');
    let emailError = document.getElementById('emailError');

    let passwordInput = document.querySelector('input[name="password"]');
    let passwordError = document.getElementById('passwordError');

    let repeatPasswordInput = document.querySelector('input[name="repeatPassword"]');
    let repeatPasswordError = document.getElementById('repeatPasswordError');

    nameError.innerText = '';
    surnameError.innerText = '';
    emailError.innerText = '';
    passwordError.innerText = '';
    repeatPasswordError.innerText = '';
    

    if (!nameRegex.test(nameInput.value)) {
        nameError.innerText = 'Invalid name format';
        return;
    }

    if (!surnameRegex.test(surnameInput.value)) {
        surnameError.innerText = 'Invalid surname format';
        return;
    }

    if (!emailRegex.test(emailInput.value)) {
        emailError.innerText = 'Invalid email format';
        return;
    }

    if (!passwordRegex.test(passwordInput.value)) {
        passwordError.innerText = 'Invalid password format ';
        return;
    }
    if (!repeatPasswordRegex.test(repeatPasswordInput.value)) {
        repeatPasswordError.innerText = 'Password does not match';
        return;
    }


        alert('Successfully signed up!');
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