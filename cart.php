<?php
session_start();
include 'db_connect.php'; 


foreach($_SESSION['cart'] ?? [] as $k => $item){
    if(empty($item['id']) || $item['quantity'] < 1){
        unset($_SESSION['cart'][$k]);
    }
}


if(isset($_GET['remove'])){
    $remove_key = $_GET['remove'];
    unset($_SESSION['cart'][$remove_key]);
    header("Location: cart.php");
    exit();
}


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

<h2>Your Cart</h2>

<style>
.cart-img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 5px;
}
</style>

<table border="1" cellpadding="10">
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
session_start();
$_SESSION['total']=$grand_total;
if(!empty($cart_items)){
    foreach($cart_items as $key => $item){
        $product = $products[$item['id']];

        
        $price = ($item['unit'] == 'piece') ? $product['singleprice'] : $product['wholeprice'];

        $total = $price * $item['quantity'];
        $_SESSION['total'] += $total;

        
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noodle Nest | Cash & Cart</title>
    <style>
        .cash{
            text-decoration:none;
            color: black;
            font-weight: bold;

        }
        .cash-set{
            margin-top:10px;
        }
        .back{
    text-decoration:none;
    color:black;
}

    </style>
</head>
<body>
    <div class="cash-set">
         <a href="prizing.php?id=1" class="back"><=Back</a><br>
       
      <?php
      if(empty($cart_items)){
        echo "No cash";
      }
      else{
        echo '<a href="login.php" class="cash">Cash=>💵</a>';
      }

      ?>
    </div>
</body>
</html>

