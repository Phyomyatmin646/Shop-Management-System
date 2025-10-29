<?php
include('db_connect.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM products WHERE id=$id";
    $result=$conn->Query($sql);

    if($result->num_rows>0){
        $row=$result->fetch_assoc();
    }else{
        echo"Product not Found!";
        exit;
    }
    }else{
        echo"No product selected!";
        exit;
    }

?>
<?php
header("Content-Type: text/html; charset=utf-8");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['name'];?></title>
</head>
<body>
    <h2><?php echo $row['name'];?></h2>
    <img src="images/<?php echo $row['image'];?>" alt="photo" width="230">
    <p>Single Price: <?php echo $row['singleprice'];?>Ks</p>
    <p>1 box Price: <?php echo $row['wholeprice'];?>Ks</p>
    <p>Stock: <?php echo($row['Stock']==1)?'Available':'Out of Stock!';?></p>
    <a href="index.php" style="test-decoration:None"><- Back</a>
</body>
</html>