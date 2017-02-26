<?php

	// Define a Constant

define("TITLE", "Variables and Constants");
	// Your Variables

	$my_name = "Tameka Alston";
	$fav_colour = "Royal Blue";
	$this_year= date(" Y ");
	$birth_year = 1982;
	$my_age = ($this_year - $birth_year);

	/*
	Use PHP to calculate the difference
	between your birth year and this year
	to show your age dynamically
	*/
$today = date("l, F j, Y ");
$timeZone = date_default_timezone_set('America/New_York');

?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo TITLE; ?> <!-- PAGE TITLE --></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>

			<h1><?php echo TITLE; ?> <small><!-- PAGE TITLE --></small></h1>
			<hr>

			<h2>Your Example</h2>

			<div class="sandbox">
				<h3>Today's Date:</h3>
				<p><?php echo $today?>
			</p>

				<h3>My Name:</h3>
				<p><?php print $my_name; ?></p>

				<h3>My Favourite Colour:</h3>
				<p><?php print $fav_colour; ?></p>

				<h3>My Age:</h3>
				<p><?php print $my_age; ?></p>
			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the final example</a>

			<hr>

			<small>&copy;<!-- THIS YEAR --> - <!-- YOUR NAME --></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
