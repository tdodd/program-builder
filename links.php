<?php 

//======================================================================
// Associative array of all programs and their codes.
// 
// Use by calling generateLink($links[$program]) to get the full url.
//======================================================================
$links = array(

	'Aboriginal Studies' => 'EAU', 
	'Applied Ethics' => 'ETS', 
	'Arabic Language and Culture' => 'ARB', 
	'Arts' => 'GEN', 
	'Asian Studies' => 'ASI', 
	'Canadian Studies' => 'CDN', 
	'Celtic Studies' => 'CLT', 
	'Communication' => 'CMN', 
	'Digital Humanities' => 'DHN', 
	'Digital Journalism' => 'JNM', 
	'Écriture et Style' => 'TRD', 
	'English' => 'ENG', 
	'English as a Second Language' => 'ESL',
	'Environmental Studies' => 'ENV',
	'French as a Second Language' => 'FLS',
	'French Studies' => 'FRE', 
	'Geography' => 'GEG', 
	'Geomatics and Spactial Analysis' => 'GAS', 
	'German Language and Culture' => 'ALG',
	'Greek and Roman Studies' => 'GRS',
	'History' => 'HIS',
	'History and Theory of Art' => 'HTA',
	'Italian Language and Culture' => 'ITA',
	'Jewish Canadian Studies' => 'EJS',
	'Latin American Studies' => 'ELA',
	'Lettres Françaises' => 'FRA',
	'Linguistics' => 'LIN',
	'Medieval and Renaissance Studies' => 'MDV',
	'Music' => 'MUS',
	'Philosophy' => 'PHI',
	'Public Relations' => 'RLP',
	'Rédaction professionnelle et édition' => 'RPE',
	'Religious Studies' => 'SRS',
	'Russian Language and Culture' => 'RUS',
	'Second-Language Teaching' => 'DLS',
	'Spanish' => 'ESP',
	'Theatre' => 'THE',
	'Translation' => 'TRA',
	'Visual Arts' => 'ARV',
	'World Cinemas' => 'WCM',

);

/*
 * Append the program code to the url.
 * @param code, the program code.
 */
function generateLink($code) {
	return 'http://www.uottawa.ca/academic/info/regist/calendars/arts/' . $code . '.html';
}