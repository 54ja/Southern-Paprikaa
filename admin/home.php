<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	$_SESSION['message'] = "Please login to access this page!";
	exit;
}

// Check connection
if (!isset($_SESSION['admin'])) {
	
}
else {
  echo "Logged in as admin"; 
}
  ?>



<?php include("../pages/setup.php");?> 
<?php include("admin_nav.php");?> 




			<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
			
		