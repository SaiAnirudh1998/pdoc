<html>
<head>
<title>Welcome</title>



<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<script src="js/jquery.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>

<body background="back2.jpg">

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
<br><br><br><br><br>

<!-- Action Starts -->

<?php
	include("dbconnect.php");
	include("session.php");
	$array1 = array();
	$output = '';

	if(isset($_POST['search']))
	{
		$searchvar = $_POST['search'];
		$searchvar = preg_replace("#[^0-9A-Za-z]#i","",$searchvar);
		$searchsql="SELECT * from medicine where med_name like '%$searchvar%'";
		$search_query = mysqli_query($dbconnect,$searchsql) or die("Could not Search ...");
		$search_rs = mysqli_fetch_assoc($search_query);
		$count_rows = mysqli_num_rows($search_query);

		if($count_rows == 0)
		{
			echo "<br><br>";
			echo "There is no search results ...";
		}
		else
		{
			echo '<h2 style="margin-left: 50px;">Symptoms : </h2><br>';
			echo '<form method="get" action="searchpage3.php?">';
			echo '<table border="1" style="margin-left: 30px;font-size: 28px;"><tr>';
			echo "<th>Sr. No.</th>";
			echo "<th>Medicine Name</th>";
			echo "<th>Company Name</th>";
			echo "<th>Expiry Date</th>";
			echo "<th>Price</th>";
			echo "<th>To Purchase: </th></tr>";
			
			
			
			$x=1;
			do{
				$s_id = $search_rs['med_name'];
				$comp_Name = $search_rs['comp_name'];
				$price = $search_rs['price'];
				$exp = $search_rs['Exp'];
				echo "<tr>";
				echo "<td>".$x++.".</td>";
				echo "<td>".$s_id."</td>";
				echo "<td>".$comp_Name."</td>";
				echo "<td>".$exp."</td>";
				echo "<td>".$price."</td>";
				echo '<td><input type="checkbox" name="medName" value="'.$s_id.'"> </td>';
				echo "</tr>";
			}while($search_rs = mysqli_fetch_assoc($search_query));
			echo "</table>";
			echo '<input type="submit" value="Click to Checkout">';
		}
	}
		else {
			echo "<br><br>";
			echo "No results found!...";
		}

				?>
						
</body>
</html>