<!DOCTYPE html>
<html>
<head><title></title>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
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
			for  ($i=1; $i<=5; $i++) {
					$a1 = rand(10000.0000,99999.0000);
					$a2 = rand(10000.0000,99999.0000);
					
					echo "  $i.  $a1  +  $a2"; echo " = ________  </br>";		
					addition($a1, $a2);
					array_push($resadd1, $sum);
				}
			echo "</br>";
			?>
		</p>
		</div>

		<div class="content">
			<h4 id="subtraction">Subtraction</h4>
			<p>
			<?php
			global $resaub1;
			$ressub1=array();
			function subtraction($s1, $s2) 
			{
				global $sub;
				$sub = $s1 - $s2;
				return $sub;
			}
			for ($s=1; $s<=5; $s++) {
					$s1 = rand(55555.0000,99999.0000);
					$s2 = rand(10000.0000,44999.0000);
					echo "  "; echo "  $s.  $s1  -  $s2"; echo " = ________  </br>";		
					subtraction($s1, $s2);
					array_push($ressub1, $sub);
				}
			echo "</br>";
			?>
		</p>
		</div>

		<div class="content">
			<h4 id="multiplication">Multiplication</h4>
			<p>
			<?php
			global $resmul1;
			$resmul1=array();
			function multiplication($m1, $m2)
			{
				global $mul;
				$mul = $m1 * $m2;
				return $mul;
			}
			for ($m=1; $m<=2; $m++) {
					$m1 = rand(11111,55555);
					$m2 = rand(90,399);
					?>
					<?php echo "  "; echo "  $m.  $m1 x $m2"; echo " = ___________ </br>";		
					multiplication($m1, $m2);
					array_push($resmul1, $mul);
				}
			echo "</br>";
			?>
		</p>
		</div>
		<div class="content">
			<h4 id="division">Division</h4>
			<p>
			<?php
			global $resdiv1;
			$resdiv1=array();
			function division($d1, $d2)
			{
				global $division;
				$division = $d1 * $d2;
				return $division;
			}
			for ($d=1; $d<=2; $d++) {
					$d1 = rand(11111,55555);
					$d2 = rand(11,25);
					?>
					<?php echo "  "; echo "  $d.  $d1 / $d2"; echo " = ___________ </br>";		
					division($d1, $d2);
					array_push($resdiv1, $division);
				}
			echo "</br>";
			?>
		</p>
		</div>
<div class="contentbroad">
	<h4 id="lhorder">Ordering</h4>
		<p><h5 style="border-bottom: 1px solid black">Order following numbers from Lowest to Highest</h5>
		<?php
		global $reslhorder;
		$reslhorder=array();
			echo "<br>Question 1. ";
			for ($a=1; $a<=5; $a++) {
				$lho1 = rand(11111,55555);
				?>
				<?php echo ("   "); echo "  $lho1 ";
				array_push($reslhorder, $lho1);
			}	
				echo "<br><br>";		
				echo "Answer 1: ________________________________________ ";
				sort($reslhorder);
				echo "</br>";
		?>
		</p>

		<p><h5 style="border-bottom: 1px solid black">Order following numbers from Highest to Lowest</h5>
		<?php
		global $reshlorder;
		$reshlorder=array();
			echo "<br>Question 1. ";
			for ($a=1; $a<=5; $a++) {
				$hlo1 = rand(11111,55555);
				?>
				<?php echo "   " . " $hlo1 ";
				array_push($reshlorder, $hlo1);
			}	
				echo "<br><br>";		
				echo "Answer 1: _________________________________________ ";
				rsort($reshlorder);
				echo "</br>";
		?>
		</p>

</div>
<?php
function dispans($arrayres){
	$i=1;
	foreach ($arrayres as $value)
	{
	  $arrayfinal[$i] = $value;
		$i++;
	}
	echo str_replace('Array','',print_r($arrayfinal,true));
	echo "</br>";
}
?>
<div class="answers">
	<?php
	echo "<h5>Answers for Addition</h5> ";
	$arrayres=$resadd1;
	dispans($arrayres);echo "</br>";	

	echo "<h5> Answers for Subtraction</h5> ";
	$arrayres=$ressub1;
	dispans($arrayres);echo "</br>";

	echo "<h5> Answers for Multiplication</h5> ";
	$arrayres=$resmul1;
	dispans($arrayres);echo "</br>";

	echo "<h5> Answers for Division</h5> ";
	$arrayres=$resdiv1;
	dispans($arrayres);echo "</br>";

	function orderans($reslhorder){
		$arrlength=count($reslhorder);
		echo "Answer is :";
		for($x=0;$x<$arrlength;$x++)
		   {
		   echo $reslhorder[$x];
		   echo ", ";
		   }
		echo "</br>";
	}

	echo "</br>";
	echo "<h5> Answer for ordering Lowest to Highest</h5>";
    $orderans1=$reslhorder;
	orderans($orderans1);
	echo "-----------------------------------------------";
	echo "<h5> Answer for ordering Highest to Lowest</h5>";
    $orderans1=$reshlorder;
	orderans($orderans1);
	?>
</div>
</body>
</html>