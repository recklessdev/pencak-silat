<?php
include "backend/includes/connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>

  <!-- start: CSS -->
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->

  <!-- start: Add Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- end: Add Bootstrap -->
</head>
<body>
	<?php 
	include "headmenu.php";

 
	// // cek apakah yang mengakses halaman ini sudah login
	// if($_SESSION['role']==""){
	// 	header("location:index.php?pesan=gagal");
	// }
 
	?>
  	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						Main Menu
						<hr>
						<ul class="list-group">
              <a href="user_index.php" class="list-group-item text-dark text-decoration-none">Dashboard</a>
              <a href="user_profile.php" class="list-group-item text-dark text-decoration-none">Profile</a>
              <a href="pencarian.php" class="list-group-item text-dark text-decoration-none">Pencarian Data</a>
              <a href="konfirmasi.php" class="list-group-item text-dark text-decoration-none">Konfirmasi Pembayaran</a>
              <a href="backend/logout.php" class="list-group-item text-dark text-decoration-none">Logout</a>
            </ul>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						DASHBOARD
						<hr>
						Selamat Datang <b><?php echo $_SESSION['nm_lengkap']; ?></b>
					</div>
				</div>
			</div>
		</div>
	</div>
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>