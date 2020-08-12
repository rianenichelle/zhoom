<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Zhoom</title>


  <!-- Favicons -->
 
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/ionicons.css" rel="stylesheet"> 
  <link href="assets/css/responsive.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/profile-style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index-customer.php">Zhoom</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index-customer.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index-customer.php">Home</a></li>
          <li><a href="index-customer.php#sevents">Suggested Events</a></li>
          <li><a href="index-customer.php#about">About</a></li>
          <li><a href="index-customer.php#aevents">All Events</a></li>
          <li><a href="profile-customer.php#bookmarks">Bookmarks</a></li>
          <div class="dropdown">
          <li class="book-a-ticket text-center dropdown"><a href="profile-customer.php">Welcome, [name]</a></li>
            <div class="dropdown-content">
              <a href="cart.php"><i class="ion-ios-cart"></i>View Cart</a>
              <a href="phistory.php"><i class="ion-clock"></i>Purchase History</a>
              <a href="suggest.php"><i class="ion-android-calendar"></i>Suggest An Event</a>
              <a href="editprof.php"><i class="ion-android-color-palette"></i>Edit Profile</a>
            </div>
          </div>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>
  
  <!-- ======= End Header ======= -->

  <main id="main">
	
	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					<div class="intro">
						<div class="profile-img"><img src="assets/img/profile-img.jpg" alt=""></div>
                        <h2><b>Margaret Oquias</b></h2>
						<ul class="information margin-tb-30">
                            <li><b>EMAIL: </b>mymith@mywebpage.com</li>
                            <li><b>BIRTHDAY: </b>August 25, 1987</li>
                            <li><b>LOCATION: </b>Cebu, Philippines</li>
                            <li><b>PHONE: </b>09XXXXXXXX</li>
						</ul>
						<ul class="social-icons">
							<li><a href="#"><i class="ion-social-instagram"></i></a></li>
							<li><a href="#"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						</ul>
					</div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->
	
	<section id="bookmarks" class="portfolio-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h2><b>Bookmarks</b></h2s>
						<h6 class="font-lite-black">MY EVENTS</h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="portfolioFilter clearfix margin-b-80">
						<a href="#" data-filter="*" class="current"><b>ALL</b></a>
                        <a href="#" data-filter=".filter-movies"><b>MOVIE PREMIERES</b></a>
                        <a href="#" data-filter=".filter-festivals"><b>FESTIVALS</b></a>
                        <a href="#" data-filter=".filter-arts"><b>ARTS</b></a>
                        <a href="#" data-filter=".filter-concerts"><b>CONVENTIONS</b></a>
						<a href="#" data-filter=".filter-concerts"><b>CONCERTS</b></a>
                        <a href="#" data-filter=".filter-community"><b>COMMUNITY</b></a>
                        <a href="#" data-filter=".filter-school"><b>SCHOOL</b></a>
					</div><!-- portfolioFilter -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
		<div class="portfolioContainer">
		
			<div class="p-item filter-movies">
				<a href="event.php" >
                    <img src="assets/img/portfolio-1-600x400.jpg" alt=""></a>
                    <div class="member-info-content">
                          <h4>Frozen 2</h4>
                          <span>Ayala Center, Cebu City</span>
                    </div>
			</div><!-- p-item -->
			
			<div class="p-item filter-concerts">
				<a href="event.php">
                    <img src="assets/img/portfolio-1-600x400.jpg" alt=""></a>
                    <div class="member-info-content">
                        <h4>Taylor Swift: City of Lover Tour</h4>
                        <span>Manila, Philippines</span>
                    </div>
			</div><!-- p-item -->
			
			<div class="p-item filter-conventions">
				<a href="event.php">
                    <img src="assets/img/portfolio-2-600x400.jpg" alt=""></a>
                    <div class="member-info-content">
                        <h4>Comic Con</h4>
                        <span>Manila, Philippines</span>
                    </div>
			</div><!-- p-item -->
			
			<div class="p-item filter-festivals">
				<a class="img" href="event.php">
                    <img src="assets/img/portfolio-1-600x400.jpg" alt=""></a>
                    <div class="member-info-content">
                        <h4>Sinulog</h4>
                        <span>Cebu City, Philippines</span>
                    </div>
			</div><!-- p-item -->
			
			<div class="p-item branding filter-movies">
				<a href="event.php">
                    <img src="assets/img/portfolio-3-600x400.jpg" alt=""></a>
                    <div class="member-info-content">
                        <h4>Hamilton: An American Musical</h4>
                        <span>Disney+</span>
                    </div>
			</div><!-- p-item -->
			
			<div class="p-item filter-community">
				<a href="event.php">
                    <img src="assets/img/portfolio-4-600x400.jpg" alt=""></a>
                    <div class="member-info-content">
                        <h4>Trivia Night</h4>
                        <span>Boy Zugba, Cagayan de Oro</span>
                    </div>
			</div><!-- p-item -->
			
			<div class="p-item filter-arts">
				<a href="event.php">
                    <img src="assets/img/portfolio-1-600x400.jpg" alt=""></a>
                    <div class="member-info-content">
                        <h4>SOFT No. 3</h4>
                        <span>Chingkeetea, Cagayan de Oro</span>
                    </div>
			</div><!-- p-item -->
				
			<div class="p-item filter-concerts">
				<a href="event.php">
                    <img src="assets/img/portfolio-1-600x400.jpg" alt=""></a>
                    <div class="member-info-content">
                        <h4>Ben&Ben Concert</h4>
                        <span>Ayala Center, Cebu City</span>
                    </div>
			</div><!-- p-item -->

			<div class="p-item filter-arts">
				<a class="img" href="event.php">
                    <img src="assets/img/portfolio-1-600x400.jpg" alt=""></a>
                    <div class="member-info-content">
                        <h4>Be More Chill</h4>
                        <span>Resorts World Manila, Manila</span>
                    </div>
			</div><!-- p-item -->
		
		</div><!-- portfolioContainer -->
		
	</section><!-- portfolio-section -->
	

      <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Zhoom</h3>
              <p>
                University of San Carlos <br>
                Talamban, Cebu City <br>
                Philippines<br><br>
        
                <strong>Email:</strong> zhoomph@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index-customer.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index-customer.php#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Search the site</h4>
            <p>Find more at the Zhoom site</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Zhoom PH</span></strong>. All Rights Reserved 2020
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/tether.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>	
  <script src="assets/js/scripts.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>