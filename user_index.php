<?php
include "backend/includes/connection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Sign up</title>

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
  <!-- Font Icon -->
  <!-- <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css"> -->

  <!-- Main css -->
  <link rel="stylesheet" href="css/style.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<body>
  <!-- MENU -->
  <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container-fluid" style="width: 61.2%;">

      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
        </button>

        <!-- lOGO TEXT HERE -->
        <a href="index.php" class="navbar-brand" style="color:#333;">Pencak <span>.</span> Silat</a>
      </div>

      <!-- MENU LINKS -->
      <?php

      if (isset($_SESSION['email'])) {
        echo '
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-nav-first">
								<li><a href="index.php" class="smoothScroll" style="color: #ce3232;">Home</a></li>
								<li><a href="index.php" class="smoothScroll" style="color: #ce3232;">Tentang</a></li>
								<li><a href="index.php" class="smoothScroll" style="color: #ce3232;">Galeri</a></li>
								<li><a href="pencarian.php" class="smoothScroll" style="color: #ce3232;">Pencarian Data</a></li>
								<li><a href="konfirmasi.php" class="smoothScroll" style="color: #ce3232;">Konfirmasi Pembayaran</a></li>
								<li><a href="index.php" class="smoothScroll" style="color: #ce3232;">Bantuan</a></li>
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
								<li><a href="../index.php" class="smoothScroll" style="color: #ce3232;">Home</a></li>
								<li><a href="../index.php" class="smoothScroll" style="color: #ce3232;">Tentang</a></li>
								<li><a href="../index.php" class="smoothScroll" style="color: #ce3232;">Galeri</a></li>
								<li><a href="../index.php" class="smoothScroll" style="color: #ce3232;">Bantuan</a></li>
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

  <?php

  $sql = "SELECT * FROM peserta WHERE ID_peserta='$_SESSION[ID_peserta]'";
  $result = mysqli_query($koneksi, "$sql");
  $data = mysqli_fetch_array($result);

  ?>
  <div class="container rounded bg-white mt-5 mb-5" style="margin-top: 150px;">
    <div class="row">
      <div class="col-md-3 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="peserta_foto/<?php echo $data['foto']; ?>" style="margin-top: 55px;"><span class="font-weight-bold"></span><span class="text-black-50"><?php echo $data['email']; ?></span><span> </span></div>
      </div>
      <div class="col-md-5 border-right">
        <div class="p-3 py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-center mb-4">Profile Settings</h4>
          </div>
          <form action="update_user.php" method="post" name="form">

          <div class="row mt-2">
            <div class="form-group col-md-12 mb-4" style="margin-block-end: auto; margin-bottom: 15px">
              <td><b>Nama</b></td>
              <input type="text" class="form-control" name="nm_lengkap" value="<?php echo $data['nm_lengkap']; ?>" placeholder="Nama">
            </div>
            <div class="form-group col-md-12 mb-4" style="margin-block-end: auto; margin-bottom: 15px">
              <td><b>Jenis Kelamin</b></td>
              <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>" placeholder="Jenis Kelamin">
            </div>
            <div class="form-group col-md-12 mb-4" style="margin-block-end: auto; margin-bottom: 15px">
              <td><b>Tempat Lahir</b></td>
              <input type="text" class="form-control" name="tpt_lahir" value="<?php echo $data['tpt_lahir']; ?>" placeholder="Tempat Lahir">
            </div>
            <div class="form-group col-md-12 mb-4" style="margin-block-end: auto; margin-bottom: 15px">
              <td><b>Alamat</b></td>
              <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>" placeholder="Alamat">
            </div>
            <div class="form-group col-md-12 mb-4" style="margin-block-end: auto; margin-bottom: 15px">
              <td><b>Tanggal Lahir</b></td>
              <input type="text" class="form-control" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" placeholder="Tanggal Lahir">
            </div>
            <div class="col-md-6">
              <td><b>Tinggi Badan</b></td>
              <input type="text" class="form-control" name="tb" value="<?php echo $data['tb']; ?>" placeholder="Tinggi Badan">
            </div>
            <div class="col-md-6">
              <td><b>Berat Badan</b></td>
              <input type="text" class="form-control" name="bb" value="<?php echo $data['bb']; ?>" placeholder="Berat Badan">
            </div>
            <div class="form-group col-md-12 mb-4" style="margin-block-end: auto; margin-bottom: 15px"">
              <td><b>Kategori Tanding</b></td>
              <input type="text" class="form-control" name="kategori_tanding" value="<?php echo $data['kategori_tanding']; ?>" placeholder="Kategori Tanding" disabled>
            </div>
            <div class="form-group col-md-12 mb-4" style="margin-block-end: auto; margin-bottom: 15px"">
              <td><b>Golongan</b></td>
              <input type="text" class="form-control" name="golongan" value="<?php echo $data['golongan']; ?>" placeholder="Golongan" disabled>
            </div>
            <div class="form-group col-md-12 mb-4" style="margin-block-end: auto; margin-bottom: 15px"">
              <td><b>Kontingen</b></td>
              <input type="text" class="form-control" name="kontingen" value="<?php echo $data['kontingen']; ?>" placeholder="Kontingen">
            </div>
            <div class="form-group col-md-12 mb-4" style="margin-block-end: auto; margin-bottom: 15px"">
              <td><b>Status</b></td>
              <input type="text" class="form-control" name="status" value="<?php echo $data['status']; ?>" placeholder="Status" disabled>
            </div>
          </div>
          <div class="mt-5 text-center" style="margin-right: 220px;">
          <td><input type="submit" name="update" value="Update" class="btn btn-primary profile-button"></td>
          </div>
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
  <!-- JS -->
</body>

</html>

<style>
  .custom-navbar.navbar-fixed-top {
    background: #ffffff;
    -webkit-box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
    padding: 12px 0;
  }

  body {
    background: #f8f8f8;
  }

  /* .form-control:focus {
      box-shadow: none;
      border-color: #BA68C8
  } */

  .profile-button {
    background: #CE2322;
    box-shadow: none;
    border: none
  }

  .profile-button:hover {
    background: #E72734
  }

  .profile-button:focus {
    background: #E72734;
    box-shadow: none
  }

  .profile-button:active {
    background: #E72734;
    box-shadow: none
  }

  .back:hover {
    color: #E72734;
    cursor: pointer
  }

  .labels {
    font-size: 11px
  }

  .add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
  }

  .row{
    margin-right: -115px;
  }
</style>