<?php

	// Constants
define ("TITLE", "Arrays");

	// Variables
$my_name = "Tameka J. Alston";
$age_group = ["child", "teeager", "adult", "senior"];

$handlebar = array (
	name => "Handlebar",
	color => "Black"
);

$charlie = array (
	name => "Charlie Chaplin",
	color => "Black"
);

$salvador = array (
	name => "Salvadore Dali",
	color => "Brown"
);

$burt_reynolds = array (
	name => "Burt Reynolds",
	color => "Red"
);

$gentlemen = array (
	array(
		first_name => "Craig",
		country => "United States"
	),
	array(
		first_name => "Calvin",
		country => "France"
	),
	array(
		first_name => "Robert",
		country => "Bagladesh"
	),
	array(
		first_name => "Sanji",
		country => "Japan"
	)
);
	// Arrays

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty:<?php echo TITLE; ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="/assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>

			<h1>Get Your Hands Dirty: <small><?php echo TITLE; ?></small></h1>
			<hr>

			<h2>Your Example</h2>

			<div class="sandbox">

				<h3><?php echo $gentlemen[0]["first_name"]; ?> from <?php echo $gentlemen[0]["country"]; ?> </h3>
				<p><?php echo $gentlemen[0]["first_name"]; ?> is quite the <?php echo $age_group[1]; ?>! He sports a solid <?php echo $charlie["name"]; ?> that is <?php echo $charlie["color"]; ?> in color.</p>

				<h3><?php echo $gentlemen[1]["first_name"]; ?> from <?php echo $gentlemen[1]["country"]; ?>  </h3>
				<p><?php echo $gentlemen[1]["first_name"]; ?> is a rather dapper <?php echo $age_group[2]?>! He proudly wears a <?php echo $burt_reynolds["name"]; ?> that is coloured a gentle <?php echo $burt_reynolds["color"]; ?>.</p>

				<h3><?php echo $gentlemen[2]["first_name"]; ?> from <?php echo $gentlemen[2]["country"]; ?>  </h3>
				<p> <?php echo $gentlemen[2]["first_name"]; ?> might seem too young for a 'stache because he is a <?php echo $age_group[0]; ?>. But he proudly displays his <?php echo $salvador["name"]; ?> at school! Although, it's a little hard to see because it's Light <?php echo $salvador["color"]; ?>.</p>

				<h3><?php echo $gentlemen[3]["first_name"]; ?> from <?php echo $gentlemen[3]["country"]; ?>  </h3>
					<p> <?php echo $gentlemen[3]["first_name"]; ?> might seem too old for a 'stache because he is a <?php echo $age_group[3]; ?>. But he proudly displays his <?php echo $handlebar["name"]; ?> at the senior home! He loves to keep it groomed well and dyed <?php echo $handlebar["color"]; ?>.</p>
			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the final example</a>

			<div class="navs cf">
				<a href="" class="button prev">Previous Lecture</a>
				<a href="" class="button next">Next Lecture</a>
			</div><!-- end navs -->

			<hr>

			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
