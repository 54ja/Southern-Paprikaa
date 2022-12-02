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
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Subject</th>
      <th>Message</th>
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
        echo "0 messages";
    }
$conn->close();
      
    ?>



	

</table>
</div>
</div>
	</body>

</html>
