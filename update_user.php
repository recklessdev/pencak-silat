<?php
  // koneksi
  include "backend/includes/connection.php";

  session_start();

    $nama               = $_POST['nm_lengkap'];
    $jenis_kelamin      = $_POST['jenis_kelamin'];
    $tempat_lahir       = $_POST['tpt_lahir'];
    $tgl_lahir          = $_POST['tgl_lahir'];
    $tb                 = $_POST['tb'];
    $bb                 = $_POST['bb'];
    $kontingen          = $_POST['kontingen'];
    $alamat             = $_POST['alamat'];

    // memasukan data
    $sql = "UPDATE peserta SET 
                  nm_lengkap='$nama', 
                  jenis_kelamin='$jenis_kelamin', 
                  tpt_lahir='$tempat_lahir', 
                  tgl_lahir='$tgl_lahir', 
                  tb='$tb', 
                  bb='$bb',
                  kontingen='$kontingen',
                  alamat='$alamat'
                WHERE ID_peserta='$_SESSION[ID_peserta]'";

    $result = mysqli_query($koneksi, "$sql");

    // pesan ketika menambahkan data
    echo "<script>;window.alert('Data Peserta berhasil diubah!');
                          window.location=(href='user_index.php')</script>";
?>
