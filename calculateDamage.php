<html>
	<head>
		<meta charset="utf-8" />
		<title>Calculated Damage</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
		<style type="text/css">
			.calcinfo,.calc {
				color: white;
				background-color: black;
				border-style: solid;
				border-color: White;
				margin: 10px 0px;
			}
		</style>
	</head>
	<body style="background-image:url(images/base.jpg)">
		<div class="banner">
			<a href="index.php"><img src="images/CalculatedDamageBanner.png" alt="Banner" class="banner"/></a>
		</div>
		<div class="calcinfo">
			<?php
			// Get all the variables
			$baseatk=$_POST["baseatk"];
			$percentmod = $_POST["percentmod"];
			$basemod = $_POST["basemod"];
			$flatatk = $_POST["flatatk"];
			$potion = $_POST["potion"];
			$ore = $_POST["ore"];
			$leader=$_POST["leader"];
			$friendleader=$_POST["friendleader"];
			$atkbuff=$_POST["atkbuff"];
			$elementatkbuff=$_POST["elementatkbuff"];
			$sphereatkbuff=$_POST["sphereatkbuff"];
			$spark=$_POST["spark"];
			$sparkleader=$_POST["sparkleader"];
			$sparkfriendleader=$_POST["sparkfriendleader"];
			$sparkbuff=$_POST["sparkbuff"];
			$sparksphere=$_POST["sparksphere"];
			$elementalweakness=$_POST["elementalweakness"];
			$elementalweaknessleader=$_POST["elementalweaknessleader"];
			$friendelementalweaknessleader=$_POST["friendelementalweaknessleader"];
			$critical=$_POST["critical"];
			$criticalleader=$_POST["criticalleader"];
			$friendcriticalleader=$_POST["friendcriticalleader"];
			$criticalsphere=$_POST["criticalsphere"];
			
			// Calculate base modifier
			$totalmod = 1;
			$totalmod+=$potion;
			
			if($ore=="on")
				$totalmod+=.5;
			
			$totalmod+=$leader;
			
			$totalmod+=$friendleader;
			
			$totalmod+=$atkbuff;
			
			$totalmod+=$elementatkbuff;
			
			$totalmod+=$sphereatkbuff;
			
			// Calculate Spark Modifier
			if ($spark == "on")
			{
				$totalspark = 1.5;
				$totalspark+=$sparkleader;
				$totalspark+=$sparkfriendleader;
				$totalspark+=$sparkbuff;
				$totalspark+=$sparksphere;
			}
			else
				$totalspark = 1;
			
			// Calculate Elemental Weakness Modifier
			
			if ($elementalweakness == "on")
			{
				$totalelemental = 1.5;
				$totalelemental+=$elementalweaknessleader;
				$totalelemental+=$friendelementalweaknessleader;
			}
			else
				$totalelemental = 1;
			
			// Calculate Critical Modifier
			
			if ($critical == "on")
			{
				$totalcrit = 1.5;
				$totalcrit += $criticalleader;
				$totalcrit += $friendcriticalleader;
				$totalcrit += $criticalsphere;
			}
			else
				$totalcrit = 1;
			
			// Calculate total damage
			
			$totaldamage = (($baseatk*($totalmod+($percentmod*.01)))+$flatatk)*$totalspark*$totalelemental*$totalcrit;
			?>
			<h1>Calculated Damage: <?php print($totaldamage); ?></h1>
			<h2 style="text-decoration:underline;">Other Info</h2>
			<p>Base Unit ATK: <?php print($baseatk); ?></p>
			<p>Base Damage Modifier: <?php print($totalmod); ?></p>
			<p>Percent Modifier: <?php print($percentmod); ?></p>
			<p>Flat ATK: <?php print($flatatk); ?></p>
			<p>Spark Modifier: <?php print($totalspark); ?></p>
			<p>Elemental Weakness Modifier: <?php print($totalelemental); ?></p>
			<p>Critical Hit Modifier: <?php print($totalcrit); ?></p>
			<br><br>
			<p><a href="damageCalculator.html">Back</a></p>
		</div>
	</body>
</html>