<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width = device-width, initial-scale=1.0">
	<title>DryClean Website</title>
	<link rel="stylesheet" href="style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
	

</head>
<body>

<!-----About page + nav----->

	<section class="sub-header">
		<nav>
			<a href="dryClean.php"><img src="img/logo1.jpg"></a>
				<div class = "nav-links" id="navLinks">
				<i class="bi bi-x-lg" onclick="hideMenu()"></i>
						<ul>
							<li><a href="dryClean.php">HOME</a></li>
							<li><a href="about.php">ABOUT</a></li>
							<li><a href="services.php">SERVICES</a></li>
							<li><a href="prices.php">PRICES</a></li>
							<li><a href="contact.php">CONTACT</a>
					
						</ul>
						
				</div>
				<i class="bi bi-list" onclick="showMenu()" ></i>
		</nav>
		<h1>About Us</h1>

	</section>


	<?php 
							/*if (isset($_SESSION["useruid"])) {
								echo ("<li><a href="dryClean.php">Profile Page</a></li>");
								echo ("<li><a href="includes/logout.inc.php">LOG OUT</a></li>");
							} 
							else{
								echo ("<li><a href="signup.php">SIGN-UP</a></li>");
								echo ("<li><a href="login.php">LOG-IN</a></li>");
							}*/
							?>
