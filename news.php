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
	<div class="containerbut" style="color : white; margin: 100px 7% 50px 7%; width : 85%">
		<div class="list-comp">
			<p align="center" style="font-size : 20px;">NEWS LIST</p>
			<ul>
				<?php 
					$i = 1;
					foreach(glob("newsdata/*.php") as $file) {
					$filename = str_replace("newsdata/","",$file);
					$filename = str_replace(".php","",$filename);
						echo '<li class="'.$i.'">'.$filename.'</li>';
					$i++;
					}
				?>
			</ul>
		</div>
		<div class="content-comp">
			<p>Please select from the left side to read the news.</p>
		</div>	
	</div>
</section>

<?php 
include('footer.php');
?>

<script>
<?php
$i = 1;
foreach(glob("newsdata/*.php") as $file) {
echo '$(".'.$i.'").click(function(){
	$(".content-comp").load(encodeURI("'.$file.'"));
});';
$i++;
}
?>
</script>
</body>
</html>