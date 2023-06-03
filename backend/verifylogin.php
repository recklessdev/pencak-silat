<?php

$email = $_POST["email"];
$pwd = md5($_POST['password']);

include 'includes/connection.php';


$sql = "SELECT * FROM peserta WHERE email='$email' AND password='$pwd'";
$result = mysqli_query($koneksi,"$sql");
$cek  = mysqli_num_rows($result);



if($cek > 0)
{
  $data = mysqli_fetch_assoc($result);

  if($data['role'] == "admin")
  {
    session_start();

    $_SESSION['pwd']                = $pwd;
    $_SESSION['email']              = $email;
    $_SESSION['ID_peserta']         = $data['ID_peserta'];
    $_SESSION['nm_lengkap']         = $data['nm_lengkap'];
    $_SESSION['jenis_kelamin']      = $data['jenis_kelamin'];
    $_SESSION['tpt_lahir']          = $data['tpt_lahir'];
    $_SESSION['tgl_lahir']          = $data['tgl_lahir'];
    $_SESSION['tb']                 = $data['tb'];
    $_SESSION['$bb']                = $data['bb'];
    $_SESSION['$kategori_tanding']  = $data['kategori_tanding'];
    $_SESSION['$golongan']          = $data['golongan'];
    $_SESSION['$kontingen']         = $data['kontingen'];
    $_SESSION['$status']            = $data['status'];
    $_SESSION['role']               = "admin";

    header('location:index.php');
  }
  else
  {
    session_start();

    $_SESSION['pwd']                = $pwd;
    $_SESSION['email']              = $email;
    $_SESSION['ID_peserta']         = $data['ID_peserta'];
    $_SESSION['nm_lengkap']         = $data['nm_lengkap'];
    $_SESSION['jenis_kelamin']      = $data['jenis_kelamin'];
    $_SESSION['tpt_lahir']          = $data['tpt_lahir'];
    $_SESSION['tgl_lahir']          = $data['tgl_lahir'];
    $_SESSION['tb']                 = $data['tb'];
    $_SESSION['$bb']                = $data['bb'];
    $_SESSION['$kategori_tanding']  = $data['kategori_tanding'];
    $_SESSION['$golongan']          = $data['golongan'];
    $_SESSION['$kontingen']         = $data['kontingen'];
    $_SESSION['$status']            = $data['status'];
    $_SESSION['role']               = "user";

    header('location:../user_index.php');
    
  }
}
else
{
  session_start();
  $_SESSION['msg'] = '<h2>Invalid email or password!</h2>';
  header('location:login.php');
}
