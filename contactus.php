  <?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  use PHPMailer\PHPMailer\SMTP;

  require 'mailer/PHPMailer.php';
  require 'mailer/Exception.php';
  require 'mailer/SMTP.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $recipient = 'thamimansari1230@gmail.com';

      $mail = new PHPMailer();

      try {

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'thamimansari1230@gmail.com';
        $mail->Password = 'incmqpezlnhbqoqy';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 25;
        
        // $mail->Host = "smtpout.secureserver.net"; 
        // $mail->SMTPAuth = true;
        // $mail->Username = 'contactus@maktechnologiesllc.com'; 
        // $mail->Password = 'maktech2022';  
        // $mail->SMTPSecure = 'tls';
        // $mail->Port = 80;  


          $mail->setFrom($email, $name);
          $mail->addAddress($recipient);


        
          $mail->Subject = $subject;
          $mail->Body = "Name: " . $name . "\nEmail: " . $email . "\nPhone: " .  $phone . "\nSubject: " . $subject . "\n\nMessage: " . $message;

          $response = "";
          if ($mail->send()) {
              $response = "Thank you! Your message has been sent.";
              // echo "<script>alert('" . $response . "');</script>";
          } else {
              $response = "Sorry, there was an error sending your message. Please try again later.";
              $response .= "<br>Error details: " . $mail->ErrorInfo;
          }
      } catch (Exception $e) {
          $response = "Sorry, there was an error sending your message. Please try again later.";
      }
  } 
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mak Technology</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=2.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
$('#contact-form').submit(function(event) {
event.preventDefault(); // Prevent form submission

var form = $(this);
var url = form.attr('action');

$.ajax({
  type: 'POST',
  url: url,
  data: form.serialize(),
  success: function(response) {
    $('#response').text(response);
  }
});
});
});
</script>
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- End Preloader -->

        <!-- Main Header -->
        <header class="main-header header-style-two">

            <!-- Header Top -->
            <div class="header-top_two">
                <div class="auto-container">
                    <div class="d-flex justify-content-center align-items-center flex-wrap">

                        <!-- Info List -->
                        <ul class="info-list">
                            <li><a href="#"><span class="icon fa-solid fa-phone fa-fw"></span>+1 513-300-4068</a></li>
                            <li><a href="#"><span class="icon fa-solid fa-envelope fa-fw"></span>
                                    hr@maktechnologiesllc.com</a>
                            </li>
                            <li><a href="#"><span class="icon fa-solid fa-map fa-fw"></span>82 North Main Street,
                                    OH 45066
                                </a></li>
                        </ul>

                        <!-- Social Box -->
                        <ul class="header-social_box">


                            <li><a href="https://www.linkedin.com/company/mak-technologies-llc/" target="_blank"
                                    aria-label="LinkedIn" class="fa-brands fa-linkedin fa-fw"></a></li>

                        </ul>

                    </div>
                </div>
            </div>
            <!-- End Header Top -->

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container d-flex">
                        <!-- Logo Box -->
                        <div class="logo"><a href="index.html"><img src="images/logo-3.png" class="img_logo-w"
                                    alt="logo" title=""></a></div>

                        <!-- Upper Right -->
                        <div class="upper-right">
                            <div class="nav-outer d-flex justify-content-between align-items-center flex-wrap">

                                <!-- Main Menu -->
                                <nav class="main-menu show navbar-expand-md">
                                    <div class="navbar-header">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            name="navbarToggle" data-target="#navbarSupportedContent"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContentRow">
                                        <ul class="navigation clearfix">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li class="dropdown"><a href="#">Services</a>
												<ul class="">
													<div class="submenu-container">
														<div class="submenu-options">
															<li><a href="innovation.service.html" class="dropdown-text">Innovation</a></li>
															<li><a href="Validating-Testing.service.html">Validating & Testing</a></li>
															<li><a href="SAP.service.html">SAP</a></li>
															<li><a href="Consulting.service.html">Consulting</a></li>
															<li><a href="program.management.service.html">Program & Project Management</a></li>
															<li><a href="PLM.services.html">PLM</a></li>
															<li><a href="staffing.service.html">Staffing Services</a></li>
															<li><a href="Application-management.service.html">Application Management</a></li>
															<li><a href="Training.services.html">Training</a></li>
															
														</div>
														<div class="submenu-image">
															<div>
																<img src="images/navbar/service1.jpg" alt="Service 1" class="nav-image">
																<div class="nav-caption">
																	<a href="Consulting.service.html">Learn more about our Consulting</a>
																</div>
															</div>
														</div>
													</div>
												</ul>
											</li>
                                            <li><a href="careers.html">Careers</a>
                                            </li>
                                            <li><a href="clients.html">Clients</a>
                                            </li>
                                        </ul>
                                    </div>

                                </nav>
                                <!-- Main Menu End-->

                                <div class="outer-box d-flex align-items-center">

                                    <!-- Search Box -->


                                    <!-- Language -->


                                    <div class="button-box">
                                        <a class="btn-style-three theme-btn btn-item">
                                            <div class="btn-wrap">
                                                <span class="text-one">Contact Us <i
                                                        class="fa-solid fa-arrow-right fa-fw"></i></span>
                                                <span class="text-two">Contact Us <i
                                                        class="fa-solid fa-arrow-right fa-fw"></i></span>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- Mobile Navigation Toggler -->
                                    <div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title=""><img src="images/logo-3.png" class="img_logo-w" alt="logo"
                                    title=""></a>
                        </div>

                        <!-- Right Col -->
                        <div class="right-box d-flex align-items-center flex-wrap">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                            <!-- Main Menu End-->

                            <div class="outer-box d-flex align-items-center">

                                <div class="button-box">
                                    <a class="btn-style-three theme-btn btn-item">
                                        <div class="btn-wrap">
                                            <span class="text-one">Contact Us <i
                                                    class="fa-solid fa-arrow-right fa-fw"></i></span>
                                            <span class="text-two">Contact Us <i
                                                    class="fa-solid fa-arrow-right fa-fw"></i></span>
                                        </div>
                                    </a>
                                </div>

                                <!-- Mobile Navigation Toggler -->
                                <div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-020-x-mark"></span></div>
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="logo" title=""></a></div>
                    <!-- Search -->
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->

        </header>

        <!-- Page Title -->
        <section class="page-title" style="background-image:url(images/main-slider/2.jpg)">
            <div class="auto-container">
                <h2>Contact Us</h2>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- Contact One -->
        <section class="contact-one" style="background-image:url(images/background/map-1.png)">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="left-box">
                            <div class="sec-title_title">Contact us</div>
                            <h2 class="sec-title_heading">Grow Your Business With <br> <span>Our Expertise</span></h2>
                        </div>
                    </div>
                </div>
                <!-- <div class="row clearfix"> -->

                <!-- Info Column -->
                <div class="d-flex justify-content-between align-items-center flex-wrap">

                    <!-- Contact Block -->
                    <div class="contact-block col-lg-5 col-md-12 col-sm-12">
                        <div class="block-inner">
                            <span class="icon"><img src="images/icons/contact-1.png" alt="contact" /></span>
                            <strong>MAK Technologies LLC - USA</strong>
                            82 North Main Street,
                            <br>Springboro,
                            <br> OH 45066
                            <br>Fax : 732-647-1137
                        </div>
                    </div>

                    <div class="contact-block col-lg-5 col-md-12 col-sm-12">
                        <div class="block-inner">
                            <span class="icon"><img src="images/icons/contact-1.png" alt="contact" /></span>
                            <strong>S3MAK Technology Solutions Pvt Ltd (India Subsidiary)</strong>
                            1-115/AS-403, Adi Sarovar Apartments,
                            Vinayak Nagar Colony, Old Hafeezpet,
                            Miyapur, Hyderabad – 500049
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <!-- Contact Block -->
                    <div class="contact-block col-lg-5 col-md-12 col-sm-12">
                        <div class="block-inner">
                            <span class="icon"><img src="images/icons/contact-2.png" alt="contact" /></span>
                            <strong>Contact</strong>
                            Call:+1 513-300-4068 (US) <br>Call: +91 7799104624 (India)
                            <br>Landline : +914029702228
                        </div>
                    </div>

                    <!-- Contact Block -->
                    <div class="contact-block col-lg-5 col-md-12 col-sm-12">
                        <div class="block-inner">
                            <span class="icon"><img src="images/icons/contact-3.png" alt="contact" /></span>
                            <div>
                                <strong>Mail Address</strong>

                                Contact: KEERTHI GUMMA
                                <br>hr@maktechnologiesllc.com
                                <br>JOBS@MAKTECHNOLOGIESLLC.COM
                            </div>


                        </div>
                    </div>
                    <div class="form-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <!-- Contact Form -->
                            <div class="contact-form w-full">
                                <form method="post" action="contactus.php">
                                    <div class="row clearfix">

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Name (required)</label>
                                            <input type="text" id="name" name="name" placeholder="Your name*"
                                                required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Email address (required)</label>
                                            <input type="email" id="email" name="email" placeholder="Email" required="">
                                        </div>

                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                            <label>Phone (optional)</label>
                                            <input type="text" id="phone" name="phone" placeholder="Phone">
                                        </div>

                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                            <label>Subject (required)</label>
                                            <input type="text" name="subject" id="subject" placeholder="Subject"
                                                required="">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Your message</label>
                                            <textarea name="message" id="msg"
                                                placeholder="Your text here..."></textarea>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button type="submit" id="submit" class="btn-style-seven theme-btn">
                                                <span class="btn-wrap">
                                                    <span class="text-one">Send message</span>
                                                    <span class="text-two">Send message</span>
                                                </span>
                                            </button>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <div id="response"> <?php echo isset($response) ? $response : ''; ?></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Comment Form -->

                        </div>
                    </div>

                </div>
                <!-- </div> -->


                <!-- </div> -->
            </div>
        </section>
        <!-- End Contact One -->

        <!-- Map One -->
        <section class="map-one">
            <div class="map-outer">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s"
                    allowfullscreen=""></iframe>
            </div>
        </section>
        <!-- End Map One -->

        <!-- CTA One -->
        <section class="cta-one">
            <div class="auto-container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="left-box">
                        <h3 class="cta-one_heading">Looking for the Best IT Business Solutions?</h3>
                        <div class="cta-one_text">As a app web crawler expert, We will help to organize.</div>
                    </div>
                    <div class="right-box">
                        <a class="cta-one_btn theme-btn" href="contactus.php">get a quote</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End CTA One -->

        <!-- Footer -->
        <footer class="main-footer" style="background-image:url(images/background/pattern-11.png)">
            <div class="auto-container">
                <!-- Widgets Section -->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!-- Big Column -->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="logo">
                                            <img src="images/logo-3.png" class="img_logo-w" alt="logo" title=""></a>
                                        </div>
                                        <div class="text">Global IT Services firm solely focused on Customer’s success
                                            in their Digital journey</div>
                                        <a href="about.html" class="theme-btn about-btn">About us</a>
                                    </div>
                                </div>

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget newsletter-widget">
                                        <!-- Email Box -->
                                        <div class="email-box">
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Big Column -->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget contact-widget">

                                        <div class="timing">
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget contact-widget">
                                        <h4>Official info:</h4>
                                        <ul class="contact-list">
                                            <li><span class="icon fa fa-phone"></span>+1 513-300-4068
                                            </li>
                                            <li><span class="icon fa fa-envelope"></span> hr@maktechnologiesllc.com</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="copyright">2023 &copy; All rights reserved by <a href="#">Mak Technologies</a></div>
                </div>

            </div>
        </footer>
        <!-- End Footer -->

    </div>
    <!-- End PageWrapper -->

    <!-- Search Popup -->
    <div class="search-popup">
        <div class="color-layer"></div>
        <button class="close-search" name="closeSearch" name="closeSearch"><span
                class="flaticon-020-x-mark"></span></button>
        <form method="post" action="blog.html">

            placeholder="Search Here" required="">
            <button name="Search" type="submit"><i class="flaticon-001-loupe"></i></button>
    </div>
    </form>
    </div>
    <!-- End Search Popup -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

    <script src="js/jquery.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/odometer.js"></script>
    <script src="js/mixitup.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>

    <script src="js/script.js"></script>

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

    
</body>

</html>