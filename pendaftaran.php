<?php
include "backend/includes/connection.php";
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


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<body>
	<!-- PRE LOADER -->
	<!-- <section class="preloader">
		<div class="spinner">

			<span class="spinner-rotate"></span>

		</div>
	</section> -->
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

	<div class="main">

		<!-- Sign up form -->
		<section class="signup" style="margin-top: -100px;">
			<div class="container">
				<div class="signup-content">
					<div class="signup-form">
						<h2 class="form-title">Sign up</h2>
						<form method="POST" class="register-form" name="InputPeserta" id="InputPeserta" method="POST" enctype="multipart/form-data" action="do_pendaftaran_tanding.php">
							<div class="form-group">
								<label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
								<input type="text" name="nama" id="nama" placeholder="Nama Lengkap" />
							</div>
							<div>
								<input type="hidden" name="role" id="role" value="user" />
							</div>
							<div class="form-group">
								<label for="email"><i class="zmdi zmdi-email"></i></label>
								<input type="email" name="email" id="email" placeholder="Email" />
							</div>
							<div class="form-group">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" checked />
									<h6 class="form-check-label" for="Laki-laki">Laki-Laki</h6>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
									<h6 class="form-check-label" for="Perempuan">Perempuan</h6>
								</div>
							</div>
							<div class="form-group">
								<label for="tpt_lahir"><i class="zmdi zmdi-pin"></i></label>
								<input type="text" name="tpt_lahir" id="tpt_lahir" placeholder="Tempat Lahir" />
							</div>
							<div class="form-group">
								<label for="tgl_lahir"><i class="zmdi zmdi-calendar"></i></label>
								<input type="date" name="tgl_lahir" id="tgl_lahir" class="date-picker" />
							</div>
							<div class="form-group">
								<label for="tb"><i class="zmdi zmdi-male-alt"></i></label>
								<input type="text" name="tb" id="tb" placeholder="Tinggi Badan" />
							</div>
							<div class="form-group">
								<label for="bb"><i class="zmdi zmdi-male"></i></label>
								<input type="text" name="bb" id="bb" placeholder="Berat Badan" />
							</div>
							<div class="form-group">
								<label for="golongan"><i class="zmdi zmdi-accounts-alt"></i></label>
								<select name="golongan" id="golongan" class="input form-control" style="margin-left: 25px; width: 90%;">
									<option value="Remaja">Remaja</option>
									<option value="Dewasa">Dewasa</option>
								</select>
							</div>
							<div class="form-group">
								<label for="ktppeserta"><i class="zmdi zmdi-picture-in-picture" style="margin-bottom: 30px;"></i></label>
								<td><input type="file" name="ktppeserta" id="ktppeserta" /> File Gambar/Foto KTP. Max size: 500 KB</td>
							</div>
							<div class="form-group">
								<label for="fotopeserta"><i class="zmdi zmdi-image" style="margin-bottom: 30px;"></i></label>
								<td><input type="file" name="fotopeserta" id="fotopeserta" /> File Foto Peserta. Max size: 500 KB</td>
							</div>
							<div class="form-group">
								<label for="akta"><i class="zmdi zmdi-file-text" style="margin-bottom: 30px;"></i></label>
								<td><input type="file" name="akta" id="akta" />File Scan Akta Kelahiran. Max size: 3 MB</td>
							</div>
							<div class="form-group">
								<label for="kategori_tanding"><i class="zmdi zmdi-accounts"></i></label>
								<select name="kategori_tanding" id="kategori_tanding" class="input form-control" style="margin-left: 25px; width: 90%;">
									<option value="Tanding">Tanding</option>
								</select>
							</div>
							<div class="form-group">
								<label for="pass"><i class="zmdi zmdi-lock"></i></label>
								<select name="kontingen" id="kontingen" class="js-example-basic-single" data-live-search="true" data-size="6" style="margin-left: 25px; width: 90%;">
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
							<div class="form-group">
								<label for="kategori_tanding"><i class="zmdi zmdi-accounts"></i></label>
								<select name="history" id="history" class="input selectpicker form-control" style="margin-left: 25px; width: 90%;">
									<option value="" selected="true" disabled="disabled">Pilih History Pertandingan</option>
									<option value="4">Prestasi Internasional/Nasional</option>
									<option value="3">Provinsi</option>
									<option value="2">Kota/Kab/Kec</option>
									<option value="1">Junior Fighter</option>
								</select>
							</div>
							<div class="form-group">
								<label for="pass"><i class="zmdi zmdi-lock"></i></label>
								<input type="password" name="password" id="password" placeholder="Password" />
							</div>
							<div class="form-group">
								<label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="password" name="konfirmasi_password" id="konfirmasi_password" placeholder="Konfirmasi Password" />
							</div>
							<div class="form-group">
								<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
								<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
							</div>
							<div class="form-group form-button">
								<input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
							</div>
						</form>
					</div>
					<div class="signup-image">
						<figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
						<a href="backend/login.php" class="signup-image-link">I am already member</a>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- SCRIPTS -->
	<!-- <script src="js/jquery.js"></script> -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/custom.js"></script>
	<!-- JS -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<script>
		$(document).ready(function() {
			$('.js-example-basic-single').select2();
		});
	</script>
</body>

</html>

<style>
	.select2 {
		margin-left: 25px;
	}
</style>