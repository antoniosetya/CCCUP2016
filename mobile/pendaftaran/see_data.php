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
<h1 align="center">Registration Check</h1>

<div data-role="main" class="ui-content">
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
</div>
<?php 
	include("footer.php");
?>
</div>
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
</body>
</html>