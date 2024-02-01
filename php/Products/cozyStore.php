<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cozy Store</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <header class="header">
        <a href="index.php" class="logo">
            <img src="../../Photos/Logo for web.png" alt="Logo">
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
    <main id="2">
        <div class="cozyStore_head">


            <h1>We bring the best coffee beans from the fields of Ethiopia to your cups. </h1> 
            
            <div class="store_start">

                <img src="../../Photos/store.jpg" alt="Store">
                <h3>At Cozy Cup, we are committed to delivering freshness and authenticity in every bean. Our beans are ethically sourced, 
                ensuring that the farmers behind each harvest are treated with fairness and respect. From the moment the beans are picked to the careful roasting process,
                we prioritize quality at every step. Whether you savor your coffee as a daily ritual or indulge in special moments, our coffee beans promise to awaken your 
                senses and captivate your taste buds. Elevate your coffee experience with Cozy Cup where passion meets perfection in every cup.</h3>
            </div>  

            <br>
            <h3>At our cafe shop you can find our coffee beans or you can purchase on our online store , coming in three weight package , 250g , 500g and 1000g 
                with a delicious strong flavor and a unique type of beans , straight out of the Ethiopia fields , directly to your cup. 
            </h3>
  <?php          
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  
include_once 'productsRepository.php';
include_once '../DatabaseConnection.php';

$productsRepository = new ProductsRepository();
$products = $productsRepository->getAllProducts();
?>

<div class="products">

<?php foreach ($products as $product): ?>
    <div class="product-box">
        <img src="<?php echo $product['product_image']; ?>" alt="<?php echo $product['product_name']; ?>">
        <div class="product-details">
            <h2><?php echo $product['product_name']; ?></h2>
            <p><?php echo $product['product_description']; ?></p>
            <p>Price: <?php echo $product['product_price']; ?> € </p>
            <span class="discount"><span style="text-decoration: line-through;"><?php echo $product['product_discount']; ?></span></span>
        </div>
    </div>
<?php endforeach;?>
</div>

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
<style>
 .products {
    width: 90%;
    display: flex;
    justify-content: space-between;
    flex-wrap : wrap;
}

.product-box {
    width: 45%;
    margin-bottom: 40px;
    display: flex;
    flex-direction: row;
    height: 300px;
    flex-wrap: wrap;
    align-items: flex-start;
    border: 1px solid gray;
    border-radius : 10px;
    padding: 10px;
}
.product-box::hover{
    color:blue;
}

 .product-box img {
    width: 100%;
    max-width: 300px;
    margin-right: 20px;
}

 .product-details {
    flex: 1;
    align-items: center;
}

 .product-details h2 {
    text-align: center;
    font-size: 1.5rem;
    margin-bottom: 10px;
}

 .product-details p {
    text-align: center;
    margin-bottom: 5px;
}

 .discount {
    text-align: center; 
    color: gray;
    text-decoration: none;
}

.quantity {
    display: block;
    margin-top: 10px;
    font-style: italic;
}
</style>