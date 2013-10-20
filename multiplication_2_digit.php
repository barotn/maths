<!DOCTYPE html>
<html>
<head><title></title>
	<link type="text/css" rel="stylesheet" href="style2dig.css"/>
</head>
<body><?php
	$date=date("F j, Y, g:i a");?>
	<h3>Welcome to world of maths <?php echo  "<br>"."$date" ?></h3>
	<hr width="100%">
	<!-- <div class="date"><?php echo  "$date" ?></div> -->
	<br>
		<div class="content">
			<h4 id="addition">Multiplication</h4>
			<p>
			<?php
			global $resmul1;
			$resmul1=array();
			function multiplication($a1, $a2)
			{
			  global $mul1;
			  $mul1 = $a1 * $a2;
			  return $mul1;
			//  echo $mul1 + "\n";
			}
			//for ($j=1; $j<=5; $j++) {
			for  ($i=1; $i<=20; $i++) {
					$a1 = rand(11,99);
					$a2 = rand(1,9);
					?>
					<div id="eachblock">
					<?php echo "(" . $i . ")" ?>
					<?php echo "<h4 style='padding-left:35px;letter-spacing: 0.2em;'>$a1</h4>";?> 
					<?php echo "<h4 style='padding-left:22px'> x" ;?>
					<?php echo "<h4 style='padding-left:45px;letter-spacing: 0.2em;'>$a2</h4>" ;?>
					<?php echo "_________</br>" ;?>
					<?php echo "<br>_________</br>" ;?>

					</div>
					<?php		
					multiplication($a1, $a2);
					array_push($resmul1, $mul1);
				}
			//}
			echo "</br></br>";
			?>
		</p>
		</div>


<?php
function dispans($arrayres){
	$i=1;
	foreach ($arrayres as $value)
	{
		echo "(" . $i . ")  = " . "<strong>$value</strong>" . ", ";
		$i++;
	}
	echo str_replace('Array','',print_r($arrayfinal,true));
	echo "</br>";
}
?>

<br><br>
<hr width="100%">
<br><br>
<div class="answers">
	<?php
	// echo "<h3> Answers for Addition </h3> ";
	// $arrayres=$resadd1;
	// dispans($arrayres);echo "</br>";	

	// echo "<h5> Answers for Subtraction</h5> ";
	// $arrayres=$ressub1;
	// dispans($arrayres);echo "</br>";

	echo "<h3> Answers for Multiplication</h3> ";
	$arrayres=$resmul1;
	dispans($arrayres);echo "</br>";

	// echo "<h5> Answers for Division</h5> ";
	// $arrayres=$resdiv1;
	// dispans($arrayres);echo "</br>";

	
	?>
</div>
</body>
</html>