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

      <h1 class="logo mr-auto"><a href="index-seller.php">Zhoom</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index-seller.php">Home</a></li>
          <li><a href="index-seller.php#about">About</a></li>
          <li><a href="index-seller.php#aevents">Events</a></li>
          <li><a href="profile-seller.php#bookmarks">Bookmarks</a></li>
          <div class="dropdown">
          <li class="book-a-ticket text-center dropdown"><a href="profile-seller.php">Welcome, [name]</a></li>
            <div class="dropdown-content">
              <a href="cart.php"><i class="ion-ios-cart"></i>View Cart</a>
              <a href="phistory.php"><i class="ion-clock"></i>Purchase History</a>
              <a href="suggest.php"><i class="ion-android-calendar"></i>Suggest An Event</a>
              <a href="editprof.php"><i class="ion-android-color-palette"></i>Edit Profile</a>
              <a href="landing-page.php"><i class="ion-log-out"></i>Log Out</a>
            </div>
          </div>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>
  
  <!-- ======= End Header ======= -->

  <main id="main">
    <div class="add-event-header"></div>
      <!-- ======= Update Event Section ======= -->
      <section id="add-event" class="add-event">
        <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2></h2>
            <p>Update Event</p>
        </div>

        <form action="forms/update-event.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            <div class="form-row">
            
              <div class="col-lg-6 col-md-6 form-group">
                <h4>Event Name</h4>
                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter event name" placeholder="Enter event name">
                <div class="validate"></div>
              </div>
            <div class="col-lg-6 col-md-6 form-group">
              <h4>Event Type</h4>
              <select name="event-type" class="custom-select" id="event-type" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <option value="">Select Event Type</option>
                  <option value="movie">Movie</option>
                  <option value="festival">Festival</option>
                  <option value="arts">Arts</option>
                  <option value="convention">Convention</option>
                  <option value="concert">Concert</option>
                  <option value="school">School</option>
                  <option value="community">Community</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <h4>Date</h4>
              <input type="date" name="date" class="form-control" id="date" data-rule="minlen:4" data-msg="Please enter a date">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <h4>Time</h4>
              <input type="time" name="time" class="form-control" id="time" data-rule="minlen:4" data-msg="Please enter a time">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <h4>Event Location</h4>
              <input type="text" name="location" class="form-control" id="location" data-rule="minlen:4" data-msg="Please enter location of the event" placeholder="Enter location">
              <div class="validate"></div>
            </div>
            <div class="col-lg-12 col-md-6 form-group">
                <h4>Event Description</h4>
                <textarea name="eventdesc" class="form-control" name="desc" id="desc" data-rule="email" data-msg="Enter a description for your event..." placeholder="Enter a description for your event"></textarea>
                <div class="validate"></div>
            </div><br>
            <div class="col-lg-4 col-md-6 form-group">
                <h4>Event Thumbnail</h4>
                <input type="file" class="form-control" name="thumbail" id="thumbnail" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <h4>Event Photo</h4>
              <input type="file" class="form-control" name="photo" id="photo" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <h4>Payment Method</h4>
              <label class="payment-box">Cash On Delivery
                <input name="cod" type="checkbox" value="cod">
                <span class="checkmark"></span>
              </label>
              <label class="payment-box">Paypal
                <input name="paypal" type="checkbox" value="paypal">
                <span class="checkmark"></span>
              </label>
              <label class="payment-box">Debit/Credit Card
                <input name="debit-credit" type="checkbox" value="debit-credit">
                <span class="checkmark"></span>
              </label>
            </div>
            
            <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your purchase. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Add Event</button></div>
        </form>

        </div>
    </section>
    
    <!-- ======= End Update Event Section ======= -->

  </main>
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
              <li><i class="bx bx-chevron-right"></i> <a href="index-seller.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index-seller.php#about">About us</a></li>
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