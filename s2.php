<?php
	
	
	// $searchvar = $_POST['search'];

	function searchkr($searchvar) {
	include("dbconnect1.php");
	$resultArray = array();
	// if($_POST['search']!=0)
	// 	$searchvar=$_POST['search'];
	
	$searchvar = preg_replace("#[^0-9a-zA-Z]#i","",$searchvar);
	$sSql = "SELECT * from symptom where sym_name like '%$searchvar%'";//$search_sql_query
	$sQry = mysqli_query($dbconnect,$sSql);//$Sending_search_Query
	$sRst = mysqli_fetch_assoc($sQry) or die("Coundn't search bc!!!"); //$search_Result
	$sRows = mysqli_num_rows($sQry);//$Number of rows in the search result...
	if($sRows==0) {
		echo "There is nothing in busket folk!...";
	}
	else {
		
		echo "<ol>";
		do {
			$sym_name = $sRst['sym_name'];
			echo "<li>$sym_name</li>";
			array_push($resultArray,$sym_name);
		}while($sRst=mysqli_fetch_assoc($sQry));
		echo "</ol>";
	}


	echo "<h4>Atlast , hello supercell---></h4>";
	$output = "<div>".$sym_name."</div>";

	// var_dump($resultArray);
	}

	// searchkr();
	// echo "h++$searchvar";
?>