<?php

include "backend/includes/connection.php";

$today = date("Y-m-d");

//cari data kelas tanding
$sqlkelastanding = "SELECT * FROM kelastanding ORDER BY nm_kelastanding ASC;";
$carikelas = mysqli_query($koneksi, $sqlkelastanding);

//Mulai Autocomplete Cari asal kontingen
// $query_kontingen = "SELECT nama_kontingen,kota FROM kontingen order by kota,nama_kontingen ASC";
// $result = mysqli_query($koneksi, $query_kontingen);
// while ($data = mysqli_fetch_array($kueri)) {
// 	$arrAsalKontingen[] = $data[0];
// }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Registrasi Pencak Silat</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

	<!-- CSS Files -->
	<link href="css/reset.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />





</head>

<body>
	<!-- Start Wrapper -->
	<?php
	include "headmenu.php";
	?>
	<div class="container-fluid mt-5">
		<div class="row justify-content-center align-items-center h-100">
			<div class="col-12 col-lg-9 col-xl-7">
				<div class="card border-0 rounded shadow">
					<div class="card-body p-4 p-md-5">
						<div class="form">
							<h4>FORMULIR PENDAFTARAN</h4>
							<hr>
							<form name="InputPeserta" id="InputPeserta" method="POST" enctype="multipart/form-data" action="do_pendaftaran_tanding.php">

								<div class="row">
									<div class="col-md-12 col-xs-12 mb-4">
										<input type="text" name="nama" id="nama" maxlength="35" class="input form-control" placeholder="Nama Lengkap">
										<div class="invalid-feedback">Please fill out this field.</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12 col-xs-12">
										<input type="hidden" name="role" id="role" class="input form-control" value="user">
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-3">
										<input type="email" name="email" id="email" class="input form-control" placeholder="Email">
									</div>

									<div class="col-md-6 mb-3">
										<h6>Jenis Kelamin</h6>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" checked>
											<h6 class="form-check-label" for="Laki-laki">Laki-Laki</h6>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
											<h6 class="form-check-label" for="Perempuan">Perempuan</h6>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 col-xs-12 mb-4">
										<input class="input form-control" type="text" name="tpt_lahir" id="tpt_lahir" placeholder="Tempat Lahir">
									</div>
									<div class="col-md-6 col-xs-12 mb-4">
										<input type="date" name="tgl_lahir" id="tgl_lahir" class="date-picker">
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 col-xs-12 mb-3">
										<input type="text" name="tb" id="tb" class="input form-control" placeholder="Tinggi Badan">
									</div>
									<div class="col-md-6 col-xs-12 mb-3">
										<input type="text" name="bb" id="bb" class="input form-control" placeholder="Berat Badan">
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-3">
											<h6>Foto/Scan KTP</h6>
											<td><input type=file id='ktppeserta' name='ktppeserta' class="input form-control"> File Gambar/Foto. Max size: 500 KB</td>
									</div>
									<div class="col-md-6 mb-3">
											<h6>Foto Peserta</h6>
											<td><input type="file" id="fotopeserta" name="fotopeserta" class="input form-control"> File Gambar/Foto. Max size: 500 KB</td>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-3">
											<h6>Scan Akta Kelahiran</h6>
											<td><input type="file" id="akta" name="akta" class="input form-control"> Max size: 3 MB</td>
									</div>
									<div class="col-md-6 mb-3">
											<h6>Kategori Tanding</h6>
											<td>
												<select name="kategori_tanding" id="kategori_tanding" class="input form-control">
													<option value="Tanding">Tanding</option>
												</select>
											</td>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-3">
											<h6>Golongan</h6>
											<td>
												<select name="golongan" id="golongan" class="input form-control">
													<option value="Remaja">Remaja</option>
													<option value="Dewasa">Dewasa</option>
												</select>
											</td>
									</div>
									<div class="col-md-6 mb-3">
											<h6>Kontingen</h6>
											<div class="form-group search">
												<select name="kontingen" id="kontingen" class="input selectpicker form-control" data-live-search="true" data-size="6" data-show-subtext="true">
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
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="password" name="password" id="password" class="input form-control" placeholder="Password">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="password" name="konfirmasi_password" id="konfirmasi_password" class="input form-control" placeholder="Konfirmasi Password">
										</div>
									</div>
								</div>

								<button type="submit" name="daftar" value="DAFTAR" class="btn btn-primary col-12 mt-4">DAFTAR</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<p> </p>
		<!-- end: footer -->
	</div>

</body>

</html>

<style>
	.label-name {
		padding: 5px;
		background-color: #FFF;
	}

	.input-container {
		height: 50px;
		position: relative;
		width: 100%;
	}

	.input,
	.date-picker {
		border-radius: 3px;
		box-sizing: border-box;
		font-size: 18px;
		height: 100%;
		outline: 0;
		padding: 4px 20px 0;
		width: 100%;
		border: 1px solid #D9D9D9;
	}

	.input:focus~.placeholder,
	.input:not(:placeholder-shown)~.placeholder {
		transform: translateY(-23px) translateX(-5px) scale(0.75);
	}

	.form-control {
		height: 45px !important;
	}

	.form {
		border-radius: 20px;
		box-sizing: border-box;
		height: 850px;
		width: 100%;
		padding-bottom: 50px;
	}

	.caret {
		display: none;
	}

	.selectpicker {
		border: 1px solid #ccc;
		padding: 10px;
	}
</style>