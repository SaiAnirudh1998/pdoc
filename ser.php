<html>
<head>
	<style>
		.searchrst {
			padding: 10px 40px;
			margin: 10px 30px;
		}

		.style1 {
			padding: 15px 20px;
			text-align: center;
			background: linear-gradient(45deg,blue,violet,purple);
			border-radius: 8px;
			margin: 10px;
			color: white;
			font-family: sans-serif;
			size: 20px;
			width: 90%;
			cursor: pointer;
		}
		.style1 {
			text-decoration: none;
			color: white;
			display: block;
		}
		.style:hover {
			text-decoration: none;
			color: white;
			transition: 1s;
			background: linear-gradient(45deg,violet,purple,blue,violet);
		}
	</style>
<title>Welcome to P-doc</title>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<script src="js/jquery.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>

<body>

	 <div class="header-top">
		 
		  <div class="container">
			 <div class="top-nav">
						<div class="logo">
						<h1 style="margin-left:-70px;"><font color="red" face="Comic Sans MS">Personal Doctor Assistant</font></h1>
						</div>
						<div class="menu">
						<br>
						<ul id="nav">
							 <li><a href="welcome.php">Home</a></li>
							 <li><a href="welcome.php#section-2">About</a></li>
							 <li><a href="welcome.php#section-3">Our Doctors</a></li>
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
<br><br>
<br><br>

<?php
	include("dbconnect.php");
	session_start();
	$arrA = array();
	$dis=$_GET['dis'];
	$loc=$_GET['locations'];
	$_SESSION['loc']=$loc;
	$dis = preg_replace("#[^0-9A-Za-z]#i","",$dis);
	$q="SELECT * FROM disease WHERE dis_name like '%$dis%'";
	$p=mysqli_query($dbconnect,$q);
	$row=mysqli_num_rows($p);
	if(!$row<1){
		$chk=mysqli_fetch_assoc($p);
		echo '<div class="searchrst"><h1>Do you mean?</h1><br><br>';
		$counter=0;
		do{
			
			array_push($arrA,$chk['dis_name']);
			
			$counter+=1;
			?>

			<center>
			<div>
			<a  class="style1" href="dreport.php?dis1=<?php echo $arrA[$counter-1]; ?>">
			
			<?php 
			$_SESSION['dis1']=$arrA[$counter-1];
			echo $counter.". ".$chk['dis_name']."<br>";
					   
			?>
			
			</a>
			</div>
			</center>

			<?php
			

			
			// header('location: dis.php');
		}while($chk=mysqli_fetch_assoc($p));
	}
	else{
		echo "<br><br>";
		echo "Wrong disease";
	}
	echo "</div>";
	// print_r($arrA);
	// $_SESSION['dd']=$arrA;
?>

</html>