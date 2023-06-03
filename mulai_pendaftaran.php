<?php

include "backend/includes/connection.php";

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
</head>

<body>
	<?php
	include "headmenu.php";
	?>

	<div align="center">
		<form name="InputAwal" id="InputAwal" method="POST" action="pendaftaran.php">
			<table border="0">
				<tr>
					<td>Kategori</td>
					<td>:
						<select name="kategori_tanding" id="kategori_tanding">
							<option value="Tanding">Tanding</option>
							<option value="Tunggal">Tunggal</option>
							<option value="Ganda">Ganda</option>
							<option value="Regu">Regu</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Golongan</td>
					<td>:
						<select name="golongan" id="golongan">
							<option value="Remaja">Remaja</option>
							<option value="Dewasa">Dewasa</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="daftar" value="LANJUT"></td>
				</tr>
			</table>
		</form>
	</div>

	<!-- start: footer -->
	<!-- <div id="footer">
		<p>Copyright <?php echo date("Y"); ?> Fajar </p> -->
		<!-- end: footer -->
	<!-- </div> -->
	<!-- end: footer -->
</body>

</html>