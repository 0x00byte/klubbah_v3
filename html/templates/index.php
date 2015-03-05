<?php

	switch ($_SESSION['user_level']) {
	    case 1:
	        include_once 'admin-index.php';
	        break;
	    case 2:
	        include_once 'rep-index.php';
	        break;
	    case 2600:
	        include_once 'sudo-index.php';
	        break;
	    default:
	        include_once 'index.php';
	}

?>