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
          <li><a href="index-customer.php#about">About</a></li>
          <li><a href="index-customer.php#aevents">Events</a></li>
          <li><a href="profile-customer.php#bookmarks">Bookmarks</a></li>
          <div class="dropdown">
          <li class="book-a-ticket text-center dropdown"><a href="profile-customer.php">Welcome, [name]</a></li>
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
    

    <div class="cart-header"></div>
    <!-- ======= Cart ======= -->
    <section class="d-flex align-items-center cart" id="cart">
        <div class="container">
            <div class="section-title">
                <p>Your Cart</p>
            </div>
    
        <div class="row">
            <div class="col-12">
            <div class="table-responsive">
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">PRODUCT</th>
                            <th scope="col">VARIATION</th>
                            <th scope="col" class="text-center">QUANTITY</th>
                            <th scope="col" class="text-right">PRICE</th>
                            <th> </th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td><img src="../im/assets/img/all events/city of lover tour.jpg" /> </td>
                            <td>Taylor Swift: City of Lover Tour</td>
                            <td>VIP + Meet & Greet</td>
                            <td><input class="form-control text-center" type="number" value="1" /></td>
                            <td class="text-right">₱10,000.00</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="ion-ios-trash-outline"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img src="../im/assets/img/all events/black widow.jpg" /> </td>
                            <td>Black Widow</td>
                            <td>N/A</td>
                            <td><input class="form-control text-center align-items-center" type="number" value="1" /></td>
                            <td class="text-right">₱240.00</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="ion-ios-trash-outline"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img src="../im/assets/img/all events/endgame.jpg" /> </td>
                            <td>Avengers: Endgame</td>                                <td>N/A</td>
                            <td><input class="form-control text-center" type="number" value="1" /></td>
                            <td class="text-right">₱240.00</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="ion-ios-trash-outline"></i> </button> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>                                
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">₱240.00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>                                
                            <td></td>
                            <td><strong>TOTAL</strong></td>
                              <td class="text-right"><strong>₱10,480.00</strong></td>
                         </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="col mb-2">
            <div class="row">
                <div class="btns" id="random">
                        <a href="" class="btn-menu animated fadeInUp scrollt ">Continue Shopping</a>                  
                        <a href="" class="btn-menu animated fadeInUp scrollto">Checkout</a>
                </div>
            </div>
        </div>
        
    </div>
    </section>

<!-- ======= End Cart ======= -->
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