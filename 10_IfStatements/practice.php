<?php

	// Constants
define("TITLE", "If Statements");

	// Custom Variables
$my_name = "Tameka J. Alston";
$lesson_num = 10;
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

			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>

			<h2><?php echo TITLE; ?></h2>

			<div class="sandbox">
				<?php
				$a = 70;
				$b = 50;

				if ($a < $b) {
					echo "Yep it's less that $b";
				} else{
					echo "No, it's more than $b";
				}
				?>




			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the lecture</a>

			<hr>

			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
