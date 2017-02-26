<?php

define("TITLE", "Assignment Operators");

	// Custom Variables
$myName = "Tameka J Alston";
$lessonNum = 18;


	// Custom Variables


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>

			<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>

			<h2><?php echo TITLE; ?></h2>

			<div class="sandbox">

				<h3>Addition Assignment Operator <code>+=</code></h3>
				<?php
					$volkwagen = 14000;
					$audi = 14000;
					$carOwned = ($volkwagen += $audi);

					echo $carOwned;

				?>

				<h3>Subtraction Assignment Operator <code>-=</code></h3>
				<?php
					$shirt = 28.75;
					$pants = 50;

					echo ($pants -= $shirt);
				?>

				<h3>Multiplication Assignment Operator <code>*=</code></h3>
				<?php
					$shirt = 28.75;
					$storeStock = 89;

					echo ($shirt *= $storeStock);
				?>

				<h3>Division Assignment Operator <code>/=</code></h3>
				<?php
					$a = 365;
					$b = 7;

					echo $a /= $b;
				?>

				<h3>Modulus Assignment Operator <code>%=</code></h3>
				<?php
					$a = 2017;
					$b = 2015;

					echo $a %= $b;
				?>

				<h3>Concatenation Assignment Operator <code>.=</code></h3>
				<?php
					$a = "Connecticut";
					$b = " Native";

					echo $a .= $b;
					// your code here
				?>

			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the lecture</a>

			<hr>

			<small>&copy;<?php echo date("Y"); ?>- <?php echo $myName; ?></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
