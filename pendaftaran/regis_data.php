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
	<meta charset = "utf-8">
	<link href="../css.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<title>Pendaftaran - Canisius College Cup 2016</title>
	<link rel="icon" href="../img/logo.png">
</head>
<body>
	
<h1 align="center">Registration Status</h1>
	
<section class="body">
	<div class="content">
		<?php
			$conn = mysqli_connect("localhost","root","","dbpeserta");
			$a = $code_cab - 1;
			$sql = "SELECT * FROM $arrdata[$a] WHERE id='$code'";
			$result = mysqli_query($conn,$sql);
			$data = mysqli_fetch_assoc($result); 
			if ($data != NULL) {?>
				<table style="left : 10%"> 
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
</section>

<?php 
	include("footer.php");
?>

</body>
</html>