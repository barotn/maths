<!DOCTYPE html>
<html>
<head><title></title>
	<link type="text/css" rel="stylesheet" href="styleadd10.css"/>
</head>
<body><?php

	$date=date("F j, Y, g:i a");?>
	<h3>Welcome to world of maths <?php echo  "<br>"."$date" ?></h3>
	<!-- <div class="date"><?php echo  "$date" ?></div> -->
	<br>
		<div class="content">
			<h4 id="addition">Addition</h4>
			<p>
			<?php
			global $resadd1;
			$resadd1=array();
			function addition($a1, $a2)
			{
			  global $sum;
			  $sum = $a1 + $a2;
			  return $sum;
			//  echo $sum + "\n";
			}
			//for ($j=1; $j<=5; $j++) {
			for  ($i=1; $i<=20; $i++) {
					$a1 = rand(11,99);
					$a2 = rand(10,99);
					?>
					<div id="eachblock">
					<?php echo "(" . $i . ")";?> 
					<?php echo "<h4 style='padding-left:45px;letter-spacing: 0.2em;'>$a1</h4>";?> 
					<?php echo "<h4 style='padding-left:30px'> +" ;?>
					<?php echo "<h4 style='padding-left:45px;letter-spacing: 0.2em;'>$a2</h4>" ;?>
					<?php echo "_________</br>" ;?>
					<?php echo "<br>_________</br>" ;?>

					</div>
					<?php		
					addition($a1, $a2);
					array_push($resadd1, $sum);
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
	  echo "(" . $i . ")  = " . "<strong>$value</strong>". ", ";
	  $i++;
	}
	echo str_replace('Array','',print_r($arrayfinal,true));
	echo "</br>";
}
?>
<div class="answers">
	<?php
	echo "<h3>Answers for Addition</h3> ";
	$arrayres=$resadd1;
	dispans($arrayres);echo "</br>";	

	// echo "<h5> Answers for Subtraction</h5> ";
	// $arrayres=$ressub1;
	// dispans($arrayres);echo "</br>";

	// echo "<h5> Answers for Multiplication</h5> ";
	// $arrayres=$resmul1;
	// dispans($arrayres);echo "</br>";

	// echo "<h5> Answers for Division</h5> ";
	// $arrayres=$resdiv1;
	// dispans($arrayres);echo "</br>";

	
	?>
</div>
</body>
</html>