<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_two();

	include("includes/connection.php");
	
?>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white download"></i><span class="break"></span>Cetak Form Nilai Tanding</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" target="_blank" action="do_form_nilai_tanding.php">
							<table>
								<tr>
									<td>
										<input type="text" name="tgl" id="tgl" value=<?php echo date("Y-m-d"); ?>>
									</td>
									<td>
										<select class="form-control" name="gelanggang" id="gelanggang">
											<option value="">-- Pilih Gelanggang --</option>
											<option value="A">A</option>
											<option value="B">B</option>
											<option value="C">C</option>
											<option value="D">D</option>
										</select>
									</td>
									<td><input type="submit" class="btn btn-info" value="Generate"></td>
								</tr>
							</table>
						</form>
					</div>
				</div><!--/span-->
			</div><!--/row-->

<?php
	get_footer();
?>