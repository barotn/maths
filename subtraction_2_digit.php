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
			<h4 id="subtraction">Subtraction</h4>
			<p>
			<?php
			global $ressub1;
			$ressub1=array();
			function subtraction($a1, $a2)
			{
			  global $sub;
			  $sub = $a1 - $a2;
			  return $sub;
			//  echo $sum + "\n";
			}
			//for ($j=1; $j<=5; $j++) {
			for  ($i=1; $i<=20; $i++) {
					$a1 = rand(51,99);
					$a2 = rand(11,50);
					?>
					<div id="eachblock">
					
					<?php echo "<h4 style='padding-left:45px;letter-spacing: 0.2em;'>$a1</h4>";?> 
					<?php echo "(" . $i . ")<br style='float:left'> _" ;?>
					<?php echo "<h4 style='padding-left:45px;letter-spacing: 0.2em;'>$a2</h4>" ;?>
					<?php echo "_________</br>" ;?>
					<?php echo "<br>_________</br>" ;?>

					</div>
					<?php		
					subtraction($a1, $a2);
					array_push($ressub1, $sub);
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
	  // $arrayfinal[$i] = $value;
	  echo "(" . $i . ")  = " . $value . ", ";
	  $i++;
	}
	echo str_replace('Array','',print_r($arrayfinal,true));
	echo "</br>";
}
?>
	<br><br><br><br><br><br><br><br><br><br><br>

<div class="answers">
	<?php
	// echo "<h5>Answers for Addition</h5> ";
	// $arrayres=$resadd1;
	// dispans($arrayres);echo "</br>";	

	echo "<h3> Answers for Subtraction </h3> ";
	$arrayres=$ressub1;
	dispans($arrayres);echo "</br>";

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