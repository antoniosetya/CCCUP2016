<?php	
	error_reporting(0);
	$code = $_POST["nomor"];
	$code_proc = str_replace("2016","",$code);
	$code_proc = str_split($code_proc);
	$code_cab = $code_proc[0].$code_proc[1];
	$arrdata = array("sepakbola","basket","futsal_putri","tenis","voli","bulu_tangkis","catur","taekwondo","biliard","pencak_silat","wall_climbing","b_boy","band",
			"fotografi","modern_dance","paskibra");
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
<div data-role="page">
<h1 align="center">Registration Status</h1>
	
<div data-role="main" class="ui-content">
	<div class="content">
		<?php
			#$conn = mysqli_connect("mysql.idhostinger.com","u626164713_cc16","persevera08","u626164713_serta");
			$conn = mysqli_connect("localhost","root","","dbpeserta");
			$a = $code_cab - 1;
			$sql = "SELECT * FROM $arrdata[$a] WHERE id='$code'";
			$result = mysqli_query($conn,$sql);
			$data = mysqli_fetch_assoc($result); 
			if ($data != NULL) {?>
				<table align="center"> 
					<tr>
						<td valign="top">Nama</td> 
						<td valign="top">:</td>
						<td><?php $nama = trim($data["nama"]);
												$nama = explode("\n",$nama);
												foreach ($nama as $line) {
												echo $line."<br>"; }?></td>
					</tr>
					<tr>
						<td>Sekolah</td>
						<td>:</td> 
						<td><?php echo $data["sekolah"]; ?></td>
					</tr>
					<tr>
						<td>No. Pendaftaran</td>
						<td>:</td>
						<td><?php echo $data["id"]; ?></td>
					</tr>
				</table>
			<?php } else {
		?>
			<p align="center">Tidak ditemukan data dengan nomor pendaftaran seperti itu, coba lagi</p>
		<?php } ?>
		<p align="center"><a href="./see_data.php" style="text-decoration : underline"> << Kembali </a></p>
	</div>
</div>

<?php 
	include("footer.php");
?>
</div>
</body>
</html>