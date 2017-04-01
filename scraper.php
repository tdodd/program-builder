<?php
//======================================================================
// This script is responsible for going to the uOttawa 'calendars' page
// and getting all the programs for a given discipline. The view then
// displays those programs at the top of the page.
//======================================================================
if (isset($_COOKIE['discipline'])) {

	$discipline = $_COOKIE['discipline'];

	require('links.php'); // Associative array with courses and codes.

	// Get discipline page.
	$courseCode = $links[$discipline];
	$url = generateLink($courseCode); // Generate url with course code.
	$pageContents = file_get_contents($url); // Get contents of url.

	// Get programs for this discipline.
	$pattern = '~(<a href=("|\')/academic/info/regist/calendars/programs/(.+).html("|\')>)(.+)</a>~';
	
	// Store results in 'programs' array.
	preg_match_all($pattern, $pageContents, $programs);
	$firstProgram = strip_tags($programs[0][0]);

} // End if.