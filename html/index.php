<?php

	require_once( '../config.inc.php' );
	require_once( '../classes/Xo_Root.php' );

	$session_id = session_id();
	$scripts = array();

	$app = new Xo_App($scripts);
	$words = $app->words;

	require_once 'includes/header.php';

	if (isset($_GET['page'])) {
		$app->templateManager($_GET['page']);
	} else {
		$app->templateManager('index');
	}

	require_once 'includes/footer.php';

?>