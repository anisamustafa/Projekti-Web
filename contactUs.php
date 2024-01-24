<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
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


<main id="main4">

    <div class="contactUs">
        <br>
        <br>
        <br>
        <h1>We Would Love to Hear From You</h1>
        
        <p>Contact us by phone :
            <br>
            <br>
            049 - 227 - 076
            
            <br>
            049 - 477 - 165
            <br>
            <br>OR
            <br>    
            <br>
            
        Contact us by email :
             <p id="p01">cozycup@gmail.com</p>
        </p>

    </div>
   
    <div class="contact_form">
      
            <br>
        </p>
        <div class="contact_content">
            <label class="contactUs_label" for="name"><b>Name :</b><br><br></label>
            <input class="contactUs_input" type="text" placeholder="Enter Name" name="name" required>
            <p id="nameError" class="error"></p>
        </div>

        <div class="contact_content">
            <label class="contactUs_label" for="name"><b>Surname :</b><br><br></label>
            <input class="contactUs_input" type="text" placeholder="Enter Surname" name="surname" required>
            <p id="surnameError" class="error"></p>
        </div>

        <div class="register_content">
            <label class ="contactUs_label "for="Email"><b>Email : </b><br><br></label>
            <input class="contactUs_input"  type="email" placeholder="Enter Email" name="email" required>
            <p id="emailError" class="error"></p>
        </div>

        <div class="contact_content">
            <label class="contactUs_label" for="name">What are you getting in touch about ? <b></b><br><br></label>
            <input class="contactUs_input" type="text" placeholder="Enter topic" name="name">
            <p></p>
        </div>

        <div class="contact_content">
            <label class="contactUs_label" for="name">Your Message : <b></b><br><br></label>
            <textarea class="contactUs_input" name="message" rows="4" cols="50"  = "Your Message"required></textarea>
            <p></p>
        </div>


  
        

        <div class="button-container">
            <button class = "button_form"="button" onclick="contactForm()">Send</button>
        </div>

    </div>

    <script>
    let nameRegex = /^[a-zA-Z]{4,15}$/;
    let surnameRegex = /^[a-zA-Z]{4,15}$/;
    let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
 


    function contactForm() {
    let nameInput = document.querySelector('input[name="name"]');
    let nameError = document.getElementById('nameError');

    let surnameInput = document.querySelector('input[name="surname"]');
    let surnameError = document.getElementById('surnameError');

    let emailInput = document.querySelector('input[name="email"]');
    let emailError = document.getElementById('emailError');

nameError.innerText = '';
surnameError.innerText = '';
emailError.innerText = '';


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


    alert('The message is sent! Thank you');
}
        
    </script>

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