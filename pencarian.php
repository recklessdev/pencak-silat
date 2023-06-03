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
	<title>Registrasi Pencak Silat</title>
	<meta name="description" content="Registrasi Online Kejuaraan Pencak Silat">
	<meta name="keywords" content="registrasi,online,pencak,silat">
	<meta name="robots" content="index,follow">
	<meta name="author" content="Yudha Yogasara">
	<!-- CSS Files -->
	<link href="css/reset.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Add Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/jquery-ui.js"></script>

</head>

<body>
	<?php
	include "headmenu.php";
	?>
	<div class="container-fluid mt-5">
		<div class="row justify-content-center align-items-center h-100">
			<div class="col-12 col-lg-9 col-xl-7">
				<div class="card border-0 rounded shadow">
					<div class="card-body p-4 p-md-5">
						<div class="form">
							<h1>Pencarian Data Peserta Tanding</h1>
							<div>
								<form name="CariPeserta" id="CariPeserta" method="POST" action="do_pencarian.php">
									<table border="0">
										<tr>
											<td>Nama Peserta : <input type="text" name="nama" id="nama" maxlength="35" placeholder="Input nama perserta / kosongkan"></td>
											<td>Kontingen : <input type="text" name="kontingen" id="kontingen" placeholder="Input Kontingen / kosongkan"></td>
										</tr>
										<tr>
											<td colspan="2"><button type="submit" name="cari" value="CARI" class="btn btn-primary col-12">Cari</button></td>
										</tr>
									</table>
								</form>
								<script>
									var arrAsalKontingen = <?php echo json_encode($arrAsalKontingen); ?>;
									$(document).ready(function() {
										$("#kontingen").autocomplete({
											source: arrAsalKontingen
										});
									});
								</script>
							</div>

							<!-- <h1>Pencarian Data Peserta - TGR</h1>
							<div>
								<form name="CariPeserta" id="CariPeserta" method="POST" action="do_pencarian_tgr.php">
									<table border="0">
										<tr>
											<td>Nama Peserta : <input type="text" name="nama" id="nama" maxlength="35" placeholder="Input nama perserta / kosongkan"></td>
											<td>Kontingen : <input type="text" name="kontingen2" id="kontingen2" placeholder="Input Kontingen / kosongkan"></td>
										</tr>
										<tr>
											<td colspan="2"><input type="submit" name="cari" value="CARI"></td>
										</tr>
									</table>
								</form>
								<script>
									var arrAsalKontingen = <?php echo json_encode($arrAsalKontingen); ?>;
									$(document).ready(function() {
										$("#kontingen2").autocomplete({
											source: arrAsalKontingen
										});
									});
								</script>

								<!-- start: footer -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- end: footer -->
	<!-- end: footer -->
</body>

</html>