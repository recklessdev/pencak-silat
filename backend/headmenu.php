<?php
include "includes/connection.php";
$NOW = date("Y-m-d");
?>

<!DOCTYPE html>
<html>

<head>
	<!-- CSS Files -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
	<!-- Add Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a href="index.php" class="navbar-brand">
				<img src="../images/logo.jpg" height="50" alt="CoolBrand">
			</a>
			<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav">
					<li class="nav-item <?php echo isActive('index'); ?>">

						<a href="../index.php" class="nav-item nav-link active">Home</a>
					</li>
					<li class="nav-item <?php echo isActive('pendaftaran'); ?>">

						<a href="../pendaftaran.php" class="nav-item nav-link">Pendaftaran</a>
					</li>
					<li class="nav-item <?php echo isActive('bantuan'); ?>">

						<a href="../bantuan.php" class="nav-item nav-link">Bantuan</a>
					</li>
				</ul>
				<ul class="navbar-nav ms-auto">
					<li class="nav-item <?php echo isActive('login'); ?>">
						<a href="login.php" class="nav-item nav-link">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
<?php
// Function to check if the current page matches the given URL
function isActive($url)
{
	if (basename($_SERVER['PHP_SELF'], '.php') == $url) {
		return 'active';
	} else {
		return '';
	}
}
?>