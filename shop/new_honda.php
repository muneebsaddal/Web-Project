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
        <li><a href="shop_acc.php">ACCESSORIES</a></li>
        <li><a href="shop_main.php">NEW CARS</a></li>
        <li><a href="shop_used.php">USED CARS</a></li>
      </ul>
    </nav>
  </header>

  <section class="about-header">
    <div class="hero-header">
      <h1>New Cars</h1>
    </div>
  </section>
  <div id="content">
    <section class="sidebar">
      <a href="shop_main.php"><button class="button1 button11" href="shop_main.php">Clear</button></a>
      <div id="menubar">
        <section class="menu">
          <h2>Brand</h2>
          <hr>
          <ul>
            <li><a href="new_honda.php" title="Link">Honda</a></li>
            <li><a href="new_toyota.php" title="Link">Toyota</a></li>
            <li><a href="new_bmw.php" title="Link">BMW</a></li>
            <li><a href="new_mercedes.php" title="Link">Mercedes</a></li>
          </ul>
        </section>
        <section class="menu">
          <h2>Car Type</h2>
          <hr>
          <ul>
            <li><a href="new_suv.php" title="Link">SUV</a></li>
            <li><a href="new_sedan.php" title="Link">Sedan</a></li>
            <li><a href="new_coupe.php" title="Link">Coupe</a></li>
          </ul>
        </section>
      </div>
    </section>
    
<?php
    $result = mysqli_query($mysqli, "SELECT item_id, item_name, car_type, item_image, item_price FROM new_cars WHERE car_brand = 'Honda'");
?>

  <section class="mainContent">
      
        <?php
          $flag1 = 0;
          $flag2 = 0;

          echo "<div class='productRow'>";
          
          while($res = mysqli_fetch_array($result)){
            
            if ($flag1%3 == 0 && $flag2>0) {
              echo "</div><div class='productRow'>";
            }            
            echo "<article class='productInfo'>";
            echo "<div> <img src='".$res['item_image']."'>"."</div>";
            echo "<p>".$res['item_name']."</p>";
            echo "<p class='price'>Rs.".$res['item_price']."</p>";
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

