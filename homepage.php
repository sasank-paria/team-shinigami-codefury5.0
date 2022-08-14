
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
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
      <title>Home</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
  
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
      <header id="header" class="fixed-top ">
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
                      <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                      <li><a class="nav-link scrollto" href="#about">About</a></li>
                      <li><a class="nav-link scrollto" href="#services">Services</a></li>
                      <li><a class="nav-link scrollto" href="#team">Team</a></li>
                      <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
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
  
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex align-items-center">
  
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                      <h1>Better Solutions For Your STARTUPS!</h1>
                      <h2>We are team of talented youngsters, joining startups with Industry Experts.</h2>
                      <div class="d-flex justify-content-center justify-content-lg-start">
                          <a href="#about" class="btn-get-started scrollto">Get Started</a>
                      </div>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                      <img src="Home2/assets/img/back1.png" class="img-fluid animated" alt="">
                  </div>
              </div>
          </div>
  
      </section>
      <!-- End Hero -->
  
      <main id="main">
  
          <!-- ======= About Us Section ======= -->
          <section id="about" class="about">
              <div class="container" data-aos="fade-up">
  
                  <div class="section-title">
                      <h2>About Us</h2>
                  </div>
  
                  <div class="row content">
                      <div class="col-lg-6">
                          <p>
                              Our aim is to connect the ever-increasing number of startups, to different industry experts in a bid to improve their budding business and help them build a proper business. Our Goals are:
                          </p>
                          <ul>
                              <li><i class="ri-check-double-line"></i>Provide the necessary Guidance to budding startup.</li>
                              <li><i class="ri-check-double-line"></i>Connect the startups to their consumers.</li>
                              <li><i class="ri-check-double-line"></i>Providing a friendly environment to all startups for individual growth.</li>
  
                          </ul>
                      </div>
                      <div class="col-lg-6 pt-4 pt-lg-0">
                          <p>
                              Seeing that alot of startups die out due to lack of support, funding and also poor knowledge of the current business world, we thaught that if a proper platform is provided to the 'startup world', it would help them increase their chances of survival
                              in the cut-throat co-operate world. So, we decided to create this platform, closing the gap between startups and industry experts.
                          </p>
                      </div>
                  </div>
  
              </div>
          </section>
          <!-- End About Us Section -->
  
          <!-- ======= Why Us Section ======= -->
          <section id="why-us" class="why-us section-bg">
              <div class="container-fluid" data-aos="fade-up">
  
                  <div class="row">
  
                      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
  
                          <div class="content">
                              <h3><strong>Why select us?</strong></h3>
                              <p>
                                  We are a team of young engineers, driven by passion, passion to do something good for the society and helping people. Our platform has the best industry experts you will ever need and also a vast community of consumers, always there to point out even
                                  the smallest flaw in your startup. So, all these factors will surely help in startup development.
                              </p>
                          </div>
  
  
  
                      </div>
  
                      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("Home2/assets/img/back2.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                  </div>
  
              </div>
          </section>
          <!-- End Why Us Section -->
  
  
          <!-- ======= Services Section ======= -->
          <section id="services" class="services section-bg">
              <div class="container" data-aos="fade-up">
  
                  <div class="section-title">
                      <h2>Services</h2>
                      <p>Following are the services provided by us in a bid to improve your performance!</p>
                  </div>
  
                  <div class="row">
                      <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                          <div class="icon-box">
                              <div class="icon"><i class="bi-camera-reels"></i></div>
                              <h4><a href="">Video Calling</a></h4>
                              <p>Our panel our Experts will help you one on one to resolve your doubt, resolve any issue, and guide you through your journey.</p>
                          </div>
                      </div>
  
                      <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                          <div class="icon-box">
                              <div class="icon"><i class="bx bx-file"></i></div>
                              <h4><a href="">Chat</a></h4>
                              <p>We have a community of users who can help to further develop the startup by giving reviews.</p>
                          </div>
                      </div>
  
                      <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                          <div class="icon-box">
                              <div class="icon"><i class="bi-code-slash"></i></div>
                              <h4><a href="Services.html">Devs</a></h4>
                              <p>A team of developers just for you to hire, to help you build your application and website.</p>
                          </div>
                      </div>
  
                      <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                          <div class="icon-box">
                              <div class="icon"><i class="bi-credit-card"></i></div>
                              <h4><a href="">Funding</a></h4>
                              <p>Low on funds? Dont worry, we have a community eho will donate open-heartedly, if they like your idea.</p>
                          </div>
                      </div>
  
                  </div>
  
              </div>
          </section>
          <!-- End Services Section -->
  
  
          <!-- ======= Team Section ======= -->
          <section id="team" class="team section-bg">
              <div class="container" data-aos="fade-up">
  
                  <div class="section-title">
                      <h2>Team</h2>
                      <p>Meet the Team that made it possible to connect the users and experts with the startups.</p>
                  </div>
  
                  <div class="row">
  
                      <div class="col-lg-6">
                          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                              <div class="member-info">
                                  <h4>Shashank Paria</h4>
                                  <span>Full-Stack Developer</span>
                                  <p>I don' t like to brag about myself. In short I am an expert!</p>
                              </div>
                          </div>
                      </div>
  
                      <div class="col-lg-6 mt-4 mt-lg-0">
                          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                              <div class="member-info">
                                  <h4>Gauresh Wadekar</h4>
                                  <span>Full-Stack Developer</span>
                                  <p>I have been programming since 5 years, and have also developed many applications and websites.</p>
                              </div>
                          </div>
                      </div>
  
                      <div class="col-lg-6 mt-4">
                          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                              <div class="member-info">
                                  <h4>Rahul Biya</h4>
                                  <span>Front-End Developer</span>
                                  <p>I have developed several applications. I also do backend programming.</p>
                              </div>
                          </div>
                      </div>
  
  
                      <div class="col-lg-6 mt-4">
                          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                              <div class="member-info">
                                  <h4>Vaibhav Bhaliya</h4>
                                  <span>Front-End Developer</span>
                                  <p>I have been designing UI designs since 4 years, and I love my job.</p>
                              </div>
                          </div>
                      </div>
  
  
  
                  </div>
  
              </div>
          </section>
          <!-- End Team Section -->
  
  
  
          <!-- ======= Contact Section ======= -->
          <section id="contact" class="contact">
              <div class="container" data-aos="fade-up">
  
                  <div class="section-title">
                      <h2>Contact</h2>
                      <p>If you have an idea you would like to share or any improvement needed on our end, feel free to leave here a message. We'll reply as soon as possible.
                      </p>
                  </div>
  
                  <div class="row">
  
                      <div class="col-lg-5 d-flex align-items-stretch">
                          <div class="info">
                              <div class="address">
                                  <i class="bi bi-geo-alt"></i>
                                  <h4>Location:</h4>
                                  <p>St. Francis Institute of Technology, Mount Poisar, Mumbai-64</p>
                              </div>
  
                              <div class="email">
                                  <i class="bi bi-envelope"></i>
                                  <h4>Email:</h4>
                                  <p>rahulbiya@student.sfit.ac.in</p>
                              </div>
  
                              <div class="phone">
                                  <i class="bi bi-phone"></i>
                                  <h4>Call:</h4>
                                  <p>+91-9136752443</p>
                              </div>
  
                              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0"
                                  style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                          </div>
                      </div>
  
                      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                              <div class="row">
                                  <div class="form-group col-md-6">
                                      <label for="name">Your Name</label>
                                      <input type="text" name="name" class="form-control" id="name" required>
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="name">Your Email</label>
                                      <input type="email" class="form-control" name="email" id="email" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="name">Subject</label>
                                  <input type="text" class="form-control" name="subject" id="subject" required>
                              </div>
                              <div class="form-group">
                                  <label for="name">Message</label>
                                  <textarea class="form-control" name="message" rows="10" required></textarea>
                              </div>
                              <div class="my-3">
                                  <div class="loading">Loading</div>
                                  <div class="error-message"></div>
                                  <div class="sent-message">Your message has been sent. Thank you!</div>
                              </div>
                              <div class="text-center"><button type="submit">Send Message</button></div>
                          </form>
                      </div>
  
                  </div>
  
              </div>
          </section>
          <!-- End Contact Section -->
  
      </main>
      <!-- End #main -->
  
  
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
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
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