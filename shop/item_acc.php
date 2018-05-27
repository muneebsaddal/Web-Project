<?php
include_once("../config/config.php");
$itemget = $_GET['Buy'];
$result = mysqli_query($mysqli, "SELECT * FROM accessories WHERE acc_id = $itemget");
$res = mysqli_fetch_array($result);
?>

<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Shop</title>
<link href="../css/singlePageTemplate-shop.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<!-- Main Container -->
<div class="container"> 
  <!-- Navigation -->
  <header> <a href="../index.html">
    <section class="logo"><img src="../images/logo-header.png" width="100%" height="100%"></section>
  </a>
    <nav>
      <ul>
        <li><a href="shop_acc.php">ACCESSORIES</a></li>
        <li><a href="shop_main.php">NEW CARS</a></li>
        <li><a href="shop_used.php">USED CARS</a></li>
      </ul>
    </nav>
  </header>

  <section class="about-header">
    <div class="hero-header">
      <h1>Item Detail</h1>
    </div>
  </section>
  
  <section class="item_descrip">
      <div class="image_half">
        <?php echo "<img  class='item_image' src='".$res['acc_image']."' width='250px'>"?>
      </div>
      <div class="descrip_half">
        <?php
        echo "<h2>".$res['acc_name']."</h2>";
        echo "<h4>".$res['categories']."</h4>";
        echo "<br>";
        echo "<h3>Price: ".$res['acc_price']."</h3>";
        ?>
        <input class="button" type="button" value="BUY" onClick='alert("Item is bought.")'>
      </div>
    <div class="clear"></div>
  </section>

  <!-- Copyrights Section -->
  <div class="copyright">&copy;2018 - <strong>MotorShop</strong></div>
</div>
<!-- Main Container Ends -->
</body>
</html>

