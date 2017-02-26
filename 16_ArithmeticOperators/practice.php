<?php

	// Constants
define("TITLE", "Arithmetic Operators");

	// Custom Variables
$myName = "Tameka J Alston";
$lessonNum = 16;

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

				<h3>Addition <code>+</code></h3>
				<?php
					$alstons = 6;
					$greens = 8;
					$moyes = 14;
					$familyMembers = ($alstons + $greens + $moyes);

					echo $familyMembers;


				?>

				<h3>Subtraction <code>-</code></h3>
				<?php
					$birthYear = 1982;
					$currentYear = date("Y");
					$myAge = ($currentYear - $birthYear);

					echo $myAge;

				?>

				<h3>Multiplication <code>*</code></h3>
				<?php
					$hourlyRate = 55;
					$hours = 40;
					$payWeek = ($hourlyRate * $hours);

					echo $payWeek;
				?>

				<h3>Division <code>/</code></h3>
				<?php
					$savingsGoals = 10000;
					$check = 250;
					$amountOfCheckNeeded = ($savingsGoals / $check);

					echo $amountOfCheckNeeded;
				?>

				<h3>Modulus <code>%</code></h3>
				<?php
					$savingsGoals = 13000;
					$check = 238;
					$amountOfCheckNeeded = ($savingsGoals / $check);

					echo $amountOfCheckNeeded;
				?>

			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the lecture</a>

			<hr>

			<small>&copy;<?php echo date("Y"); ?> -<?php echo $myName; ?></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
