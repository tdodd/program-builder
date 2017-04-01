<div id="program" data-animsition-in-class="fade-in-sm" data-animsition-in-duration="1200">

	<?php require('scraper.php'); ?>

	<!-- Filters -->
	<div class="row programs-container text-center">

	<?php foreach ($programs[0] as $index => $program) {
		if ($index == 0) { // First program is set to 'active.
			echo '<div id="' . strip_tags($program) . '" class="draggable active">' . strip_tags($program) . '</div>';
		} else {
			echo '<div id="' . strip_tags($program) . '" class="draggable">' . strip_tags($program) . '</div>';
		}
	} ?>
		
	</div>

	<!-- Program structure and discipline -->
	<div class="row">
		<h1 class="main-header"><?php echo $firstProgram; ?></h1>
	</div>

	<!-- Container for info and chart -->
	<div class="row">

		<!-- Chart area -->
		<div class="col-md-4 left-side">
			<canvas class="chart-area" width="100%" height="100%"></canvas>
			<!-- Donut center -->
			<div class="credits"></div>
		</div>

		<!-- Colors menu -->
		<div class="col-md-3 right-side">
			<ul class="colors"></ul>
		</div>

		<!-- Info text -->
		<div class="col-md-5 info">
			<p class="program-info">When you apply to the Faculty of Arts, you will be automatically admitted to an Honours Bachelor, unless the discipline you choose does not offer this program.</p>
			<p class="program-info">To meet the requirements of your program of study, you need to take a certain number of elective units (credits), which you can choose from all the disciplines offered by the University. <a href="http://www.uottawa.ca/undergraduate-course-registration/electives-without-prerequisites">Electives without prerequisites</a> are courses that do not require you to have passed any other university course in order for you to enrol.</p>
			<p class="program-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium alias quo iste nemo, sapiente quidem assumenda ipsam, quis fugiat soluta omnis accusamus possimus porro dolorum, atque, quibusdam saepe ipsa. Culpa.</p>
		</div>

	</div> <!-- End chart row -->

</div> <!-- End Program -->