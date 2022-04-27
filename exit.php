<?php
	require_once 'db.php';

	$_SESSION = [];

	if (isset($_COOKIE[session_start()])) {
		setcookie(session_name(), '', time()-3600, '/');
	}

	session_destroy();
	header('Location: registerpage.html')

?>