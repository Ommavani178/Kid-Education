<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Kid Education</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body class="sub_page">
  <div class="top_container ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="KidEducation.html">
            <span>
              KID EDUCATION
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="KidEducation.html"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="about.html"> About </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="Course.html"> Course </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="why.html"> Why Us </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>

              </ul>
            </div>
        </nav>
      </div>
    </header>

  </div>
  <!-- end header section -->


  


  <!-- contact section -->

  <section class="contact_section ">

    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <div class="d-flex justify-content-center d-md-block">
            <h2>
              Contact Us
            </h2>
          </div>
          <form method="POST">
            <div class="contact_form-container">
              <div>
                <div>
                  <input type="text" name="Name" id="name" placeholder="Name" require>
                </div>
                <div>
                  <input type="email" name="email" id="email" placeholder="Email" require>
                </div>
                <div>
                  <input type="text" name="phone"  id="phone" placeholder="Phone Number" require>
                </div>
                <div class="mt-5">
                  <input type="text" name="message" id="message" placeholder="Message a Problem or Feedback" require>
                </div>
                <div class="mt-5">
                  <button type="submit" name="button">
                    send
                  </button>
                </div>
              </div>

            </div>

          </form>
          <?php

// include "config.php";

// // Check if the connection was successful
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Get the form data
// $fname = $_POST["Name"];
// $femail = $_POST["email"];
// $fphone = $_POST["phone"];
// $fmessage = $_POST["message"];

// // Insert the data into the database
// // $sql = "INSERT INTO contactus (Name, email, phone, message) VALUES ('$fname', '$femail', '$fphone', '$fmessage')";
// //$sql = "INSERT INTO contactus VALUES ('$fname', '$femail', '$fphone', '$fmessage')";
// $sql = "insert into contactus values('','$fname','$femail','$fphone','$fmessage') ";
// if ($conn->query($sql) == TRUE) {
//     echo "Message successfully delivered";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// // Close the database connection
// $conn->close();

?>
<?php

$c=mysqli_connect("localhost","root","");
if($c)
{
mysqli_select_db($c, "ad");
if(isset($_POST["button"]))
{
  $fname = $_POST["Name"];
  $femail = $_POST["email"];
  $fphone = $_POST["phone"];
  $fmessage = $_POST["message"];
$ins= "insert into contactus values('','$fname','$femail','$fphone','$fmessage') ";
if(mysqli_query($c, $ins))
echo "Name is :-$fname<br>Email is:-$femail<br>Phone number is:-$fphone<br>Feedback is:-$fmessage";
else
echo mysqli_error($c);

}
}
mysqli_close($c);
?>


        </div>
        <div class="col-md-6">
          <div class="contact_img-box">
            <img src="images/students.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
  <section class="info_section layout_padding-top">
    <div class="info_logo-box">
      <h2>
          Kid Education
      </h2>
    </div>
      <div class="container layout_padding2">
        <div class="row">
          <div class="col-md-3">
            <h5>
                About Us                                                                             
            </h5>
           <p>
              We Providing a Course for kid in Three Language 
              1.English 2.Hindi 3. Gujrati.
           </p>
          </div>
          <div class="col-md-3">
            <!--<h5>
                Useful Link 
            </h5>
            <ul>
              <li>
                <a href="">
                    Video games
                </a>
              </li>
              <li>
               <a href="">
                  Remote control
               </a>
              </li>
              <li>
                <a href="">
                    3d controller
                </a>-->
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>
                Contact Us
            </h5>
            <p>
                If Any Kind Of Problem please Contect us on:- Kideducation16@gmail.com
                
            
              </p>
          </div>
        </div>
      
      <div class="container">
        
          <div class="social_container">
             
              <div class="social-box">
              <!--  <a href="">
                  <img src="images/fb.png" alt="">
                </a>
  
                <a href="">
                  <img src="images/twitter.png" alt="">
                </a>
                <a href="">
                  <img src="images/linkedin.png" alt="">
                </a>-->
                <a href="">
                  <img src="images/instagram.png" alt="">
                </a>
              </div>
            </div>
      </div>
    </section>

    
    
<!-- footer section -->
<section class="container-fluid footer_section">
<p>
  Copyright &copy; 2023 All Rights Reserved By
  <a href="KidEducation.html">Kid Education</a>
</p>
</section>
<!-- footer section -->

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>


</body>

</html>