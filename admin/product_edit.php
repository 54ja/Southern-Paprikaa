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

<style>
 /* Style inputs, select elements and textareas */
input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

/* Style the container */
.container {
  border-radius: 5px;
  /*background-color: #f2f2f2;*/
  padding: 20px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
} </style>



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


	


    <!-- product id -->

    <form action="product_edit_action.php" method="post" >
    <div class="row">
      <div class="col-25">
        <label for="product_id">Product ID</label>
      </div>
      <div class="col-75">
    <?php print $product_id ?>
          <input type="hidden" id="product_id" name="product_id" value= "<?php print $product_id ?>">
      </div>
    </div>


    <!-- fruit -->
    <div class="row">
      <div class="col-25">
        <label for="title1">Fruit</label>
      </div>
      <div class="col-75">
        <input type="text" id="fruit" name="fruit" value="<?php print $fruit ?>">
      </div>
    </div>

    <!-- color -->
    <div class="row">
      <div class="col-25">
        <label for="para1">Color</label>
      </div>
      <div class="col-75">
        <input  type="text" id="color" name="color" value="<?php print $color ?>">
      </div>
    </div>

    <!-- image -->
    <div class="row">
      <div class="col-25">
        <label for="image1">Image</label>
      </div>
      <div class="col-75">
        <input type="text" id="image" name="image" value="<?php print $image ?>">
      </div>
    </div>

    <!-- price -->
<div class="row">
      <div class="col-25">
        <label for="image1">price</label>
      </div>
      <div class="col-75">
        <input type="text" id="price" name="price" value="<?php print $price ?>">
      </div>
    </div>
    
    
    
    <!-- submit -->
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>

	</body>
</html>

