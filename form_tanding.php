<h1>FORMULIR PENDAFTARAN</h1>
<h3><?php echo "Kategori: " . $kategori_tanding . " - Golongan: " . $golongan; ?></h3>
<div align="center">
	<form name="InputPeserta" id="InputPeserta" method="POST" enctype="multipart/form-data" action="do_pendaftaran_tanding.php">
		<table border="0">
			<tr>
				<td>Foto Peserta</td>
				<td>: <input type="file" id="fotopeserta" name="fotopeserta"> File Gambar/Foto. Max size: 500 KB</td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>: <input type="text" name="nama" id="nama" maxlength="35"></td>
				<input type="hidden" name="kategori_tanding" id="kategori_tanding" value="<?php echo $kategori_tanding; ?>">
				<input type="hidden" name="golongan" id="golongan" value="<?php echo $golongan; ?>">
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:
					<select name="jenis_kelamin" id="jenis_kelamin">
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>: <input type="text" name="tpt_lahir" id="tpt_lahir"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>: <input type="text" name="tgl_lahir" id="tgl_lahir" value="<?php echo $today; ?>"> format (YYYY-MM-DD)</td>
			</tr>
			<tr>
				<td>Tinggi Badan</td>
				<td>: <input type="text" name="tb" id="tb"> cm</td>
			</tr>
			<tr>
				<td>Berat Badan</td>
				<td>: <input type="text" name="bb" id="bb"> kg</td>
			</tr>
			<tr>
				<td>Foto/Scan KTP</td>
				<td>: <input type=file id='ktppeserta' name='ktppeserta'> File Gambar/Foto. Max size: 500 KB</td>
			</tr>
			<tr>
				<td>Scan Akta Kelahiran</td>
				<td>: <input type="file" id="akta" name="akta"> Max size: 3 MB</td>
			</tr>
			<tr>
				<td>Kelas Tanding</td>
				<td> :
					<select name="kelas_tanding" id="kelas_tanding">
						<?php while ($kelastanding = mysqli_fetch_array($carikelas)) { ?>
							<option value="<?php echo $kelastanding[0]; ?>"><?php echo $kelastanding[1]; ?></option>
						<?php } ?>
					</select>
					<A HREF="tabel_kelas_tanding.php" target="_blank">Detail Tabel Kelas Tanding</A>
				</td>
			</tr>
			<tr>
				<td>Kontingen</td>
				<td>: <input type="text" name="kontingen" id="kontingen"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="daftar" value="DAFTAR"></td>
			</tr>
		</table>
	</form>
</div>
<script>
	var arrAsalKontingen = <?php echo json_encode($arrAsalKontingen); ?>;
	$(document).ready(function() {
		$("#kontingen").autocomplete({
			source: arrAsalKontingen
		});
	});
</script>