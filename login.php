
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

<!-----Login page + nav----->

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
							<li><a href="contact.php">CONTACT</a></li>
						</ul>
				</div>
				<i class="bi bi-list" onclick="showMenu()" ></i>
		</nav>
		<h1>Log In</h1>
	</section>


<!-------Login page content------->

	<section class="signup-form">
		<div  class="signup-form-form">
		<form action="includes/login.inc.php" method="post">
			<input type="text" name="uid" placeholder="username / email...">
			<input type="password" name="pwd" placeholder="password...">
			<br>
			<button type="submit" name="submit" class="web-btn explore-btn">Log In</button>
		</form>
		</div>

		<?php 

		if (isset($_GET['error'])) {
			if ($_GET['error'] == "emptyinput") {
				echo "<p>Fill in all fields!</p>";
			}
			else if ($_GET['error'] == "wronglogin") {
				echo "<p>Incorrect login info!</p>";
			}
		
		}

		?>

	</section>


<?php
	include_once 'footer.php';
?>