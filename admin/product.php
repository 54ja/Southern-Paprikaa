
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
<?php include("../pages/setup.php");?> 
<?php include("../admin/admin_nav.php");?>
  <body>

<style>
#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #customers tr:nth-child(even){background-color: #f2f2f2;}
  
  #customers tr:hover {background-color: #ddd;}
  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: grey;
    color: white;
  }</style>

<section class="pb-5"> 
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header border-bottom">
                  <h3 class="h4 mb-0">All form elements</h3>
        
  <table id="customers">
    <tr>
      <th>ID</th>
      <th>Fruit</th>
      <th>Color</th>
      <th>Price</th>
      <th>Image</th>
    </tr>
<?php  
   // $message= $_SESSION["message"];
    //  print $message;
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
     while($row = $result->fetch_assoc()) {
        #print_r($row); #debugging 
        $product_id=$row["product_id"]; 
        $fruit=$row["fruit"];
        $image=$row["image"];
        $color=$row["color"];
        $price=$row["price"];
?>
    <tr>
    <td><?php print $product_id; ?>
          <a href='product_delete.php?prints_id=<?php print $product_id; ?>'>Delete?</a>
          <a href='product_edit.php?prints_id=<?php print $product_id; ?>'>Edit</a>
          </td>
      <td><?php print $fruit; ?></td>
      <td><?php print $color; ?></td>
      <td>$<?php print $price; ?> per kg</td>
      <td><img src="../images/<?php echo $image; ?>" alt="Picture of product" width="10%" height="10%"></td>
    </tr>
<?php
    }
    } else {
        echo "There are no records in this table";
    }
$conn->close();
?>
      </table>
      </div>
            </div>
          </div>
        </div>
    </div>
