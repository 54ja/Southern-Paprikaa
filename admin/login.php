<!DOCTYPE html>

<?php session_start(); 



 ?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link href="login.css" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		
		
			
	</head>
	
		
		<div class="login">
				
			
					<h1>Login</h1>
					<ul>
						<li><a href="../pages/index.php">Home</a></li>
						<li><a href="register.php">Register</a></li>
						
					  </ul>
		
		
		
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<?php if(isset($_SESSION['message'])){ 
					echo $_SESSION['message'];
					unset($_SESSION['message']); }?>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>