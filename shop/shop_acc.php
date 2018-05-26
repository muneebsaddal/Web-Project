<?php
include_once("../config/config.php");
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
        <li><a href="shop_acc.html">ACCESSORIES</a></li>
        <li><a href="shop_main.html">NEW CARS</a></li>
        <li><a href="shop_used.html">USED CARS</a></li>
        <li><a href="../cart/cart.html">CART</a></li>
      </ul>
    </nav>
  </header>
  <!-- Hero Section -->
  <section class="about-header">
    <div class="hero-header">
      <h1>Accessories</h1>
    </div>
  </section>
  <div id="content">
    <section class="sidebar"> 
      <div id="menubar">
        <section class="menu">
          <h2>Car</h2>
          <hr>
          <ul>
            <li><a href="acc_honda.php" title="Link">Honda Civic 2018</a></li>
            <li><a href="acc_toyota.php" title="Link">Toyota Corolla 2018</a></li>
            <li><a href="acc_bmw.php" title="Link">BMW 7 series</a></li>
            <li><a href="acc_mercedes.php" title="Link">Mercedes S-Class</a></li>
          </ul>
        </section>
        <section class="menu">
          <h2>Categories</h2>
          <hr>
          <ul>
            <li><a href="interior.php" title="Link">Interior</a></li>
            <li><a href="exterior.php" title="Link">Exterior</a></li>
          </ul>
        </section>
      </div>
    </section>
  <?php
      $result = mysqli_query($mysqli, "SELECT * FROM accessories");
  ?>
  <section class="mainContent">
      
    <?php
      $flag1 = 0;
      $flag2 = 0;
      echo "<div class='productRow'>";
      while ($res = mysqli_fetch_array($result)){
        if($flag1%3 == 0 && $flag2 > 0){
          echo "</div><div class='productRow'>";
        }
        echo "<article class='productInfo'>";
        echo "<div> <img src='".$res['acc_image']."'>"."</div>";
        echo "<p>".$res['acc_name']."</p>";
        echo "<p class='price'>Rs.".$res['acc_price']."</p>";
        echo "<input type='button' name='button' value='Buy' class='buyButton'>";
        echo "</article>";
        $flag1++;
        $flag2++;
      }
      echo "</div>";
    ?>

  </section>
  </div>
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2018 - <strong>MotorShop</strong></div>
</div>
<!-- Main Container Ends -->
</body>
</html>

