<?php
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { // checking if user is logged in// if user is logged in, displaying logout button
			?>
			<div class="logout-container">
			<p><?php echo $_SESSION['email']; ?>!</p>
			<a href="logout.php" class="logout-btn">Logout</a>
			</div>
			<?php
				 }
			 ?>

			 <!-- logout.php code -->
			<?php
			session_start(); // adding session_start() method
			session_unset(); // unsetting all session variables
			session_destroy(); // destroying the session
			header("location: kideducation.html"); // redirecting to the login page
			exit;
			?>