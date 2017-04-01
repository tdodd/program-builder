<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Faculty of Arts - Build your program</title>
	<!-- Roboto Font -->
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="assets/styles/master.css">
	<link rel="stylesheet" href="assets/styles/intro.css">
	<link rel="stylesheet" href="assets/styles/animsition.min.css">
</head>
<body>

	<!-- Header -->
	<div class="site-header"></div>
	<div class="links"></div>
	<div class="menu"></div>

	<!--Background image-->
	<div class="background-image-container">
		<div class="background-image"></div>
	</div>

	<!-- Body -->
	<div class="container-fluid">		
		<?php require('includes/intro.php') ?>
	</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script src="app/libraries/animsition.min.js" charset="utf-8"></script>
<script> $(document).ready(function() { $("#intro").animsition(); }); </script>

</body>
</html>