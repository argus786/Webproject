<?php
	include_once 'subheader.php';
?>

<!-------Contact page content------->
	
	<section class="location">
	
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.2947714291486!2d90.42829581536336!3d23.80811489248514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7b56de28abb%3A0x0!2zMjPCsDQ4JzI5LjIiTiA5MMKwMjUnNDkuNyJF!5e0!3m2!1sen!2sbd!4v1630510860553!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

	</section>



	<section class="contact-us">
		<div class="row">
			<div class="contact-col">
				<div>
					<i class="bi bi-house-fill"></i>
					<span>
						<h5>ABC road, 69 Building </h5>
						<p>Dhaka, Bangladsh</p>
					</span>
				</div>

				<div>
					<i class="bi bi-telephone-fill"></i>
					<span>
						<h5>+880 1730-715672 </h5>
						<p>Sunday to Thursday, 10am - 6pm</p>
					</span>
				</div>

				<div>
					<i class="bi bi-envelope-fill"></i>
					<span>
						<h5>ahamed.atik@yahoo.com</h5>
						<p>email us for any query</p>
					</span>
				</div>
			</div>

		<div class="contact-col">

			<form action="contactinfo.php" method="post">
				<input type="text" name = "name" placeholder="enter your name" required>
				<input type="email" name = "email" placeholder="enter your email address" required>
				<input type="tel" name = "tele" placeholder="enter contact number" required>
				<textarea rows="8" name = "message" placeholder="Message" required></textarea>
				<button type="submit" class="web-btn explore-btn">Send Message</button>
			</form>

		</div>


		</div>
	</section>



<!-------Footer------->
	<section class="footer">
		<h4>See You Soon</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
		<div class="icons">
			<i class="bi bi-facebook"></i>
			<i class="bi bi-instagram"></i>
			<i class="bi bi-twitter"></i>
		</div>
		<p>Made with <i class="bi bi-heart"> </i>by Atik Ahamed</p>
	</section>

<!------JS for toggle menu------->
	<script type="text/javascript">

		var navLinks = document.getElementById("navLinks");

	    /*to show menu*/
		function showMenu() {
			navLinks.style.right = "0";
		}
	    /*to hide menu**/
	    function hideMenu() {
	        navLinks.style.right = "-200px";
	    }

	</script>

</html>