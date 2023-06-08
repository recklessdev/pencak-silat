<?php

include "backend/includes/connection.php";

//Mulai Multiple Autocomplete Cari nama peeserta
$sql = "SELECT nm_lengkap FROM peserta ORDER BY nm_lengkap ASC ";
$kueri = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_array($kueri)) {
	$arrPesilatTanding[] = $data[0];
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Konfirmasi Pembayaran</title>

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

	<script>
		$(function() {
			var availableTags = <?php echo json_encode($arrPesilatTanding); ?>;

			function split(val) {
				return val.split(/,\s*/);
			}

			function extractLast(term) {
				return split(term).pop();
			}

			$("#catatan")
				// don't navigate away from the field on tab when selecting an item
				.on("keydown", function(event) {
					if (event.keyCode === $.ui.keyCode.TAB &&
						$(this).autocomplete("instance").menu.active) {
						event.preventDefault();
					}
				})
				.autocomplete({
					minLength: 0,
					source: function(request, response) {
						// delegate back to autocomplete, but extract the last term
						response($.ui.autocomplete.filter(
							availableTags, extractLast(request.term)));
					},
					focus: function() {
						// prevent value inserted on focus
						return false;
					},
					select: function(event, ui) {
						var terms = split(this.value);
						// remove the current input
						terms.pop();
						// add the selected item
						terms.push(ui.item.value);
						// add placeholder to get the comma-and-space at the end
						terms.push("");
						this.value = terms.join(", ");
						return false;
					}
				});
		});
	</script>

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
							<h4 class="text-center mb-4">FORMULIR KONFIRMASI PEMBAYARAN</h4>
							<hr>
							<p>
								Setelah melakukan proses pendaftaran, langkah selanjutnya adalah melunasi biaya pendaftaran sejumlah peserta yang telah didaftarkan sebelumnya (Rp. XXX.XXX,-/peserta). Pembayaran dapat ditransfer melalui nomor- nomor rekening dibawah ini :
							</p>
							<ul>
								<li>0808 0883 2654 - BANK BCA - A/N Fajar</li>
								<li>0808 0883 2654 - BANK BNI - A/N Fajar</li>
								<li>0808 0883 2654 - BANK BRI - A/N Fajar</li>
								<li>0808 0883 2654 - BANK MANDIRI - A/N Fajar</li>
							</ul>
							<p>Setelah melakukan transfer, selanjutnya ialah melakukan konfirmasi melalui formulir dibawah ini.</p>
							<p>Peserta yang didaftarkan pada sistem ini <strong>tetapi tidak dikonfirmasi biaya pendaftarannya</strong> secara otomatis akan dicoret dari keikutsertaan kejuaraan. </p>

							<hr>
							<form name="konfirmasi" id="konfirmasi" method="POST" enctype="multipart/form-data" action="do_konfirmasi.php">
								<div class="form-group mb-4">
									<label for="bank-tujuan">Bank Tujuan</label>
									<select name="banktujuan" id="banktujuan" class="form-control">
										<option value="">Pilih Bank Tujuan</option>
										<option value="0808 0883 26542 - Bank ABC - A/N Fajar">0808 0883 26542 - Bank BCA - A/N Fajar </option>
										<option value="0809 7898 09981 - Bank MANDIRI - A/N Fajar">0809 7898 09981 - Bank MANDIRI - A/N Fajar </option>
									</select>
								</div>

								<div class="form-group mb-4">
									<label for="bank-pengirim">Bank Pengirim</label>
									<select name="bankpengirim" id="bankpengirim" class="form-control">
										<option value="">Pilih Bank Pengirim</option>
										<option value="BCA">BCA</option>
										<option value="BNI">BNI</option>
										<option value="BRI">BRI</option>
										<option value="Mandiri">Mandiri</option>
									</select>
								</div>

								<div class="form-group mb-4">
									<label>Nomor Rekening Pengirim</label>
									<input type="text" name="norekening" id="norekening" maxlength="35" class="form-control">
								</div>

								<div class="form-group mb-4">
									<label>Nama Pengirim</label>
									<input type="text" name="nama" id="nama" maxlength="35" class="form-control">
								</div>

								<div class="form-group mb-4">
									<label>Nomor Hp</label>
									<input type="text" name="kontak" id="kontak" maxlength="35" class="form-control">
								</div>

								<div class="form-group mb-4">
									<label>Tanggal Transfer</label>
									<input type="text" name="tgltransfer" id="tgltransfer" maxlength="35" class="form-control">
								</div>

								<div class="form-group mb-4">
									<label>Jumlah Transfer</label>
									<input type="text" name="jumlah" id="jumlah" maxlength="35" class="form-control">
								</div>

								<div class="form-group mb-4">
									<label>Upload bukti pembayaran</label>
									<input type="file" id="buktipembayaran" name="buktipembayaran" class="form-control"> File Gambar/Foto. Max size: 1 MB
								</div>

								<div class="form-group mb-4">
									<label>Catatan</label>
									<textarea name="catatan" id="catatan" cols="50" rows="5" placeholder="Masukkan Nama-nama peserta yang dibayarkan..." class="form-control"></textarea>
								</div>

								<div class="form-group mb-4">
									<label>Kode Verifikasi</label>
									<div class="form-group">
										<input name="vercode" type="text" id="vercode" size="9" maxlength="5" class="form-control" />
										<img src="capcay.php" style="margin-top: 5px; margin-bottom: 35px;" />
									</div>
								</div>
								<div>
									<button type="submit" name="konfirmasi" value="KIRIM" class="btn btn-primary col-12" style="margin-bottom: 50px; background: #CE2322; color: #fff; border-bottom: none; padding: 15px 39px; border-radius: 5px; width: auto">Submit</button>
								</div>
								</table>
							</form>
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