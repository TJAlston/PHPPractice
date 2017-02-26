<?php
	// Constants
define("TITLE", "Multi-Dimensional Arrays");

	// Custom Variables
$my_name = "Tameka J. Alston";
$lesson_num = 8;

	// Moustache Multi-Dimensional Array
	$moustaches = array (
		array (
			name => "Handlebar",
			creep_factor => "High",
			growth_days => 14
		),
		array (
			name => "Salvador Dali",
			creep_factor => "Medium",
			growth_days => 12
		),
		array (
			name => "Charlie Chaplin",
			creep_factor => "High",
			growth_days => 5
		),
		array (
			name => "Burt Reynolds",
			creep_factor => "Low",
			growth_days => 10
		)
	);

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
				<h2>The <?php echo $moustaches[0][name]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustaches[0][creep_factor]; ?></strong> and takes <strong><?php echo $moustaches[0][growth_days]; ?> days</strong> to grow on average.</strong></p>

				<h2>The <?php echo $moustaches[1][name]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustaches[1][creep_factor]; ?></strong> and takes <strong><?php echo $moustaches[1][growth_days]; ?> days</strong> to grow on average.</strong></p>

				<h2>The <?php echo $moustaches[2][name]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustaches[2][creep_factor]; ?></strong> and takes <strong><?php echo $moustaches[2][growth_days]; ?> days</strong> to grow on average.</strong></p>

				<h2>The <?php echo $moustaches[3][name]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustaches[3][creep_factor]; ?></strong> and takes <strong><?php echo $moustaches[3][growth_days]; ?> days</strong> to grow on average.</strong></p>

				<!-- REPEAT ABOVE 2X -->

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
