<?php

	$url = BASE_URL . 'index.php'; // Define the URL.

	if (!isset($_SESSION['first_name'])) {

		ob_end_clean(); // Delete the buffer.
		header("Location: $url");
		exit();

	} else { // Log out the user.

		$user_id = $_SESSION['user_id'];
		$_SESSION = array(); // Destroy the variables.
		session_destroy(); // Destroy the session itself.
		setcookie (session_name(), '', time()-3600); // Destroy the cookie.
		session_start();
		$_SESSION['last_login'] = $user_id;
		header("Location: $url");

	}

?>