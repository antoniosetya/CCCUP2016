<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<link href="../css.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<title>Pendaftaran - Canisius College Cup 2016</title>
	<link rel="icon" href="../img/logo.png">
	<script>
		function cek(){
			if(document.input.nomor.value == "") {
				alert("Nomor pendaftaran masih kosong!");
				return false;
			}
			else {
				document.input.submit();
			}
		}
	</script>
</head>
<body>

<h1 align="center">Registration Check</h1>

<section class="body">
	<div class="content" align="center">
			<form name="input" method="POST" action="regis_data.php">
				<p>Masukkan nomor pendaftaran Anda : </p><br>
				<input type="text" name="nomor"><br><br>
				<div class="butcont">
				<button type="button" onclick=cek()>SUBMIT</button>
			</form>
			<a href="./">Kembali</a>
		</div>
	</div>
</section>
<?php 
	include("footer.php");
?>

</body>
</html>