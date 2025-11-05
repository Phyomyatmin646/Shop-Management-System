<?php
session_start();
include 'db_connect.php'; // your database connection

if(isset($_POST['add_to_cart'])){
    // Get values from the form
    $product_id = (int)$_POST['id'];
    $quantity = (int)$_POST['quantity'];
    $unit = $_POST['unit']; // 'piece' or 'box'

    if($quantity < 1) $quantity = 1; // Ensure at least 1

    // Use a key combining product ID and unit
    $key = $product_id . '_' . $unit;

    // Add/update the cart session
    if(isset($_SESSION['cart'][$key])){
        // Update quantity if item already in cart
        $_SESSION['cart'][$key]['quantity'] += $quantity;
    } else {
        // Add new item
        $_SESSION['cart'][$key] = [
            'id' => $product_id,
            'quantity' => $quantity,
            'unit' => $unit
        ];
    }

    // Optional: redirect back to the page you came from
    if(isset($_SERVER['HTTP_REFERER'])){
        header("Location: " . $_SERVER['HTTP_REFERER']);
    } else {
        header("Location: cart.php");
    }
    exit();
}
?>
