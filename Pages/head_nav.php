<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Southern Paprika</title>
  <link href="../css/style.css" rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/b901cbb01d.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="images/cap.png">
  
</head>




<nav class="navbar sticky-top navbar-expand-md navbar-light nav">
  <!-- <div class="mx-auto d-sm-flex d-block flex-sm-nowrap"> --> 
  <a href="index.php"><img class="logo" src="../images/logo.png"></a>
  <button class="navbar-toggler mr-left custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav navbar-primary w-100 ml-auto">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">
          <span>Home</span>
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="shop.php">
          <span>Shop</span>
        </a>
</li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">
          <span>Contact</span></a>
      </li>
      
      <?php if(isset($_SESSION['loggedin'])){?>	
      <li class="nav-item">
        <a class="nav-link" href="../admin/logout.php">
          <span>Logout</span>
        </a>
      </li>
      <?php } ?>

      <?php if(isset($_SESSION['loggedin'])){} else {?>	
      <li class="nav-item">
        <a class="nav-link" href="../admin/login.php">
          <span>Login</span>
        </a>
      </li>
      <?php } ?>
    </ul>
    <ul class="nav navbar-nav navbar-secondary flex-row justify-content-center flex-nowrap">
      <li class="nav-item">
        <a class="nav-link nav-social-icon" target="_blank" href="https://www.facebook.com/MahurangiCollege/"><i class="fa fa-facebook-square"></i></a>
      </li>
  </div>
</nav>