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