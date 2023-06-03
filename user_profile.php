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
            Profile
            <hr>
            <?php

            // form memasukan data ke tabel
            if (isset($_POST['update'])) {
              $ID_peserta     = $_POST['ID_peserta'];
              $nama           = $_POST['nm_lengkap'];
              $username       = $_POST['username'];
              $tempat_lahir   = $_POST['tpt_lahir'];
              $tgl_lahir      = $_POST['tgl_lahir'];
              $jenis_kelamin  = $_POST['jenis_kelamin'];
              $tb             = $_POST['tb'];
              $bb             = $_POST['bb'];

              // koneksi
              include_once("backend/includes/connection.php");

              // memasukan data
              $sql = "UPDATE peserta SET nama='$nama', username='$username', tpt_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', tb='$tb', bb='$bb'  WHERE ID_peserta=$id";
              $result = mysqli_query($koneksi, "$sql");


              // pesan ketika menambahkan data
              echo "<script>;window.alert('Data Peserta berhasil diubah!');
                        window.location=(href='user_index.php')</script>";
            } ?>
            <div class="col-md-12">
              <div class="panel panel-default">

                <div class="panel-body">


                  <?php
                  $sql = "SELECT * FROM peserta WHERE ID_peserta='$_SESSION[ID_peserta]'";
                  $result = mysqli_query($koneksi, "$sql");
                  $data = mysqli_fetch_array($result);
                  ?>
                  <form action="user_index.php" method="post" name="form">
                    <table width="12%" border="0">
                      <div class="form-group mb-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nm_lengkap" value="<?php echo $data['nm_lengkap']; ?>" placeholder="Nama">
                      </div>
                      <div class="form-group mb-3">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>" placeholder="Jenis Kelamin">
                      </div>
                      <div class="form-group mb-3">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" name="tpt_lahir" value="<?php echo $data['tpt_lahir']; ?>" placeholder="Tempat Lahir">
                      </div>
                      <div class="form-group mb-3">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" placeholder="Tanggal Lahir">
                      </div>
                      <div class="form-group mb-3">
                        <label>Tinggi Badan</label>
                        <input type="text" class="form-control" name="tb" value="<?php echo $data['tb']; ?>" placeholder="Tinggi Badan">
                      </div>
                      <div class="form-group mb-3">
                        <label>Berat Badan</label>
                        <input type="text" class="form-control" name="bb" value="<?php echo $data['bb']; ?>" placeholder="Berat Badan">
                      </div>
                      <div class="form-group mb-3">
                        <label>Kategori Tanding</label>
                        <input type="text" class="form-control" name="kategori_tanding" value="<?php echo $data['kategori_tanding']; ?>" placeholder="Kategori Tanding">
                      </div>
                      <div class="form-group mb-3">
                        <label>Golongan</label>
                        <input type="text" class="form-control" name="golongan" value="<?php echo $data['golongan']; ?>" placeholder="Golongan">
                      </div>
                      <div class="form-group mb-3">
                        <label>Kontingen</label>
                        <input type="text" class="form-control" name="kontingen" value="<?php echo $data['kontingen']; ?>" placeholder="Kontingen">
                      </div>
                      <div class="form-group mb-3">
                        <label>Status</label>
                        <input type="text" class="form-control" name="status" value="<?php echo $data['status']; ?>" placeholder="Status" disabled>
                      </div>

                      <tr>
                        <td><input type="submit" name="update" value="Simpan" class="btn btn-primary btn-sm"></td>
                        <td><a href="user_index.php" value="Batal" class="btn btn-danger btn-sm">Kembali</a></td>
                      </tr>
                    </table>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>