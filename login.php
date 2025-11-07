<?php

session_start();
$price=isset($_SESSION['total_price'])?
$_SESSION['total_price']:0;
$customer_message = "";




    if (isset($_POST['saveCustomer'])) {
        $_SESSION['firstName'] = $_POST['firstName'];
        $_SESSION['lastName'] = $_POST['lastName'];
         $_SESSION['email'] = $_POST['email'];
         $_SESSION ['phone']= $_POST['phone'];
        $_SESSION['address'] = $_POST['address'];
  

        if (empty($_POST['firstName'])|| empty($_POST['lastName'])|| empty($_POST['email'])||empty($_POST['phone'])||empty($_POST['address'])) {
            $customer_message = "Please fill your details";
        } else {
            $customer_message = "Customer အချက်အလက် သိမ်းပြီးပါပြီ။";
            unset($_SESSION['cart']);
            unset($_SESSION['total_price']);
        }
    }
?>
<!doctype html>
<html lang="my">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cash & Customer Details</title>
<style>
body {
  font-family: Arial, sans-serif;
  background: #eef2fb;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
.container {
  background: white;
  width: 400px;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}
h2 {
  text-align: center;
  margin-bottom: 15px;
  color: #333;
}
form {
  display: flex;
  flex-direction: column;
  gap: 12px;
}
input, textarea {
  padding: 10px;
  border: 1px solid #0e0d0dff;
  border-radius: 6px;
  font-size: 14px;
  width: 100%;
}
button {
  background: #656666ff;
  border: none;
  color: white;
  padding: 10px;
  border-radius: 6px;
  cursor: pointer;
  font-weight: bold;
}
button:hover { background: #080808ff; }
.message {
  color: red;
  text-align: center;
  font-size: 14px;
}
.success { color: green; }
.toggle-btn {
  background: #6f6f70ff;
  border: none;
  padding: 8px;
  margin-bottom: 12px;
  cursor: pointer;
  border-radius: 6px;
  font-weight: bold;
}
</style>
<script>
function showForm(formId) {
  document.getElementById('details').style.display = 'none'
  document.getElementById(formId).style.display = 'block'
}
</script>
</head>
<body>

<div class="container">
 
  <button class="toggle-btn" id="details" onclick="showForm('customerForm')">👤 Customer Details for delivary</button><br>
  <a href="cart.php" class="cat"><=Back</a>
  
 
 
  <form id="customerForm" method="POST" style="display:none;">
    <h2>Customer Details</h2>
    <input type="text" name="firstName" placeholder="နာမည် (First Name)" required>
    <input type="text" name="lastName" placeholder="နာမည်အဆုံး (Last Name)" required>
    <input type="email" name="email" placeholder="အီးမေးလ်" required>
    <input type="tel" name="phone" placeholder="ဖုန်းနံပါတ် (ဥပမာ - 09*********)" pattern="[0-9]{7,15}" required>
    <textarea name="address" placeholder="လိပ်စာ" required></textarea>
    <p>Price: <?php echo $price;?>ks</p>
    <button type="submit" name="saveCustomer">Sumit to buy</button>
    <?php if(!empty($customer_message)): ?>
      <div class="message <?php echo (strpos($customer_message, 'သိမ်းပြီး') !== false) ? 'success' : ''; ?>">
        <?php echo $customer_message; ?>
      </div>
    <?php endif; ?>
  </form>
</div>

</body>
</html>