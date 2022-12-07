<?php
	session_start();
	ob_start();

	if(!isset($_SESSION['entrar'])){
		header("../registro/login.php");
	}
?>