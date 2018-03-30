<html>
<head>
<title>Welcome</title>




<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<script src="js/jquery.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>

<body background="back2.jpg">
>

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

<!-- Action Starts -->

<form  method="post" action="searchpage2.php">
	<center>
	<h1>Search Medicines</h1>
	<br>
	<input 
		style="border-radius: 25px;
	    border: 2px solid;
	    padding: 20px; 
	    width: 300px;
	    height: auto;" 
	    type="text" name="search" placeholder="Search for the best medicines..." required>
	<br><br>
	<input style="border-radius: 10px;
	    border: 1px solid ;
	    width: 100px;
	    height: 40px;" type="submit" value="Search">
	</center>
</form>
