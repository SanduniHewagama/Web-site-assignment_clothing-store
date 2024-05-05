<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="bg">
    <header>
        <p id="logo">BELLA</p>
        <div id="nav" class="navmenu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="dashboard.php">Shop</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                </ul>
        </div>
        <div class="menub">
            <i class="bx bx-menu" onclick="menuFunction()"></i>
        </div>
    </header>

    <div id="form-box">
    <form method="post" action="process_order.php" onsubmit="return submitOrder();">
        <div class="reg">
            <div class="top">
                <br/>
                <br/>
                <h1>Place Your Order</h1>
            </div>  
            <div class="box">
                <input type="text" name="fullname" class="inputb" placeholder="Full Name" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="box">
                <input type="text" name="address" class="inputb" placeholder="Address" required>
                <i class="bx bx-map"></i>
            </div>
            <div class="box">
                <input type="text" name="zip" class="inputb" placeholder="Postal / Zip Code" required>
                <i class="bx bx-mail-send"></i>
            </div>
            <button type="submit" class="box submit">Place Order</button>
            
        </div>
    </form>
    </div>

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

    <script>
function menuFunction() {
    var nav = document.getElementById("nav");
    if (nav.className === "navmenu") {
        nav.className += " responsive";
    } else {
        nav.className = "navmenu";
    }
}

function submitOrder() {
    alert("Order placed successfully!");
    window.location.href = 'index.php'; // Redirect to the homepage
    return false; // Prevent form submission
}
</script>

</body>
</html>
