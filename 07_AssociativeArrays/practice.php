<?php

	// Constants
	define("TITLE", "Associative Arrays");

	// Custom Variables
$lesson_num = 7;
$my_name = "Tameka J. Alston";

$moustaches = array (
	"moustache_name" 	=> "Handlebar",
	"creep_factor" 		=> "High",
	"growth_days" 		=> 15
);
	// Moustache Associative Array

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>

			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>

			<h2><?php echo TITLE; ?></h2>

			<div class="sandbox">

				<h2>The <?php echo $moustaches[moustache_name]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustaches[creep_factor]; ?></strong> and takes <strong><?php echo $moustaches[growth_days]; ?> days</strong> to grow on average.</strong></p>

			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the lecture</a>

			<hr>

			<small>&copy;<?php echo date("Y"); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
