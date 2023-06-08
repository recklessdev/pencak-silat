<?php
include "backend/includes/connection.php";

$nama = mysqli_real_escape_string($koneksi, $_POST["nama"]);
$kontingen = mysqli_real_escape_string($koneksi, $_POST["kontingen"]);

/*
	if($nama == '') {
		?>
		<script type="text/javascript">
			alert('GAGAL! Nama Pesilat masih kosong, masbro.');
			document.location='pencarian.php';
		</script>
		<?php
		exit;
	}
	*/

//kueri data peserta
$sqlpeserta = "SELECT * FROM peserta
					INNER JOIN kelastanding ON peserta.kelas_tanding_FK=kelastanding.ID_kelastanding
					WHERE peserta.nm_lengkap LIKE '%$nama%'
					AND peserta.kontingen LIKE '%$kontingen%'
					AND peserta.kategori_tanding='Tanding'
					ORDER BY peserta.kontingen ASC";
$datapeserta = mysqli_query($koneksi, $sqlpeserta);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hasil Pencarian</title>

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
							<h4 class="text-center mb-4" style="margin-bottom: 45px;">Hasil Pencarian Data Peserta Tanding</h4>
							<div class="non-printable mb-4">
								<button onclick="window.print()" style="margin-bottom: 10px;">Cetak Halaman</button>
							</div>

							<style style="text/css">
								@media print {
									.non-printable {
										display: none;
									}

									.printable {
										display: block;
									}
								}
							</style>

							<div align="center">
								<table class="table">
									<thead>
									<tr bgcolor="#CE23232">
										<th>No.</th>
										<th>Nama</th>
										<th>Jenis Kelamin</th>
										<th>Tinggi Badan</th>
										<th>Berat Badan</th>
										<th>Kontingen</th>
										<th>Kelas Tanding</th>
										<th>Golongan</th>
										<th>STATUS</th>
									</tr>
									</thead>
									<?php $no = 0;
									while ($peserta = mysqli_fetch_array($datapeserta)) {
										$no++; ?>
										<tbody>
										<tr bgcolor="#eeeeee">
											<td><?php echo $no; ?></td>
											<td><?php echo $peserta['nm_lengkap']; ?></td>
											<td><?php echo $peserta['jenis_kelamin']; ?></td>
											<td><?php echo $peserta['tb']; ?></td>
											<td><?php echo $peserta['bb']; ?></td>
											<td><?php echo $peserta['kontingen']; ?></td>
											<td><?php echo $peserta['nm_kelastanding']; ?></td>
											<td><?php echo $peserta['golongan']; ?></td>
											<td><?php if ($peserta['status'] == 'PAID') {
														echo "<IMG SRC=images/check.png></IMG>";
													} ?></td>
										</tr>
										</tbody>
									<?php } ?>
								</table>
							</div>
						</div>
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
	th{
    background: #ce3232;
    border-radius: 0;
    border: 0;
    color: #f9f9f9;
    font-size: inherit;
    font-weight: normal;
    padding: 10px 25px;
    transition: 0.5s 0.2s;
	}
</style>