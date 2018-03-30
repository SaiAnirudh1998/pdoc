<html>
<head>
<title>Welcome</title>

<!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/> -->
<!-- <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/> -->
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
							 <li><a href="searchpage1.php">Search Symptoms</a></li>
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

	include("session.php");
	$Arr = [];
	$array2 = $_POST['first_array'];
	$Arr = $_SESSION['fArr'];
	//$prev = $_POST['input_name'];
	$nxt = $_POST['nextsympton'];
	$prev = $_SESSION['first'];
	// echo $prev;
	// echo $nxt;
	// echo "<hr>";

	include("dbconnect1.php");
	$output = '';

	if(isset($_POST['nextsympton']))
	{
		$searchvar = $_POST['nextsympton'];
		$searchvar = preg_replace("#[^0-9A-Za-z]#i","",$searchvar);
		$searchsql="SELECT * from symptom where sym_name like '%$searchvar%'";
		$search_query = mysqli_query($dbconnect,$searchsql) or die("Could not Search ...");
		$search_rs = mysqli_fetch_assoc($search_query);
		$count_rows = mysqli_num_rows($search_query);

		if($count_rows == 0)
		{
			echo "There is no search results ...";
		}
		else
		{
			echo '<h2 style="margin-left:50px;">Symptoms : </h2>';
			do{
				$s_id = $search_rs['sym_id'];
				$symptom_Name = $search_rs['sym_name'];
				?>
			<p>
			<?php
			echo '<p style="margin-left:100px;  font-size:20px;">1. '.$prev.'</p>';
			echo '<p style="margin-left:100px;  font-size:20px;">2. '.$symptom_Name.'</p>';
			
			?>
			</p>
			</a>
			</div>
			
				<?php
			} while($search_rs = mysqli_fetch_array($search_query));
		}
	}
			echo '<br>';
			echo '<h2 style="margin-left:50px;">Possible Diseases : </h2>';
			$dsql = "SELECT distinct dis_name from disease d , symptom sy , disym ds where (sy.sym_id=ds.sym_id and ds.dis_id=d.dis_id) and sy.sym_name='$searchvar'";

			$dqry = mysqli_query($dbconnect,$dsql) or die("Could not Search ...");
			$d_rs = mysqli_fetch_assoc($dqry);

			$count_rows = mysqli_num_rows($search_query);
			$i=1;
			if($count_rows==0)
			{
				echo "There is no search results ...";
			}
			else {
			while($d_rs = mysqli_fetch_array($dqry))
			{
				$d_rs_name = $d_rs['dis_name'];
				echo '<p style="margin-left:100px; font-size:20px;">'.$i.'. '. $d_rs_name.'</p>';
				$i++;
			}
}
			echo "<hr>";
			?>

			<!-- <form action="next1.php" method="post">
			<input type="text" name="thirdD" placeholder="Are you suffering with another symptom ?">
			<input type="hidden" name="input_name" value="<?php $searchvar ?>" />
			<input type="submit" value="Search more...">
			</form>; -->

			<?php

			$_SESSION['second']=$nxt;

			echo "<hr>";

?>

<hr>
<hr>

<?php
var_dump($array2);
var_dump($searchvar);
echo '<hr color="red">';
?>


<hr color="blue">