<?php
	// *************************************** //
	// KLUBBAH - NIGHTLIFE AUTOMATION SOFTWARE //
	//     All rights held by Evereti Ltd      //
	// *************************************** //

// This file contains the database access information.
// This file also establishes a connection to MySQL
// and selects the database.

if (!defined('DB_USER')) DEFINE ('DB_USER', 'root');
if (!defined('DB_PASSWORD')) DEFINE ('DB_PASSWORD', 'root');
if (!defined('DB_HOST')) DEFINE ('DB_HOST', 'localhost');
if (!defined('DB_NAME')) DEFINE ('DB_NAME', 'ch18');

function getDbc() {
	$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$dbc) {
		// SEND ADMIN EMAIL!!!!!
	} else {
		mysqli_set_charset($dbc, 'utf8');
	}
	return $dbc;
}

$dbc = getDbc();

