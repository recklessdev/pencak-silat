<?php
include "backend/includes/connection.php";
//cari data perguruan
$sqlperguruan = "SELECT * FROM perguruan ORDER BY nm_perguruan ASC;";
$cariperguruan = mysqli_query($koneksi, $sqlperguruan);
$cariperguruan2 = mysqli_query($koneksi, $sqlperguruan);

//Mulai Autocomplete Cari asal kontingen
$sql = "SELECT DISTINCT(kontingen) FROM peserta";
$kueri = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_array($kueri)) {
	$arrAsalKontingen[] = $data[0];
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Pencarian</title>

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
				<a href="index.php" class="navbar-brand" style="color: black;">Pencak <span>.</span> Silat</a>
			</div>

			<!-- MENU LINKS -->
			<?php
			session_start();

			if (isset($_SESSION['email'])) {
				echo '
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-nav-first">
								<li><a href="index.php" class="smoothScroll" style="color: #CE3232">Home</a></li>
								<li><a href="index.php" class="smoothScroll" style="color: #CE3232">Tentang</a></li>
								<li><a href="index.php" class="smoothScroll" style="color: #CE3232">Galeri</a></li>
								<li><a href="pencarian.php" class="smoothScroll" style="color: #CE3232">Pencarian Data</a></li>
								<li><a href="konfirmasi.php" class="smoothScroll" style="color: #CE3232">Konfirmasi Pembayaran</a></li>
								<li><a href="index.php" class="smoothScroll" style="color: #CE3232">Bantuan</a></li>
							</ul>

							<ul class="nav navbar-nav navbar-right">
								<a href="backend/logout.php" class="section-btn">Logout</a>
							</ul>
						</div>
					';
			} else {
				echo '
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-nav-first">
								<li><a href="index.php" class="smoothScroll">Home</a></li>
								<li><a href="index.php" class="smoothScroll">Tentang</a></li>
								<li><a href="index.php" class="smoothScroll">Galeri</a></li>
								<li><a href="index.php" class="smoothScroll">Bantuan</a></li>
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

	<div class="container rounded bg-white mt-5 mb-5" style="margin-top: 150px;">
		<div class="row">
			<div class="d-flex justify-content-between align-items-center mb-3">
				<div class="card border-0 rounded shadow">
					<div class="card-body p-4 p-md-5">
						<div class="form">
							<h4 class="text-center mb-4">Pencarian Data Peserta Tanding</h4>
							<hr style="margin-bottom: 45px;">
							<form name="CariPeserta" id="CariPeserta" method="POST" action="do_pencarian.php">
								<div class="form-group mb-4">
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label>Nama Peserta : </label>
												<input type="text" name="nama" id="nama" maxlength="35" placeholder="Input nama perserta / kosongkan" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label>Kontingen : </label>
												<input type="text" name="kontingen" id="kontingen" placeholder="Input Kontingen / kosongkan" class="form-control">
											</div>
										</div>
									</div>
								</div>
								<tr>
									<td colspan="2">
										<button type="submit" name="cari" value="CARI" class="btn col-12 mb-4" style="margin-bottom: 50px; background: #CE2322; color: #fff; border-bottom: none; padding: 10px 25px; border-radius: 5px; width: auto">
											Cari
										</button>
									</td>
								</tr>
								</table>
								<script>
									var arrAsalKontingen = <?php echo json_encode($arrAsalKontingen); ?>;
									$(document).ready(function() {
										$("#kontingen").autocomplete({
											source: arrAsalKontingen
										});
									});
								</script>
						</div>
					</div>
				</div>
			</div>
		</div>
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

	body {
		background: #f8f8f8;
	}
</style>