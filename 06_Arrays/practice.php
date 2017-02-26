<?php

	// Constants


	// Custom Variables
$current_year = date('Y');
$my_name = "Tameka J. Alston";
$lesson_num = 6;
$example_name = "Array Practice";

	// Moustache Array
	$moustaches = array("Handlebar", "Salvadore Dali", "Charlie Chaplin");

?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $example_name; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>

			<h1>Lecture <?php echo $lesson_num; ?>: <small><!-- PAGE TITLE --></small></h1>
			<hr>

			<h2><?php echo $example_name; ?></h2>

			<div class="sandbox">

				<h2>Moustache Types</h2>
				<ul>
					<li><?php echo $moustaches[0]; ?></li>
					<li>The Artist <?php echo $moustaches[1]; ?></li>
					<li>The Great <?php echo $moustaches[2]; ?></li>
				</ul>

			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the lecture</a>

			<hr>

			<small>&copy;<?php echo $current_year; ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
