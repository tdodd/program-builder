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
	<link rel="stylesheet" href="assets/styles/discipline.css">
	<link rel="stylesheet" href="assets/styles/animsition.min.css">
</head>
<body>

	<!-- Header -->
	<div class="site-header"></div>
	<div class="links"></div>
	<div class="menu"></div>

	<!-- Body -->
	<div class="container">
		<div class="row">
			<div class="text-center">			

				<!-- Discipline section -->
				<?php require('includes/discipline.php') ?>

			</div>
		</div>
	</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script src="app/libraries/jquery.cookie.js"></script>
<script src="app/libraries/animsition.min.js" charset="utf-8"></script>
<script src="app/libraries/isotope.pkgd.min.js"></script>
<script src="app/grid.js"></script>

</body>
</html>