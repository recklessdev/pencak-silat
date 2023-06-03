<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Login Form Pencak Silat</title>
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->

	<!-- start: Add Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- end: Add Bootstrap -->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->

	<style type="text/css">
		.login-form {
			margin-top: 150px;
		}

		p {
			max-width: 600px;
			margin: 0 auto;
			text-align: center;
			padding-top: 15px;
		}
	</style>

</head>

<body>
	<?php
	include "headmenu.php";
	?>
	<div class="container-fluid mt-5">
		<div class="row justify-content-center">

			<div class="col-md-4">
				<div class="card border-0 rounded shadow">
					<div class="card-body">

						<h2>Login Form</h2>
						<form method="post" action="verifylogin.php">
							<?php
							if (isset($_SESSION['msg'])) {

								echo $_SESSION['msg'];
								unset($_SESSION['msg']);
							}

							if (isset($_SESSION['require'])) {
								echo $_SESSION['require'];
								unset($_SESSION['require']);
							}
							?>
							<div class="form-group" title="Email">
								<span class="add-on"><label for="email">Email</label></span>
								<input class="form-control" name="email" id="email" type="text" required style="height: 40px" />
							</div>

							<div class=" form-group" title="Password">
								<span class="add-on"><label for="password">Password</label></span>
								<input class="form-control" name="password" id="password" type="password" required style="height: 40px" />
							</div>
							<div class=" clearfix">
							</div>

							<div class="button-login">
								<button type="submit" class="btn btn-primary btn-block">Login</button>
							</div>
							<div class="clearfix"></div>
						</form>
						<p>Don't have an account? <a href="../pendaftaran.php">Signup </a>first.</p>
						<hr>
					</div><!--/row-->
				</div><!--/.fluid-container-->

			</div><!--/fluid-row-->
			<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
					<ul class="list-inline item-details">
						<li><a href="http://themifycloud.com">Admin templates</a></li>
						<li><a href="http://themescloud.org">Bootstrap themes</a></li>
					</ul>
				</div>
			</div>

			<!-- start: JavaScript-->
			<script src="js/jquery-1.9.1.min.js"></script>
			<script src="js/jquery-migrate-1.0.0.min.js"></script>
			<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
			<script src="js/jquery.ui.touch-punch.js"></script>
			<script src="js/modernizr.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.cookie.js"></script>
			<script src='js/fullcalendar.min.js'></script>
			<script src='js/jquery.dataTables.min.js'></script>
			<script src="js/excanvas.js"></script>
			<script src="js/jquery.flot.js"></script>
			<script src="js/jquery.flot.pie.js"></script>
			<script src="js/jquery.flot.stack.js"></script>
			<script src="js/jquery.flot.resize.min.js"></script>
			<script src="js/jquery.chosen.min.js"></script>
			<script src="js/jquery.uniform.min.js"></script>
			<script src="js/jquery.cleditor.min.js"></script>
			<script src="js/jquery.noty.js"></script>
			<script src="js/jquery.elfinder.min.js"></script>
			<script src="js/jquery.raty.min.js"></script>
			<script src="js/jquery.iphone.toggle.js"></script>
			<script src="js/jquery.uploadify-3.1.min.js"></script>
			<script src="js/jquery.gritter.min.js"></script>
			<script src="js/jquery.imagesloaded.js"></script>
			<script src="js/jquery.masonry.min.js"></script>
			<script src="js/jquery.knob.modified.js"></script>
			<script src="js/jquery.sparkline.min.js"></script>
			<script src="js/counter.js"></script>
			<script src="js/retina.js"></script>
			<script src="js/custom.js"></script>
			<!-- end: JavaScript-->
</body>

</html>