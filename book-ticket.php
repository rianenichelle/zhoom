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
  <link href="assets/css/ionicons.css" rel="stylesheet"> 

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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

    <div class="booking-header"></div>

    <!-- ======= Book A Ticket Section ======= -->
    <section id="book-a-ticket" class="book-a-ticket">
        <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2></h2>
            <p>Book a Ticket</p>
        </div>

        <form action="forms/book-ticket.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            <div class="form-row">
            
            <div class="col-lg-4 col-md-6 form-group">
                <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Number of Tickets" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
                <select name="date" class="custom-select" id="event" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <option value="">Select Event</option>
                    <option value="">Frozen 2</option>
                    <option value="">Sinulog Festival</option>
                </select>
                <div class="validate"></div>
            </div>
            <!---SCHEDULE SHOULD ONLY APPEAR IF IT'S A MOVIE-->
            <div class="col-lg-4 col-md-6 form-group">
                <select name="date" class="custom-select" id="sched" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <option value="">Select Schedule</option>
                    <option value="">M 2:00PM-3:35</option>
                </select>
                <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <select name="date" class="custom-select" id="payment" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <option value="">Choose Payment Method</option>
                  <option value="cod">Cash on Delivery</option>
                  <option value="">Paypal</option>
                  <option value="">Debit Card/Credit Card</option>
              </select>
              <div class="validate"></div>
          </div>
            </div>
            
            <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your purchase. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Book Ticket</button></div>
        </form>

        </div>
    </section>
    
    <!-- ======= End Book A Ticket ======= -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>

