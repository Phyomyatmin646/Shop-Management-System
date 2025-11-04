<?php
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3>" . $row['name'] . "</h3>";
        echo "<p>1 piece Price: " . $row['singleprice'] . " Ks</p>";
        echo "<p>1 box price: " . $row['wholeprice']. "ks</p>";
        echo "<img src='images/" . $row['image'] . "' width='150'>";
        if($row['Stock']==1){
            echo"<label><input type='radio' checked disabled>In Stock Now!</lable>";
        }
        else{
            echo"<label><input type='radio'  disabled>Out of Stock </lable>";
        }
        echo "</div><hr>";
    }
} else {
    echo "No products found.";
}
?>


