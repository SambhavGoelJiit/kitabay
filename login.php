<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    $getName = "SELECT * FROM user_form WHERE email = '$email' ";

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['u_email'] = $email;
        $_SESSION['u_name'] = $getName;
        header('location:index.php');
    } else {
        $error[] = 'incorrect email or password!';
    }
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitabay</title>
    <!--Logo-->
    <link rel="icon" href="images/logo.png">
    <!--CSS-->
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <section id="page-header">
        <h2>#READ</h2>
        <p>Save more with coupons and upto 50% OFF!</p>
    </section>
    <div class="form-container">
        <form action="" method="post">
            <h3>Login Now</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>don't have an account? <a href="register.php">register now</a></p>
        </form>

    </div>
</body>

</html>