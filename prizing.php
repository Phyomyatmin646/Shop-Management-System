<?php
include('db_connect.php');

//Session Start
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

// Fetch other products for the sidebar
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
    background: #f9f9f9; /* Pale white background */
    color: #333;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    z-index: 9999;
    padding: 0px 0; /* Thinner height */
}

nav .container {
    display: flex;
    justify-content: space-between; /* logo/name left, links right */
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
}

/* Brand name */
nav .navbar-brand {
    font-weight: bold;
    font-size: 1.5rem;
    color: #222;
    margin-left: -600px;
    position: relative;
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
    padding-top: 70px; /* space for fixed navbar */
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
    width: 100%;        /* responsive width */
    max-width: 400px;   /* smaller max width */
    height: auto;       /* maintain aspect ratio */
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

</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <img
          src="images/logo.jpg"
          alt="photo"
          width="80"
          height="80"
          class="pho"
        />
        <a class="navbar-brand" href="#">Noodle Nest</a>
        
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="review.html">Review</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
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
        <a href="index.php" class="back">&larr; Back</a>
        <a href="login.php" class="cart">Cart</a>
    </div>

<?php
$current_id = $_GET['id'] ?? 0; // current product id

// Prepare SQL to get 10 random products excluding current
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
</body>
</html>

