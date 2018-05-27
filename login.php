<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<style type="text/css">
body {
  font-family: 'Ubuntu', sans-serif;
  background-color: #000000;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  font-style: normal;
  font-weight: 200;
  color: #dddddd;
}
form {
  padding-top: 3%;
  width: 50%;
  margin:auto;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #3b3b3b;
    color: white;
    padding: 14px 20px;
    vertical-align: center;
    margin: 10px 135px;
    border: none;
    cursor: pointer;
    width: 50%;
    border-radius: 2px;
    font-size: 14px;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: auto;
    width: 50%;
}

img.avatar {
    width: 60%;
    border-radius: 50%;
}

.container {
    width: 100%;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
<!-- Main Container -->
<div class="container"> 
  <!-- Navigation -->
  <header> <a href="index.html">
    <section class="logo"><img src="images/logo-header.png" width="100%" height="100%"></section>
  </a>
    <nav>
      <ul>
        <li><a href="shop/shop_main.php">SHOP</a></li>
        <li><a href="about/about.html">ABOUT</a></li>
        <li> <a href="contact/contact.html">CONTACT</a></li>
        <li> <a href="signup.php">SIGNUP</a></li>
      </ul>
    </nav>
  </header>
  <!-- Hero Section -->
  <section class="about-header">
    <div class="hero-header">
      <h1>Login</h1>
    </div>
  </section>
  <section class="content">
    <form action="/action_page.php">
  <div class="imgcontainer">
    <img src="images/logo2.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    <button type="button">Cancel</button>
  </div>
</form>
  </section>
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2018 - <strong>MotorShop</strong></div>
</div>
<!-- Main Container Ends -->
</body>
</html>
