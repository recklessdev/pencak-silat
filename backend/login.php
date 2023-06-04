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
				<a href="index.html" class="navbar-brand" style="color:#333;">Pencak <span>.</span> Silat</a>
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

	<!-- ABOUT -->
	<section id="about" data-stellar-background-ratio="0.5">
		<div class="containermt-2 d-flex justify-content-center align-items-center" style="margin-top: 1000px">
			<h2 class="title-h2">Sign in or up Form</h2>
			<div class="container" id="container">
				<div class="form-container sign-up-container">
					<form name="InputPeserta" id="InputPeserta" method="POST" enctype="multipart/form-data" action="do_pendaftaran_tanding.php">
						<h1>Formulir Pendaftaran</h1>
						<div class="social-container">
							<a href="#" class="social"><i class="fa fa-facebook-f"></i></a>
							<a href="#" class="social"><i class="fa fa-google"></i></a>
							<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
						</div>
						<span>or use your email for registration</span>
						<input type="text" name="nama" id="nama" maxlength="35" class="input form-control" placeholder="Nama Lengkap">
						<input type="hidden" name="role" id="role" class="input form-control" value="user">
						<input type="email" name="email" id="email" class="input form-control" placeholder="Email">
						<input class="input form-control" type="text" name="tpt_lahir" id="tpt_lahir" placeholder="Tempat Lahir">
						<input type="date" name="tgl_lahir" id="tgl_lahir" class="date-picker">
						<input type="text" name="tb" id="tb" class="input form-control" placeholder="Tinggi Badan">
						<input type="text" name="bb" id="bb" class="input form-control" placeholder="Berat Badan">
						<td><input type=file id='ktppeserta' name='ktppeserta' class="input form-control"> File Gambar/Foto. Max size: 500 KB</td>
						<td><input type="file" id="fotopeserta" name="fotopeserta" class="input form-control"> File Gambar/Foto. Max size: 500 KB</td>
						<td><input type="file" id="akta" name="akta" class="input form-control"> Max size: 3 MB</td>
						<select name="kategori_tanding" id="kategori_tanding" class="input">
							<option value="Tanding">Tanding</option>
						</select>
						<h6>Golongan</h6>
						<td>
							<select name="golongan" id="golongan" class="input">
								<option value="Remaja">Remaja</option>
								<option value="Dewasa">Dewasa</option>
							</select>
						</td>
						<h6>Kontingen</h6>
										<div class="form-group search">
											<select name="kontingen" id="kontingen" class="input selectpicker form-control" data-live-search="true" data-size="6">
												<option value="" selected="true" disabled="disabled">Pilih Kontingen</option>
												<?php
												$query_kontingen = "SELECT nama_kontingen,kota FROM kontingen order by kota,nama_kontingen ASC";
												$result = mysqli_query($koneksi, $query_kontingen);

												if (mysqli_num_rows($result) > 0) {
													$currentKota = '';
													while ($row = mysqli_fetch_assoc($result)) {
														$kota = $row['kota'];
														$kontingen = $row['nama_kontingen'];

														if ($kota !== $currentKota) {
															if ($currentKota !== '') {
																echo "</optgroup>";
															}
															echo "<optgroup label='$kota'>";
														}

														echo "<option value='$kontingen'>$kontingen</option>";

														$currentKota = $kota;
													}
													echo "</optgroup>";
												}
												?>
											</select>
										</div>
										<h6>History Pertandingan</h6>
										<td>
											<select name="history" id="history" class="input selectpicker form-control">
												<option value="" selected="true" disabled="disabled">Pilih History Pertandingan</option>
												<option value="4">Prestasi Internasional/Nasional</option>
												<option value="3">Provinsi</option>
												<option value="2">Kota/Kab/Kec</option>
												<option value="1">Junior Fighter</option>
											</select>
										</td>
										<input type="password" name="password" id="password" class="input form-control" placeholder="Password">

										<button type="submit" name="daftar" value="DAFTAR" class="btn btn-primary col-12 mt-4">Daftar</button>

					</form>
				</div>
				<div class="form-container sign-in-container">
					<form method="post" action="verifylogin.php">
						<h1>Sign in</h1>
						<div class="social-container">
							<a href="#" class="social"><i class="fa fa-facebook-f"></i></a>
							<a href="#" class="social"><i class="fa fa-google-plus"></i></a>
							<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
						</div>
						<span>or use your account</span>
						<input type="email" name="email" id="email" placeholder="Email" required />
						<input type="password" name="password" id="password" placeholder="Password" required />
						<button>Sign In</button>
					</form>
				</div>
				<div class="overlay-container">
					<div class="overlay">
						<div class="overlay-panel overlay-left">
							<h1>Welcome Back!</h1>
							<p>To keep connected with us please login with your personal info</p>
							<button class="ghost" id="signIn">Sign In</button>
						</div>
						<div class="overlay-panel overlay-right">
							<h1>Hello, Friend!</h1>
							<p>Enter your personal details and start journey with us</p>
							<button class="ghost" id="signUp">Sign Up</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- FOOTER -->
	<footer id="footer" data-stellar-background-ratio="0.5" style="margin-top: 80px">
		<div class="container-fluid">
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
	<script>
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});
	</script>
</body>

</html>
<style>
	@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

	* {
		box-sizing: border-box;
	}

	body {
		background: #f6f5f7;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
		font-family: 'Montserrat', sans-serif;
		height: 100vh;
		margin: -20px 0 50px;
	}

	h1 {
		font-weight: bold;
		margin: 0;
	}

	.title-h2 {
		text-align: center;
	}

	p {
		font-size: 14px;
		font-weight: 100;
		line-height: 20px;
		letter-spacing: 0.5px;
		margin: 20px 0 30px;
	}


	span {
		font-size: 12px;
	}

	/* a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
} */

	button {
		border-radius: 20px;
		border: 1px solid #FF4B2B;
		background-color: #FF4B2B;
		color: #FFFFFF;
		font-size: 12px;
		font-weight: bold;
		padding: 12px 45px;
		letter-spacing: 1px;
		text-transform: uppercase;
		transition: transform 80ms ease-in;
	}

	button:active {
		transform: scale(0.95);
	}

	button:focus {
		outline: none;
	}

	button.ghost {
		background-color: transparent;
		border-color: #FFFFFF;
	}

	form {
		background-color: #FFFFFF;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
		padding: 0 50px;
		height: 100%;
		text-align: center;
	}

	input {
		background-color: #eee;
		border: none;
		padding: 12px 15px;
		margin: 8px 0;
		width: 100%;
	}

	.container {
		background-color: #fff;
		border-radius: 10px;
		box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
			0 10px 10px rgba(0, 0, 0, 0.22);
		position: relative;
		overflow: hidden;
		width: 768px;
		max-width: 100%;
		min-height: 480px;
	}

	.form-container {
		position: absolute;
		top: 0;
		height: 100%;
		transition: all 0.6s ease-in-out;
	}

	.sign-in-container {
		left: 0;
		width: 50%;
		z-index: 2;
	}

	.container.right-panel-active .sign-in-container {
		transform: translateX(100%);
	}

	.sign-up-container {
		left: 0;
		width: 50%;
		opacity: 0;
		z-index: 1;
	}

	.container.right-panel-active .sign-up-container {
		transform: translateX(100%);
		opacity: 1;
		z-index: 5;
		animation: show 0.6s;
	}

	@keyframes show {

		0%,
		49.99% {
			opacity: 0;
			z-index: 1;
		}

		50%,
		100% {
			opacity: 1;
			z-index: 5;
		}
	}

	.overlay-container {
		position: absolute;
		top: 0;
		left: 50%;
		width: 50%;
		height: 100%;
		overflow: hidden;
		transition: transform 0.6s ease-in-out;
		z-index: 100;
	}

	.container.right-panel-active .overlay-container {
		transform: translateX(-100%);
	}

	.overlay {
		background: #FF416C;
		background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
		background: linear-gradient(to right, #FF4B2B, #FF416C);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: 0 0;
		color: #FFFFFF;
		position: relative;
		left: -100%;
		height: 100%;
		width: 200%;
		transform: translateX(0);
		transition: transform 0.6s ease-in-out;
	}

	.container.right-panel-active .overlay {
		transform: translateX(50%);
	}

	.overlay-panel {
		position: absolute;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
		padding: 0 40px;
		text-align: center;
		top: 0;
		height: 100%;
		width: 50%;
		transform: translateX(0);
		transition: transform 0.6s ease-in-out;
	}

	.overlay-left {
		transform: translateX(-20%);
	}

	.container.right-panel-active .overlay-left {
		transform: translateX(0);
	}

	.overlay-right {
		right: 0;
		transform: translateX(0);
	}

	.container.right-panel-active .overlay-right {
		transform: translateX(20%);
	}

	.social-container {
		margin: 20px 0;
	}

	.social-container a {
		border: 1px solid #DDDDDD;
		border-radius: 50%;
		display: inline-flex;
		justify-content: center;
		align-items: center;
		margin: 0 5px;
		height: 40px;
		width: 40px;
	}
</style>