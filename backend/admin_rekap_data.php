<?php
require_once("functions/function.php");
get_header();
get_sidebar();
get_bread_two();

include("includes/connection.php");

//cari data kelas tanding
$sqlkelastanding = "SELECT * FROM kelastanding";
$carikelastanding = mysqli_query($koneksi, $sqlkelastanding);

//cari pengundian data
$sqlhasilundian = "SELECT * FROM undian 
						INNER JOIN peserta ON peserta.ID_peserta=undian.id_peserta 
						INNER JOIN kelastanding ON peserta.kelas_tanding_FK=kelastanding.ID_kelastanding
						ORDER BY undian.id_undian DESC";
$carihasilundian = mysqli_query($koneksi, $sqlhasilundian);
?>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white download"></i><span class="break"></span>Rekap Data Peserta Tanding</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" target="_blank" action="admin_do_rekap.php">
				<table>
					<tr>
						<td>
							<select class="form-control" name="golongan" id="golongan">
								<option value="">-- Pilih Golongan --</option>
								<option value="Remaja">Remaja</option>
								<option value="Dewasa">Dewasa</option>
							</select>
						</td>
						<td>
							<select name="jenis_kelamin" id="jenis_kelamin">
								<option value="">--- Pilih Putra/Putri ---</option>
								<option value="Laki-laki">Putra</option>
								<option value="Perempuan">Putri</option>
							</select>
						</td>
						<td>
							<select name="kelas_tanding" id="kelas_tanding">
								<option value="">--- Pilih Kelas Tanding ---</option>
								<?php while ($kelastanding = mysqli_fetch_array($carikelastanding)) { ?>
									<option value="<?php echo $kelastanding[0]; ?>"><?php echo $kelastanding[1]; ?></option>
								<?php } ?>
							</select>
						</td>
						<td><input type="submit" class="btn btn-info" value="Download"></td>
					</tr>
				</table>
			</form>
		</div>
	</div><!--/span-->
</div><!--/row-->

<!-- <div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white download"></i><span class="break"></span>Rekap Data Peserta TGR</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" target="_blank" action="admin_do_rekap_tgr.php">
							<table>
								<tr>
									<td>
										<select class="form-control" name="golongan" id="golongan">
											<option value="">-- Pilih Golongan --</option>
											<option value="Usia Dini">Usia Dini</option>
											<option value="Pra Remaja">Pra Remaja</option>
											<option value="Remaja">Remaja</option>
											<option value="Dewasa">Dewasa</option>
										</select>
									</td>
									<td>
										<select class="form-control" name="kategori_tanding" id="kategori_tanding">
											<option value="">-- Pilih Kategori Tanding --</option>
											<option value="Tunggal">Tunggal</option>
											<option value="Ganda">Ganda</option>
											<option value="Regu">Regu</option>
										</select>
									</td>
									<td><input type="submit" class="btn btn-info" value="Download"></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div> -->
<?php
get_footer();
?>