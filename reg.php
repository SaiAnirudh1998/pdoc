<?php
	include("dbconnect.php");
	$mail=$_POST['regmail'];
	$pass=$_POST['regpass'];
	$uname=$_POST['regname'];
	$age=$_POST['regage'];
	$cont=$_POST['regcont'];
	
	$sql = "INSERT into users(email,pass,name,dob,phone) values(
	'".mysql_real_escape_string($_POST['regmail'])."',
	'".mysql_real_escape_string($_POST['regpass'])."',
	'".mysql_real_escape_string($_POST['regname'])."',
	'".mysql_real_escape_string($_POST['regdob'])."',
	'".$_POST['regcont']."'
	);";

#	 $qry = mysqli_query($dbconnect,$sql);
	 if(mysqli_query($dbconnect,$sql)) {
	 	header("location:login.php");
	 }
	 else {
	 echo "<h2>Inserted , well done ...BITCH  -></h2>";
	}
?>