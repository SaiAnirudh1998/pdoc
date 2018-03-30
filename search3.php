<?php
	include("session.php");
	$arrayR = $_SESSION['array1'];
	$array_disease2 = array();
	$z1=0;
	$z2=0;
	$array_disease3 = array();
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
		$searchsql="SELECT * from symptom where sym_name like '%$prev%'";
		$searchsql1 = $array2;
		$search_query = mysqli_query($dbconnect,$searchsql) or die("Could not Search ...");
		$search_query1 = mysqli_query($dbconnect,$searchsql1) or die("Could not Search ...");
		$search_rs = mysqli_fetch_assoc($search_query);
		$search_rs1 = mysqli_fetch_assoc($search_query1);
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
				$symptom_Name1 = $search_rs1['sym_name'];
				?>
			<p>
			<?php
			echo '<p style="margin-left:100px;  font-size:20px;">1. '.$prev.'</p>';
			echo '<p style="margin-left:100px;  font-size:20px;">2. '.$symptom_Name.'</p>';
			echo '<p style="margin-left:100px;  font-size:20px;">2. '.$symptom_Name1.'</p>';
			
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
			$dsql = "SELECT distinct dis_name from disease d , symptom sy , disym ds where (sy.sym_id=ds.sym_id and ds.dis_id=d.dis_id) and sy.sym_name like '%$searchvar%'";

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
				array_push($array_disease2,$d_rs_name);
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
			echo "Hello g";

	$count1 = count($array_disease2);
	$count2 = count($array2);	
	
	
?>

<hr>
<hr>

<?php
echo "Array 3 :";
$array_disease3 = array_intersect($array_disease2,$symptom_Name1);
var_dump($array_disease3);
echo "<hr>";
echo "Array 2 :"; var_dump($array_disease2);
echo "<br> Array - previous 2 : "; var_dump($array2);
echo "<br>searchvar :"; var_dump($searchvar);
echo '<hr color="red">';

echo "<hr color='yellow'>".$array2;

echo "Array R : ".$arrayR;
?>



<hr color="blue">