
<?php
	include("dbconnect1.php");
	include("session.php");
	$array1 = array();
	$output = '';

	if(isset($_POST['search']))
	{
		$searchvar = $_POST['search'];
		$searchvar = preg_replace("#[^0-9A-Za-z]#i","",$searchvar);
		$searchsql="SELECT * from symptom where sym_name like '%$searchvar%'";
		$search_query = mysqli_query($dbconnect,$searchsql) or die("Could not Search ...");
		$search_rs = mysqli_fetch_assoc($search_query);
		$count_rows = mysqli_num_rows($search_query);
		$arrayR = "SELECT * from symptom where sym_name like '%$searchvar%'";
		if($count_rows == 0)
		{
			echo "There is no search results ...";
		}
		else
		{
			echo '<h2 style="margin-left: 50px;">Symptoms : </h2>';
			$x=1;
			do{
				$s_id = $search_rs['sym_id'];
				$symptom_Name = $search_rs['sym_name'];
				?>
			<p>
			<?php
			
			echo '<p style="margin-left: 100px; font-size:20px;">'.$x.'. '.$symptom_Name."</p>";
			
			$x=$x+1;
			?>
			</p>
			</a>

			</div>
			
<?php
			} while($search_rs = mysqli_fetch_array($search_query));
		}
	}
?>

			
<?php
			echo "<br>";
			echo '<h2 style="margin-left: 50px;">Possible Diseases : </h2>';
			$dsql = "SELECT distinct dis_name from disease d , symptom sy , disym ds where (sy.sym_id=ds.sym_id and ds.dis_id=d.dis_id) and sy.sym_name like '%$searchvar%'";

			$dqry = mysqli_query($dbconnect,$dsql) or die("Could not Search ...");
			$d_rs = mysqli_fetch_assoc($dqry);

			$count_rows = mysqli_num_rows($search_query);
			$x=1;
			$arr = [];
			if($count_rows == 0)
			{
				echo "There is no search results ...";
			}
			else {
			do{
				$d_rs_name = $d_rs['dis_name'];
				$arr[$x-1]=$d_rs_name;
				echo '<p style="margin-left: 100px; font-size:20px;">'.$x.'. '. $d_rs_name.'</p>';
				array_push($array1,$d_rs_name);
				$x++;
			} while($d_rs = mysqli_fetch_array($dqry));
}
			echo "<hr>";
			
			?>

<?php

			$_SESSION['first'] = $searchvar;
			$_SESSION['fArr'] = $arr;
			
			$_SESSION['$array1'] = $arrayR;
?>
		<form action="search3.php" method="post">
		<p style="margin-left: 100px; font-size:20px;"><?php echo $x.'. '; ?><input type="text" name="nextsympton" placeholder="Are you suffering with another symptom ?"> 
		<input type="hidden" name="input_name" value="<?php $searchvar ?>" />
		<input type="hidden" name="first_array" value="<?php $searchsql ?>">
		<input type="submit" value="Search more..."></p>
		</form>