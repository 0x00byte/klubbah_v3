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

	require_once( '../config.inc.php' );
	require_once( '../classes/Xo_Root.php' );

	$session_id = session_id();
	$scripts = array(
		'jquery-2.1.0.js',
		'bootstrap.min.js',
		'common-script.js',
		'jquery.slimscroll.min.js',
		'jPushMenu.js',
		'side-chats.js'
	);

	$app = new Xo_App($scripts);
	$words = $app->words;

	if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) {
		require_once 'includes/header.php';
		if (isset($_GET['page'])) {
			$app->uiTemplateManager($_GET['page'], $app);
		} else {
			$app->uiTemplateManager('index', $app);
		}
		require_once 'includes/footer.php';
	} else {
		if (isset($_POST['email']) && isset($_POST['pass'])) {
			$app->access_validate_login($_POST['email'], $_POST['pass']);
		} else {
			$app->uiTemplateManager('login', $app);
		}
	}
?>