<?php
	$nama = $_POST["nama"];
	$sekolah = $_POST["sekolah"];
	$cabang = $_POST["cabang"];
	/* CODE CHECKING */
	require("cabang.php");
	$par_code = "2016".$cab_kode;
    $conn = mysqli_connect("localhost","root","","dbpeserta");
	$sqll = "SELECT * FROM $cab ORDER BY id";
	$queryy = mysqli_query($conn,$sqll);
	$result = mysqli_num_rows($queryy);
	if ($result == 0) {
		$code = $par_code."01";
	}
	else if ($result < 9) {
		$code = $par_code."0".$result+1;
	}
	else {
		$code = $par_code.$result+1;
	}
	$sql = "INSERT INTO $cab (id,nama,sekolah) VALUES ('$code','$nama','$sekolah')";
	$query = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<link href="../css.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<title>Pendaftaran - Canisius College Cup 2016</title>
	<link rel="icon" href="../img/logo.png">
</head>
<body>

<section class="body">
	<div class="content">
		<?php 
		if($query) { ?>
			<h1 align="center">REGISTRASI BERHASIL</h1>
			<p align="center">Dibawah ini merupakan nomor registrasi Anda. Gunakan kode dibawah ini untuk mengurus hal berkaitan pendaftaran, bertanya ke panitia kami, 
			serta untuk mengecek status registrasi pada halaman utama pendaftaran.</p>
			<h1 align="center" style="padding : 10px; background-color : yellow; color : black"><?php echo $code ?></h1><br>
			Terima kasih atas partisipasi Anda dan kami tunggu kedatangan Anda di CC Cup 2016!<br><br>
			<div class="butcont" align="center">
				<a href="../">Kembali ke<br>Website Utama</a>
				<a href="./">Kembali ke<br>Halaman Pendaftaran</a>
			</div>
		<?php
		}
		else { ?>
			error_reporting(E_ALL);
			ini_set('display_errors',1);
			<h1 align="center">REGISTRASI GAGAL</h1>
			<p align="center">Sepertinya telah terjadi kesalahan yang menyebabkan data tidak bisa masuk.<br>
			Terjadi error seperti berikut : <?php echo $conn->error ?><br>
			Silahkan kontak panitia dengan menyebutkan error tersebut, atau coba input data lagi. <br>
			<div class="butcont" align="center">
				<a href="../">Kembali ke Website Utama</a>
				<a href="./">Kembali ke Halaman Pendaftaran</a>
			</div>
		<?php	}
		?>
	</div>
</section>

<?php
	include("footer.php");
?>

</body>
</html>
