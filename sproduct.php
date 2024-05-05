<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="css/style.css" rel="stylesheet">
  <body class="bg">
    <header>
    <p id="logo">BELLA</p>
        <div id="nav"class="navmenu">
                <ul>
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="dashboard.php">Shop</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                </ul>
        </div>
        <div class="menub">
            <i class="bx bx-menu" onclick="menuFunction"></i>
        </div>
    </header>
      
      <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
          <img src="https://www.thilakawardhana.com/wp-content/uploads/2023/05/TM11985.png" width="100%" id="MainImg" alt="">
        </div>
        <div class="single-pro-details">
          <h4>Moose Comfort Fit Crew Neck T-shirt</h4>
          <h2> $ 990</h2>
          <select>
            <option>Select Size</option>
            <option>Small</option>
            <option>Medium</option>
            <option>Large</option>
            <option>XL</option>
            <option>XXL</option>
            <option>XXXL</option>
          </select>
          <div class="quantity">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="1" style="width: 60px; height: 30px; margin: 10px;">
        </div>
          <button class="normal"  id="addToCartButton">Add To Cart</button>
          <h4>Product Details</h4>
          <span>Snazzy and Hip! Cool to the Core! Fashionable and Funky! Moose Men’s Crew Neck T-shirts are out, a wide variety of your favourite colors/prints to choose from for all your casual needs.</span>
          <h5>About the fabric</h5>
          <span>Fabric composition: Polyester mixed cotton
                Fabric pattern: Solid / Print
                Fit type: Comfort Fit
                Length: Regular</span>
                <h5>Add-on Feature</h5>
                <span>Comfortable, Great fit on, authentic branding, comfortable heat seals</span>
                <h5>Fabric Care</h5>
                <span>Machine Wash</span>
        </div>
      </section>
      <footer>
        <div class="contact">
            <h3>Contact</h3>
            <p><strong>Address: </strong>322/5, Galle road, Colombo 3</p>
            <p><strong>Phone: </strong>0112 895 404 / 0112 895 405</p>
            <div class="follow">
                <h3>follow Us</h3>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="about col">
            <h3>About</h3>
            <a href="about.html">About Us</a>
            <a href="delivery.html">Delivery Information</a>
            <a href="privacy.html">Privacy Policy</a>
            <a href="terms.html">Terms and Conditions</a>
            <a href="faq.html">FAQ</a>
          </div>
        <div class="account col">
            <h3>My Account</h3>
            <a href="signup.php">Sign Up</a>
            <a href="login.php">Log In</a>
        </div>

        <div class="pay col">
            <h3>Secured Payment Gateaway</h3>
            <img src="img/pay.png" alt="payment" width="20%">
        </div>

        <div id="copy">
            <p>© 2022 All rights reserved</p>
        </div>

    </footer>   
  </body>
  <script>
document.getElementById('addToCartButton').addEventListener('click', function() {
    // Optional: Perform any pre-redirect logic or validations here
    window.location.href = 'cart.php'; // Redirect to cart.php
});
</script>

</html>