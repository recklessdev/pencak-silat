<?php
	include "backend/includes/connection.php";
	$NOW = date("Y-m-d");
?>

<!DOCTYPE html>
<html>

<head>
	<!-- CSS Files -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
	<!-- Add Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

	<style>
		.active {
			font-weight: bold;
		}
	</style>
</head>

<body>
	<?php
		session_start();

		$activePage = basename($_SERVER['PHP_SELF']);

		if (isset($_SESSION['email'])) 
		{
			echo '
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="container">
						<a href="index.php" class="navbar-brand">
							<img src="images/logo.jpg" height="50" alt="CoolBrand">
						</a>
						<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbar-collapse">
							<ul class="navbar-nav">
								<li class="nav-item ' . ($activePage == "user_index.php" ? "active" : "") . '">
									<a href="user_index.php" class="nav-item nav-link">Home</a>
								</li>
								<li class="nav-item ' . ($activePage == "pencarian.php" ? "active" : "") . '">
									<a href="pencarian.php" class="nav-item nav-link ">Pencarian Data</a>
								</li>
								<li class="nav-item ' . ($activePage == "konfirmasi.php" ? "active" : "") . '">
									<a href="konfirmasi.php" class="nav-item nav-link ">Konfirmasi Pembayaran</a>
								</li>
								<li class="nav-item ' . ($activePage == "bantuan.php" ? "active" : "") . '">
									<a href="bantuan.php" class="nav-item nav-link">Bantuan</a>
								</li>
							</ul>
							<ul class="navbar-nav ms-auto">
								<li class="nav-item ' . ($activePage == "logout.php" ? "active" : "") . '">
									<a href="backend/logout.php" class="nav-item nav-link">Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			';
		} 
		else 
		{
			echo '
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="container">
						<a href="index.php" class="navbar-brand">
							<img src="images/logo.jpg" height="50" alt="CoolBrand">
						</a>
						<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbar-collapse">
							<ul class="navbar-nav">
								<li class="nav-item ' . ($activePage == "index.php" ? "active" : "") . '">
									<a href="index.php" class="nav-item nav-link ">Home</a>
								</li>
								<li class="nav-item ' . ($activePage == "pendaftaran.php" ? "active" : "") . '">
									<a href="pendaftaran.php" class="nav-item nav-link">Pendaftaran</a>
								</li>
								<li class="nav-item ' . ($activePage == "bantuan.php" ? "active" : "") . '">
									<a href="bantuan.php" class="nav-item nav-link">Bantuan</a>
								</li>
							</ul>
							<ul class="navbar-nav ms-auto">
								<li class="nav-item ' . ($activePage == "login.php" ? "active" : "") . '">
									<a href="backend/login.php" class="nav-item nav-link">Login</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			';
		}
	?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>

</html>