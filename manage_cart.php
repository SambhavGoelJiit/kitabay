<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        if (isset($_SESSION['cart'])) {
            $products = array_column($_SESSION['cart'], 'name');
            if (in_array($_POST['p_name'], $products)) {
                echo "<script>alert('Item Already in Cart');
                window.location.href='index.php';
                </script>";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('name' => $_POST['p_name'], 'price' => $_POST['price'], 'quantity' => 1);
                echo "<script>alert('Item Added To Cart');
                window.location.href='index.php';
                </script>";
            }
        } else {
            $_SESSION['cart'][0] = array('name' => $_POST['p_name'], 'price' => $_POST['price'], 'quantity' => 1);
            echo "<script>alert('Item Added To Cart');
            window.location.href='index.php';
            </script>";
        }
    }
    if (isset($_POST['remove'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['name'] == $_POST['p_name']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "
                <script>alert('Item Removed');
                window.location.href='cart.php';
                </script>";
            }
        }
    }
}
