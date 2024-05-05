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
      
      <section id="product1" class="section-p1">
        <div class="pro-container">
        <?php
            // TODO Connection to the database
            $conn = mysqli_connect('localhost', 'root', '', 'bella');
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // Assuming database connection is already established above
            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='pro'>";
                    echo "<img src='" . htmlspecialchars($row["image_url"]) . "' alt='" . htmlspecialchars($row["name"]) . "'>";
                    echo "<div class='des'>";
                    echo "<span>" . htmlspecialchars($row["brand"]) . "</span>";
                    echo "<h5>" . htmlspecialchars($row["name"]) . "</h5>";
                    echo "<div class='star'>";
                    for ($i = 0; $i < 5; $i++) { // Fixed loop to always show 5 stars
                        echo $i < $row['rating'] ? "<i class='fas fa-star'></i>" : "<i class='far fa-star'></i>";
                    }
                    echo "</div>";
                    echo "<h4>$" . number_format($row["price"], 2) . "</h4>";
                    echo "</div>";
                    // Add to cart link
                    echo "<a href='sproduct.php' class='add-to-cart'><i class='fa fa-shopping-cart'></i></a>";
                    echo "</div>";
                }
            } else {
                echo "No products found.";
            }
            $conn->close();
        ?>
        </div>
      </section>
      <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
      </section>
      <script src="script.js"></script>
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
</html>