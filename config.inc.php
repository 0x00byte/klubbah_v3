<?php
	// *************************************** //
	// KLUBBAH - NIGHTLIFE AUTOMATION SOFTWARE //
	//     All rights held by Evereti Ltd      //
	// *************************************** //

// Made by 0x00byte
// Because I can!

// ********************************** //
// ************ CONSTANTS ************ //

// COMPANY NAME

ob_start();

function is_session_started()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}

if ( is_session_started() === FALSE ) session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

const COMPANY = "SIROCCO";

const INCLUDES = 'includes/';
const CLASSES = '../classes/';

const HEADERS = 'includes/headers/';
const TOOLBARS = 'includes/toolbars/';
const FOOTERS = 'includes/footers/';

// SITE STATUS
const LIVE = FALSE;

// ADMIN EMAIL
const EMAIL = 'info@evereti.com';
const SYSADMIN = 'matt@evereti.com';

// SITE URL
const BASE_URL = 'http://localhost:8888/klubbah_v3/html/';

// MySQL
const MYSQL = '../mysqli_connect.php';

// IMAGE FOLDERS
const EVENT_IMAGES = '../images/event-images/';
const GALLERY_IMAGES = '../images/gallery-images/';
const NEWS_IMAGES = '../images/news-images/';
const OFFER_IMAGES = '../images/offer-images/';

// INCLUDE FOLDERS
const JAVASCRIPTS = 'js/';
const TEMPLATES = 'templates/';

// JAVASCRIPTS
const SCRIPTS = array(
	'jquery-2.1.0.js',
	'bootstrap.min.js',
	'common-script.js',
	'jquery.slimscroll.min.js',
	'jPushMenu.js',
	'side-chats.js',
	'facebook.js'
);


// CLASSES
const XO_LANGUAGE = 'includes/classes/Language.php';

// ************ CONSTANTS ************ //
// ********************************** //

// ********************************** //
// ************ SETTINGS ************ //

// Adjust the time zone for PHP 5.1 and greater:
date_default_timezone_set ('US/Eastern');

// ************ SETTINGS ************ //
// ********************************** //


// ****************************************** //
// ************ ERROR MANAGEMENT ************ //

// Create the error handler:
function my_error_handler ($e_number, $e_message, $e_file, $e_line, $e_vars) {

	// Build the error message:
	$message = "An error occurred in script '$e_file' on line $e_line: $e_message\n";

	// Add the date and time:
	$message .= "Date/Time: " . date('n-j-Y H:i:s') . "\n";

	if (!LIVE) { // Development (print the error).

		// Show the error message:
		echo '<div class="error">' . nl2br($message);

		// Add the variables and a backtrace:
		echo '<pre>' . print_r ($e_vars, 1) . "\n";
		debug_print_backtrace();
		echo '</pre></div>';

	} else { // Don't show the error:

		// Send an email to the admin:
		$body = $message . "\n" . print_r ($e_vars, 1);
		mail(EMAIL, 'Site Error!', $body, 'From: email@example.com');

		// Only print an error message if the error isn't a notice:
		if ($e_number != E_NOTICE) {
			echo '<div class="error">A system error occurred. We apologize for the inconvenience.</div><br />';
		}
	} // End of !LIVE IF.

} // End of my_error_handler() definition.

// Use my error handler:
set_error_handler('my_error_handler');

// ************ ERROR MANAGEMENT ************ //
// ****************************************** //

// ****************************************** //
// ************ DEFAULT FUNCTIONS ************ //

function check_user_login_status() {
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 2600) {
		return true;
	} else {
		return false;
	}
}

function __autoload($class_name) {

	include_once 'classes/' . $class_name . '.php';
}

// ****************************************** //
// ************ DEFAULT FUNCTIONS ************ //