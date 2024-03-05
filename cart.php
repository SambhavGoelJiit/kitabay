<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kitabay</title>
    <!--Logo-->
    <link rel="icon" href="images/logo.png">
    <!--CSS-->
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <section id="header">
        <a href="#"><img src="images/logo.png" alt="logo_kitabay" class="logo" height=60px></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php"><img src="images/home.png" height="30px"></a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="cart.php"><img src="images/cart.png" height="40px"></a></li>
            </ul>
        </div>
    </section>

    <section id="page-header">
        <h2>#READ</h2>
        <p>Save more with coupons and upto 50% OFF!</p>
    </section>

    <section id="cart" class="section-p1">
        <center>
            <table class="cart_table">
                <thead>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td></td>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['cart'])) {
                        $total = 0;
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $total = $total + $value['price'];
                            echo "
                        <tr>
                            <td>$value[name]</td>
                            <td>$value[price]</td>
                            <td>$value[quantity]</td>
                            <td>
                                <form action='manage_cart.php' method='POST'>
                                <button name='remove'>Remove</button>
                                <input type='hidden' name='p_name' value='$value[name]'>
                            </td>
                        </tr>
                        ";
                        }
                        $_SESSION['total'] = $total;
                    }
                    ?>
                </tbody>
            </table>
        </center>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Coupon Code">
                <button class="normal">Apply</button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <?php
                    if (isset($_SESSION['cart'])) {
                        echo "
                    <td>Cart Subtotal</td>
                    <td>$$_SESSION[total]</td>
                    ";
                    } else {
                        echo "
                    <td>Cart Subtotal</td>
                    <td>$0</td>
                    ";
                    }
                    ?>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>FREE</td>
                </tr>
                <tr>
                    <?php
                    if (isset($_SESSION['cart'])) {
                        echo "
                    <td>Total</td>
                    <td>$$_SESSION[total]</td>
                    ";
                    } else {
                        echo "
                    <td>Total</td>
                    <td>$0</td>
                    ";
                    }

                    ?>
                </tr>
            </table>
            <button class="normal" onclick="dial()">Proceed to checkout</button>
            <script>
                function dial(){
                    alert('Order Placed Successfully');
                }
            </script>
        </div>
    </section>

    <section id="newsletter" class="section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest stock and <span>special offers</span></p>
        </div>
        <div class="newsform">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>
</body>

</html>