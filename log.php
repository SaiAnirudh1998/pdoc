<?php
	include("dbconnect.php");
	$mail=$_POST['regmail'];
	$pass=$_POST['regpass'];
	$q="SELECT pass FROM users WHERE email='$mail'";
	$p=mysqli_query($dbconnect,$q);
	$row=mysqli_num_rows($p);
	if(!$row<1){
		$chk=mysqli_fetch_assoc($p);
		do{
			$c=$chk['pass'];
		}while($chk=mysqli_fetch_assoc($p));
		if($c==$pass){
			header("location: welcome1.php");
		}
		
	}
	else{
		echo "Wrong Username";
		header("location: loginn.php");
	}
?>