
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	$_SESSION['message'] = "Please login to access this page!";
	exit;
}
if (!isset($_SESSION['admin'])) {
	header('Location: login.php');
	$_SESSION['message'] = "Use an admin account to access this page!";
	exit;
}
?>
<?php 
    print_r($_GET);
    $product_id= $_GET["product_id"]; ?>
<?php include("../pages/setup.php");?> 
<?php include("admin_nav.php");?> 



	<div class="content">
	<h2>Edit page</h2>
	
    <?php   
    $sql = "SELECT * FROM product where product_id= $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc(); 
        #debugging print_r($row);
        $product_id=$row["product_id"]; 
        $fruit=$row["fruit"];
        $image=$row["image"];
        $color=$row["color"];
        $price=$row["price"];
      
    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>



    <form action="products_edit_action.php" method="post" >




<!-- product ID -->

<div class="row">
      <div class="col-25">
        <label for="prints_id">Product ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="product_id" name="product_id" value="<?php print $product_id ?>">
      </div>
    </div>


<!-- Name -->

    <div class="row">
      <div class="col-25">
        <label for="title1">Fruit</label>
      </div>
      <div class="col-75">
        <input type="text" id="fruit" name="fruit" value="<?php print $fruit  ?>">
      </div>
    </div>
    

<!-- Description -->

    <div class="row">
      <div class="col-25">
        <label for="img1">Color</label>
      </div>
      <div class="col-75">
        <input type="text" id="color" name="color" value="<?php print $color ?>">
      </div>
    </div>

    <!-- Price -->

    <div class="row">
      <div class="col-25">
        <label for="img1">Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="price" name="price" value="<?php print $price ?>">
      </div>
    </div>

    <!-- Image -->

    <div class="row">
      <div class="col-25">
        <label for="img1">Image</label>
      </div>
      <div class="col-75">
        <input type="text" id="image" name="image" value="<?php print $image ?>">
      </div>
    </div>
    
<br>

    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>

