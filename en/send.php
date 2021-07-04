<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="DESCRIPTION">
		<meta name="keywords" content="KEYWORDS">
		<meta name="author" content="AUTHOR NAME">

		<!-- TITLE -->
		<title>Savia Cart - Contact us</title>

		<!-- FAVICON -->
	    <link href="img/favicon/favicon.ico" rel="icon">
		<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">

		<!-- BOOTSTRAP CSS -->
		<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

		<!-- FONT-AWESOME & ET-LINE-FONT CSS -->
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/et-line-font/et-line-font.css">

	    <!-- MAGNIFIC POPUP CORE CSS -->
	    <link href="css/magnific-popup/magnific-popup.css" rel="stylesheet">
		
        <!-- OWL CAROUSEL -->
        <link href="css/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="css/owl-carousel/owl.theme.default.min.css" rel="stylesheet">

		<!-- BG VIDEO CSS -->
		<link rel="stylesheet" href="css/jquery.background-video.css">
		
		<!-- MAIN STYLE CSS -->
		<link rel="stylesheet" href="css/style-en.css">
		<link rel="stylesheet" href="css/contact.css">
		<link rel="stylesheet" href="css/animate.min.css">

		<!-- RESPONSIVE STYLE CSS -->
		<link rel="stylesheet" href="css/responsive.css">

	</head>
	<body>


		<!-- =========    START PRELOADING    ======== -->
		<div class="loading">
		    <div class="sk-folding-cube">
		        <div class="sk-cube1 sk-cube"></div>
		        <div class="sk-cube2 sk-cube"></div>
		        <div class="sk-cube4 sk-cube"></div>
		        <div class="sk-cube3 sk-cube"></div>
		    </div>
		</div>
		<!-- =========    END PRELOADING    ======== -->


		<!-- ====== HEADER START ======  -->
		<section class="s-header">
			<div class="header-overlay">


				<!-- ====== NAVGITION ======  -->
				<nav class="navbar land-nav">
					<div class="container">
						<div class="row">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header navbar-right">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
								<!-- logo -->
								<a class="logo navbar-brand" href="#home" data-scroll-nav="0">

									<!-- WHITE LOGO -->
									<img class="white-logo" width="200" src="img/nav-logo.png" alt="logo" />

									<!-- DARK LOGO -->
									<img class="dark-logo" width="200" src="img/nav-logo.png" alt="logo" />

								</a>
							</div>

							<!-- Collect the nav links, and other content for toggling -->
							<div class="collapse navbar-collapse" id="collapse">

								<!-- links -->
								<ul class="nav navbar-nav navbar-left" id="navbar">
									<li><a href="index.html">Home</a></li>
									<li><a href="services.html" class="active">Services</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="work.html">Portfolio</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li id="flag"><a href="../index.html"><img src="img/ar.png" alt="" /></a></li>
									<li id="opencart"><a href="contact.html"> <i class="fa fa-ticket"></i> ticket</a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div>
					</div><!-- /.container -->
				</nav>
				<!-- ====== END NAVGITION ======  -->


				<!-- ====== START HEADER CONTENT ======  -->
				<div class="middle-c text-center">
					<div class="container">
						<div class="row">
							<div class="capt col-md-8 col-sm-11">

								<h1>Contact us</h1>

							</div>
						</div>
					</div>
				</div>
				<!-- ====== END HEADER CONTENT ======  -->


				<div class="s-header-shapee">
		            <img src="img/shap2.png" alt="Header Shap">
		        </div>
					
				
			</div>
		</section>
		<!-- ====== END HEADER ======  -->


		<!-- ====== START CONTACT ======  -->
		<section class="sections contact-s">
			<div class="container">
				<div class="row">


					<div class="send-dd col-md-12">
						<div class="send-img col-lg-2">
							<img src="img/logo.png" alt="" />
						</div>
							<?php

	$TO = 'info@saviacart.net';

	//message the subject of the email
	$SUBJECT = 'Contact from your WebSite';
	$MSG_SEND_ERROR = 'Sorry, we can\'t send this message.';

	// Sender Info
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$error = "";


	// Email regex
	$pattern = "^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$^";

	// test for name
	if (empty($name)) {
	    $error .= 'error-name,'; // No name 	
	}

	// test for email
	if (empty($email) || !preg_match_all($pattern, $email)) {
	    $error .= 'error-email,'; // No Email	
	}

	// test for message
	if (empty($message)) {
	    $error .= 'error-message'; // No Message	
	}


	//define the headers we want passed. Note that they are separated with \r\n
	$headers = "From: " . $name . " - " . $subject . " <" . $email . ">\r\nReply-To: " . $email . "";

	if (!$error) {

	    //send the email
	    $send = mail($TO, $SUBJECT, $message, $headers);

	    if ($send) {
	    ?>
						<h2 id="send-t">The message has been sent, we will contact you as soon as possible :)</h2>
						
		<?php
	    } else {
	        // If the message is not send return error
	    ?>				
						<h2 id="send-f">There seems to be an error, please try again :(</h2>
		<?php
			}
		} else {
		?>
						<h2 id="send-f">There seems to be an error, please try again :(</h2>
		<?php
		}
		?>
					</div>	
					
					

				</div>
			</div>
		</section>
		<!-- ====== END CONTACT ======  -->
		
		
		<!-- ====== START FOOTER ======  -->
		<section class="footer sections">
			<div class="container">
				<div class="row">
				
				
					<!-- START FOOTER LOGO -->
					<div class="ft-logo col-md-3 col-sm-4 col-xs-7 wow animate__animated animate__bounceIn" data-wow-duration="1s" data-wow-delay="0.4s">
						<img src="img/logo.png" width="80" alt="Footer Logo" />
					</div>
					<!-- END FOOTER LOGO -->


					<!-- /// IF YOU WANT TO ADD SOCIAL MEDIA LINKS ///
					
					<div class="sc-icon">
						<a href="#0" id="facebook" class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
							<span>
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</span>
						</a>
						<a href="#0" id="twitter" class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
							<span>
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</span>
						</a>
						<a href="#0" id="behance" class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
							<span>
								<i class="fa fa-behance" aria-hidden="true"></i>
							</span>
						</a>
						<a href="#0" id="youtube" class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
							<span>
								<i class="fa fa-youtube" aria-hidden="true"></i>
							</span>
						</a>
						<a href="#0" id="instagram" class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
							<span>
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</span>
						</a>
					</div>
					
					 -->


					<!-- START RIGHTS -->
					<div class="sub-footer">
						<h5>© 2021 SaviaCart, All Rights Reserved</h5>
					</div>
				
				
				</div>
			</div>
		</section>
		<!-- ====== END FOOTER ======  -->
		
		
		<a href="https://api.whatsapp.com/send/?phone=971553000654&text&app_absent=0" alt="Whatsapp" id="whats">
			<img src="img/whatsapp.png" alt="Whats" />
		</a>
		
		
		
		
		
		
		
		<!-- ====== JS ======  -->
		<!-- JQUERY -->
		<script src="js/jquery.v1.12.4.js"></script>
		<!-- BOOTSTRAP JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- VIDEO JS -->
		<script src="js/jquery.background-video.js"></script>
		<!-- OWL CAROUSEL JS -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- COUNT TO JS -->
		<script src="js/jquery.countTo.js"></script>
		<!-- ISOTOPE JS -->
		<script src="js/isotope.pkgd.min.js"></script>
		<!-- MASONRY JS -->
		<script src="js/masonry.pkgd.min.js"></script>
	    <!-- Magnific Popup core JS -->
	    <script src="js/jquery.magnific-popup.min.js"></script>
		<!-- PARSLEY file -->
	    <script src="js/parsley.js"></script>
	    <!-- SCROLLIT file -->
	    <script src="js/scrollIt.min.js"></script>
	    <!-- TYPE file -->
	    <script src="js/typed.js"></script>
		<!-- custom js -->
		<script src="js/wow.min.js"></script>
		<!-- MAPS JS -->
		<script src="js/contact.js"></script>

	</body>
</html>
