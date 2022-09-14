<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="admin.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link  rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"/>
	
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	</head>
	

	<body class="loggedin">

		 
		
		  
		
		
		
		
		
		<nav class="navbar sticky-top navbar-expand-md navbar-light nav">
		  <!-- <div class="mx-auto d-sm-flex d-block flex-sm-nowrap"> --> 
		 <h1>Website Title</h1>
		  <button class="navbar-toggler mr-left custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
			<ul class="nav navbar-nav navbar-primary w-100 ml-auto">
			  <li class="nav-item">
				<a class="nav-link" href="home.php">
				  <span>Home</span>
				  <span class="sr-only">(current)</span>
				</a>
			  </li>
 <?php if(isset($_SESSION['admin'])){?>			
			  
	<li class="nav-item">
				<a class="nav-link" href="order.php">
				  <span>Orders</span>
				</a>
			  </li>
			<?php } ?>	 
			<?php if(isset($_SESSION['admin'])){?>			
			  
			  <li class="nav-item">
						  <a class="nav-link" href="Mail.php">
							<span>Messages</span>
						  </a>
						</li>
					  <?php } ?>	


<?php if(isset($_SESSION['admin'])){
	?>			
			  <li class="nav-item">
				<a class="nav-link" href="home copy.php">
				  <span>Page Edit</span>
				</a>
			  </li>
			<?php } ?>	 
			  <li class="nav-item">
				<a class="nav-link" href="profile.php">
				  <span>Profile</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="logout.php">
				  <span>Logout</span>
				</a>
			  </li>
			</ul>
		  </div>
		</nav>
	</head>