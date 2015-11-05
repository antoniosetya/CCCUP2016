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
		<h1 align="center">LOGIN</h1>
		<div class="content" style="color : white;">
			<form name="login" method="POST" action="login_do.php">
				<div class="ui-field-contain">
				<label for="user">Username</label>
				<input type="text" name="user">
				</div>
				<div class="ui-field-contain">
				<label for="pass">Password</label>
				<input type="password" name="pass">
				</div>
				<button type="button" name="enter" id="enter">LOGIN</button>
			</form>
		</div>
	</div>
</div>
<script>
	document.getElementById("enter").addEventListener("click", function(){
		if(document.login.user.value == ""){
			alert("User masih kosong!");
			return false;
		}
		else {
			document.login.submit();
		}
	});
</script>
</body>
</html>