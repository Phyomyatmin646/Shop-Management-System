<?php


$customer_message = "";



    if (isset($_POST['saveCustomer'])) {
        $first = $_POST['firstName'];
        $last = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        if (empty($first) || empty($last) || empty($email) || empty($phone) || empty($address)) {
            $customer_message = "အချက်အလက်အပြည့်ဖြည့်ပါ။";
        } else {
            $customer_message = "Customer အချက်အလက် သိမ်းပြီးပါပြီ။";
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
  <!-- <button class="toggle-btn" onclick="showForm('loginForm')">🔐 Login Form</button> -->
  <button class="toggle-btn" id="details" onclick="showForm('customerForm')">👤 Customer Details for delivary</button>
  
 
  <!-- Login Form -->
  <!-- <form id="loginForm" method="POST" style="display:block;"> -->
    <!-- <h2>Login</h2> -->
    <!-- <input type="email" name="loginEmail" placeholder="အီးမေးလ်" required> -->
    <!-- <input type="password" name="loginPass" placeholder="Password" required minlength="6"> -->
    <!-- <button type="submit" name="login">Login</button> -->
  <!-- </form> -->

  <!-- Customer Details Form -->
  <form id="customerForm" method="POST" style="display:none;">
    <h2>Customer Details</h2>
    <input type="text" name="firstName" placeholder="နာမည် (First Name)" required>
    <input type="text" name="lastName" placeholder="နာမည်အဆုံး (Last Name)" required>
    <input type="email" name="email" placeholder="အီးမေးလ်" required>
    <input type="tel" name="phone" placeholder="ဖုန်းနံပါတ် (ဥပမာ - 0945678901)" pattern="[0-9]{7,15}" required>
    <textarea name="address" placeholder="လိပ်စာ" required></textarea>
    <button type="submit" name="saveCustomer">Sumit</button>
    <?php if(!empty($customer_message)): ?>
      <div class="message <?php echo (strpos($customer_message, 'သိမ်းပြီး') !== false) ? 'success' : ''; ?>">
        <?php echo $customer_message; ?>
      </div>
    <?php endif; ?>
  </form>
</div>

</body>
</html>