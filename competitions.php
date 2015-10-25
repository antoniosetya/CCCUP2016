<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="css.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script> if (!window.jQuery) { document.write('<script src="./script/jquery-2.1.4.min.js"><\/script>'); } </script>
	<title>Competitions</title>
	<link rel="icon" href="./img/logo.png">
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<header>
	<h1 align="center">COMPETITIONS</h1>
</header>

<?php 
include('menubar.php');
?>

<section class="body">
	<div class="wrap-comp">
		<div class="list-comp">
			<p align="center" style="font-size : 20px;">OUR COMPETITIONS</p>
			<ul>
				<li class="sepak">SEPAK BOLA</li>
				<li class="basket">BASKET</li>
				<li class="futsal">FUTSAL PUTRI</li>
				<li class="tenis">TENIS MEJA</li>
				<li class="voli">VOLI</li>
				<li class="bultang">BULU TANGKIS</li>
				<li class="catur">CATUR</li>
				<li class="taekwondo">TAEKWONDO</li>
				<li class="biliard">BILIARD</li>
				<li class="pencak">PENCAK SILAT</li>
				<li class="wall">WALL CLIMBING</li>
				<li class="bboy">B-BOY</li>
				<li class="band">BAND</li>
				<li class="fotografi">FOTOGRAFI</li>
				<li class="modern">MODERN DANCE</li>
				<li class="paskibra">PASKIBRA</li>
				
			</ul>
		</div>
		<div class="content-comp">
			<p>Please select one of the competitions on the left side to read the info</p>
		</div>	
	</div>
</section>

<?php 
include('footer.php');
?>

<script>
$(".sepak").click(function(){
	$(".content-comp").load('./compdata/sepakbola.php');
});	
$(".basket").click(function(){
	$(".content-comp").load("./compdata/basket.php");
});
$(".futsal").click(function(){
	$(".content-comp").load("./compdata/futsalputri.php");
});
$(".tenis").click(function(){
	$(".content-comp").load("./compdata/tenismeja.php");
});
$(".voli").click(function(){
	$(".content-comp").load("./compdata/voli.php");
});
$(".bultang").click(function(){
	$(".content-comp").load("./compdata/bultang.php");
});
$(".catur").click(function(){
	$(".content-comp").load("./compdata/catur.php");
});
$(".taekwondo").click(function(){
	$(".content-comp").load("./compdata/taekwondo.php");
});
$(".biliard").click(function(){
	$(".content-comp").load("./compdata/biliard.php");
});
$(".pencak").click(function(){
	$(".content-comp").load("./compdata/pencaksilat.php");
});
$(".wall").click(function(){
	$(".content-comp").load("./compdata/wallclimbing.php");
});
$(".bboy").click(function(){
	$(".content-comp").load("./compdata/bboy.php");
});
$(".band").click(function(){
	$(".content-comp").load("./compdata/band.php");
});
$(".fotografi").click(function(){
	$(".content-comp").load("./compdata/fotografi.php");
});
$(".modern").click(function(){
	$(".content-comp").load("./compdata/modern.php");
});
$(".paskibra").click(function(){
	$(".content-comp").load("./compdata/paskibra.php");
});
</script>
</body>
</html>