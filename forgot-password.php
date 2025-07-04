<!DOCTYPE html>
<html>
<head>
	<title>Cartoon Login Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>

<?php
	include "config.php";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$email = $_POST["email"];
        $password = $_POST["password"];
        $npassword = $_POST["npassword"];

        // Check if the new password and confirm password match
        if($password != $npassword){
            $msg = "New Password and Confirm New Password do not match!";
        } else {
            // Check if the email exists in the database
            $sql = "SELECT * FROM registration WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if($num == 1){
                // Update the password in the database
                $sql = "UPDATE registration SET password='$password' WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
                $succ = "Password has been reset successfully!";
                header("location: login-form.php");
            } else {
                $msg = "Incorrect Email!";
            }
        }
	}
?>

	<div class="login-container">
        <a>
		<img src="hero.png.png" alt="Cartoon Image" class="cartoon-image">
        </a>
		<h1 class="title">Kid Education</h1>
		<div class="login-form">
			<form method="POST">
				<div class="input-wrapper">
					Email:<input type="email" id="username" name="email" value="" required>
                    </div>
                    <div class="input-wrapper">
                    New Password:<input type="password" id="password" name="password" value="" minlength="8" required>
				</div>
        <div class="input-wrapper">
                    Confirm New Password:<input type="password" id="password" name="npassword" value="" minlength="8" required>
				</div>
        <div style="margin-left: 30%;">
				<button type="submit" name="Resset">Reset</button>
				<a class="not-register" href="login-form.php">Log in here!</a>
                
</div>    


			</form>
			<p><div>
			<?php if(isset($msg)) { ?>
                <div class="alert" style="color: red;"><?php echo $msg; ?></div>
                
            <?php } ?>

			</div></p>
		
		</div>
	</div>


</body>
</html>