<!DOCTYPE html>
<html lang="en">

<head>

	<title>Pencak Silat</title>

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
		<div class="container">

			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>

				<!-- lOGO TEXT HERE -->
				<a href="index.html" class="navbar-brand">Pencak <span>.</span> Silat</a>
			</div>

			<!-- MENU LINKS -->
			<?php
			session_start();

			if (isset($_SESSION['email'])) {
				echo '
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-nav-first">
								<li><a href="#home" class="smoothScroll">Home</a></li>
								<li><a href="#about" class="smoothScroll">Pencarian Data</a></li>
								<li><a href="#team" class="smoothScroll">Konfirmasi Pembayaran</a></li>
								<li><a href="#contact" class="smoothScroll">Bantuan</a></li>
							</ul>

							<ul class="nav navbar-nav navbar-right">
								<a href="#footer" class="section-btn">Logout</a>
							</ul>
						</div>
					';
			} else {
				echo '
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-nav-first">
								<li><a href="#home" class="smoothScroll">Home</a></li>
								<li><a href="#about" class="smoothScroll">Tentang</a></li>
								<li><a href="#team" class="smoothScroll">Galeri</a></li>
								<li><a href="#contact" class="smoothScroll">Bantuan</a></li>
							</ul>

							<ul class="nav navbar-nav navbar-right">
								<a href="backend/login.php" class="section-btn">Login</a>
							</ul>
						</div>
					';
			}
			?>
		</div>
	</section>


	<!-- HOME -->
	<section id="home" class="slider" data-stellar-background-ratio="0.5">
		<div class="row">

			<div class="owl-carousel owl-theme">
				<div class="item item-first">
					<div class="caption">
						<div class="container">
							<div class="col-md-8 col-sm-12">
								<h3>Tournament Pencak Silat</h3>
								<h1>Bergabunglah &amp; tunjukkan keterampilan seni bela diri Anda</h1>
								<a href="#team" class="section-btn btn btn-default smoothScroll">Daftar Sekarang</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item item-second">
					<div class="caption">
						<div class="container">
							<div class="col-md-8 col-sm-12">
								<h3>Tournament Pencak Silat</h3>
								<h1>Bergabunglah dalam pertarungan seni bela diri terbaik</h1>
								<a href="#menu" class="section-btn btn btn-default smoothScroll">Daftar Sekarang</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item item-third">
					<div class="caption">
						<div class="container">
							<div class="col-md-8 col-sm-12">
								<h3>Tournament Pencak Silat</h3>
								<h1>Jadilah bagian dari pertarungan epik</h1>
								<a href="#contact" class="section-btn btn btn-default smoothScroll">Daftar Sekarang</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>


	<!-- ABOUT -->
	<section id="about" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-12">
					<div class="about-info">
						<div class="section-title wow fadeInUp" data-wow-delay="0.2s">
							<h4>Read our story</h4>
							<h2>Tentang Pencak Silat</h2>
						</div>

						<div class="wow fadeInUp" data-wow-delay="0.4s">
							<p>Pencak Silat adalah seni bela diri tradisional yang berasal dari wilayah Asia Tenggara, khususnya Indonesia, Malaysia, dan Brunei. Seni bela diri ini melibatkan berbagai teknik pertahanan diri, serangan, pergerakan, dan strategi yang digunakan dalam pertempuran.</p>
							<p>Pencak Silat tidak hanya merupakan bentuk latihan fisik semata, tetapi juga memiliki nilai-nilai budaya dan filosofi yang dalam. Seni bela diri ini mengajarkan keberanian, disiplin, pengendalian diri, dan penghormatan terhadap lawan.</p>
							<p>Setiap aliran atau perguruan Pencak Silat memiliki gaya dan karakteristik yang berbeda-beda, namun umumnya melibatkan gerakan tangan, kaki, sikap tubuh, dan teknik lempar. Selain itu, aspek seni juga menjadi bagian penting dari Pencak Silat, di mana gerakan-gerakan yang indah dan elegan diintegrasikan dalam latihan dan pertunjukan.</p>
							<p>Pencak Silat telah menjadi bagian dari warisan budaya dan identitas bangsa di banyak negara. Selain sebagai seni bela diri, Pencak Silat juga dipertandingkan dalam kompetisi dan turnamen baik di tingkat regional maupun internasional, di mana pesilat-pesilat terampil bertemu untuk memperebutkan gelar juara.</p>
							<p>Pencak Silat terus berkembang dan menjadi semakin populer di seluruh dunia, sebagai bentuk seni bela diri yang unik, indah, dan bermakna.</p>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-sm-12">
					<div class="wow fadeInUp about-image" data-wow-delay="0.6s">
						<img src="images/about-image.jpg" class="img-responsive" alt="">
					</div>
				</div>

			</div>
		</div>
	</section>


	<!-- TEAM-->
	<section id="team" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-sm-12">
					<div class="section-title wow fadeInUp" data-wow-delay="0.1s">
						<h2>Our Gallery</h2>
						<h4>Techniques</h4>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<!-- MENU THUMB -->
					<div class="menu-thumb">
						<a href="images/galery-image1.jpg" class="image-popup" title="American Breakfast">
							<img src="images/galery-image1.jpg" class="img-responsive" alt="">

							<div class="menu-info">
								<div class="menu-item">
									<h3>American Breakfast</h3>
									<p>Tomato / Eggs / Sausage</p>
								</div>
								<div class="menu-price">
									<!-- <span>$25</span> -->
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<!-- MENU THUMB -->
					<div class="menu-thumb">
						<a href="images/galery-image2.jpg" class="image-popup" title="Self-made Salad">
							<img src="images/galery-image2.jpg" class="img-responsive" alt="">

							<div class="menu-info">
								<div class="menu-item">
									<h3>Self-made Salad</h3>
									<p>Green / Fruits / Healthy</p>
								</div>
								<div class="menu-price">
									<!-- <span>$18</span> -->
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<!-- MENU THUMB -->
					<div class="menu-thumb">
						<a href="images/galery-image3.jpg" class="image-popup" title="Chinese Noodle">
							<img src="images/galery-image3.jpg" class="img-responsive" alt="">

							<div class="menu-info">
								<div class="menu-item">
									<h3>Chinese Noodle</h3>
									<p>Pepper / Chicken / Vegetables</p>
								</div>
								<div class="menu-price">
									<!-- <span>$34</span> -->
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6" style="top: 20px">
					<!-- MENU THUMB -->
					<div class="menu-thumb">
						<a href="images/galery-image4.jpg" class="image-popup" title="Rice Soup">
							<img src="images/galery-image4.jpg" class="img-responsive" alt="">

							<div class="menu-info">
								<div class="menu-item">
									<h3>Rice Soup</h3>
									<p>Green / Chicken</p>
								</div>
								<div class="menu-price">
									<!-- <span>$28</span> -->
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6" style="bottom: 220px">
					<!-- MENU THUMB -->
					<div class="menu-thumb">
						<a href="images/galery-image5.jpg" class="image-popup" title="Project title">
							<img src="images/galery-image5.jpg" class="img-responsive" alt="">

							<div class="menu-info">
								<div class="menu-item">
									<h3>Deli Burger</h3>
									<p>Beef / Fried Potatoes</p>
								</div>
								<div class="menu-price">
									<!-- <span>$46</span> -->
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6" style="bottom: 220px">
					<!-- MENU THUMB -->
					<div class="menu-thumb">
						<a href="images/galery-image6.jpg" class="image-popup" title="Project title">
							<img src="images/galery-image6.jpg" class="img-responsive" alt="">

							<div class="menu-info">
								<div class="menu-item">
									<h3>Big Flat Fried</h3>
									<p>Pepper / Crispy</p>
								</div>
								<div class="menu-price">
									<!-- <span>$30</span> -->
								</div>
							</div>
						</a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- CONTACT -->
	<section id="contact" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
				<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
					-->
				<div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
					<div id="google-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5593031671774!2d106.9111345758048!3d-6.189676560644945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5bbf118c287%3A0x45271eafb0feaa3!2sPT%20Astra%20Graphia%20Tbk%20(Facility%20%26%20Warehouse)!5e0!3m2!1sid!2sid!4v1685876623168!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>

				<div class="col-md-6 col-sm-12">

					<div class="col-md-12 col-sm-12">
						<div class="section-title wow fadeInUp" data-wow-delay="0.1s">
							<h2>Contact Us</h2>
						</div>
					</div>

					<!-- CONTACT FORM -->
					<form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

						<!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
						<h6 class="text-success">Your message has been sent successfully.</h6>

						<!-- IF MAIL NOT SENT -->
						<h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

						<div class="col-md-6 col-sm-6">
							<input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
						</div>

						<div class="col-md-6 col-sm-6">
							<input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
						</div>

						<div class="col-md-12 col-sm-12">
							<input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">

							<textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your project"></textarea>

							<button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</section>


	<!-- FOOTER -->
	<footer id="footer" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">

				<div class="col-md-3 col-sm-8">
					<div class="footer-info">
						<div class="section-title">
							<h2 class="wow fadeInUp" data-wow-delay="0.2s">Alamat</h2>
						</div>
						<address class="wow fadeInUp" data-wow-delay="0.4s">
							<p>Jl. Contoh No. 123<br> Jakarta, 10870<br>Indonesia</p>
						</address>
					</div>
				</div>

				<div class="col-md-3 col-sm-8">
					<div class="footer-info">
						<div class="section-title">
							<h2 class="wow fadeInUp" data-wow-delay="0.2s">Hubungi Kami</h2>
						</div>
						<address class="wow fadeInUp" data-wow-delay="0.4s">
							<label>Telp/WA : </label>
							<p><a href="tel:+6281234567890">+62 812-34567-890</a></p>
							<label>Email : </label>
							<p><a href="mailto:info@tournamentpencaksilat.com">info@tournamentpencaksilat.com</a></p>
						</address>
					</div>
				</div>

				<div class="col-md-4 col-sm-8">
					<div class="footer-info footer-open-hour">
						<div class="section-title">
							<h2 class="wow fadeInUp" data-wow-delay="0.2s">Jadwal Kegiatan</h2>
						</div>
						<div class="wow fadeInUp" data-wow-delay="0.4s">
						<strong>Pendaftaran</strong>

							<p>12 Juni 2023</p>
							<div>
								<strong>Technical Meeting</strong>
								<p> 20 Juni 2023 <br> 8:00 AM - 10:00 AM</p>
							</div>
							<div>
								<strong>Upacara Pembukaan</strong>
								<p>21 Juni 2023 <br> 07:00 AM - 07:40 AM</p>
							</div>
							<div>
								<strong>Pertandingan</strong>
								<p>21 Juni 2023 - 24 Juni 2023</p>
							</div>
							<div>
								<strong>Upacara Penutupan</strong>
								<p>24 Juni 2023</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-2 col-sm-4">
					<ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
						<li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
						<li><a href="#" class="fa fa-instagram"></a></li>
						<li><a href="#" class="fa fa-google"></a></li>
					</ul>

					<div class="wow fadeInUp copyright-text" data-wow-delay="0.8s">
						<p><br>Copyright &copy; 2023 <br>M0x1e.
						</p>
					</div>
				</div>

			</div>
		</div>
	</footer>


	<!-- SCRIPTS -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>