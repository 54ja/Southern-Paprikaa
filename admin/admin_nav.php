<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="admin.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link  rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"/>
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
			<ul class="nav navbar-nav navbar-secondary flex-row justify-content-center flex-nowrap">
			  <li class="nav-item">
				<a class="nav-link nav-social-icon" target="_blank" href="https://www.facebook.com/MahurangiCollege/"><i class="fa fa-facebook-square"></i></a>
			  </li>
		  </div>
		</nav>
	</head>