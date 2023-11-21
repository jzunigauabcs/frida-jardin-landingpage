<?php 
	include_once "config.php"; 

	if ($_SESSION['language'] == 'es') {
		$_SESSION['language'] = 'en';
	}else{
		$_SESSION['language'] = 'es';
	}

	header('Location: ' . $_SERVER['HTTP_REFERER']);

?>