<?php
	include("dbconnect1.php");
	include("s2.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search First Page</title>

	<link rel="stylesheet" type="text/css" href="s.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		function searchT() {
			var searchTxt = $("input[name='search']").val();
			$.post("s1.php",{searchVal:searchTxt}, function() {

			});
		}
	</script>

</head>
<body>


<form class="form1" action="s2.php" method="post">
	<input class="s" type="text" placeholder="Search here..." name="search" onkeydown="searchT();">
	<input class="btn" type="submit" value=">!>">
</form>
<hr>


</body>
</html>