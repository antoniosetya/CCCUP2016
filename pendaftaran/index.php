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
	
<h1 align="center">PENDAFTARAN</h1>

<section class="body">
	<div class="content">
		<form name="form1" method="POST" action="save.php">
		<table>
			<tr>
			<td>Nama : </td>
			<td><input type="text" name="nama"</td>
		</tr>
		<tr>
			<td>Alamat Email : </td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Pesan : </td>
		</tr>
		<tr>
			<td><textarea name="pesan" rows="5" cols="30"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" value="Simpan" name="simpan"></td>
		</tr>
	</table>
<br><br>
<p align="center"><a href="../" style="padding : 15px;background-color : orange;">Kembali ke Website Utama</a></p>	
</form>
</div>
</section>

<?php
	include("footer.php");
?>

</body>
</html>