

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="width:100%;text-align:center;font-family:Arial">

<?php
		include("dbconnect.php");

$searchsql="SELECT * from medicine where med_name like '%".$_GET['medName']."%'";
		$search_query = mysqli_query($dbconnect,$searchsql);
		$search_rs = mysqli_fetch_assoc($search_query);
		$count_rows = mysqli_num_rows($search_query);

?>

<div style="width:80%;margin-right:auto;margin-left:auto;box-shadow:0px 0px 4px 4px grey;padding:50px;">
	
	<form method="get" action="hi.php">

	<h1 style="font-size:60px">YOUR RECIEPT</h1>
	<h2>Bill No. 12000340012</h2>
	<br>
	<h3>NAME:<?php echo $_GET['medName']; ?></h3>
	<h3>PRICE:<?php echo $search_rs['price'] ?></h3>
	<h3>HOME DELIVERY:</h3>
	<input type="radio" name="hd" value="yes">YES
	<input type="radio" name="hd" value="no">NO
	<br>
	<br>
	<br>
	<br>

	<input type="submit">

		
	</form>
		
</div>


</body>
</html>