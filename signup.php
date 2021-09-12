
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

<!-----Sign Up page + nav----->

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
		<h1>Sign-Up</h1>

	</section>


<!-------Sign Up page content------->

	<section class="signup-form">
		<div  class="signup-form-form">
		<form action="includes/signup.inc.php" method="post">
			<input type="text" name="name" placeholder="full name...">
			<input type="text" name="email" placeholder="email...">
			<input type="text" name="uid" placeholder="username...">
			<input type="password" name="pwd" placeholder="password...">
			<input type="password" name="pwdrepeat" placeholder="repeat password...">
			<br>
			<button type="submit" name="submit" class="web-btn explore-btn">Sign Up</button>
		</form>
		</div>

		<?php 

		if (isset($_GET['error'])) {
			if ($_GET['error'] == "emptyinput") {
				echo "<p>Fill in all fields!</p>";
			}
			else if ($_GET['error'] == "invaliduid") {
				echo "<p>Choose a proper username!</p>";
			}
			else if ($_GET['error'] == "invalidemail") {
				echo "<p>Choose a proper email!</p>";
			}
			else if ($_GET['error'] == "passwordsdontmatch") {
				echo "<p>Passwords don't match!</p>";
			}
			else if ($_GET['error'] == "stmtfailed") {
				echo "<p>Something went wrong, try again</p>";
			}
			else if ($_GET['error'] == "usernametaken") {
				echo "<p>User name already taken!</p>";
			}
			else if ($_GET['error'] == "none") {
				echo "<p>You have signed up</p>";
			}
		}


	?>
	</section>

	


<?php
	include_once 'footer.php';
?>