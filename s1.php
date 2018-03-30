<!DOCTYPE html>
<html>
<head>
	<title>Search 1</title>
	<link rel="stylesheet" type="text/css" href="s.css">
</head>
<body>
<?php
	include("dbconnect1.php");
	include("s2.php");
	// $_POST['search']='';
	
?>

<form class="form1" action="s1.php" method="post">
	<input class="s" type="text" placeholder="Search here..." name="search">
	<input class="btn" type="submit" value=">!>">
</form>
<hr>

<?php

	if($_POST['search']=="") {
		echo "Hey there, How's you doing these days ;_)";
	}
	else {
		searchkr($_POST['search']);
	}
?>


</body>
</html>