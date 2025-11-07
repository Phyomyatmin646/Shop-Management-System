<?php
session_start();
include 'db_connect.php'; 

// Clean invalid cart items
foreach($_SESSION['cart'] ?? [] as $k => $item){
    if(empty($item['id']) || $item['quantity'] < 1){
        unset($_SESSION['cart'][$k]);
    }
}

// Remove item if requested
if(isset($_GET['remove'])){
    $remove_key = $_GET['remove'];
    unset($_SESSION['cart'][$remove_key]);
    header("Location: cart.php");
    exit();
}

// Prepare cart items and products
$cart_items = $_SESSION['cart'] ?? [];
$grand_total = 0;
$products = [];

if(!empty($cart_items)){
    $product_ids = array_column($cart_items, 'id');
    $ids = implode(',', $product_ids);

    $sql = "SELECT * FROM products WHERE id IN ($ids)";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        $products[$row['id']] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Noodle Nest | Cash & Cart</title>
<style>
/* Page Background & Font */
body {
    font-family: Arial, sans-serif;
    background-color: white; /* dark grey */
    color: #f5f5f5; /* white text */
    margin: 0;
    padding: 0;
}

/* Container */
.container {
    max-width: 1000px;
    margin: 30px auto;
    padding: 20px;
    background-color: grey; /* slightly lighter dark grey */
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
}

/* Header */
h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 28px;
}

/* Table */
table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 12px 15px;
    text-align: center;
}

th {
    background-color: #45433f; /* dark header */
    color: #fff;
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #7d7c79;
}

tr:nth-child(odd) {
    background-color: #1f1f1f;
}

tr:hover {
    background-color: #444;
}

.cart-img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 5px;
}

/* Links / Buttons */
a {
    display: inline-block;
    padding: 10px 20px;
    margin: 5px 0;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: all 0.3s ease;
}

a:hover {
    background-color: #555;
}

/* Back Link */
.back {
    background-color: #444;
}

.back:hover {
    background-color: #666;
}

/* Cash Button */
.cash {
    background-color: #222;
}

.cash:hover {
    background-color: #555;
}

/* Buttons container */
.buttons {
    text-align: center;
    margin-top: 20px;
}

/* Responsive */
@media (max-width: 768px) {
    table, th, td {
        font-size: 14px;
    }
    .cart-img {
        width: 60px;
        height: 60px;
    }
}
</style>
</head>
<body>
<div class="container">
<h2>Your Cart</h2>
<table>
<tr>
    <th>Product</th>
    <th>Image</th>
    <th>Unit</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total</th>
    <th>Action</th>
</tr>

<?php
if(!empty($cart_items)){
    foreach($cart_items as $key => $item){
        $product = $products[$item['id']];
        $price = ($item['unit'] == 'piece') ? $product['singleprice'] : $product['wholeprice'];
        $total = $price * $item['quantity'];
        $grand_total += $total;
        $_SESSION['total_price']=$grand_total;

        $image_path = file_exists("images/" . $product['image']) ? "images/" . $product['image'] : "images/default.png";

        echo "<tr>
            <td>{$product['name']}</td>
            <td><img src='$image_path' class='cart-img' alt='{$product['name']}'></td>
            <td>{$item['unit']}</td>
            <td>$price</td>
            <td>{$item['quantity']}</td>
            <td>$total</td>
            <td><a href='cart.php?remove=$key'>Remove</a></td>
        </tr>";
    }

    echo "<tr>
        <td colspan='5' align='right'><b>Grand Total:</b></td>
        <td colspan='2'><b>$grand_total</b></td>
    </tr>";
} else {
    echo "<tr><td colspan='7'>Your cart is empty.</td></tr>";
}
?>
</table>

<div class="buttons">
    <a href="prizing.php?id=1" class="back">← Back</a>
    <?php if(!empty($cart_items)) echo '<a href="login.php" class="cash">Cash => 💵</a>'; ?>
</div>
</div>
</body>
</html>
