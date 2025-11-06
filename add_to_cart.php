<?php
session_start();
include 'db_connect.php'; 

if(isset($_POST['add_to_cart'])){
   
    $product_id = (int)$_POST['id'];
    $quantity = (int)$_POST['quantity'];
    $unit = $_POST['unit']; 

    if($quantity < 1) $quantity = 1; 

    $key = $product_id . '_' . $unit;

    
    if(isset($_SESSION['cart'][$key])){
        
        $_SESSION['cart'][$key]['quantity'] += $quantity;
    } else {
        
        $_SESSION['cart'][$key] = [
            'id' => $product_id,
            'quantity' => $quantity,
            'unit' => $unit
        ];
    }

    
    if(isset($_SERVER['HTTP_REFERER'])){
        header("Location: " . $_SERVER['HTTP_REFERER']);
    } else {
        header("Location: cart.php");
    }
    exit();
}
?>
