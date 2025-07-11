<?php 

?>




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

  <title>KID EDUCATION</title>



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

<body>
  <div class="top_container">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a href="KidEducation-Copy.html">
          <img width="220px" src="/website/mynewwbsite/fanadesh-html/images/1665298850453.png">
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="KidEducation-Copy.html"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="about-Copy.html"> About </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="Course-Copy.html">Course </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="why-Copy.html"> Why Us </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contact-Copy.html">Contact Us</a>
                </li>
               
                <li class="nav-item">
                <?php
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { // checking if user is logged in// if user is logged in, displaying logout button
			?>
			<div class="logout-container">
			<p><?php echo $_SESSION['email']; ?></p>
			<a href="logout.php" class="logout-btn">Logout</a>
			</div>
			<?php
				 }
			 ?>

			
                    </div>
                  
                </li>

              </ul>
            </div>
        </nav>
      </div>
    </header>
    <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h1 style="font-size:40px;" >
            Best way
            to Learn
            Anytime
            &
            Anywhere
          </h1>
          <p>
            Learn at the comfort of your own home,The best online courses you'll find,Limitless learning guaranteed,
            Providing amazing online courses.
          </p>
          <div class="hero_btn-continer">
           
          </div>
        </div>
        <div class="hero_img-container">
          <div>
            <img src="/website/my%20new%20wbsite/fanadesh-html/images/hero.png.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end header section -->

  
  <!-- client section -->
  <section class="client_section layout_padding">
    <h2 >
      Faculties
    </h2>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
              
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="row">
                      <div class="col-md-3">
                        <div class="client_img-box">
                          <img src="/website\mynewwbsite\fanadesh-html\images\client.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="client_detail-box">
                          <h5>
                            Om Mavani
                          </h5>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                          </p>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="carousel-item">
                  <div class="row">
                      <div class="col-md-3">
                        <div class="client_img-box">
                          <img src="/website\my%20new%20wbsite\fanadesh-html\images\team-2.jpg" height="440px" width="350px">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="client_detail-box">
                          <h5>
                            Priyanshu Mavani
                          </h5>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                          </p>
                        </div>
                      </div>
                    </div>
              </div>
             <!-- <div class="carousel-item">
                  <div class="row">
                      <div class="col-md-3">
                        <div class="client_img-box">
                          <img src="images/client.png" alt="">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="client_detail-box">
                          <h5>
                            Alex Du
                          </h5>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                          </p>
                        </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
     
    </div>-->
  </section>


  <!-- end client section -->


    
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
                  dolor sit amet, consectetur magna aliqua. Ut enim ad minim veniam, quisdotempor incididunt r 
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
                    dolor sit amet, consectetur magna aliqua. quisdotempor incididunt ut e 
                    
                
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

