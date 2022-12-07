<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/compara/conecta.php";

	$sqlcat = "SELECT * FROM categorias ORDER BY nome ASC";
	$registroscat = mysqli_query($conn, $sqlcat);

	if (mysqli_num_rows($registroscat) > 0){
		while ($registrocat = mysqli_fetch_array($registroscat)){
			$refcat = "/compara/categorias/categorias.php?categoria=".$registrocat["id"];
			echo("<li><a class='dropdown-item' href=$refcat>$registrocat[nome]</a></li>");
		}
	}
?>