<?php
  
  // Initialize the session
  session_start();
         
  // Store the submitted data sent
  // via POST method, stored 
  include('function.php');
  include('config.php');
  // Temporarily in $_POST structure.
  $name= $_SESSION["name"];
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <title>photography</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">




    <!-- Favicons -->
    <link href="Home2/assets/img/favicon.png" rel="icon">
    <link href="Home2/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="Home2/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="Home2/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Home2/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="Home2/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="Home2/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="Home2/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="Home2/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="Home2/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header id="header" class="fixed-top " style="background-color:rgba(67, 96, 146, 0.9) ;">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand" href="#">
                <img src="assets/logo-removebg-preview.png" width="80" height="80" alt="" style="margin-right: 10%;">
            </a>
            <h1 class="logo me-auto"><a href="homepage.php">Startup Guider</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <a class="nav-link scrollto">
                            <form class="navbar-form navbar-left" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="searchbar" name="searchbar" placeholder="Search" autocomplete="off" />
                                    <div class="input-group-btn">
                                        <button class="btn btn-light" type="submit" name="searchBtn" id="searchBtn">
			    				<i class="glyphicon glyphicon-search"></i>
			    			</button>
                                    </div>
                                </div>

                                <div class="countryList" style="position: absolute;width: 235px;z-index: 1001;"></div>
                            </form>
                        </a>
                    </li>
                    <li><a class="nav-link scrollto active" href="index.html">Home</a></li>

                    <li><a class="nav-link scrollto" href="Services.html">Services</a></li>

                    <li><a class="nav-link   scrollto" href="#invest">Invest</a></li>

                    <li class="dropdown"><a href="#"><span> <?php $sql = "SELECT user_avatar FROM register_user WHERE user_email = '$name'"; 
                          if ($result = mysqli_query($conn, $sql)) {
                              if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_array($result)) {
                              echo  "<img src=".$row['user_avatar'] ;
                          }
                      }
                  }
                  ?> width="30px" height="30px"></span> <i class="bi bi-chevron-down"></i></a>
                          <ul>
                          <li><a href="profile.php">Details</a></li>
                              <!-- <li><a href="#">Drop Down 2</a></li> -->
                              <!--  Use to create dropdown options  -->
                              <li><a href="index.html">Log Out</a></li>
                          </ul>
                      </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!--end of navbar-->
    <!--end of navbar-->


    <!--grid with geeks-->
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="row gy-5">

        <div class="col-sm-6 ">
            <div class="card " style=" position: relative; margin: 2%; padding: 2%; box-shadow: 10px 10px 5px lightslategray; ">
                <img src="assets/photographygeek/p1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">mukesh gupta <br> photograher<br>Ratings 5.0⭐ ⭐ ⭐ ⭐ ⭐</h5>
                    <p class="card-text"></p>

                    <p class="card-text">Best photographer of mumbai.
                    </p>
                    <a href="" class="btn btn-primary" onmouseover="this.style.color='blue'" onmouseout="this.style.color='white'">Hire Me</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card " style="margin: 2%; padding: 2%; position: relative; margin-left: 2%;  box-shadow: 10px 10px 5px lightslategray; ">
                <img src="assets/photographygeek/p2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Raj Mirani <br> photograher<br>Ratings 5.0⭐ ⭐ ⭐ ⭐ ⭐</h5>
                    <p class="card-text"></p>

                    <p class="card-text">experienced photograher.
                    </p>
                    <a href="" class="btn btn-primary" onmouseover="this.style.color='blue'" onmouseout="this.style.color='white'">Hire Me</a>
                </div>
            </div>
        </div>

    </div>

    <br>
    <br>

    <div class="row gy-5">

        <div class="col-sm-6">
            <div class="card " style="margin: 2%; padding: 2%; position: relative; margin-left: 5%;  box-shadow: 10px 10px 5px lightslategray; ">
                <img src="assets/photographygeek/p3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Prathamesh Upadhye <br> photograher<br>Ratings 5.0⭐ ⭐ ⭐ ⭐ ⭐</h5>
                    <p class="card-text"></p>

                    <p class="card-text">good photographer.
                    </p>
                    <a href="" class="btn btn-primary" onmouseover="this.style.color='blue'" onmouseout="this.style.color='white'">Hire Me</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card " style="margin: 2%; padding: 2%; position: relative; margin-left: 2%;  box-shadow: 10px 10px 5px lightslategray; ">
                <img src="assets/photographygeek/p4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mahest Bhatt <br> photograher<br>Ratings 5.0⭐ ⭐ ⭐ ⭐ ⭐</h5>
                    <p class="card-text"></p>

                    <p class="card-text">Stared clicking photos and became Professional photograher.
                    </p>
                    <a href="" class="btn btn-primary" onmouseover="this.style.color='blue'" onmouseout="this.style.color='white'">Hire Me</a>
                </div>
            </div>
        </div>

    </div>


    <br>
    <br>
    <div class="row gy-5">

        <div class="col-sm-6">
            <div class="card " style="margin: 2%; padding: 2%; position: relative; margin-left: 5%;  box-shadow: 10px 10px 5px lightslategray; ">
                <img src="assets/photographygeek/p5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sachin Mhatre <br> photograher<br>Ratings 5.0⭐ ⭐ ⭐ ⭐ ⭐</h5>
                    <p class="card-text"></p>

                    <p class="card-text">Ready for every perfect shots. </p>
                    <br>
                    <a href="" class="btn btn-primary" onmouseover="this.style.color='blue'" onmouseout="this.style.color='white'">Hire Me</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 ">
            <div class="card " style="margin: 2%; padding: 2%; position: relative; margin-left: 2%;  box-shadow: 10px 10px 5px lightslategray; ">
                <img src="assets/photographygeek/p6.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Priyanka koli <br> photograher<br>Ratings 5.0⭐ ⭐ ⭐ ⭐ ⭐</h5>
                    <p class="card-text"></p>

                    <p class="card-text">calm patient click good photos.
                    </p>
                    <a href="" class="btn btn-primary" onmouseover="this.style.color='blue'" onmouseout="this.style.color='white'">Hire Me</a>
                </div>
            </div>
        </div>

    </div>

    <!--end of geeks grid-->

    <!-- ======= Footer ======= -->
    <footer id="footer">



        <div class="container footer-bottom clearfixcontainer footer-bottom clearfix">
            <!-- footer-top -->
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Startup Guider</h3>
                        <p>
                            St. Francis Institute of Technology<br> Mount Poisar, Mumbai-64<br> India
                            <br><br>
                            <strong>Phone: </strong> +91-9136752443<br>
                            <strong>Email: </strong>vaibhavhbaliya@student.sfit.ac.in<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="Services.html">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="webservicegeek.php">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="contentwritinggeek.php">content writing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="photographygeek.php">Photography</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="seogeek.php">Seo</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="uigeek.php">UI/UX</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="degitalmarketinggeek.php">digital marketing</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Do follow us on our social media handles for fast updates!</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter" style="font-size: 28px;"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook" style="font-size: 28px;"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram" style="font-size: 28px;"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="Home2/assets/vendor/aos/aos.js"></script>
    <script src="Home2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Home2/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="Home2/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="Home2/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="Home2/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="Home2/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="Home2/assets/js/main.js"></script>

</body>

</html>