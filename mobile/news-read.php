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
	<div data-role="main" class="ui-content" style="background-image : url('../img/background.png');">
		<div class="news">
		<?php 
			$files = glob("../newsdata/*.php");
			$count = count($files);
			for ($i = 0;$i < $count;$i++) {
				$filename = str_replace("../newsdata/","",$files[$i]);
				$filename = str_replace(".php","",$filename);
				if($_GET["id"] == md5($filename)) {
					include($files[$i]);
				}
			}
		?>
		<a href="news.php"> << Return to the news list.</a>
		</div>
	</div>
	<?php
		include("footer.php");
	?>
</div>
</body>
</html>