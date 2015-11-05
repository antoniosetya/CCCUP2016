<?php 
	if(array_key_exists("cabang",$_POST)) {
		if(isset($_POST["cabang"])) {
		$proc = 1;
		$cabang = $_POST["cabang"];
		$conn = mysqli_connect("localhost","root","","dbpeserta");
		$sql = "SELECT * FROM $cabang ORDER BY id";
		$result = mysqli_query($conn,$sql);
		}
		else {
			$proc = 0;
		}
	}
	else {
		$proc = 0;
	}
	$arrcabang = array("Sepak Bola","Basket","Futsal Putri","Tenis Meja","Voli","Bulu Tangkis","Catur","Taekwondo","Biliard",
	"Pencak Silat","Wall Climbing","B-Boy","Band","Fotografi","Modern Dance","Paskibra");
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
	<link rel="stylesheet" href="./cssm.css">
	<title>Canisius College Cup 2016</title>
	<link rel="icon" href="../img/logo.png">
	<link href="css.css" rel="stylesheet" type="text/css">
</head>
<body>
<div data-role="page">
	<div data-role="main" class="ui-content">
	<?php
		if ($proc == 0) { ?>
		<h1 align="center">DAFTAR PESERTA</h1>
		<div class="content" align="center">
		<p align="center">Pilih cabang yang ingin dilihat</p>
		<form method="POST">
			<select name="cabang">
		<?php
			for ($i = 0;$i <= 15;$i++) { ?>
				<option value="<?php echo $arrdata[$i];?>"><?php echo $arrcabang[$i];?></option>
			<?php }		
		?>
		</select><br><br>
		<input type="submit" value="SUBMIT">
		</div>
		</form>
	<?php }
		else if($proc == 1) { ?>
	<h1 align="center">Daftar Peserta<br>Cabang <?php for($i = 0;$i <= 15;$i++) {
			if($cabang == $arrdata[$i]) {
				echo $arrcabang[$i];
			}
		} ?></h1>
			<?php
				$num = mysqli_num_rows($result);
				$i = 0;
				if($num != 0) { ?>
				<div class="content">
				<table align="center" cellspacing="0" border="1" bordercolor="black">
					<tr>
						<th>No. Pendaftaran</th>
						<th>Nama</th>
						<th>Sekolah</th>
					</tr>
				<?php 
					while ($row = mysqli_fetch_assoc($result)) { ?>
				<tr>
				<td><?php echo $row["id"];?></td>
				<td><?php $nama = trim($row["nama"]);
						  $nama_proc = explode("\n", $nama);
						  foreach ($nama_proc as $line) {
							  echo $line.'<br>';
						  } ?></td>
				<td><?php echo $row["sekolah"];?></td>
			</tr>	
			<?php $i++; 
					} ?>
			</table><br> <?php  }
				else { ?>
				<div class="content">
				<p align="center">Masih belum ada yang mendaftar pada cabang ini...</p>
			<?php } ?>
	<p align="center"><a href="list.php"> << Kembali </a></p>
	</div>
	<?php } ?>
	</div>
</div>
</body>
</html>