<?php

	// Constants
define("TITLE", "Comparison Operators");

	// Custom Variables
$myName = "Tameka J. Alston";
$lessonNum = 14;

$a = 25;
$b = 50;
$c = 75;
$d = 50;
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

			<h1>Tutorial  <?php echo $lessonNum; ?>: <small> <?php echo TITLE; ?></small></h1>
			<hr>

			<h2>Your Example</h2>

			<div class="sandbox">

				<h3><code>$a = 25; <br />
				$b = 50; <br />
				$c = 75;<br />
				$d = 50;</code></h3>

				<h3>Equal <code>$a == $b</code></h3>
				<?php
					if ($a == $b) {
						echo "a is equal to b";
					} else {
						echo "a is not equal to b";
					}
				?>

				<h3>Identical <code>$b === $d</code></h3>
				<?php
					if ($b === $d) {
						echo "b is equal to d";
					} else {
						echo "b doesn't match d";
					}
				?>

				<h3>Not Equal <code>$b != $c</code></h3>
				<?php
					if ($b != $c) {
						echo "b is NOT equal to c";
					} else {
						echo "b is equal to c";
					}

					// your code here
				?>

				<h3>Not Identical <code>$a !== $d</code></h3>
				<?php
				if ($a != $d) {
					echo "a is NOT identical to d";
				} else {
					echo "a is equal to d";
				}
				?>

				<h3>Less Than <code>$a &lt; $c</code></h3>
				<?php
				if ($a < $c) {
					echo "a is Less Than to c";
				} else {
					echo "a is Not Less Than c";
				}
				?>

				<h3>Greater Than <code>$c &gt; $a</code></h3>
				<?php
				if ($c > $a) {
					echo "c is Greater Than a";
				} else {
					echo "c is Not Greater Than a";
				}
				?>

				<h3>Less Than or Equal To <code>$a &lt;= $c</code></h3>
				<?php
				if ($a <= $c) {
					echo "a is Less Than or Equal to c";
				} else {
					echo "a is Not Less Than or Equal c";
				}
				?>

				<h3>Greater Than or Equal To <code>$c &gt;= $a</code></h3>
				<?php
				if ($c > $a) {
					echo "c is Greater Than or Equal a";
				} else {
					echo "c is Not Greater Than or Equal to a";
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
