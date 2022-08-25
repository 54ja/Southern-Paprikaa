<!DOCTYPE html>
<?php session_start(); ?>
<script type="text/javascript">
    var password = "please";
    var x = prompt("Enter in the password "," ");
    if (x.toLowerCase() == 1234) {
     alert("Success!  \n \n Logging in");


    }
    else {
        alert("Incorrect password  \n \n Redirecting to homepage");
     window.location = "../pages/index.php";
    }

   
    </script>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="login.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="register">
			<h1>Register</h1>
			<form action="register.php" method="post" autocomplete="off">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<label for="email">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="email" name="email" placeholder="Email" id="email" required>
				<?php if(isset($_SESSION['message'])){ 
					echo $_SESSION['message'];
					unset($_SESSION['message']); }?>
				<input type="submit" value="Register">
			</form>
		</div>
	</body>
</html>