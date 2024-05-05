<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <p id="logo">BELLA</p>
        <div id="nav">
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

    <section id="content1">
        <div class="text1">
            <h3>Enjoy a flat 10% Off <br>on selected items during our Flash Sale. </h3>
            <h2><b>Act fast!</b></h2>
            <a href="dashboard.php" style="text-decoration: none;">
                <button>Shop Now</button>
            </a>
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
        function menuFunction(){
            var i=document.getElementById("nav");

            if(i.className==="navmenu"){
                i.className+="responsive";
            }
            else{
                i.className="navmenu";
            }
        }
</script>
</html>