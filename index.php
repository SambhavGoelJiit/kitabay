<?php

session_start();
$ur_email = $_SESSION['u_email'];
if ($ur_email == true) {
} else {
    header("location:login.php");
}
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
        <a href="index.php"><img src="images/logo.png" alt="logo_kitabay" class="logo" height=60px></a>
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

    <section id="hero">
        <h4>Trade-In-Offer</h4>
        <h2>Super Value Deals</h2>
        <h1>On All Products</h1>
        <p>Save more with coupons and upto 50% OFF!</p>
        <button>Shop Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="ft-box">
            <img src="images/features/f1.png">
            <h6>Free Shipping</h6>
        </div>
        <div class="ft-box">
            <img src="images/features/f2.png">
            <h6>Order Online</h6>
        </div>
        <div class="ft-box">
            <img src="images/features/f3.png">
            <h6>Save Money</h6>
        </div>
        <div class="ft-box">
            <img src="images/features/f4.png">
            <h6>Promotion</h6>
        </div>
        <div class="ft-box">
            <img src="images/features/f5.png">
            <h6>Happy Sell</h6>
        </div>
        <div class="ft-box">
            <img src="images/features/f6.png">
            <h6>Support</h6>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Rental Services Comming Soon</h4>
        <h2>Up to <span>70% OFF</span> - On Rentals</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="products" class="section-p1">
        <h2>Produts</h2>
        <p>Our collection....</p>
        <div class="pro-container">
            <div class="pro">
                <img src="images/products/p1.jpg" class="pro-img">
                <div class="des">
                    <span>Complete Series</span>
                    <h5>Harry Potter</h5>
                    <h4>$199</h4>
                    <form action="manage_cart.php" method="POST">
                        <button type="submit" name="add" class="cart">+Cart</button>
                        <input type="hidden" name="p_name" value="Harry Potter">
                        <input type="hidden" name="price" value="199">
                    </form>
                </div>
            </div>
            <div class="pro">
                <img src="images/products/p2.jpg" class="pro-img">
                <div class="des">
                    <span>Complete Series</span>
                    <h5>Sherlock Holmes</h5>
                    <h4>$99</h4>
                    <form action="manage_cart.php" method="POST">
                        <button type="submit" name="add" class="cart">+Cart</button>
                        <input type="hidden" name="p_name" value="Sherlock Holmes">
                        <input type="hidden" name="price" value="99">
                    </form>
                </div>
            </div>
            <div class="pro">
                <img src="images/products/p3.jpg" class="pro-img">
                <div class="des">
                    <span>Complete Series</span>
                    <h5>William Shakespear</h5>
                    <h4>$49</h4>
                    <form action="manage_cart.php" method="POST">
                        <button type="submit" name="add" class="cart">+Cart</button>
                        <input type="hidden" name="p_name" value="William Shakespear">
                        <input type="hidden" name="price" value="49">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="s-banner" class="section-p1">
        <div class="banner-box first">
            <h4>Crazy Deals</h4>
            <h2>Buy 1 Get 1 Free</h2>
            <span>The best sellers on sale</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box second">
            <h4>Thriller/Mystery</h4>
            <h2>Upcoming Bestsellers</h2>
            <span>The best classics also for sale on Kitabay</span>
            <button class="white">Explore</button>
        </div>
    </section>

    <section id="m-banner">
        <div class="banner-box first">
            <h2>Early bird sale</h2>
            <h3>Min 20% OFF</h3>
        </div>
        <div class="banner-box second">
            <h2>Pre Booking</h2>
            <h3>For selected Items</h3>
        </div>
        <div class="banner-box third">
            <h2>Save Extra 20%</h2>
            <h3>On Orders above $200</h3>
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

    <!--JavaScript-->
    <script>
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("header").style.top = "0";
            } else {
                document.getElementById("header").style.top = "-150px";
            }
        }
    </script>
</body>

</html>