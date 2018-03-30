<html>
<head>
	<title>Welcome to P-DOC</title>
	<style>
		body {
			background-color: #f8f8f8;
			font-family: sans-serif;
		}
	
		.login_main1 {
			height: 100%;
			background-color: white;
			color: #333;
			margin: 15px;	
		}
		.login_main1 h2 {
			background-color: #0057e5;
			color: white;
			margin: 0; 
			padding: 15px 20px;
			border-radius: 8px 8px 0 0;
			text-shadow: 3px 3px #000000;
		}
		.login_main1 .txt {
			width: 93%;
			/*border:0;*/
			/*border-bottom: 1px;*/
			border:1px solid #d8d8d8;
			border-radius: 5px;
			padding: 10px 10px;
			margin: 5px;
			font-size: 20px;
			background-color: #f8f8f8;
		}
		.login_main1 input:focus {
			background-color: white;
			color: blue;
		}
		.login_main1 .btn {
			width: 50%;
			text-align: center;
			background-color: red;
			color: white;
			border:0;
			padding: 15px 15px;
			box-shadow: 0 4px 8px 0 #a8a8a8;
			width: 30%;
			font-size: 20px;
			cursor: pointer;
			text-shadow: 2px 2px #000000;

		}
		.login_main1 .btn:hover {
			background-color: #0061ff;
		}
		.login_main1 .btn:focus {
			background-color: #0057e5;
			color: white;
		}
		.login_main1 p .link1 {
			text-decoration: none;
			font-weight: bold;
			color: #0057e5;
		}

	</style>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
	<script src="js/jquery.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script>
		function fun()
		{
			var n=document.getElementById("regmail").value;
			//document.write(n);
			var re=/\S+@\S+\.\S+/;
			if(!re.test(n)){
				alert("Enter a valid email id");
				return false;
			}
		}

	</script>
</head>
<body background="back2.jpg">
 <div class="header-top">
		 
		  <div class="container">
			 <div class="top-nav">
						<div class="logo">
						<h1 style="margin-left:-70px;"><a href="welcome1.php" style="text-decoration: none;"><font color="red" face="Comic Sans MS">Online Medicine Recomendation System</a></font></h1>
						</div>
						<div class="menu">
						<br>
						<ul id="nav">
							 <li><a href="welcome1.php">Home</a></li>
							 <li><a href="welcome1.php#section-2">About</a></li>
							 <li><a href="welcome1.php#section-3">Our Doctors</a></li>
							 <li><a href="disser.php">Search Disease</a></li>
							 <li><a href="searchpage1.php">Search Medicines</a></li>
							 <div class="clearfix"></div>
						 </ul>
						 </div>
			 </div>
			  <div class="clearfix"> </div>
		 </div>
	 </div>
<br>
<br>
<br>


<div class="login_main1">
<br><br>
	<button style="float: right;" class="btn" onclick="document.getElementById('loginkr').style.display='block'">
		Emergency
	</button>
	<div id="loginkr" class="modal">
		<form class="modal_content animate" action="abc.php">
			<h1>Emergency</h1>
			<div class="imgHolder">
				<img class="profilepic" src="images.jpg">
			</div>
			<hr>
			<h3>
				<li>Doctors: Dr Prakash</li>
				<li>Ambulance: 9923678987</li>
				<li>Hospitals for Emergency: City Hospital, M.G. Road</li>
			</h3>
			<input class="btn" type="submit" value="Submit">
		</form>
	</div>
	<br>
	<br>

	<?php
		include("dbconnect.php");
		session_start();
		//$dis_n=$_SESSION['dis1'];
		$locations = 'House no. 26';
		$dis_n=$_GET['dis1'];
		$q="SELECT dis_id FROM disease WHERE dis_name like '%$dis_n%'";
		$p=mysqli_query($dbconnect,$q);
		$r=mysqli_fetch_assoc($p);
		do{
			$dis_id=$r['dis_id'];
		}while($r=mysqli_fetch_assoc($p));

		$q="SELECT dis_name FROM disease WHERE dis_name='$dis_n'";
		$p=mysqli_query($dbconnect,$q);
		$r=mysqli_fetch_assoc($p);
		do{
			$c=$r['dis_name'];
		}while($r=mysqli_fetch_assoc($p));
		echo '<h1 align="center"><U>'.$c.'</U></h1>';
		

		echo '<br><h3 style="margin-left: 50px;">Precautionss:</h3>';

		$q="SELECT * FROM prevent WHERE dis_id='$dis_id'";
		$p=mysqli_query($dbconnect,$q);
		$r=mysqli_fetch_assoc($p);
		$x=1;
		do{
			echo '<h6 style="margin-left: 100px; font-size: 15px;">'.$x.'. '.$r['prev'].'</h6>';
			$x=$x+1;
		}while($r=mysqli_fetch_assoc($p));
		echo '<br><h3 style="margin-left: 50px;">Avoid the following:</h3>';

		$q="SELECT * FROM risks WHERE dis_id='$dis_id'";
		$p=mysqli_query($dbconnect,$q);
		$r=mysqli_fetch_assoc($p);
		$x=1;
		do{
			echo '<h6 style="margin-left: 100px; font-size: 15px;">'.$x.'. '.$r['risk'].'</h6>';
			$x=$x+1;
		}while($r=mysqli_fetch_assoc($p));

		##
		echo '<br><h3 style="margin-left: 50px;">Allergies:</h3>';

		$q="SELECT * FROM allergy WHERE med_id IN(SELECT med_id FROM treatment WHERE dis_id='$dis_id')";
		$p=mysqli_query($dbconnect,$q);
		$r=mysqli_fetch_assoc($p);
		$x=1;
		do{
			echo '<h6 style="margin-left: 100px; font-size: 15px;">'.$x.'. '.$r['allergy'].'</h6>';
			$x=$x+1;
		}while($r=mysqli_fetch_assoc($p));
		##
		###
				echo '<br><h3 style="margin-left: 50px;">Dosage:</h3>';

		$q="SELECT * FROM dosage WHERE med_id IN(SELECT med_id FROM treatment WHERE dis_id='$dis_id')";
		$p=mysqli_query($dbconnect,$q);
		$r=mysqli_fetch_assoc($p);
		$x=1;
		do{
			echo '<h6 style="margin-left: 100px; font-size: 15px;">'.$x.'.Age Group-. '.$r['age'].'</h6>';
			echo '<h6 style="margin-left: 100px; font-size: 15px;">'.$x.'. Frequency-.'.$r['freq'].'</h6>';
			echo '<h6 style="margin-left: 100px; font-size: 15px;">'.$x.'. Quantity.'.$r['qty'].'</h6>';
			$x=$x+1;
		}while($r=mysqli_fetch_assoc($p));
		###

		echo '<br><h3 style="margin-left: 50px;">Medicines:</h3>';

		$q="SELECT * FROM medicine WHERE med_id IN(SELECT med_id FROM treatment WHERE dis_id='$dis_id')";
		$p=mysqli_query($dbconnect,$q);
		$r=mysqli_fetch_assoc($p);
		$x=1;
		do{
			echo '<h6 style="margin-left: 100px; font-size: 15px;">'.$x.'. '.$r['med_name'].',  '.$r['comp_name'].'</h6>';
			$x=$x+1;
		}while($r=mysqli_fetch_assoc($p));
		
		echo '<br><h3 style="margin-left: 50px;">Doctor:</h3>';
		$q="SELECT * FROM doctor WHERE type_id=(SELECT type_id FROM disease WHERE dis_id='$dis_id')";
		##$q="SELECT * from doctor where address like '".$locations."'";
		$p=mysqli_query($dbconnect,$q);
		$r=mysqli_fetch_assoc($p);
		$x=1;
		do{
			echo '<h4 style="margin-left:80px;">'.$x.'.   '.$r['name'].'</h4>';
			echo '<h6 style="margin-left: 110px; font-size: 15px;">'.$r['phone'].'</h6>';
			echo '<h6 style="margin-left: 110px; font-size: 15px;">'.$r['address'].'</h6>';
			echo '<h6 style="margin-left: 110px; font-size: 15px;">'.$r['email'].'</h6>';
			echo '<br>';
			$x=$x+1;
		}while($r=mysqli_fetch_assoc($p));


	?>

</div>

<script type="text/javascript">
	var modal = document.getElementById('loginkr');
	window.onclick = function (event) {
		if(event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>

</body>
</html>