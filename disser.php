<!DOCTYPE html>
<html>
<head>
<title>Welcome to P-doc</title>
   <body style="margin:0px;font-family: 'Open Sans',sans-serif;width:100%;overflow-x:hidden;">

<div id="backgroundImage" style="position:absolute;top:0px;z-index:-1;width:100%">

<img src="back2.jpg" style="z-index:-10;position:fixed;width:100%;height:1000px;">

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
<br>
<br>
<br>
<br>
<form name="f1" action="ser.php" method="get">
	<center>
	<h1>Search Disease</h1>
	<h2>Enter the disease which you want to search</h2><br>
	<input style="border-radius: 25px;border: 2px solid;padding: 20px;width: 300px;height: auto;"
	 type="text" id="dis" name="dis" placeholder="Enter disease name" required>
    <select name="locations" style="border-radius: 25px;border: 2px solid;padding: 20px;width: 300px;height: auto;">
    	<option value="delhi">New Delhi</option>
    	<option value="chennai">Chennai</option>
    	<option value="banglore">Banglore</option>
    	<option value="mumbai">Mumbai</option>
    </select>
	<br><br>
	<input style="border-radius: 10px;border: 1px solid;width: 100px;height: 40px;" type="Submit" value="Submit">
	</center>
</form>
