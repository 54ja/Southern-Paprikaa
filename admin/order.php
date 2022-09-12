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


<div class="content">
			<h2>Orders</h2>
			
			
      <table id="customers">
        <tr>
        <th>Order ID</th>
          <th>Fruit</th>
          <th>Color</th>
          <th>Weight</th>
        </tr>

			<?php   
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        
        
        #debugging print_r($row);
		    $id=$row["product_id"];
        $title1=$row["fruit"];
        $para1=$row["color"];
        $image1=$row["weight"];
      

        
?>        
        <td><?php echo "$id"; ?> </td>
          <td><?php echo "$title1"; ?> </td>
          <td><?php echo "$para1"; ?></td>
          <td><?php echo "$image1"; ?></td>
      
        </tr>
        
     
<?php
    }} else {
        echo "0 results";
    }
$conn->close();
      
    ?>


</table>
		</div>
	</body>
</html>
