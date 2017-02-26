<?php

	// Constants
	define("TITLE", "Get Your Hands Dirty!");

	// Custom Variables
$my_name = "Tameka J. Alston";
$species = "Martian";
$currentYear = date("Y");
$birthYear = 1982;
$age = ($currentYear - $birthYear);
$nativeLanguage = "English";

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

			<h1>Get Your Hands Dirty: <small><?php echo TITLE; ?></small></h1>
			<hr>

			<h2><?php echo TITLE; ?></h2>

			<div class="sandbox">

				<?php
				echo"<h2> A Message to our Planetary Friends </h2>";

				  if ($species == "Martian") {

						echo "<p> Hello Martian, Welcome to Planet Earth! </p>" ;
					} elseif ($species == "Human") {
						echo "<p>Hello Human, Learning is Fundamental </p>";
					} else {
						echo "<p>Which Planet did you orginiate from?</p>";
					}

					echo"<h2> Age Verification</h2>";

					if ($age < 21) {
						echo "<p>Please get your guardian so we can talk to them about all options available.</p>";
					} else {
						echo "<p>You are an adult and are able to move to your new suite!</p>";
					}

					echo"<h2> Species Verification</h2>";

					if ($nativeLanguage = "English") {
						echo "<p>Happy that you know English since it's my native language as well!</p>";
					} elseif ($species = "Alien") {
						echo "<p>Welcome to our Planet Alien we will provide a translator for you.</p>";
					} else {
						echo "<p>If your not Human or and Alien what Planet did you come from?</p>";
					}


				?>




			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the lecture</a>

			<hr>

			<small>&copy;<?php echo date("Y"); ?>- <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
