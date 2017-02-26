<?php

	// Constants
define("TITLE", "Logical Operators");

	// Custom Variables
$myName = "Tameka J. Alston";
$lessonNum = 15;
$username = "dejabluace";
$password = "baylor";

$sunroof = false;
$seats = 3;

$catOwner = true;
$dogOwner = false;

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

				<h3>And <code>and</code></h3>
				<?php
					if ($username == "dejabluace" and $password == "baylor") {
						echo "Welcome to Your Login Page <br> $username";
					} elseif ($username !== "dejabluace" and $password == "baylor") {
						echo "User Name is Incorrect";
					} else {
						echo "Password is Incorrect";
					}
				?>

				<h3>Or <code>or</code></h3>
				<?php
					if ($sunroof == true or $seats >= 4) {
						echo "Car has at least one feature you like";
					} elseif ($sunroof == true or $seats != 4){
						echo "Car doesn't have enough seats";
					} else {
					echo "Car doesn't have either option your looking for";
				}
				?>

				<h3>Not <code>!</code></h3>
				<?php
				if ($username == "dejabluace" and $password == "bayliff") {
					echo "Welcome to Your Login Page <br> $username";
				} elseif ($username !== "dejabluace" and $password == "baylor") {
					echo "User Name is Incorrect";
				} else {
					echo "Password is Incorrect";
				}
				?>

				<h3>And <code>&amp;&amp;</code></h3>
				<?php
				if (catOwner && dogOwner) {
					echo "You have a CAT AND A DOG!!!";
				} else {
					echo "Do you have another pet?";
				}
				?>

				<h3>Or <code>||</code></h3>
				<?php
					if (!catOwner || !dogOwner) {
						echo "You DONT own a cat or dog";
					} else {
						echo "Do you have another pet?";
					}
				?>

			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the lecture</a>

			<hr>

			<small>&copy;<?php echo date("Y"); ?> - <?php echo $myName; ?></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
