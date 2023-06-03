<?php
include "backend/includes/connection.php";


//count jumlah peserta ALL
$sqlpesertaall = mysqli_query($koneksi, "SELECT COUNT(*) FROM peserta");
$datapesertaall = mysqli_fetch_array($sqlpesertaall);

//count jumlah peserta ALL WHERE PAID
$sqlpesertpaid = mysqli_query($koneksi, "SELECT COUNT(*) FROM peserta WHERE status='PAID' ");
$datapesertapaid = mysqli_fetch_array($sqlpesertpaid);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Registrasi Sirkuit Pencak Silat</title>
</head>
<meta name="description" content="Registrasi Online Kejuaraan Pencak Silat">
<meta name="keywords" content="registrasi,online,pencak,silat">
<meta name="robots" content="index,follow">

<!-- CSS Files -->
<link href="css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />

<!-- Add Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
	.jumbotron {
		background-image: url('tournament-background.jpg');
		background-size: cover;
		color: #fff;
		text-shadow: 2px 2px 4px #000000;
		padding: 50px 0;
	}

	.jumbotron h1 {
		font-size: 48px;
	}

	.jumbotron p {
		font-size: 24px;
	}

	.jumbotron .btn {
		font-size: 20px;
		padding: 10px 20px;
	}

	.section {
		padding: 80px 0;
	}

	.section h2 {
		font-size: 36px;
		margin-bottom: 40px;
	}

	.center 
	{
		margin-top: 25px;
  	margin: auto;
  	width: 68%;
		font-size: 22px;
	}
</style>

</head>

<body>
	<?php
	include "headmenu.php";
	?>

	<div class="text-center">
		<div class="container jumbotron">
			<h1>Selamat datang di Tournament Pencak Silat</h1>
			<p class="text-center">Bergabunglah dan tunjukkan keterampilan seni bela diri Anda</p>
		</div>
		<div class="center">
			<p><strong>JADWAL KEGIATAN</strong></p>
			<p>Pendaftaran : 03 Juni 2023</p>
			<p>Technical Meeting : 10 Juni 2023</p>
			<p>Upacara Pembukaan : 21 Juni 2023</p>
			<p>Pertandingan : 21 Juni 2023</p>
			<p>Upacara Penutupan : 27 Juni 2023</p>
			<a href="pendaftaran.php" class="btn btn-primary btn-lg mt-4">Daftar Sekarang</a>
		</div>
	</div>

	<div class="container">
		<div class="section">
			<div class="row">
				<div class="col-md-4">
					<h2>Tentang Pencak Silat</h2>
					<p>Pencak Silat adalah seni bela diri tradisional yang berasal dari wilayah Asia Tenggara, khususnya Indonesia, Malaysia, dan Brunei. Seni bela diri ini melibatkan berbagai teknik pertahanan diri, serangan, pergerakan, dan strategi yang digunakan dalam pertempuran.</p>
					<p>Pencak Silat tidak hanya merupakan bentuk latihan fisik semata, tetapi juga memiliki nilai-nilai budaya dan filosofi yang dalam. Seni bela diri ini mengajarkan keberanian, disiplin, pengendalian diri, dan penghormatan terhadap lawan.</p>
					<p>Setiap aliran atau perguruan Pencak Silat memiliki gaya dan karakteristik yang berbeda-beda, namun umumnya melibatkan gerakan tangan, kaki, sikap tubuh, dan teknik lempar. Selain itu, aspek seni juga menjadi bagian penting dari Pencak Silat, di mana gerakan-gerakan yang indah dan elegan diintegrasikan dalam latihan dan pertunjukan.</p>
					<p>Pencak Silat telah menjadi bagian dari warisan budaya dan identitas bangsa di banyak negara. Selain sebagai seni bela diri, Pencak Silat juga dipertandingkan dalam kompetisi dan turnamen baik di tingkat regional maupun internasional, di mana pesilat-pesilat terampil bertemu untuk memperebutkan gelar juara.</p>
					<p>Melalui latihan dan pengembangan keterampilan dalam Pencak Silat, praktisi dapat memperoleh kebugaran fisik yang baik, meningkatkan konsentrasi, mengembangkan kepercayaan diri, dan mempelajari nilai-nilai moral yang penting dalam kehidupan sehari-hari.</p>
					<p>Pencak Silat terus berkembang dan menjadi semakin populer di seluruh dunia, sebagai bentuk seni bela diri yang unik, indah, dan bermakna.</p>
				</div>
				<div class="col-md-4">
					<h2>Tournaments</h2>
					<p>Kami dengan bangga menghadirkan turnamen pencak silat yang spektakuler di Jakarta, ibu kota Indonesia. Acara ini akan menjadi panggung bagi pesilat-pesilat terbaik dari seluruh penjuru negeri dan mancanegara untuk berkompetisi dan memperebutkan gelar juara.</p>
					<p>Turnamen ini akan menampilkan pertarungan sengit dan penuh aksi yang menggabungkan keindahan gerakan seni bela diri dengan strategi pertahanan diri yang cemerlang. Dalam lingkungan yang dipenuhi semangat persaingan, peserta akan menunjukkan keahlian mereka melalui teknik pukulan, tendangan, kelincahan, dan strategi yang luar biasa.</p>
					<p>Jakarta, sebagai pusat kebudayaan dan olahraga Indonesia, menjadi tempat yang ideal untuk menggelar turnamen ini. Peserta dan penonton akan merasakan getaran energi yang menggebu dan semangat kebanggaan saat mereka menyaksikan kecakapan pesilat-pesilat terbaik dalam bertanding.</p>
					<p>Turnamen Pencak Silat Jakarta bukan hanya tentang persaingan, tetapi juga tentang memperluas pengetahuan dan apresiasi akan seni bela diri ini. Penonton akan memiliki kesempatan untuk mengamati gerakan yang indah dan menggugah hati, dan merasakan keberanian dan disiplin yang melekat dalam setiap gerakan.</p>
					<p>Selain itu, turnamen ini juga merupakan kesempatan untuk menghadirkan budaya Indonesia yang kaya dan warisan seni bela diri yang tak ternilai kepada dunia. Jakarta akan menjadi tempat pertemuan antara tradisi dan modernitas, di mana peserta dan penonton dari berbagai latar belakang budaya akan bersatu untuk menghormati dan merayakan keindahan Pencak Silat.</p>
					<p>Jadi, siapkan diri Anda untuk menyaksikan pertarungan yang memukau dan menggugah semangat di Turnamen Pencak Silat Jakarta. Jadilah bagian dari peristiwa yang akan menciptakan sejarah dalam seni bela diri ini, sambil mengapresiasi nilai-nilai budaya, keberanian, dan keahlian para pesilat yang luar biasa.</p>
					<p>Bergabunglah dengan kami di Jakarta dan saksikan keajaiban Pencak Silat yang tak terlupakan, di mana peserta berjuang untuk kejayaan dan mengilhami kita semua dengan dedikasi mereka terhadap seni bela diri yang megah ini.</p>
				</div>
				<div class="col-md-4">
					<h2>Hubungi Kami</h2>
					<p>Terima kasih telah mengunjungi halaman Contact Us kami. Silakan hubungi kami untuk pertanyaan atau informasi lebih lanjut.</p>
					<p>Alamat: Jl. Contoh No. 123, Jakarta, Indonesia
						<br>
						Telepon: +62 123 4567890
						<br>
						JEmail: info@tournamentpencaksilat.com
					</p>
					<p>Tim kami siap membantu Anda dengan segala pertanyaan tentang turnamen Pencak Silat kami. Silakan hubungi kami melalui telepon, email, atau kunjungi alamat kantor yang tertera di atas.</p>
					<p>Terima kasih atas perhatian dan dukungan Anda. Kami menantikan kabar dari Anda!</p>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>