<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="./cssm.css">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<title>Canisius College Cup 2016</title>
	<link rel="icon" href="../img/logo.png">
</head>
<body>
<div data-role="page">
	<?php 
		include("header.php");
	?>
	<div data-role="main" class="ui-content">
		<a href="#menu" class="menu-button"><p>Menu</p></a>
		<h1 align="center">LATEST NEWS</h1>
		<div class="news" align="center">
		<ul>
		<?php 
			$i = 1;
			foreach(glob("../newsdata/*.php") as $file) {
			$filename = str_replace("../newsdata/","",$file);
			$filename = str_replace(".php","",$filename);
				echo '<a href="news-read.php?id='.md5($filename).'"><li>'.$filename.'</li></a>';
			$i++;
			}
		?>
		</ul>
  		</div>
	</div>
	<?php 
		include('footer.php');
	?>
</div>
</body>
</html>