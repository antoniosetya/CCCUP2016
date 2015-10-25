<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="./cssm.css">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<title>Competitions</title>
	<link rel="icon" href="../img/logo.png">
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<div data-role="page">	
<?php
	include("header.php");
?>
	<div data-role="main" class="ui-content" style="background-image : url('../img/background.png');">
		<h1 align="center">OUR COMPETITIONS</h1>
		<p>We have 15 competitions to watch and participate here! Tap on each selection to read more.</p>
			<div data-role="collapsible">
				<h1>SEPAK BOLA</h1> 
				<p><?php include("../compdata/sepakbola.php"); ?></p>
			</div>
			<div data-role="collapsible">
				<h1>BASKET</h1>
				<p><?php include("../compdata/basket.php"); ?></p>
			</div>
			<div data-role="collapsible">
				<h1>FUTSAL PUTRI</h1>
				<p><?php include("../compdata/futsalputri.php"); ?></p>
			</div>
			<div data-role="collapsible">
				<h1>TENIS MEJA</h1>
				<p><?php include("../compdata/tenismeja.php"); ?></p>
			</div>
			<div data-role="collapsible">
				<h1>VOLI</h1>
				<p><?php include("../compdata/voli.php"); ?></p>
			</div>
			<div data-role="collapsible">
				<h1>BULU TANGKIS</h1>
				<p><?php include("../compdata/bultang.php"); ?></p>
			</div>
			<div data-role="collapsible">
				<h1>CATUR</h1>
				<p><?php include("../compdata/catur.php"); ?></p>
			</div>
			<div data-role="collapsible">
				<h1>TAEKWONDO</h1>
				<p><?php include("../compdata/taekwondo.php"); ?></p>
			</div>
			<div data-role="collapsible">
				<h1>BILIARD</h1>
				<p><?php include("../compdata/biliard.php"); ?></p>
			</div>
			<div data-role="collapsible">
				<h1>PENCAK SILAT</h1>
				<p><?php include("../compdata/pencaksilat.php"); ?></p>
			</div>
			<div data-role="collapsible">
				<h1>WALL CLIMBING</h1>
				<p><?php include("../compdata/wallclimbing.php"); ?></p>
			</div>
			<div data-role="collapsible">
				<h1>B-BOY</h1>
				<p><?php include("../compdata/bboy.php"); ?></p>
			</div>
			<div data-role="collapsible">
				<h1>BAND</h1>
				<p><?php include("../compdata/band.php"); ?></p>
			</div>
			<div data-role="collapsible">
				<h1>FOTOGRAFI</h1>
				<p><?php include("../compdata/modern.php"); ?></p>
			</div>
			<div data-role="collapsible">
				<h1>MODERN DANCE</h1>
				<p><?php include("../compdata/modern.php"); ?></p>
			</div>
			<div data-role="collapsible">
				<h1>PASKIBRA</h1>
				<p><?php include("../compdata/paskibra.php"); ?></p>
			</div>
		</ul></p>
	</div>
	<?php	
		include("footer.php");
	?>
</div>
</body>
</html>