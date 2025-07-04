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
	$login = false;
	$ShowError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
		include "admin_config.php";
        $email = $_POST["email"];
		$password = $_POST["password"];
		
		$sql = "Select * from admin where email='$email' AND password='$password' ";
		$result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
		if($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            header("location: admin.php");
        } else {
            $ShowError = true;
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
					Email:<input type="email" id="username" name="email" value="" required <?php if(isset($_POST["email"]) && !$login) { ?>style="border-color: red;"<?php } ?>>
  <?php if(isset($_POST["email"]) && !$login) { ?><br><span style="color: red;">Incorrect email!</span><?php } ?>
                    </div>
                    <div>
                    Password:<input type="password" id="password" name="password" value="" minlength="8" required <?php if(isset($_POST["password"]) && !$login) { ?>style="border-color: red;"<?php } ?>>
  <?php if(isset($_POST["password"]) && !$login) { ?><br><span style="color: red;">Incorrect password!</span><?php } ?>
				</div>
				<button type="submit" class="btn btn-primary" name="login">Login</button>
                
               
			</form>
			
		</div>
	</div>

	

	
</body>
</html>
