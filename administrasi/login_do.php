<?php 
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$conn = mysqli_connect("localhost","root","","acc_list");
	$sql = "SELECT * FROM acc_list WHERE user='$user'";
	echo $sql;
?>