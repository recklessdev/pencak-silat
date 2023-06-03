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

  $sql = "SELECT * FROM peserta WHERE ID_peserta='$_SESSION[ID_peserta]'";
  $result = mysqli_query($koneksi, "$sql");
  $data = mysqli_fetch_array($result);

  ?>
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            Main Menu
            <hr>
            <ul class="list-group">
              <div class="mb-3" style="text-align: center;">
                <img class="display-image" id="myImg" src="peserta_foto/<?php echo $data['foto']; ?>" height='100px' width='100px'>
              </div>
              <!-- The Modal -->
              <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
              </div>
              <a href="user_index.php" class="list-group-item text-dark text-decoration-none">Dashboard</a>
              <a href="user_profile.php" class="list-group-item text-dark text-decoration-none">Profile</a>
              <a href="pencarian.php" class="list-group-item text-dark text-decoration-none">Pencarian Data</a>
              <a href="konfirmasi.php" class="list-group-item text-dark text-decoration-none">Konfirmasi Pembayaran</a>
              <a href="backend/logout.php" class="list-group-item text-dark text-decoration-none">Logout</a>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="card">
          <div class="card-body">
            Profile
            <hr>
            <?php
            $sql = "SELECT * FROM peserta WHERE ID_peserta='$_SESSION[ID_peserta]'";
            $result = mysqli_query($koneksi, "$sql");
            $data = mysqli_fetch_array($result);
            ?>

            <div class="col-md-12">
              <div class="panel panel-default">

                <div class="panel-body">
                  <form action="update_user.php" method="post" name="form">
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
                        <input type="text" class="form-control" name="kategori_tanding" value="<?php echo $data['kategori_tanding']; ?>" placeholder="Kategori Tanding" disabled>
                      </div>
                      <div class="form-group mb-3">
                        <label>Golongan</label>
                        <input type="text" class="form-control" name="golongan" value="<?php echo $data['golongan']; ?>" placeholder="Golongan" disabled>
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

  <script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<style>
  #myImg {
    cursor: pointer;
    transition: 0.5s;
    max-width: 200px;
    height: auto;
    width: 100%;
    justify-content: center;
    align-items: center;
    border: 1px solid #ddd;

  }

  #myImg:hover {
    opacity: 0.7;
  }

  /* The Modal (background) */
  .modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.9);
    /* Black w/ opacity */
  }

  /* Modal Content (image) */
  .modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
  }

  /* Caption of Modal Image */
  #caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
  }

  /* Add Animation */
  .modal-content,
  #caption {
    animation-name: zoom;
    animation-duration: 0.6s;
  }

  @keyframes zoom {
    from {
      transform: scale(0.1)
    }

    to {
      transform: scale(1)
    }
  }

  /* The Close Button */
  .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
  }

  .close:hover,
  .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
  }

  /* 100% Image Width on Smaller Screens */
  @media only screen and (max-width: 700px) {
    .modal-content {
      width: 100%;
    }
  }
</style>