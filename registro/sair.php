<?php
	session_start();

	session_destroy();

	header("location: /compara/registro/login.php");
?>