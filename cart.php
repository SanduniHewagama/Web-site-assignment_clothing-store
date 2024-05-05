<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="css/cart.css" rel="stylesheet">
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
      <i class="bx bx-menu" onclick="menuFunction()"></i>
    </div>
  </header>

  <div class="container">
    <div class="cart-header">
      <h1>Shopping Cart</h1>
      <button class="order-button" id="placeOrderButton">Place Order</button>
    </div>
    <div class="cart">
      <?php
        // TODO Connection to the database
        $conn = mysqli_connect('localhost', 'root', '', 'bella');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        // Fetch user's cart items
        $sql = "SELECT products.product_id, products.name, products.price, cart_items.quantity, products.image_url
                FROM cart_items
                JOIN carts ON cart_items.cart_id = carts.cart_id
                JOIN products ON cart_items.product_id = products.product_id
                WHERE carts.user_id = 1";  // Assuming user_id 1

        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Error: " . mysqli_error($conn));
        }




if (mysqli_num_rows($result) > 0) {
    // Output each row of the fetched data
    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="product">
        <img src="' . htmlspecialchars($row["image_url"]) . '" alt="' . htmlspecialchars($row["name"]) . '">
        <div class="info">
            <h2>' . htmlspecialchars($row["name"]) . '</h2>
            <p class="price">price - $' . number_format($row["price"], 2) . '</p>
            <p class="quantity">quantity - ' . number_format($row["quantity"], 0) . '</p>
        </div>
        <button class="remove-btn" data-id="' . $row["product_id"] . '">Remove</button>
      </div>';
    }
} else {
    echo '<p>Your cart is empty!</p>';
}
mysqli_close($conn);
?>


</div>
    <div class="total">
      <h3>Total: <span id="total-price">$0.00</span></h3>
    </div>
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
    document.addEventListener('DOMContentLoaded', function () {
    const removeButtons = document.querySelectorAll('.remove-btn');
    const totalPriceSpan = document.getElementById('total-price');

    function updateTotalPrice() {
        let totalPrice = 0;  // Moved inside the function to reset each time it's calculated
        document.querySelectorAll('.product').forEach(product => {
            const priceText = product.querySelector('.price').textContent;
            const quantityText = product.querySelector('.quantity').textContent;

            // Extract numerical values using regex that matches numbers possibly containing decimals
            const price = parseFloat(priceText.match(/[\d\.]+/)[0]);
            const quantity = parseInt(quantityText.match(/[\d]+/)[0]);

            totalPrice += price * quantity;
        });
        totalPriceSpan.textContent = '$' + totalPrice.toFixed(2);
    }

    updateTotalPrice();

    function removeProduct(event) {
        const product = event.target.closest('.product');
        if (product) {
            product.remove();  // Remove the product element from the DOM
            updateTotalPrice();  // Recalculate the total after removal
        }
    }

    removeButtons.forEach(button => {
        button.addEventListener('click', removeProduct);
    });
});

function menuFunction() {
    var nav = document.getElementById("nav");
    nav.classList.toggle("responsive");
}

document.getElementById('placeOrderButton').addEventListener('click', function() {
    window.location.href = 'order.php'; // Redirect to the order page
});


  </script>
</body>

</html>