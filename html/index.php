<?php
/*************************************************************************
 *
 * EVERETI CONFIDENTIAL
 * __________________
 *
 *  [2013] - [2015] Evereti Ltd
 *  All Rights Reserved.
 *
 * NOTICE:  All information contained herein is, and remains
 * the property of Evereti Ltd and its suppliers, if any.
 * The intellectual and technical concepts contained
 * herein are proprietary to Evereti Ltd
 * and its suppliers and may be covered by U.S, European and Foreign Patents,
 * patents in process, and are protected by trade secret or copyright law.
 * Dissemination of this information or reproduction of this material
 * is strictly forbidden unless prior written permission is obtained
 * from Evereti Ltd.
 */

 	// INCLUDE FILE WITH ALL BASIC/HELPER FUNCTIONS AND CONSTANTS
 	// IT ALSO STARTS THE SESSION AND OUTPUT BUFFERING
	require_once( '../config.inc.php' );

	// CREATE NEW INSTANCE OF APP CLASS (ROOT CLASS WITH STANDARD FUNCTIONS - UPLOAD, SECURITY, VALIDATION, ACCESS CONTROL ETC)
	// PASS IN THE REQUIRED JAVASCRIPTS TO APP CLASS VIA SCRIPTS ARRAY CONSTANT
	$app = new Xo_App(SCRIPTS);

	// IF THE USER IS LOGGED IN OR REMEMBER ME IS SET THEN GO AHEAD AND LOAD THE MAIN SITE
	if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true || isset($_SESSION['remember_me']) && $_SESSION['remember_me'] === true) {

		// INCLUDE SITE HEADER
		require_once INCLUDES . 'header.php';

		// IF THE PAGE IS SET, LOAD PAGE TEMPLATE
		if (isset($_GET['page'])) {
			$app->uiTemplateManager($_GET['page'], $app);
		// IF NO PAGE SET, LOAD INDEX AS DEFAULT
		} else {
			$app->uiTemplateManager('index', $app);
		}

		// INCLUDE SITE FOOTER
		require_once INCLUDES . 'footer.php';

	// IF THE USER IS NOT LOGGED IN, LOAD LOGIN PAGE
	} else {
		// IF LOGIN FORM HAS BEEN SUBMITTED AND VALUES ARE SET, THEN ATTEMPT TO VALIDATE USER
		if (isset($_POST['email_username']) && isset($_POST['pass'])) {
			$app->accessValidateLogin($_POST['email_username'], $_POST['pass'], $_POST['remember_me']);
		// IF NO POST VALUES SET, THEN SHOW LOGIN PAGE
		} else {
			$app->uiTemplateManager('login', $app);
		}
	}
?>