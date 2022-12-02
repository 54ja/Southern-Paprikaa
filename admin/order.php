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
<?php include("admin_nav.php");?> 

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
                  <h3 class="h4 mb-0"> <?php if(isset($_SESSION['message'])){ 
					echo $_SESSION['message'];
					unset($_SESSION['message']); }?></h3>


<table id="customers">
        <tr>
        <th>Order ID</th>
          <th>Product</th>
          <th>Account</th>
          <th>Date Created</th>
        </tr>

         
        
<?php  
   // $message= $_SESSION["message"];
    //  print $message;
    $sql =  "SELECT *
    FROM orders
    INNER JOIN accounts ON orders.account_id = accounts.id INNER JOIN product ON orders.product_id = product.product_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
     while($row = $result->fetch_assoc()) {
        #print_r($row); #debugging 
        $orders_id=$row["orders_id"]; 
        $color=$row["color"];
        $fruit=$row["fruit"];
        $account=$row["username"];
        $date=$row["date_created"];
?>
    <tr>
    <td><?php print $orders_id; ?>
          <a href='order_delete.php?orders_id=<?php print $orders_id; ?>'>Delete?</a>
          </td>
      <td><?php print $color; ?> <?php print $fruit; ?></td>
      <td><?php print $account; ?></td>
      <td><?php print $date; ?></td>
    </tr>
<?php
    }
    } else {
        echo "There are no current orders";
    }
$conn->close();
?>
      </table>
      </div>
            </div>
          </div>
        </div>
    </div>
