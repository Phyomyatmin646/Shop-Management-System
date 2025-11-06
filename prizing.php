<?php
include('db_connect.php');


session_start();

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
    $sql = "SELECT * FROM products WHERE id=$id";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
    } else {
        echo "Product not Found!";
        exit;
    }
} else {
    echo "No product selected!";
    exit;
}

$otherProducts = $conn->query("SELECT * FROM products WHERE id != $id LIMIT 5");

header("Content-Type: text/html; charset=utf-8");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($row['name']); ?></title>
<style>

/* Navbar styling */
nav.navbar {
    position: fixed;
    top: 0;
    width: 100%;
    background: #f9f9f9; 
    color: #333;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    z-index: 9999;
    padding: 0px 0; 
}

nav .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Logo */
nav img.pho {
    border-radius: 50%;
    border: 3px solid #ddd;
    width: 77px;
    height: 77px;
     border-radius: 50%;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
}
.pho:hover{
    transform: scale(1.1);
}

/* Brand name */
nav .navbar-brand {
    font-weight: bold;
    font-size: 1.5rem;
    color: #222;
    margin-left:-90px;
   
    top: -5px;

}

/* Navigation links */
nav .navbar-nav {
    display: flex;
    gap: 25px;
    margin: 0;
    padding: 0;
    list-style: none;
}

nav .nav-link {
    color: #555;
    text-decoration: none;
    font-size: 1.1rem;
    font-weight: 500;
    transition: color 0.3s;
}

nav .nav-link:hover {
    color: #000;
    text-decoration: underline;
}

/* Page body */
body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(to bottom, #ffffff, #888888, #000000);
    color: #fff;
    padding-top: 70px;
}

/* Layout wrapper */
.wrapper {
    display: flex;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 30px auto;
    gap: 20px;
    padding: 0 20px;
}

/* Main product */
.main-product {
    flex: 2;
    background-color:#545454;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.5);
}
.main-product img {
    width: 100%;        
    max-width: 400px;   
    height: auto;       
    border-radius: 8px;
    border: 2px solid #fff;
}

/* Sidebar */
.sidebar {
    flex: 1;
    background-color: rgba(0,0,0,0.6);
    padding: 15px;
    border-radius: 12px;
    box-shadow: 0 8px 15px rgba(0,0,0,0.4);
}

/* Other product cards */
.sidebar-item {
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 10px 0;
    padding: 8px;
    background-color: rgba(255,255,255,0.05);
    border-radius: 6px;
    transition: 0.2s;
     text-decoration:none;
}
.sidebar-item:hover {
    background-color: rgba(255,255,255,0.15);
}

.sidebar-item img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 4px;
}

.sidebar-item span {
    flex: 1;
    font-size: 1.1rem;
    color: #ddd;
   
}

@media (max-width: 768px) {
    .wrapper { flex-direction: column; }
}

.add-to-cart {
    margin-top:20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 2px 6px rgba(47, 42, 42, 0.92);
  width: 220px;
  font-family: sans-serif;
  
}
.unit-options {
  display: flex;
  gap: 10px;
  margin-bottom: 15px;
}
.unit-option {
  flex: 1;
  text-align: center;
  padding: 10px;
  border: 2px solid #ccc;
  border-radius: 8px;
  cursor: pointer;
  transition: 0.2s;
  
}
.unit-option.selected {
  border-color: #0a0b0bff;
  background: #0f0f0fff;
  color: white;
}
.add-to-cart input[type="number"] {
  width: 60px;
  padding: 5px;
  text-align: center;
  border-radius: 6px;
  border: 1px solid #ccc;
  margin-bottom: 15px;
}
.add-to-cart button {
  background: #48494aff;
  color: white;
  border: none;
  border-radius: 8px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}
.add-to-cart button:hover{
  background-color:black;
}
.back{
    text-decoration:none;
    color:white;
}
/* Navbar Menu Layout */
.menu {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 25px;
}

/* Hamburger button */
.hamburger {
  display: none;
  flex-direction: column;
  cursor: pointer;
  position: relative;
  z-index: 10001;
}

.hamburger div {
  width: 25px;
  height: 3px;
  background: #333;
  margin: 4px 0;
  transition: 0.3s;
}

/* Responsive for mobile */
@media(max-width: 768px){
  .menu {
    position: fixed;
    top: 0;
    right: -100%;
    height: 100vh;
    width: 200px;
    background: #fff;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    transition: right 0.3s ease;
    box-shadow: -2px 0 8px rgba(0,0,0,0.3);
    z-index: 10000;
  }

  .menu.active {
    right: 0;
  }

  .hamburger {
    display: flex;
  }

  /* Navbar brand center fix */
  nav .navbar-brand {
    margin-left: 0;
  }
}

</style>
</head>
<body>

<!-- Navbar -->

<?php
error_reporting(1);
session_start();
$cart_count = 0;
if(isset($_SESSION['cart'])){
    $cart_count = array_sum(array_column($_SESSION['cart'], 'quantity'));
}
?>

<nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <img
          src="images/logo.jpg"
          alt="photo"
          width="80"
          height="80"
          class="pho"
        />
        <a class="navbar-brand" href="index.php">Noodle Nest</a>
        <div class="hamburger" id="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
        
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >

        

          <ul class="navbar-nav">
             <li>
                <a href="cart.php" style="color:black; text-decoration:none; position:relative; left:-20px;top:-5px; font-size:22px;">
                🛒 Cart 
                <?php if($cart_count > 0): ?>
                    <span style="
                        background:red;
                        color:white;
                        border-radius:50%;
                        padding:2px 6px;
                         font-size:12px;
                        osition:absolute;
                        top:0px;
                        right:-15px;">
                    <?php echo $cart_count; ?>
                      </span>
            <?php endif; ?>
        </a>
             </li>
            <div class="menu">
                <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="review.html">Review</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
           
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </div>
          </ul>
        </div>
      </div>
    </nav>

<div class="wrapper">
    <div class="main-product">
        <h2><?php echo htmlspecialchars($row['name']); ?></h2>
        <img src="images/<?php echo htmlspecialchars($row['image']); ?>" alt="Product Image">
        <p>Single Price: <?php echo htmlspecialchars($row['singleprice']); ?> Ks</p>
        <p>1 box Price: <?php echo htmlspecialchars($row['wholeprice']); ?> Ks</p>
        <p class="stock">Stock: <?php echo ($row['Stock']==1) ? 'Available' : 'Out of Stock!'; ?></p>
        <a href="index.php" class="back"><=Back</a>
        

        <form method="post" action="add_to_cart.php" class="add-to-cart">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="hidden" name="unit" id="unit-input" value="piece">

        <div class="unit-options">
            <div class="unit-option selected" data-unit="piece" data-price="<?php echo $row['singleprice']; ?>">Piece</div>
            <div class="unit-option" data-unit="box" data-price="<?php echo $row['wholeprice']; ?>">Box</div>
        </div>

            <input type="number" name="quantity" value="1" min="1">

            <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
        

        <script>
let unitOptions = document.querySelectorAll('.unit-option');
let unitInput = document.getElementById('unit-input');

unitOptions.forEach(option => {
    option.addEventListener('click', () => {
        
        unitOptions.forEach(o => o.classList.remove('selected'));
        option.classList.add('selected');

      
        unitInput.value = option.dataset.unit;
    });
});
</script>


    </div>

<?php
$current_id = $_GET['id'] ?? 0; 


$sql = "SELECT * FROM products WHERE id != ? ORDER BY RAND() LIMIT 10";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $current_id);
$stmt->execute();
$otherProducts = $stmt->get_result();
?>

<div class="sidebar">
    <h3>Other Products</h3>
    <?php if($otherProducts->num_rows > 0): ?>
        <?php while($other = $otherProducts->fetch_assoc()): ?>
            <a href="prizing.php?id=<?php echo $other['id']; ?>" class="sidebar-item">
                <img src="images/<?php echo htmlspecialchars($other['image']); ?>" alt="<?php echo htmlspecialchars($other['name']); ?>">
                <span><?php echo htmlspecialchars($other['name']); ?></span>
            </a>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No other products available.</p>
    <?php endif; ?>
</div>

</div>

<script>
let hamburger = document.getElementById('hamburger');
let menu = document.querySelector('.menu');

if(hamburger && menu){
    hamburger.addEventListener('click', () => {
        menu.classList.toggle('active');
    });

    document.addEventListener('click', function(e) {
        if(menu.classList.contains('active') && !menu.contains(e.target) && !hamburger.contains(e.target)){
            menu.classList.remove('active');
        }
    });
}
</script>
</body>
</html>

