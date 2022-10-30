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
			<h2>Messages</h2>
			
		
      <div class="table-responsive">    
    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
    </tr>
  </thead>     
      

			<?php   
    $sql = "SELECT * FROM messages";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        
        
        #debugging print_r($row);
		$id=$row["id"];
        $title1=$row["name"];
        $para1=$row["email"];
        $image1=$row["subject"];
        $message=$row["message"];
      

    ?>        
    <tr>
    <td><?php print $id; ?>
    <a href='mail_delete.php?id=<?php print $id; ?>'>Delete?</a>
    </td>
    <td><?php echo "$title1"; ?></td>
      <td><?php echo "$para1"; ?></td>
      <td><?php echo "$image1"; ?></td>
      <td><?php echo "$message"; ?></td>
    </tr>
     
<?php
    }} else {
        echo "0 results";
    }
$conn->close();
      
    ?>



	

</table>
</div>
</div>
	</body>

</html>
