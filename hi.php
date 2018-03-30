<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<?php

	if($_GET['hd']=="yes")
	{



?>
<body style="width:100%;text-align:center;font-family:Arial">

<div style="width:80%;margin-right:auto;margin-left:auto;box-shadow:0px 0px 4px 4px grey;padding:5s0px;">
	
		<h1 style="font-size:60px">YOUR PRODUCT WILL BE DELIVERED SHORTLY...</h1>
	

</div>


</body>
<?php
}
else
{
header("Location:welcome.php");
}

?>
</html>