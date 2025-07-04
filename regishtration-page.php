<!DOCTYPE html>
<html>
<head>
	<title>Cartoon Registration Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>

<?php
	$showAlert=false;
	
	$ShowError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
		include "config.php";
		$username = $_POST["fullname"];
		$password = $_POST["password"];
		$cpassword = $_POST["cpassword"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$exists=false;
		if($password != $cpassword){
            $msg = "Password and Confirm Password do not match!";
        } 

		if(($password == $cpassword)&& $exists==false){
			$sql = "INSERT INTO `registration` ( `fullname`, `password`, `email`, `phone`) VALUES ('$username', '$password', '$email', '$phone')";
			$result = mysqli_query($conn,$sql);
			if($result){
				$showAlert = true; 
				header("location: login-form.php");
			}
			
		}
		else{
			$ShowError = true;
		}
	}
?>



	<div class="login-container">
		    <img src="hero.png.png" alt="Cartoon Image" class="cartoon-image">
        </a>
		<h1 class="title">Registration</h1>
		<div class="login-form">
			<form method="POST">
				<div class="input-wrapper">
					Student Name:<input type="text" id="fullname" name="fullname" value="" required>
                </div>
				<div class="input-wrapper">
					Password:<input type="password" id="password" name="password" value="" minlength="8" required>
				</div>
				<div class="input-wrapper">
					Confirm Password:<input type="password" id="cpassword" name="cpassword" value="" minlength="8" required>
				</div>
				<div class="input-wrapper">
					Email:<input type="email" id="email" name="email" value="" required>
                </div>
                <div class="input-wrapper">
                    Phone:<input type="tel" id="phone" name="phone" value="" required>
                </div>
				
				<button style="margin-left: 33%;" type="submit" name="submit">Register</button>
                
                <p style="margin-left: 15%;">Already have an account?<a class="not-register" href="login-form.php">Log in here</a></p>



			</form>
			<?php if(isset($msg)) { ?>
                <div class="alert" style="color: red;"><?php echo $msg; ?></div>
               
            <?php } ?>
		</div>
	</div>

	


</body>
</html>
