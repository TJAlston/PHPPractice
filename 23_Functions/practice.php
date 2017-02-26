<?php

	// Constants
	define("TITLE", "Intro to Functions");

	// Custom Variables
	$myName	= "Brad Hussey";
	$lessonNum	= 23;

	$dinner = array(
		"Meat",
		"Potatoes",
		"Beans",
		"Rice");

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

			<h2>Your Example</h2>

			<div class="sandbox">

				<h3>Using <code>sort()</code></h3>
				<?php

					sort($dinner);

					foreach ($dinner as $food) {
						echo "$food <br>";
					}


				?>

				<h3>Using <code>rsort()</code></h3>
				<?php

				rsort($dinner);

				foreach ($dinner as $food) {
					echo "We ate $food <br>";
				}

				?>

				<h3>Using <code>strtolower()</code></h3>
				<?php

						$username = "DejaBluace";

						$username = strtolower($username);

					echo ($username);

				?>

				<h3>Using <code>sha1()</code></h3>
				<!-- incrypts passwords -->
				<?php

					$password = "MyPassword";

					echo "Before: $password <br>";

					$password = sha1($password);

					echo "After: $password <br>"

				?>

			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the lecture</a>

			<hr>

			<small>&copy;<?php echo date('Y'); ?> - <?php echo $myName; ?></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
