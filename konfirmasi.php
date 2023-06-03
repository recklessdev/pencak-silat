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
	<title>Konfirmasi Pembayaran Pencak Silat</title>
	<meta name="description" content="Registrasi Online Kejuaraan Pencak Silat">
	<meta name="keywords" content="registrasi,online,pencak,silat">
	<meta name="robots" content="index,follow">
	<meta name="author" content="Yudha Yogasara">
	<!-- CSS Files -->
	<!-- <link href="css/reset.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" /> -->
	<!-- Add Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/jquery-ui.js"></script>

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
							<h2>FORMULIR KONFIRMASI PEMBAYARAN</h2>
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
										<option value="0808 0883 26542 - Bank BCA - A/N Fajar">0808 0883 26542 - Bank ABC - A/N Fajar </option>
										<option value="0809 7898 09981 - Bank Mandiri - A/N Fajar">0809 7898 09981 - Bank ACC - A/N Fajar </option>
									</select>
								</div>

								<div class="form-group mb-4">
									<label for="bank-pengirim">Bank Pengirim</label>
									<select name="bankpengirimm" id="bankpengirim" class="form-control">
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
									<input type="text" name="nama-pengirim" id="nama-pengirim" maxlength="35" class="form-control">
								</div>

								<div class="form-group mb-4">
									<label>Nomor Hp</label>
									<input type="text" name="noHp" id="noHp" maxlength="35" class="form-control">
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
										<img src="capcay.php" />
									</div>
								</div>
								<div>
									<button type="submit" name="konfirmasi" value="KIRIM" class="btn btn-primary col-12">Submit</button>
								</div>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- start: footer -->
	<div id="footer">
		<p> </p>
	</div>
	<!-- end: footer -->

</body>

</html>

