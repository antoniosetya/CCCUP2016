<?php
	session_start();
	if(array_key_exists('step',$_POST)){
		if($_POST["step"] == 2) {
			if(array_key_exists('complete',$_POST)) {
				if($_POST["complete"] == 1){
					$_SESSION["step"] = 3;
				}
				else {
					$_SESSION["step"] = 2;
				}
			}
			else {
				$_SESSION["step"] = 2;
			}
		}
		else if($_POST["step"] == 1) {
			if(array_key_exists('cabang',$_POST)) {
				$_SESSION["cabang"] = $_POST["cabang"];
				$_SESSION["step"] = 2;
			}
		}
	}
	else {
		$_SESSION["step"] = 1;
	}
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
	
<section class="body">
	<div class="content">
	<?php	
		if($_SESSION["step"] == 1) {
			include("step1.php");
		} 
		else if ($_SESSION["step"] == 2) { 
			include("step2.php");
		}
		else if ($_SESSION["step"] == 3) { 
			include("step3.php");
	 	} ?>
	</div>
</section>
	
<?php 
	include("footer.php");
?>

</body>
</html>