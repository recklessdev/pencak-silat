<?php
include "includes/connection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Login</title>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="css/templatemo-style.css">
	<!-- Font Icon -->
	<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

	<!-- Main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<!-- PRE LOADER -->
	<section class="preloader">
		<div class="spinner">
			<span class="spinner-rotate"></span>
		</div>
	</section>
	<!-- MENU -->
	<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
		<div class="container-fluid" style="width: 61.2%;">

			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>

				<!-- lOGO TEXT HERE -->
				<a href="../index.php" class="navbar-brand" style="color:#333;">Pencak <span>.</span> Silat</a>
			</div>

			<!-- MENU LINKS -->
			<?php

			if (isset($_SESSION['email'])) {
				echo '
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-nav-first">
								<li><a href="../index.php" class="smoothScroll" style="color: #ce3232;">Home</a></li>
								<li><a href="../index.php" class="smoothScroll" style="color: #ce3232;">Pencarian Data</a></li>
								<li><a href="../index.php" class="smoothScroll" style="color: #ce3232;">Konfirmasi Pembayaran</a></li>
								<li><a href="../index.php" class="smoothScroll" style="color: #ce3232;">Bantuan</a></li>
							</ul>

							<ul class="nav navbar-nav navbar-right">
								<a href="logout.php" class="section-btn">Logout</a>
							</ul>
						</div>
					';
			} else {
				echo '
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-nav-first">
								<li><a href="../index.php" class="smoothScroll" style="color: #ce3232;">Home</a></li>
								<li><a href="../index.php" class="smoothScroll" style="color: #ce3232;">Tentang</a></li>
								<li><a href="../index.php" class="smoothScroll" style="color: #ce3232;">Galeri</a></li>
								<li><a href="../index.php" class="smoothScroll" style="color: #ce3232;">Bantuan</a></li>
							</ul>

							<ul class="nav navbar-nav navbar-right">
								<a href="login.php" class="section-btn">Login</a>
							</ul>
						</div>
					';
			}
			?>
		</div>
	</section>

	<!-- Sing in  Form -->
	<div class="main">
		<section class="sign-in">
			<div class="container">
				<div class="signin-content">
					<div class="signin-image">
						<figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
						<a href="../pendaftaran.php" class="signup-image-link">Create an account</a>
					</div>

					<div class="signin-form">
						<h2 class="form-title">Sign in</h2>
						<form method="POST" class="register-form" id="login-form" action="verifylogin.php">
							<div class="form-group">
								<label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
								<input type="email" name="email" id="email" placeholder="Email" />
							</div>
							<div class="form-group">
								<label for="password"><i class="zmdi zmdi-lock"></i></label>
								<input type="password" name="password" id="password" placeholder="Password" />
							</div>
							<div class="form-group">
								<input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
								<label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
							</div>
							<div class="form-group form-button">
								<input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
							</div>
						</form>
						<div class="social-login">
							<span class="social-label">Or login with</span>
							<ul class="socials">
								<li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
								<li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
								<li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- SCRIPTS -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/custom.js"></script>
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>

<style>
	.custom-navbar.navbar-fixed-top {
		background: #ffffff;
		-webkit-box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
		-moz-box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
		box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
		padding: 12px 0;
	}
</style>