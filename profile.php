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
							<li><a href="service.php">SERVICES</a></li>
							<li><a href="prices.php">PRICES</a></li>
							<li><a href="contact.php">CONTACT</a></li>
							<li><a href="">Profile Page</a></li>
							<li><a href="dryClean.php">LOGOUT</a></li>
						</ul>
				</div>
				<i class="bi bi-list" onclick="showMenu()" ></i>
		</nav>
		<h1>Howdy User!</h1>

	</section>


<section>
	




</section>


<!-------Place Order------->

	<section class="testimnoial">
		<h1>Place Order Here</h1>
		<p>Tell us what you want clean and we will come get it for you</p>
		<hr size="5" width="100%" color="#F9F9F9">
		</div>
	</section>

	<section class="signup-form">
		<div  class="signup-form-form">
		<form action="order.php" method="post">
			<input type="text" name="name" placeholder="full name...">
			<input type="text" name="email" placeholder="email...">
			<input type="text" name="tele" placeholder="tele...">
			<br>
			<textarea rows="8" name = "placedorder" placeholder="order detail..."></textarea>
			<br>
			<button type="submit" name="submit" class="web-btn explore-btn">Place Oder</button>
		</form>
		</div>
	</section>


<?php
	include_once 'footer.php';
?>
