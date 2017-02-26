<?php

define("TITLE", "While Loops");

	// Custom Variables
$myName = "Tameka J Alston";
$lessonNum = 19;


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

			<h1>Tutorial <?php echo $lessonNum; ?> <small><?php echo TITLE; ?></small></h1>
			<hr>

			<h2><?php echo TITLE; ?></h2>

			<div class="sandbox">

				<?php
					$startingNumber = 10;
				   while ($startingNumber <= 35) {
						 echo $startingNumber . "<br>";
						 $startingNumber++;
					 }

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
