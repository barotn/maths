<!DOCTYPE html>
<html>
<head><title></title>
	<link type="text/css" rel="stylesheet" href="style3dig.css"/>
</head>
<body><?php
	$date=date("F j, Y, g:i a");?>
	<h3>Welcome to world of maths <?php echo  "<br>"."$date" ?></h3>
	<hr width="100%">
	<!-- <div class="date"><?php echo  "$date" ?></div> -->
	<br>
		<div class="content">
			<h4 id="addition">Division</h4>
			<p>
			<?php

			global $resdiv1;
			$resdiv1=array();
			function division($a1, $a2)
			{
			  global $div1;
			  $div1 = $a1 / $a2;
			  return $div1;
			  
			//  echo $mul1 + "\n";
			}
			//for ($j=1; $j<=5; $j++) {
			for  ($i=1; $i<=8; $i++) {
					$a1 = rand(101,999);
					$a2 = rand(1,9);
					global $divr1;
					$divr1 = $a1 % $a2;
					?>
					<div id="divisionblock">
					<?php echo "(" . $i . ")" ?>
					<?php echo "<p style='padding-left:35px'>________";?>
					<?php echo "<h4 style='padding-left:35px;letter-spacing: 0.2em;'>$a2 " . "|" . " $a1</h4>";?> 

					<?php echo "</br></br></br></br></br></br></br></br>"  . "R" . "$divr1";?>

					</div>
					<?php		
					division($a1, $a2);
					$div1 = round($div1, 0);
					array_push($resdiv1, $div1);
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
	// echo str_replace('Array','',print_r($arrayfinal,true));
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

	// echo "<h3> Answers for Subtraction</h3> ";
	// $arrayres=$ressub1;
	// dispans($arrayres);echo "</br>";

	// echo "<h3> Answers for Multiplication</h3> ";
	// $arrayres=$resmul1;
	// dispans($arrayres);echo "</br>";

	echo "<h3> Answers for Division</h3> ";
	$arrayres=$resdiv1;
	dispans($arrayres);echo "</br>";

	?>
</div>
</body>
</html>