<?php
	$nama = $_POST["nama"];
	$sekolah = $_POST["sekolah"];
	$cabang = $_POST["cabang"];
	/* CODE CHECKING */
	if ($cabang == "SEPAK BOLA") {
		$cab_kode = "01";
		$cab = "sepakbola";
	}
	else if ($cabang == "BASKET") {
		$cab_kode = "02";
		$cab = "basket";
	}
	else if ($cabang == "FUTSAL PUTRI") {
		$cab_kode = "03";
		$cab = "futsal_putri";
	}
	else if ($cabang == "TENIS") {
		$cab_kode = "04";
		$cab = "tenis";
	}
	else if ($cabang == "VOLI") {
		$cab_kode = "05";
		$cab = "voli";
	}
	else if ($cabang == "BULU TANGKIS") {
		$cab_kode = "06";
		$cab = "bulu_tangkis";
	}
	else if ($cabang == "CATUR") {
		$cab_kode = "07";
		$cab = "catur";
	}
	else if ($cabang == "TAEKWONDO") {
		$cab_kode = "08";
		$cab = "taekwondo";
	}
	else if ($cabang == "BILIARD") {
		$cab_kode = "09";
		$cab = "biliard";
	}
	else if ($cabang == "PENCAK SILAT") {
		$cab_kode = "10";
		$cab = "pencak_silat";
	}
	else if ($cabang == "WALL CLIMBING") {
		$cab_kode = "11";
		$cab = "wall_climbing";
	}
	else if ($cabang == "B-BOY") {
		$cab_kode = "12";
		$cab = "b_boy";
	}
	else if ($cabang == "BAND") {
		$cab_kode = "13";
		$cab = "band";
	}
	else if ($cabang == "FOTOGRAFI") {
		$cab_kode = "14";
		$cab = "fotografi";
	}
	else if ($cabang == "MODERN DANCE") {
		$cab_kode = "15";
		$cab = "modern_dance";
	}
	else if ($cabang == "PASKIBRA") {
		$cab_kode = "16";
		$cab = "paskibra";
	}	
	$par_code = "2016".$cab_kode;
	$conn = mysqli_connect("sql18.idhostinger.com","u626164713_cc16","persevera08","u626164713_serta");
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" href="../cssm.css">
	<title>Pendaftaran - Canisius College Cup 2016</title>
	<link rel="icon" href="../../img/logo.png">
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
			<p align="center">Sepertinya, terjadi kesalahan teknis yang menyebabkan data tidak bisa dikirim.<br>
			Terjadi error seperti berikut : <?php echo $conn->error ?><br>
			Silahkan kontak panitia dengan menyebutkan error tersebut, atau coba input data lagi. <br><br>
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
